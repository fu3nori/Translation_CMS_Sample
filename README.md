# Translation_CMS_Sample
日本語から4か国語に同時翻訳して文章をCMSに登録するサンプル cakephp3.8ベース php5.6必須
git clone後にマイグレーションファイルからDBを構築

## Usage JP
コントローラー・transにアクセス　
EX. http://127.0.0.1/trans/trans
フォームから日本語文章を登録すると日本語テーブルにオリジナル文章が、英語、中国語、韓国語テーブルにデータが翻訳して登録される。
使用している翻訳APIはMy Memoryを使っていますので、TransController.php冒頭のメールアドレスを開発者本人のメールアドレスに設定して下さい。(メールアドレス設定で日計10000文字可能、メールアドレス無しでは1000文字まで)
メールアドレスは必ず開発者本人のメールアドレスを設定して下さい！

## Usage EN
Translation_CMS_Sample
Outline
Sample of registering sentences from Japanese to 4 languages simultaneously in CMS based on cakephp3.8 php5.6 required
Build DB from migration files after git clone

Usage
Access to controller trans　
EX. http://127.0.0.1/trans/trans
When Japanese sentences are registered from the form, the original sentences are registered in the Japanese table, and the data are translated and registered in the English, Chinese, and Korean tables.
The translation API used is My Memory, so please set the email address at the beginning of TransController.php to the developer's own email address. (A daily total of 10,000 characters is possible with the email address set, and up to 1,000 characters without the email address.)
Be sure to set the email address to the developer's own email address!

