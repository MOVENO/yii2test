<?php

namespace frontend\controllers;

use frontend\models\Bmi;
use Symfony\Component\CssSelector\Node\NegationNode;
use Yii;

class BmiController extends \yii\web\Controller
{
    public  function actionCal()
    {
        $model = new Bmi();

        $bmi = null;

        if ($model->load(Yii::$app->request->post())) {
            //cal bmi
            $bmi = $model->weight / ($model->height * $model->height);
        }



        return $this->render('cal', [

            'model' => $model,
            'bmi' => $bmi,

        ]);
    }
}
