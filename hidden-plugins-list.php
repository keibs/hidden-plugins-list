function hide_plugin_trickspanda() {
  global $wp_list_table;
  $hidearr = array(
    ''
  );
  $myplugins = $wp_list_table->items;
  foreach ($myplugins as $key => $val) {
    if (in_array($key,$hidearr)) {
      unset($wp_list_table->items[$key]);
    }
  }
}
