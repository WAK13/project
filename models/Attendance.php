<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "attendance".
 *
 * @property int|null $id
 * @property string $name
 * @property int $pose
 */
class Attendance extends \yii\db\ActiveRecord
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
            'name' => 'Имя',
            'pose' => 'посещаймость',
        ];
    }
}
