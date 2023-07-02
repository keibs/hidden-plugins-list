function hide_plugin_trickspanda() {
  global $wp_list_table;
  $hidearr = array(
    'duplicator-pro/duplicator-pro.php',
    'seedprod-coming-soon-pro-5/seedprod-coming-soon-pro-5.php'
  );
  $myplugins = $wp_list_table->items;
  foreach ($myplugins as $key => $val) {
    if (in_array($key,$hidearr)) {
      unset($wp_list_table->items[$key]);
    }
  }
}

add_action('pre_current_active_plugins', 'hide_plugin_trickspanda');

function hide_plugins_side_bar() {
  echo "<style type='text/css'>";
  echo "#toplevel_page_duplicator-pro {display: none;}";
  echo "<style type='text/css'>";
}

add_action('admin_print_scripts', 'hide_plugins_side_bar');
