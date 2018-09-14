<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/9/13
 * Time: 10:03
 */

namespace app\controllers;
use yii\helpers\Url;
use yii\web\Controller;
use app\models\EntryForm;

class DemoController extends Controller{

    public function actionEntry()
    {
        $model = new EntryForm(['scenario' => 'login']);

        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
            // 验证 $model 收到的数据

            // 做些有意义的事 ...

            return $this->render('entry-confirm', ['model' => $model]);
        }else {
            // 无论是初始化显示还是数据验证错误
            return $this->render('entry', ['model' => $model]);
        }
    }

    public function actionDemo(){

        $a = Url::to();
        $data = [
            'name' => 'myh',
            'age' => 25
        ];
        return $this->renderPartial('demo',$data);
        
    }

}