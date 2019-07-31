<?php

namespace frontend\models;

use yii\base\Model;

class Bmi extends Model
{
    public $weight;
    public $height;

    public function rules()
    {
        return [
            [['weight', 'height'], 'required']
        ];
    }

    public function attributeLabels()
    {
        return [
            'weight' => 'น้ำหนัก (กิโลกรัม)',
            'height' => 'ส่วนสูง (เมตร)'
        ];
    }
}
