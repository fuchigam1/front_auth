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
 * FrontAuthControllerEventListener
 */
class FrontAuthControllerEventListener extends BcControllerEventListener
{

	/**
	 * Events
	 * @var string[]
	 */
	public $events = ['startup'];

	/**
	 * startup
	 * @param CakeEvent $event
	 */
	public function startup(CakeEvent $event)
	{
		$Controller = $event->subject();
		// 除外URLの場合はスルー
		$excludeUrlPatterns = Configure::read('FrontAuth.excludeUrlPatterns');
		if(preg_match('/^(' . implode('|', $excludeUrlPatterns) . ')/', $Controller->request->url)) {
			return;
		}
		// 管理画面の場合はスルー
		if (BcUtil::isAdminSystem()) {
			return;
		}
		// リクエストアクションの場合はスルー
		if ($Controller->request->is('requested')) {
			return;
		}
		// 認証クラスがない場合はスルー
		if (!isset($Controller->BcAuth)) {
			return;
		}
		// ログイン画面の場合はスルー
		if (('/' . $Controller->request->url) == $Controller->BcAuth->loginAction) {
			return;
		}
		// スルーに設定されているアクションの場合はスルーする
		$action = strtolower($Controller->request->params['action']);
		if (in_array($action, array_map('strtolower', $Controller->allowedFrontAuthActions))) {
			return;
		}
		// 認証されていない場合はログイン画面にリダイレクト
		if (!$Controller->BcAuth->user()) {
			$Controller->redirect($Controller->BcAuth->loginAction);
		}
	}

}
