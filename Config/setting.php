<?php

/**
 * [Config] FrontAuth
 * 
 */
$config['BcAuthPrefix'] = array(
	'front' => array(
		// 認証名
		'name'			 => 'フロント',
		// ログイン完了後にリダイレクトするURL
		'loginRedirect'	 => '/partner/',
		// ユーザー管理に利用するモデル
		'userModel'		 => 'User',
		// ログイン画面のURL
		'loginAction'	 => '/users/login',
		// ログアウトを実行するURL
		'logoutAction'	 => '/users/logout',
		// ツールバーの利用可否
		'toolbar'		 => true,
		// セッションキー（デフォルトは管理システムと同じキー: Admin → 管理画面にログインすればフロントにもログインできる）
		'sessionKey'	 => 'Admin',
	)
);
