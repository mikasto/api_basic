<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $news_id
 * @property string $title
 * @property string|null $body
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['body'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'news_id' => 'News ID',
            'title' => 'Title',
            'body' => 'Body',
        ];
    }
}
