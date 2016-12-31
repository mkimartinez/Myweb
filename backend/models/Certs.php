<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "certs".
 *
 * @property integer $id
 * @property string $certificate_name
 * @property string $description
 * @property string $url
 */
class Certs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'certs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['certificate_name', 'description', 'url'], 'required'],
            [['certificate_name', 'description', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'certificate_name' => 'Certificate Name',
            'description' => 'Description',
            'url' => 'Url',
        ];
    }
}
