<?php

/**
 * [ControllerEventListener] FrontAuth
 *
 */
class FrontAuthControllerEventListener extends BcControllerEventListener {

	public $events = array('startup');

	public function startup(CakeEvent $event) {
		$Controller = $event->subject();
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
		// 認証されていない場合はログイン画面にリダイレクト
		if (!$Controller->BcAuth->user()) {
			$Controller->redirect($Controller->BcAuth->loginAction);
		}
	}

}
