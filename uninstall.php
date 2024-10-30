<?php

if (!defined('WP_UNINSTALL_PLUGIN')) die;

delete_option("lestvica_data");
delete_option("lestvica_last_update");

?>