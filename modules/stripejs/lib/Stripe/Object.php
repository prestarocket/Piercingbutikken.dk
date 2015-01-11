<?php

class Stripe_Object implements ArrayAccess
{
  public static $_permanentAttributes;
  public static $_nestedUpdatableAttributes;

  public static function init()
  {
    self::$_permanentAttributes = new Stripe_Util_Set(array('_apiKey', 'id'));
    self::$_nestedUpdatableAttributes = new Stripe_Util_Set(array('metadata'));
  }

  protected $_apiKey;
  protected $_values;
  protected $_unsavedValues;
  protected $_transientValues;
  protected $_retrieveOptions;

  public function __construct($id=null, $apiKey=null)
  {
    $this->_apiKey = $apiKey;
    $this->_values = array();
    $this->_unsavedValues = new Stripe_Util_Set();
    $this->_transientValues = new Stripe_Util_Set();

    $this->_retrieveOptions = array();
    if (is_array($id)) {
      foreach($id as $key => $value) {
        if ($key != 'id')
          $this->_retrieveOptions[$key] = $value;
      }
      $id = $id['id'];
    }

    if ($id)
      $this->id = $id;
  }

  // Standard accessor magic methods
  public function __set($k, $v)
  {
    if ($v === ""){
      throw new InvalidArgumentException(
        'You cannot set \''.$k.'\'to an empty string. '
        .'We interpret empty strings as NULL in requests. '
        .'You may set obj->'.$k.' = NULL to delete the property');
    }

    if (self::$_nestedUpdatableAttributes->includes($k) && isset($this->$k) && is_array($v)) {
      $this->$k->replaceWith($v);
    } else {
      // TODO: may want to clear from $_transientValues.  (Won't be user-visible.)
      $this->_values[$k] = $v;
    }
    if (!self::$_permanentAttributes->includes($k))
      $this->_unsavedValues->add($k);
  }
  public function __isset($k)
  {
    return isset($this->_values[$k]);
  }
  public function __unset($k)
  {
    unset($this->_values[$k]);
    $this->_transientValues->add($k);
    $this->_unsavedValues->discard($k);
  }
  public function __get($k)
  {
    if (array_key_exists($k, $this->_values)) {
      return $this->_values[$k];
    } else if ($this->_transientValues->includes($k)) {
      $class = get_class($this);
      $attrs = join(', ', array_keys($this->_values));
      error_log("Stripe Notice: Undefined property of $class instance: $k.  HINT: The $k attribute was set in the past, however.  It was then wiped when refreshing the object with the result returned by Stripe's API, probably as a result of a save().  The attributes currently available on this object are: $attrs");
      return null;
    } else {
      $class = get_class($this);
      error_log("Stripe Notice: Undefined property of $class instance: $k");
      return null;
    }
  }

  // ArrayAccess methods
  public function offsetSet($k, $v)
  {
    $this->$k = $v;
  }

  public function offsetExists($k)
  {
    return array_key_exists($k, $this->_values);
  }

  public function offsetUnset($k)
  {
    unset($this->$k);
  }
  public function offsetGet($k)
  {
    return array_key_exists($k, $this->_values) ? $this->_values[$k] : null;
  }

  public function keys()
  {
    return array_keys($this->_values);
  }

  // This unfortunately needs to be public to be used in Util.php
  public static function scopedConstructFrom($class, $values, $apiKey=null)
  {
    $obj = new $class(isset($values['id']) ? $values['id'] : null, $apiKey);
    $obj->refreshFrom($values, $apiKey);
    return $obj;
  }

  public static function constructFrom($values, $apiKey=null)
  {
    $class = get_class();
    return self::scopedConstructFrom($class, $values, $apiKey);
  }

  public function refreshFrom($values, $apiKey, $partial=false)
  {
    $this->_apiKey = $apiKey;

    // Wipe old state before setting new.  This is useful for e.g. updating a
    // customer, where there is no persistent card parameter.  Mark those values
    // which don't persist as transient
    if ($partial)
      $removed = new Stripe_Util_Set();
    else
      $removed = array_diff(array_keys($this->_values), array_keys($values));

    foreach ($removed as $k) {
      if (self::$_permanentAttributes->includes($k))
        continue;
      unset($this->$k);
    }

    foreach ($values as $k => $v) {
      if (self::$_permanentAttributes->includes($k))
        continue;

      if (self::$_nestedUpdatableAttributes->includes($k) && is_array($v))
        $this->_values[$k] = Stripe_Object::scopedConstructFrom('Stripe_AttachedObject', $v, $apiKey);
      else
        $this->_values[$k] = Stripe_Util::convertToStripeObject($v, $apiKey);

      $this->_transientValues->discard($k);
      $this->_unsavedValues->discard($k);
    }
  }

  public function serializeParameters()
  {
    $params = array();
    if ($this->_unsavedValues) {
      foreach ($this->_unsavedValues->toArray() as $k) {
        $v = $this->$k;
        if ($v === NULL) {
          $v = '';
        }
        $params[$k] = $v;
      }
    }

    // Get nested updates.
    foreach (self::$_nestedUpdatableAttributes->toArray() as $property) {
      if (isset($this->$property) && $this->$property instanceOf Stripe_Object) {
        $params[$property] = $this->$property->serializeParameters();
      }
    }
    return $params;
  }

  // Pretend to have late static bindings, even in PHP 5.2
  protected function _lsb($method)
  {
    $class = get_class($this);
    $args = array_slice(func_get_args(), 1);
    return call_user_func_array(array($class, $method), $args);
  }
  protected static function _scopedLsb($class, $method)
  {
    $args = array_slice(func_get_args(), 2);
    return call_user_func_array(array($class, $method), $args);
  }

  public function __toJSON()
  {
    return Tools::jsonEncode($this->__toArray(true)); /* PrestaShop */
  }

  public function __toString()
  {
    return $this->__toJSON();
  }

  public function __toArray($recursive=false)
  {
    if ($recursive)
      return Stripe_Util::convertStripeObjectToArray($this->_values);
    else
      return $this->_values;
  }
}


Stripe_Object::init();
