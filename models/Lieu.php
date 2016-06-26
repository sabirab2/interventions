<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii2tech\ar\softdelete\SoftDeleteBehavior;

/**
 * This is the model class for table "lieu".
 *
 * @property integer $id
 * @property string $name
 * @property string $code
 * @property string $created_at
 * @property string $updated_at
 * @property integer $is_deleted
 *
 * @property Interventions[] $interventions
 */
class Lieu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lieu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'code'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['is_deleted'], 'integer'],
            [['name', 'code'], 'string', 'max' => 45],
            [['name'], 'unique'],
            [['code'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'code' => Yii::t('app', 'Code'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'is_deleted' => Yii::t('app', 'Is Deleted'),
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                // if you're using datetime instead of UNIX timestamp:
                 'value' => new Expression('NOW()'),
            ],
            'softDeleteBehavior' => [
                'class' => SoftDeleteBehavior::className(),
                'softDeleteAttributeValues' => [
                    'is_deleted' => true
                ],
                'replaceRegularDelete' => true // mutate native `delete()` method
            ],
        ];
    }



    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInterventions()
    {
        return $this->hasMany(Interventions::className(), ['lieu_id' => 'id']);
    }
}
