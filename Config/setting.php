<?php
$config['BcAuthPrefix'] = array(
	'front' => array(
		'name'			=> 'フロント',
		'loginRedirect'	=> '/',
		'userModel'		=> 'User',
		'loginAction'	=> '/users/login',
		'toolbar'		=> true,
		// 管理画面にログインすればフロントにもログインできるように
		// セッションキーは管理画面と共通
		//'sessionKey'	=> 'Front'
	  )
);
