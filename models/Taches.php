<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "taches".
 *
 * @property integer $id
 * @property string $text
 * @property integer $intervention_id
 *
 * @property Interventions $intervention
 */
class Taches extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'taches';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text', 'intervention_id'], 'required'],
            [['intervention_id'], 'integer'],
            [['text'], 'string', 'max' => 255],
            [['intervention_id'], 'exist', 'skipOnError' => true, 'targetClass' => Interventions::className(), 'targetAttribute' => ['intervention_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'text' => Yii::t('app', 'Text'),
            'intervention_id' => Yii::t('app', 'Intervention ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIntervention()
    {
        return $this->hasOne(Interventions::className(), ['id' => 'intervention_id']);
    }
}
