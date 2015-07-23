<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%book}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $auhor_id
 * @property string $isbn
 *
 * @property Author $auhor
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%book}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['auhor_id'], 'integer'],
            [['title'], 'string', 'max' => 64],
            [['description'], 'string', 'max' => 1024],
            [['isbn'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'auhor_id' => Yii::t('app', 'Auhor ID'),
            'isbn' => Yii::t('app', 'Isbn'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuhor()
    {
        return $this->hasOne(Author::className(), ['id' => 'auhor_id']);
    }
}
