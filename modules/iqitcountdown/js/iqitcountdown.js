$( document ).ready(function() {
 $('[data-countdown]').each(function() {
   var $this = $(this), finalDate = $(this).data('countdown');
      $this.countdown(finalDate, function(event) {
   $this.html(event.strftime('<span class="countdown-time-group countdown-days"><span class="countdown-time ">%D</span> '+ iqitcountdown_days +'</span> <span class="countdown-time-group countdown-hours"><span class="countdown-time">%H</span> '+iqitcountdown_hours+' </span><span class="countdown-time-group countdown-minutes"><span class="countdown-time">%M</span> '+iqitcountdown_minutes+' </span><span class="countdown-time-group countdown-second"><span class="countdown-time">%S</span> '+iqitcountdown_seconds+'</span>'));
   });
 });
  });