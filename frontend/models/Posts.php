<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property integer $id
 * @property string $title
 * @property string $time published
 * @property string $content
 * @property integer $ likes
 * @property integer $comments
 * @property string $photos
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'time published', 'content', ' likes', 'comments', 'photos'], 'required'],
            [['time published'], 'safe'],
            [['content'], 'string'],
            [[' likes', 'comments'], 'integer'],
            [['title', 'photos'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'time published' => 'Time Published',
            'content' => 'Content',
            ' likes' => 'Likes',
            'comments' => 'Comments',
            'photos' => 'Photos',
        ];
    }
}
