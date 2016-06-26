<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii2tech\ar\softdelete\SoftDeleteBehavior;

/**
 * This is the model class for table "interventions".
 *
 * @property integer $id
 * @property string $name
 * @property string $code
 * @property string $date_intervention
 * @property string $created_at
 * @property string $updated_at
 * @property integer $type_id
 * @property integer $correspondant_id
 * @property integer $lieu_id
 * @property integer $machine_id
 * @property integer $is_deleted
 *
 * @property Correspondants $correspondant
 * @property Lieu $lieu
 * @property Machines $machine
 * @property TypeInterventions $type
 * @property Observations[] $observations
 * @property Taches[] $taches
 * @property Actions[] $actions
 */
class Interventions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'interventions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'code', 'type_id', 'correspondant_id', 'lieu_id', 'machine_id'], 'required'],
            [['date_intervention', 'created_at', 'updated_at'], 'safe'],
            [['type_id', 'correspondant_id', 'lieu_id', 'machine_id', 'is_deleted'], 'integer'],
            [['name', 'code'], 'string', 'max' => 45],
            [['name'], 'unique'],
            [['code'], 'unique'],
            [['correspondant_id'], 'exist', 'skipOnError' => true, 'targetClass' => Correspondants::className(), 'targetAttribute' => ['correspondant_id' => 'id']],
            [['lieu_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lieu::className(), 'targetAttribute' => ['lieu_id' => 'id']],
            [['machine_id'], 'exist', 'skipOnError' => true, 'targetClass' => Machines::className(), 'targetAttribute' => ['machine_id' => 'id']],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => TypeInterventions::className(), 'targetAttribute' => ['type_id' => 'id']],
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
            'date_intervention' => Yii::t('app', 'Date Intervention'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'type_id' => Yii::t('app', 'Type ID'),
            'correspondant_id' => Yii::t('app', 'Correspondant ID'),
            'lieu_id' => Yii::t('app', 'Lieu ID'),
            'machine_id' => Yii::t('app', 'Machine ID'),
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
    public function getCorrespondant()
    {
        return $this->hasOne(Correspondants::className(), ['id' => 'correspondant_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLieu()
    {
        return $this->hasOne(Lieu::className(), ['id' => 'lieu_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMachine()
    {
        return $this->hasOne(Machines::className(), ['id' => 'machine_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(TypeInterventions::className(), ['id' => 'type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActions()
    {
        return $this->hasMany(Actions::className(), ['intervention_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObservations()
    {
        return $this->hasMany(Observations::className(), ['intervention_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaches()
    {
        return $this->hasMany(Taches::className(), ['intervention_id' => 'id']);
    }
}
