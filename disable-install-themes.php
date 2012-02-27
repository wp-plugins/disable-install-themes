<?php
/*
Plugin Name: Disable install themes
Plugin URI: http://branu.jp/
Description: テーマのインストールを非表示にするプラグイン
*/


//テーマインストール削除
$rm = new WP_Roles();
$roles = $rm->roles;
foreach ($roles as $key => $value) {
	if ( isset($value['capabilities']['install_themes']) ) {
		$role = $rm->get_role($key);
		$role->remove_cap('install_themes');
	}
	
	/*
	追加する場合
	$role = $rm->get_role($key);
	$role->add_cap('install_themes');
	*/
}

