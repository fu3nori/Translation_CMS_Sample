<?php
/**
 * 日・英・中・韓・同時翻訳DB登録確認サンプルクラス
 * 2022/03/13
 * Fu3nor1
 * 翻訳API　Mymemory https://mymemory.translated.net/doc/spec.php
 */
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
class CheckController extends AppController
{
    public function index(){
        // 使用するモデルを順に呼出
        $this->loadModel('Jps');
        $jps = $this->Jps->find('all')->toArray();
        $this->set(compact('jps'));

        $this->loadModel('Ens');
        $ens = $this->Ens->find('all')->toArray();
        $this->set(compact('ens'));

        $this->loadModel('Chs');
        $chs = $this->Chs->find('all')->toArray();
        $this->set(compact('chs'));

        $this->loadModel('Krs');
        $krs = $this->Krs->find('all')->toArray();
        $this->set(compact('krs'));
    }


}
