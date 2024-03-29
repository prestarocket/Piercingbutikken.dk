<?php
require_once _PS_MODULE_DIR_ . 'ph_simpleblog/ph_simpleblog.php';

class AdminSimpleBlogSettingsController extends ModuleAdminController
{
    public $is_16;

    // @todo - 2.0.0
    public static $grid_types = array(
        array(
            'id' => 'prestashop',
            'name' => 'PrestaShop Grid'   
        ),
        array(
            'id' => 'bootstrap',
            'name' => 'Bootstrap 3 Grid'   
        ),     
    );

    public function __construct()
    {
        parent::__construct();

        $this->bootstrap = true;

        $this->is_16 = (bool)(version_compare(_PS_VERSION_, '1.6.0', '>=') === true) ? true : false;

        $this->initOptions();
    }

    public function initOptions()
    {
        $this->optionTitle = $this->l('Settings');

        $blogCategories = SimpleBlogCategory::getCategories($this->context->language->id);

        $simpleBlogCategories = array();

        $simpleBlogCategories[0] = $this->l('All categories');
        $simpleBlogCategories[9999] = $this->l('Featured only');

        foreach($blogCategories as $key => $category)
        {
            $simpleBlogCategories[$category['id']] = $category['name'];
        }

        $recentPosts = array();

        if(Module::isInstalled('ph_recentposts'))
        {
            $recentPosts = array(
                'recent_posts' => array(
                    'submit' => array('title' => $this->l('Update'), 'class' => 'button'),
                    'title' =>  $this->l('Recent Posts widget settings'),
                    'image' =>   '../img/t/AdminOrderPreferences.gif',
                    'fields' => array(

                        'PH_RECENTPOSTS_LAYOUT' => array(
                            'title' => $this->l('Recent Posts layout:'),
                            'show' => true,
                            'required' => true,
                            'type' => 'radio',
                            'choices' => array(
                                'full' => $this->l('Full width with large images'),
                                'grid' => $this->l('Grid'),
                            )
                        ), // PH_BLOG_LIST_LAYOUT

                        'PH_RECENTPOSTS_GRID_COLUMNS' => array(
                            'title' => $this->l('Grid columns:'),
                            'cast' => 'intval',
                            'desc' => $this->l('Working only with "Recent Posts layout:" setup to "Grid"'),
                            'show' => true,
                            'required' => true,
                            'type' => 'radio',
                            'choices' => array(
                                '2' => $this->l('2 columns'),
                                '3' => $this->l('3 columns'),
                                '4' => $this->l('4 columns'),
                            )
                        ), // PH_RECENTPOSTS_GRID_COLUMNS

                        'PH_RECENTPOSTS_NB' => array(
                            'title' => $this->l('Number of displayed Recent Posts'),
                            'cast' => 'intval',
                            'desc' => $this->l('Default: 4'),
                            'type' => 'text',
                            'required' => true,
                            'validation' => 'isUnsignedId',
                        ), // PH_RECENTPOSTS_NB

                        'PH_RECENTPOSTS_CAT' => array(
                            'title' => $this->l('Category:'),
                            'cast' => 'intval',
                            'desc' => $this->l('If you not select any category then Recent Posts will displayed posts from all categories'),
                            'show' => true,
                            'required' => true,
                            'type' => 'radio',
                            'choices' => $simpleBlogCategories
                        ), // PH_BLOG_THUMB_METHOD

                    ),
                ),
            );
        }

        $relatedPosts = array();

        if(Module::isInstalled('ph_relatedposts'))
        {
            $relatedPosts = array(
                'related_posts' => array(
                    'submit' => array('title' => $this->l('Update'), 'class' => 'button'),
                    'title' =>  $this->l('Related Posts widget settings'),
                    'image' =>   '../img/t/AdminOrderPreferences.gif',
                    'fields' => array(

                        'PH_RELATEDPOSTS_GRID_COLUMNS' => array(
                            'title' => $this->l('Grid columns:'),
                            'cast' => 'intval',
                            'desc' => $this->l('Working only with "Recent Posts layout:" setup to "Grid"'),
                            'show' => true,
                            'required' => true,
                            'type' => 'radio',
                            'choices' => array(
                                '2' => $this->l('2 columns'),
                                '3' => $this->l('3 columns'),
                                '4' => $this->l('4 columns'),
                            )
                        ), // PH_RELATEDPOSTS_GRID_COLUMNS

                    ),
                ),
            );
        }

        $alert_class = ($this->is_16 === true) ? 'alert alert-info' : 'info';

        $timezones = array(
            'Pacific/Midway'       => "(GMT-11:00) Midway Island",
            'US/Samoa'             => "(GMT-11:00) Samoa",
            'US/Hawaii'            => "(GMT-10:00) Hawaii",
            'US/Alaska'            => "(GMT-09:00) Alaska",
            'US/Pacific'           => "(GMT-08:00) Pacific Time (US &amp; Canada)",
            'America/Tijuana'      => "(GMT-08:00) Tijuana",
            'US/Arizona'           => "(GMT-07:00) Arizona",
            'US/Mountain'          => "(GMT-07:00) Mountain Time (US &amp; Canada)",
            'America/Chihuahua'    => "(GMT-07:00) Chihuahua",
            'America/Mazatlan'     => "(GMT-07:00) Mazatlan",
            'America/Mexico_City'  => "(GMT-06:00) Mexico City",
            'America/Monterrey'    => "(GMT-06:00) Monterrey",
            'Canada/Saskatchewan'  => "(GMT-06:00) Saskatchewan",
            'US/Central'           => "(GMT-06:00) Central Time (US &amp; Canada)",
            'US/Eastern'           => "(GMT-05:00) Eastern Time (US &amp; Canada)",
            'US/East-Indiana'      => "(GMT-05:00) Indiana (East)",
            'America/Bogota'       => "(GMT-05:00) Bogota",
            'America/Lima'         => "(GMT-05:00) Lima",
            'America/Caracas'      => "(GMT-04:30) Caracas",
            'Canada/Atlantic'      => "(GMT-04:00) Atlantic Time (Canada)",
            'America/La_Paz'       => "(GMT-04:00) La Paz",
            'America/Santiago'     => "(GMT-04:00) Santiago",
            'Canada/Newfoundland'  => "(GMT-03:30) Newfoundland",
            'America/Buenos_Aires' => "(GMT-03:00) Buenos Aires",
            'Greenland'            => "(GMT-03:00) Greenland",
            'Atlantic/Stanley'     => "(GMT-02:00) Stanley",
            'Atlantic/Azores'      => "(GMT-01:00) Azores",
            'Atlantic/Cape_Verde'  => "(GMT-01:00) Cape Verde Is.",
            'Africa/Casablanca'    => "(GMT) Casablanca",
            'Europe/Dublin'        => "(GMT) Dublin",
            'Europe/Lisbon'        => "(GMT) Lisbon",
            'Europe/London'        => "(GMT) London",
            'Africa/Monrovia'      => "(GMT) Monrovia",
            'Europe/Amsterdam'     => "(GMT+01:00) Amsterdam",
            'Europe/Belgrade'      => "(GMT+01:00) Belgrade",
            'Europe/Berlin'        => "(GMT+01:00) Berlin",
            'Europe/Bratislava'    => "(GMT+01:00) Bratislava",
            'Europe/Brussels'      => "(GMT+01:00) Brussels",
            'Europe/Budapest'      => "(GMT+01:00) Budapest",
            'Europe/Copenhagen'    => "(GMT+01:00) Copenhagen",
            'Europe/Ljubljana'     => "(GMT+01:00) Ljubljana",
            'Europe/Madrid'        => "(GMT+01:00) Madrid",
            'Europe/Paris'         => "(GMT+01:00) Paris",
            'Europe/Prague'        => "(GMT+01:00) Prague",
            'Europe/Rome'          => "(GMT+01:00) Rome",
            'Europe/Sarajevo'      => "(GMT+01:00) Sarajevo",
            'Europe/Skopje'        => "(GMT+01:00) Skopje",
            'Europe/Stockholm'     => "(GMT+01:00) Stockholm",
            'Europe/Vienna'        => "(GMT+01:00) Vienna",
            'Europe/Warsaw'        => "(GMT+01:00) Warsaw",
            'Europe/Zagreb'        => "(GMT+01:00) Zagreb",
            'Europe/Athens'        => "(GMT+02:00) Athens",
            'Europe/Bucharest'     => "(GMT+02:00) Bucharest",
            'Africa/Cairo'         => "(GMT+02:00) Cairo",
            'Africa/Harare'        => "(GMT+02:00) Harare",
            'Europe/Helsinki'      => "(GMT+02:00) Helsinki",
            'Europe/Istanbul'      => "(GMT+02:00) Istanbul",
            'Asia/Jerusalem'       => "(GMT+02:00) Jerusalem",
            'Europe/Kiev'          => "(GMT+02:00) Kyiv",
            'Europe/Minsk'         => "(GMT+02:00) Minsk",
            'Europe/Riga'          => "(GMT+02:00) Riga",
            'Europe/Sofia'         => "(GMT+02:00) Sofia",
            'Europe/Tallinn'       => "(GMT+02:00) Tallinn",
            'Europe/Vilnius'       => "(GMT+02:00) Vilnius",
            'Asia/Baghdad'         => "(GMT+03:00) Baghdad",
            'Asia/Kuwait'          => "(GMT+03:00) Kuwait",
            'Africa/Nairobi'       => "(GMT+03:00) Nairobi",
            'Asia/Riyadh'          => "(GMT+03:00) Riyadh",
            'Asia/Tehran'          => "(GMT+03:30) Tehran",
            'Europe/Moscow'        => "(GMT+04:00) Moscow",
            'Asia/Baku'            => "(GMT+04:00) Baku",
            'Europe/Volgograd'     => "(GMT+04:00) Volgograd",
            'Asia/Muscat'          => "(GMT+04:00) Muscat",
            'Asia/Tbilisi'         => "(GMT+04:00) Tbilisi",
            'Asia/Yerevan'         => "(GMT+04:00) Yerevan",
            'Asia/Kabul'           => "(GMT+04:30) Kabul",
            'Asia/Karachi'         => "(GMT+05:00) Karachi",
            'Asia/Tashkent'        => "(GMT+05:00) Tashkent",
            'Asia/Kolkata'         => "(GMT+05:30) Kolkata",
            'Asia/Kathmandu'       => "(GMT+05:45) Kathmandu",
            'Asia/Yekaterinburg'   => "(GMT+06:00) Ekaterinburg",
            'Asia/Almaty'          => "(GMT+06:00) Almaty",
            'Asia/Dhaka'           => "(GMT+06:00) Dhaka",
            'Asia/Novosibirsk'     => "(GMT+07:00) Novosibirsk",
            'Asia/Bangkok'         => "(GMT+07:00) Bangkok",
            'Asia/Jakarta'         => "(GMT+07:00) Jakarta",
            'Asia/Krasnoyarsk'     => "(GMT+08:00) Krasnoyarsk",
            'Asia/Chongqing'       => "(GMT+08:00) Chongqing",
            'Asia/Hong_Kong'       => "(GMT+08:00) Hong Kong",
            'Asia/Kuala_Lumpur'    => "(GMT+08:00) Kuala Lumpur",
            'Australia/Perth'      => "(GMT+08:00) Perth",
            'Asia/Singapore'       => "(GMT+08:00) Singapore",
            'Asia/Taipei'          => "(GMT+08:00) Taipei",
            'Asia/Ulaanbaatar'     => "(GMT+08:00) Ulaan Bataar",
            'Asia/Urumqi'          => "(GMT+08:00) Urumqi",
            'Asia/Irkutsk'         => "(GMT+09:00) Irkutsk",
            'Asia/Seoul'           => "(GMT+09:00) Seoul",
            'Asia/Tokyo'           => "(GMT+09:00) Tokyo",
            'Australia/Adelaide'   => "(GMT+09:30) Adelaide",
            'Australia/Darwin'     => "(GMT+09:30) Darwin",
            'Asia/Yakutsk'         => "(GMT+10:00) Yakutsk",
            'Australia/Brisbane'   => "(GMT+10:00) Brisbane",
            'Australia/Canberra'   => "(GMT+10:00) Canberra",
            'Pacific/Guam'         => "(GMT+10:00) Guam",
            'Australia/Hobart'     => "(GMT+10:00) Hobart",
            'Australia/Melbourne'  => "(GMT+10:00) Melbourne",
            'Pacific/Port_Moresby' => "(GMT+10:00) Port Moresby",
            'Australia/Sydney'     => "(GMT+10:00) Sydney",
            'Asia/Vladivostok'     => "(GMT+11:00) Vladivostok",
            'Asia/Magadan'         => "(GMT+12:00) Magadan",
            'Pacific/Auckland'     => "(GMT+12:00) Auckland",
            'Pacific/Fiji'         => "(GMT+12:00) Fiji",
        );

        $timezones_select = array();

        foreach($timezones as $value => $name)
        {
            $timezones_select[] = array('id' => $value, 'name' => $name);
        }

        $standard_options = array(
            'general' => array(
                'title' =>  $this->l('PrestaHome Blog Settings'),
                'image' =>   '../img/t/AdminOrderPreferences.gif',
                'info' => '<button type="submit" name="regenerateThumbnails" class="button btn btn-default"><i class="process-icon-cogs"></i>'.$this->l('Regenerate thumbnails').'</button><br /><br />',
                'fields' => array(

                    'PH_BLOG_TIMEZONE' => array(
                        'title' => $this->l('Timezone:'),
                        'desc' => $this->l('If you want to use future post publication date you need to setup your timezone'),
                        'type' => 'select',
                        'list' => $timezones_select,
                        'identifier' => 'id',
                        'required' => true,
                        'validation' => 'isGenericName',
                    ), // PH_BLOG_TIMEZONE

                    'PH_BLOG_POSTS_PER_PAGE' => array(
                        'title' => $this->l('Posts per page:'),
                        'cast' => 'intval',
                        'desc' => $this->l('Number of blog posts displayed per page. Default is 10.'),
                        'type' => 'text',
                        'required' => true,
                        'validation' => 'isUnsignedId',
                    ), // PH_BLOG_POSTS_PER_PAGE
                    
                    'PH_BLOG_SLUG' => array(
                        'title' => $this->l('Blog main URL (by default: blog)'),
                        'validation' => 'isGenericName',
                        'required' => true,
                        'type' => 'text',
                        'size' => 40
                    ), // PH_BLOG_SLUG

                    'PH_BLOG_MAIN_TITLE' => array(
                        'title' => $this->l('Blog title:'),
                        'validation' => 'isGenericName',
                        'type' => 'textLang',
                        'size' => 40,
                        'desc' => $this->l('Meta Title for blog homepage'),
                    ), // PH_BLOG_MAIN_TITLE

                    'PH_BLOG_MAIN_META_DESCRIPTION' => array(
                        'title' => $this->l('Blog description:'),
                        'validation' => 'isGenericName',
                        'type' => 'textLang',
                        'size' => 75,
                        'desc' => $this->l('Meta Description for blog homepage'),
                    ), // PH_BLOG_MAIN_META_DESCRIPTION

                    'PH_BLOG_DATEFORMAT' => array(
                        'title' => $this->l('Blog default date format:'),
                        'desc' => $this->l('More details: http://php.net/manual/pl/function.date.php'),
                        'validation' => 'isGenericName',
                        'type' => 'text',
                        'size' => 40
                    ), // PH_BLOG_DATEFORMAT

                    'PH_CATEGORY_SORTBY' => array(
                        'title' => $this->l('Sort categories by:'),
                        'desc' => $this->l('Select which method use to sort categories in SimpleBlog Categories Block'),
                        'show' => true,
                        'required' => true,
                        'type' => 'radio',
                        'choices' => array(
                            'position' => $this->l('Position (1-9)'),
                            'name' => $this->l('Name (A-Z)'),
                            'id' => $this->l('ID (1-9)'),
                        )
                    ), // PH_CATEGORY_SORTBY

                    'PH_BLOG_FB_INIT' => array(
                        'title' => $this->l('Init Facebook?'),
                        'validation' => 'isBool',
                        'cast' => 'intval',
                        'desc' => $this->l('If you already use some Facebook widgets in your theme please select option to "No". If you select "Yes" then SimpleBlog will add facebook connect script on single post page.'),
                        'required' => true,
                        'type' => 'bool'
                    ), // PH_BLOG_FB_INIT


                    // @todo - 2.0.0
                    // 'PH_BLOG_LOAD_FA' => array(
                    //     'title' => $this->l('Load FontAwesome?'),
                    //     'validation' => 'isBool',
                    //     'cast' => 'intval',
                    //     'desc' => $this->l('If you already use FontAwesome in your theme please select option to "No".'),
                    //     'required' => true,
                    //     'type' => 'bool'
                    // ), // PH_BLOG_LOAD_FA

                ),
                'submit' => array('title' => $this->l('Update'), 'class' => 'button'),
            ),

            'layout' => array(
                'submit' => array('title' => $this->l('Update'), 'class' => 'button'),
                'title' =>  $this->l('Appearance Settings - General'),
                'image' =>   '../img/t/AdminOrderPreferences.gif',
                'fields' => array(

                    // @todo - 2.0.0
                    // 'PH_BLOG_COLUMNS' => array(
                    //     'title' => $this->l('Grid mechanism:'),
                    //     'type' => 'select',
                    //     'list' => self::$grid_types,
                    //     'identifier' => 'id',
                    //     'required' => true,
                    //     'validation' => 'isGenericName',
                    // ), // PH_BLOG_COLUMNS

                    'PH_BLOG_LAYOUT' => array(
                        'title' => $this->l('Main layout:'),
                        'show' => true,
                        'required' => true,
                        'type' => 'radio',
                        'choices' => array(
                            'default' => $this->l('3 columns, enabled left column and right column'),
                            'left_sidebar' => $this->l('2 columns, enabled left column'),
                            'right_sidebar' => $this->l('2 columns, enabled right column'),
                            'full_width' => $this->l('Full width - Left and right column will be removed'),
                        )
                    ), // PH_BLOG_LAYOUT

                    'PH_BLOG_DISPLAY_BREADCRUMBS' => array(
                        'title' => $this->l('Display breadcrumbs in center-column?'),
                        'validation' => 'isBool',
                        'cast' => 'intval',
                        'desc' => $this->l('Sometimes you want to remove breadcrumbs from center-column'),
                        'required' => true,
                        'type' => 'bool'
                    ), // PH_BLOG_DISPLAY_BREADCRUMBS

                    'PH_BLOG_LIST_LAYOUT' => array(
                        'title' => $this->l('Posts list layout:'),
                        'show' => true,
                        'required' => true,
                        'type' => 'radio',
                        'choices' => array(
                            'full' => $this->l('Full width with large images'),
                            'grid' => $this->l('Grid'),
                        )
                    ), // PH_BLOG_LIST_LAYOUT

                    'PH_BLOG_GRID_COLUMNS' => array(
                        'title' => $this->l('Grid columns:'),
                        'cast' => 'intval',
                        'desc' => $this->l('Working only with "Posts list layout" setup to "Grid"'),
                        'show' => true,
                        'required' => true,
                        'type' => 'radio',
                        'choices' => array(
                            '2' => $this->l('2 columns'),
                            '3' => $this->l('3 columns'),
                            '4' => $this->l('4 columns'),
                        )
                    ), // PH_BLOG_GRID_COLUMNS

                    'PH_BLOG_MASONRY_LAYOUT' => array(
                        'title' => $this->l('Use Masonry layout?'),
                        'validation' => 'isBool',
                        'cast' => 'intval',
                        'desc' => $this->l('You can use masonry layout if you use Grid as a post list layout'),
                        'type' => 'bool'
                    ), // PH_BLOG_MASONRY_LAYOUT

                    'PH_BLOG_CSS' => array(
                        'title' => $this->l('Custom CSS'),
                        'show' => true,
                        'required' => false,
                        'type' => 'textarea',
                        'cols' => '70',
                        'rows' => '10'
                    ), // PH_BLOG_CSS

                ),
            ),

            'single_post' => array(
                'submit' => array('title' => $this->l('Update'), 'class' => 'button'),
                'title' =>  $this->l('Appearance Settings - Single post'),
                'image' =>   '../img/t/AdminOrderPreferences.gif',
                'fields' => array(

                    'PH_BLOG_DISPLAY_LIKES' => array(
                        'title' => $this->l('Display "likes"?'),
                        'validation' => 'isBool',
                        'cast' => 'intval',
                        'required' => true,
                        'type' => 'bool'
                    ), // PH_BLOG_DISPLAY_LIKES

                    'PH_BLOG_DISPLAY_SHARER' => array(
                        'title' => $this->l('Use share icons on single post page?'),
                        'validation' => 'isBool',
                        'cast' => 'intval',
                        'required' => true,
                        'type' => 'bool'
                    ), // PH_BLOG_DISPLAY_SHARER

                    'PH_BLOG_DISPLAY_AUTHOR' => array(
                        'title' => $this->l('Display post author?'),
                        'validation' => 'isBool',
                        'cast' => 'intval',
                        'required' => true,
                        'type' => 'bool',
                        'desc' => $this->l('This option also applies to the list of posts from the category'),
                    ), // PH_BLOG_DISPLAY_AUTHOR

                    'PH_BLOG_DISPLAY_DATE' => array(
                        'title' => $this->l('Display post creation date?'),
                        'validation' => 'isBool',
                        'cast' => 'intval',
                        'required' => true,
                        'type' => 'bool',
                        'desc' => $this->l('This option also applies to the list of posts from the category'),
                    ), // PH_BLOG_DISPLAY_DATE

                    'PH_BLOG_DISPLAY_FEATURED' => array(
                        'title' => $this->l('Display post featured image?'),
                        'validation' => 'isBool',
                        'cast' => 'intval',
                        'required' => true,
                        'type' => 'bool'
                    ), // PH_BLOG_DISPLAY_FEATURED

                    'PH_BLOG_DISPLAY_CATEGORY' => array(
                        'title' => $this->l('Display post category?'),
                        'validation' => 'isBool',
                        'cast' => 'intval',
                        'required' => true,
                        'type' => 'bool',
                        'desc' => $this->l('This option also applies to the list of posts from the category'),
                    ), // PH_BLOG_DISPLAY_CATEGORY

                    'PH_BLOG_DISPLAY_TAGS' => array(
                        'title' => $this->l('Display post tags?'),
                        'validation' => 'isBool',
                        'cast' => 'intval',
                        'required' => true,
                        'type' => 'bool',
                        'desc' => $this->l('This option also applies to the list of posts from the category'),
                    ), // PH_BLOG_DISPLAY_TAGS

                ),
            ),

            'category_page' => array(
                'submit' => array('title' => $this->l('Update'), 'class' => 'button'),
                'title' =>  $this->l('Appearance Settings - Post lists'),
                'image' =>   '../img/t/AdminOrderPreferences.gif',
                'fields' => array(

                    'PH_BLOG_DISPLAY_MORE' => array(
                        'title' => $this->l('Display "Read more"?'),
                        'validation' => 'isBool',
                        'cast' => 'intval',
                        'required' => true,
                        'type' => 'bool'
                    ), // PH_BLOG_DISPLAY_MORES

                    'PH_BLOG_DISPLAY_THUMBNAIL' => array(
                        'title' => $this->l('Display post thumbnails?'),
                        'validation' => 'isBool',
                        'cast' => 'intval',
                        'required' => true,
                        'type' => 'bool'
                    ), // PH_BLOG_DISPLAY_THUMBNAILS

                    'PH_BLOG_DISPLAY_DESCRIPTION' => array(
                        'title' => $this->l('Display post short description?'),
                        'validation' => 'isBool',
                        'cast' => 'intval',
                        'required' => true,
                        'type' => 'bool'
                    ), // PH_BLOG_DISPLAY_DESCRIPTION

                    'PH_BLOG_DISPLAY_CAT_DESC' => array(
                        'title' => $this->l('Display category description on category page?'),
                        'validation' => 'isBool',
                        'cast' => 'intval',
                        'required' => true,
                        'type' => 'bool'
                    ), // PH_BLOG_DISPLAY_CAT_DESC

                    'PH_BLOG_DISPLAY_CATEGORY_IMAGE' => array(
                        'title' => $this->l('Display category image?'),
                        'validation' => 'isBool',
                        'cast' => 'intval',
                        'required' => true,
                        'type' => 'bool'
                    ), // PH_BLOG_DISPLAY_CATEGORY_IMAGE

                    'PH_CATEGORY_IMAGE_X' => array(
                        'title' => $this->l('Default category image width (px)'),
                        'cast' => 'intval',
                        'desc' => $this->l('Default: 535 (For PrestaShop 1.5), 870 (For PrestaShop 1.6)'),
                        'type' => 'text',
                        'required' => true,
                        'validation' => 'isUnsignedId',
                    ), // PH_CATEGORY_IMAGE_X

                    'PH_CATEGORY_IMAGE_Y' => array(
                        'title' => $this->l('Default category image height (px)'),
                        'cast' => 'intval',
                        'desc' => $this->l('Default: 150'),
                        'type' => 'text',
                        'required' => true,
                        'validation' => 'isUnsignedId',
                    ), // PH_CATEGORY_IMAGE_Y

                ),
            ),

            'comments' => array(
                'submit' => array('title' => $this->l('Update'), 'class' => 'button'),
                'title' =>  $this->l('Comments Settings'),
                'image' =>   '../img/t/AdminOrderPreferences.gif',
                'fields' => array(

                    'PH_BLOG_NATIVE_COMMENTS' => array(
                        'title' => $this->l('Use native comment system instead of Facebook Comments?'),
                        'validation' => 'isBool',
                        'cast' => 'intval',
                        'required' => true,
                        'type' => 'bool'
                    ), // PH_BLOG_NATIVE_COMMENTS

                    'PH_BLOG_COMMENT_ALLOW' => array(
                        'title' => $this->l('Allow comments?'),
                        'validation' => 'isBool',
                        'cast' => 'intval',
                        'required' => true,
                        'type' => 'bool'
                    ), // PH_BLOG_COMMENT_ALLOW

                    'PH_BLOG_COMMENT_NOTIFICATIONS' => array(
                        'title' => $this->l('Notify about new comments?'),
                        'validation' => 'isBool',
                        'desc' => $this->l('Only for native comment system'),
                        'cast' => 'intval',
                        'required' => true,
                        'type' => 'bool'
                    ), // PH_BLOG_COMMENT_NOTIFICATIONS

                    'PH_BLOG_COMMENT_NOTIFY_EMAIL' => array(
                        'title' => $this->l('E-mail for notifications'),
                        'type' => 'text',
                        'size' => 55,
                        'required' => false,
                    ), // PH_BLOG_COMMENT_NOTIFY_EMAIL

                    'PH_BLOG_FACEBOOK_MODERATOR' => array(
                        'title' => $this->l('Facebook comments moderator User ID'),
                        'type' => 'text',
                        'size' => 55
                    ), // PH_BLOG_FACEBOOK_MODERATOR

                    'PH_BLOG_FACEBOOK_APP_ID' => array(
                        'title' => $this->l('Facebook application ID (may be required for comments moderation)'),
                        'type' => 'text',
                        'size' => 75
                    ), // PH_BLOG_FACEBOOK_APP_ID

                    'PH_BLOG_FACEBOOK_COLOR_SCHEME' => array(
                        'title' => $this->l('Faceboook comments color scheme'),
                        'show' => true,
                        'required' => true,
                        'type' => 'radio',
                        'choices' => array(
                            'light' => $this->l('Light'),
                            'dark' => $this->l('Dark'),
                        )
                    ), // PH_BLOG_FACEBOOK_COLOR_SCHEME

                ),
            ),

            'thumbnails' => array(
                'submit' => array('title' => $this->l('Update'), 'class' => 'button'),
                'title' =>  $this->l('Thumbnails Settings'),
                'image' =>   '../img/t/AdminOrderPreferences.gif',
                'info' => '<div class="'.$alert_class.'">'.$this->l('Remember to regenerate thumbnails after doing changes here').'</div>',
                'fields' => array(

                    'PH_BLOG_THUMB_METHOD' => array(
                        'title' => $this->l('Resize method:'),
                        'cast' => 'intval',
                        'desc' => $this->l('Select wich method use to resize thumbnail. Adaptive resize: What it does is resize the image to get as close as possible to the desired dimensions, then crops the image down to the proper size from the center.'),
                        'show' => true,
                        'required' => true,
                        'type' => 'radio',
                        'choices' => array(
                            '1' => $this->l('Adaptive resize (recommended)'),
                            '2' => $this->l('Crop from center'),
                        )
                    ), // PH_BLOG_THUMB_METHOD

                    'PH_BLOG_THUMB_X' => array(
                        'title' => $this->l('Default thumbnail width (px)'),
                        'cast' => 'intval',
                        'desc' => $this->l('Default: 255 (For PrestaShop 1.5), 420 (For PrestaShop 1.6)'),
                        'type' => 'text',
                        'required' => true,
                        'validation' => 'isUnsignedId',
                    ), // PH_BLOG_THUMB_X

                    'PH_BLOG_THUMB_Y' => array(
                        'title' => $this->l('Default thumbnail height (px)'),
                        'cast' => 'intval',
                        'desc' => $this->l('Default: 200 (For PrestaShop 1.5 and 1.6)'),
                        'type' => 'text',
                        'required' => true,
                        'validation' => 'isUnsignedId',
                    ), // PH_BLOG_THUMB_Y

                    'PH_BLOG_THUMB_X_WIDE' => array(
                        'title' => $this->l('Default thumbnail width (wide version) (px)'),
                        'cast' => 'intval',
                        'desc' => $this->l('Default: 535 (For PrestaShop 1.5), 870 (For PrestaShop 1.6)'),
                        'type' => 'text',
                        'required' => true,
                        'validation' => 'isUnsignedId',
                    ), // PH_BLOG_THUMB_X_WIDE

                    'PH_BLOG_THUMB_Y_WIDE' => array(
                        'title' => $this->l('Default thumbnail height (wide version) (px)'),
                        'cast' => 'intval',
                        'desc' => $this->l('Default: 350 (For PrestaShop 1.5 and 1.6)'),
                        'type' => 'text',
                        'required' => true,
                        'validation' => 'isUnsignedId',
                    ), // PH_BLOG_THUMB_Y_WIDE

                ),
            ),

            'troubleshooting' => array(
                'submit' => array('title' => $this->l('Update'), 'class' => 'button'),
                'title' =>  $this->l('Troubleshooting'),
                'fields' => array(

                    'PH_BLOG_LOAD_FONT_AWESOME' => array(
                        'title' => $this->l('Load FontAwesome from module?'),
                        'validation' => 'isBool',
                        'cast' => 'intval',
                        'required' => true,
                        'desc' => $this->l('Important: Blog for PrestaShop uses fa fa-iconname format instead of icon-iconname format used by default in PrestaShop.'),
                        'type' => 'bool'
                    ), // PH_BLOG_LOAD_FONT_AWESOME

                    'PH_BLOG_LOAD_BXSLIDER' => array(
                        'title' => $this->l('Load BxSlider from module?'),
                        'validation' => 'isBool',
                        'cast' => 'intval',
                        'required' => true,
                        'type' => 'bool'
                    ), // PH_BLOG_LOAD_BXSLIDER

                    'PH_BLOG_LOAD_MASONRY' => array(
                        'title' => $this->l('Load Masonry from module?'),
                        'validation' => 'isBool',
                        'cast' => 'intval',
                        'required' => true,
                        'type' => 'bool'
                    ), // PH_BLOG_LOAD_MASONRY

                    'PH_BLOG_LOAD_FITVIDS' => array(
                        'title' => $this->l('Load FitVids from module?'),
                        'validation' => 'isBool',
                        'cast' => 'intval',
                        'required' => true,
                        'type' => 'bool'
                    ), // PH_BLOG_LOAD_FITVIDS

                ),
            ),
        );

        $widgets_options = array();
        $widgets_options = array_merge($recentPosts, $relatedPosts);

        //$this->hide_multishop_checkbox = true;
        $this->fields_options = array_merge($standard_options, $widgets_options);

        return parent::renderOptions();
    }

    public function beforeUpdateOptions()
    {
        $customCSS = '/** custom css for SimpleBlog **/'.PHP_EOL;
        $customCSS .= Tools::getValue('PH_BLOG_CSS', false);

        if($customCSS)
        {
            $handle = _PS_MODULE_DIR_ . 'ph_simpleblog/css/custom.css';

            if(!file_put_contents($handle, $customCSS))
            {
                die(Tools::displayError('Problem with saving custom CSS, contact with module author'));
            }
        }
    }

    public function initContent()
    {
        $this->multiple_fieldsets = true;

        if(Tools::isSubmit('regenerateThumbnails'))
        {
            SimpleBlogPost::regenerateThumbnails();
            Tools::redirectAdmin(self::$currentIndex.'&token='.Tools::getValue('token').'&conf=9');
        }

        $this->context->smarty->assign(array(
            'content' => $this->content,
            'url_post' => self::$currentIndex.'&token='.$this->token,
        ));

        parent::initContent();
    }
}
