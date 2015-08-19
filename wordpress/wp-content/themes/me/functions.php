<?php

define('ME_LIB', TEMPLATEPATH . '/lib');
define('ME_ADMIN', ME_LIB . '/admin');
define('ME_SECTIONS', ME_LIB . '/home_sections');
define('ME_MISC', ME_LIB . '/misc');

require_once(ME_MISC . '/lang.php');
require_once(ME_MISC . '/misc.php');
require_once(ME_ADMIN . '/admin_scripts.php');
require_once(ME_LIB . '/shortcodes/shortcodes.php');
require_once(ME_ADMIN . '/custom_avatar/custom_avatar.php');
require_once(ME_ADMIN . '/theme_settings.php');
require_once(ME_MISC . '/menu.php');
require_once(ME_LIB . '/portfolio/portfolio.php');
require_once(ME_LIB . '/slider/slider.php');
require_once(ME_MISC . '/about.php');
require_once(ME_LIB . '/services/services.php');
require_once(ME_MISC . '/widgets.php');
require_once(ME_MISC . '/single_template_metabox.php');

?>