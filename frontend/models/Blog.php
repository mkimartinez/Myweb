<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property integer $id
 * @property string $published time
 * @property string $content
 * @property string $author
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['published time', 'content', 'author'], 'required'],
            [['published time'], 'safe'],
            [['content'], 'string'],
            [['author'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'published time' => 'Published Time',
            'content' => 'Content',
            'author' => 'Author',
        ];
    }
}
