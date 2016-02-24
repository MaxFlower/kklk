<?php

namespace common\models;


use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "articles".
 *
 * @property string $id
 * @property string $title
 * @property string $anons
 * @property string $content
 * @property string $picture_path
 * @property string $category_id
 * @property integer $author_id
 * @property string $publish_status
 * @property string $publish_date
 * @property integer $rank
 *
 * @property ArticleCategory $category
 * @property User $author
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
            [['title', 'rank'], 'required'],
            [['anons', 'content', 'publish_status'], 'string'],
            [['category_id', 'author_id', 'rank'], 'integer'],
            [['publish_date'], 'safe'],
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
            'picture_path' => 'Picture Path',
            'category_id' => 'Category ID',
            'author_id' => 'Author ID',
            'publish_status' => 'Publish Status',
            'publish_date' => 'Publish Date',
            'rank' => 'Rank',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(ArticleCategory::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'author_id']);
    }

    /**
     * Возвращает опубликованные посты
     * @return ActiveDataProvider
     */
    function getPublishedPosts()
    {
        return new ActiveDataProvider([
            'query' => Articles::find()
                ->where(['publish_status' => 'publish'])
        ]);
    }
}
