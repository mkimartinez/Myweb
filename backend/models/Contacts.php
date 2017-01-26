<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "friends_contact".
 *
 * @property integer $id
 * @property string $person_name
 * @property string $place
 * @property string $email
 * @property string $phone
 * @property resource $profile_photo
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'friends_contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'person_name', 'place', 'email', 'phone', 'profile_photo'], 'required'],
            [['id'], 'integer'],
            [['profile_photo'], 'string'],
            [['person_name', 'place', 'email', 'phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'person_name' => 'Person Name',
            'place' => 'Place',
            'email' => 'Email',
            'phone' => 'Phone',
            'profile_photo' => 'Profile Photo',
        ];
    }
}
