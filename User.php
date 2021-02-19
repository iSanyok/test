<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $name
 */
class User extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    public function getPhones()
    {
        return $this->hasMany(Phone::class, ['user_id' => 'id'])->select('phone');
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'patronymic'], 'required'],
            [['name', 'surname', 'patronymic'], 'string', 'max' => 255],
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
            'surname' => 'Surname',
            'patronymic' => 'Patronymic',
        ];
    }

    public function fields()
    {
        return [
            'id',
            'name',
            'surname',
            'patronymic',
            'phones',
        ];
    }

    public function afterSave($insert, $changedAttributes)
    {
        $phone = new Phone();

        $phone->phone = Yii::$app->request->bodyParams['phones'];
        $phone->link('user', $this);
    }
}
