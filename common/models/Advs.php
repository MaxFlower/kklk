<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "advs".
 *
 * @property integer $id
 * @property string $title
 * @property string $anons
 * @property string $content
 * @property string $created_at
 * @property string $picture_path
 * @property integer $author_id
 * @property string $publish_status
 * @property string $category_id
 *
 * @property AdCategory $category
 * @property User $author
 */
class Advs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'advs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['anons', 'content', 'publish_status'], 'string'],
            [['created_at'], 'safe'],
            [['author_id', 'category_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['picture_path'], 'string', 'max' => 50]
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
            'anons' => 'Anons',
            'content' => 'Content',
            'created_at' => 'Created At',
            'picture_path' => 'Picture Path',
            'author_id' => 'Author ID',
            'publish_status' => 'Publish Status',
            'category_id' => 'Category ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(AdCategory::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'author_id']);
    }
}
