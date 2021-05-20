<?php


namespace app\models;


use yii\base\Model;
use yii\db\ActiveRecord;

class oknoForm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'attendance';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'pose'], 'integer'],
            [['name', 'pose'], 'required'],
            [['name'], 'string', 'max' => 80],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'pose' => 'Pose',
        ];
    }
}