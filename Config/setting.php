<?php
/**
 * FrontAuth : baserCMS Frontend Authentication
 * Copyright (c) ryuring <http://ryuring.com>
 *
 * @copyright     Copyright (c) ryuring
 * @link          http://ryuring.com
 * @since         1.0.0
 * @license       https://basercms.net/license/index.html MIT License
 */

/**
 * setting
 */
$config = [
	'BcAuthPrefix' => [
		'front' => [
			// 認証名
			'name' => 'フロント',
			// ログイン完了後にリダイレクトするURL
			'loginRedirect' => '/',
			// ユーザー管理に利用するモデル
			'userModel' => 'User',
			// ログイン画面のURL
			'loginAction' => '/users/login',
			// ログアウトを実行するURL
			'logoutAction' => '/users/logout',
			// ツールバーの利用可否
			'toolbar' => true,
			// セッションキー（デフォルトは管理システムと同じキー: Admin → 管理画面にログインすればフロントにもログインできる）
			'sessionKey' => 'Admin',
		]
	],
	'FrontAuth' => [
		// 認証除外URLパターン
		// URLの先頭より記述
		// 先頭のスラッシュは除外
		// 正規表現
		'excludeUrlPatterns' => [
			'feed',
			'users\/reset_password',
			'mail\/mail\/ajax_get_token'
		]
	]
];
