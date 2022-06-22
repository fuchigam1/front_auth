# フロント認証 プラグイン

FrontAuth プラグインは、公開側認証を実装できるプラグインです。


## Installation

1. 圧縮ファイルを解凍後、BASERCMS/app/Plugin/FrontAuth に配置します。
2. 管理システムのプラグイン管理に入って、表示されている FrontAuth プラグイン を有効化して下さい。
3. プラグインの有効化後、/app/Plugin/FrontAuth/Config/setting.php を調整してください。
4. プラグインの有効化後、/app/Plugin/FrontAuth/Event/FrontAuthControllerEventListener.php にて対象とするURLを設定してください。


## Uses Config

- /Config/setting.php の $config['BcAuthPrefix']['front']['sessionKey'] について
    - セッションキーのデフォルトは管理システムと同じキー: Admin です。（管理画面にログインすればフロントにもログインできる）


## Thanks

- [http://basercms.net/](http://basercms.net/)
- [http://wiki.basercms.net/](http://wiki.basercms.net/)
- [http://cakephp.jp](http://cakephp.jp)
- [Semantic Versioning 2.0.0](http://semver.org/lang/ja/)


