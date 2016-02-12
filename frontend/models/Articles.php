<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property integer $id
 * @property string $text
 * @property integer $creater_id
 * @property integer $created_at
 * @property string $art_picture
 * @property integer $rank
 * @property string $tags
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text', 'creater_id', 'art_picture', 'rank', 'tags'], 'required'],
            [['text', 'tags'], 'string'],
            [['creater_id', 'created_at', 'rank'], 'integer'],
            [['art_picture'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'creater_id' => 'Creater ID',
            'created_at' => 'Created At',
            'art_picture' => 'Art Picture',
            'rank' => 'Rank',
            'tags' => 'Tags',
        ];
    }
}
