<?php


namespace app\models;

use yii\db\ActiveRecord;
use yii\web\UploadedFile;
use yii\base\Model;

class attandenceForm extends ActiveRecord
{
    public static function TableName(){
        return 'attendance';
    }
    public function rules()
    {
        return[
            [['id','name','pose'],'required'],
            [['id'], 'integer'],
            [['pose']]
        ];
    }


}