<?php


namespace app\models;


use yii\db\ActiveRecord;

class Phone extends ActiveRecord
{
    public static function tableName()
    {
        return 'phones';
    }

    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }

    public function rules()
    {
        return [['phone'], 'integer', 'required'];
    }
}