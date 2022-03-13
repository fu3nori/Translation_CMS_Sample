<?php
/**
 * 日・英・中・韓・同時翻訳DB登録サンプルクラス
 * 2022/03/13
 * Fu3nor1
 * 翻訳API　Mymemory https://mymemory.translated.net/doc/spec.php
 */
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/* 開発者メールアドレスを登録 必ず開発する本人のメールアドレスを登録する事!
    Register developer email address!
    Be sure to register the email address of the person who will develop the software!
*/
define('MAIL', 'cap.fuminori.usui@gmail.com');
class TransController extends AppController
{
    public function index(){
        // POST送信かを判別
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            // POSTデータを受信
            $post_data = $this->request->getData('text');
            // 翻訳関数を実行 日本語→英語
            $translated_en = $this->transformer($post_data, "ja","en",MAIL);

            // 翻訳関数を実行　日本語→中国語(簡体字)
            $translated_zh = $this->transformer($post_data, "ja","zh-CN",MAIL);

            // 翻訳関数を実行　日本語→韓国語
            $translated_ko = $this->transformer($post_data, "ja","ko",MAIL);

            // 日本語テーブルにオリジナル文章をSave
            $jpsTable = TableRegistry::getTableLocator()->get('Jps');
            $jps = $jpsTable->newEntity();
            $jps->text = $post_data;
            if ($jpsTable->save($jps)) {
                print "日本語保存完了";
            }
            // 英語テーブルに英語翻訳文章をSave
            $ensTable = TableRegistry::getTableLocator()->get('Ens');
            $ens = $ensTable->newEntity();
            $ens->text = $translated_en;
            if ($ensTable->save($ens)) {
                print "英語保存完了";
            }
            // 中国語テーブルに中国語翻訳文章をsave
            $chsTable = TableRegistry::getTableLocator()->get('Chs');
            $chs = $chsTable->newEntity();
            $chs->text = $translated_zh;
            if ($chsTable->save($chs)) {
                print "中国語保存完了";
            }
            // 韓国語テーブルに韓国語翻訳文章をsave
            $krsTable = TableRegistry::getTableLocator()->get('Krs');
            $krs = $krsTable->newEntity();
            $krs->text = $translated_ko;
            if ($krsTable->save($krs)) {
                print "韓国語保存完了";
            }
            // 終了メッセージをviewに渡す
            $this->set('work', "登録成功しました");

        }else{
            $this->set('work', null);
        }
    }

    /**
     * 翻訳関数
     * 2022/3/13
     * fu3nor1
     * @param $text  翻訳する本文
     * @param $original_language　オリジナルの文字コード
     * @param $translate_language　変換先の文字コード
     * @param $mail  開発者のメールアドレス
     */
    protected function transformer($text, $original_language, $translate_language, $mail){

        // 翻訳APIに渡す文字列とURLを定義 ここでは日本語から英語に変換
        // 翻訳サービスはMyMemory APIを利用　無料プランで1日1000語まで、メールアドレス登録で1日10000語まで
        $url = "https://api.mymemory.translated.net/get?q=".$text."&langpair="
            .$original_language."|".$translate_language."&de=".$mail;

        // cURLの設定
        $ch = curl_init(); // はじめ

        //オプション
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // 翻訳後のデータをjsonで取得
        $html =  curl_exec($ch);
        // jsonを配列に変換
        $array_json = json_decode($html,true);
        // 配列から翻訳済みテキストを抽出
        $translated = $array_json["responseData"]["translatedText"];
        // 終了処理
        curl_close($ch);
        // 出力
        return $translated;
    }
}
