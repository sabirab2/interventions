<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii2tech\ar\softdelete\SoftDeleteBehavior;

/**
 * This is the model class for table "machines".
 *
 * @property integer $id
 * @property string $name
 * @property string $s_n
 * @property string $collaborator_name
 * @property string $adr_mac_lan
 * @property string $adr_ip
 * @property string $created_at
 * @property string $updated_at
 * @property integer $is_deleted
 *
 * @property string $Alimentation
 * @property string $cable
 * @property string $hdd
 * @property string $ram
 * @property string $carte_mere
 * @property string $lecteur
 * @property string $ventilateur
 * @property integer $bios
 * @property integer $os
 * @property integer $antivirus
 * @property integer $cpu
 * @property integer $registre
 * @property integer $autre_config
 *
 * @property Interventions[] $interventions
 */
class Machines extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'machines';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 's_n', 'collaborator_name', 'adr_mac_lan', 'adr_ip'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['is_deleted', 'bios', 'os', 'antivirus', 'cpu', 'registre', 'autre_config'], 'integer'],
            [['name', 's_n', 'collaborator_name', 'adr_mac_lan', 'adr_ip', 'Alimentation', 'cable', 'hdd', 'ram', 'carte_mere', 'lecteur', 'ventilateur'], 'string', 'max' => 45],
            [['s_n'], 'unique'],
            [['adr_mac_lan'], 'unique'],
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
            's_n' => Yii::t('app', 'S N'),
            'collaborator_name' => Yii::t('app', 'Collaborator Name'),
            'adr_mac_lan' => Yii::t('app', 'Adr Mac Lan'),
            'adr_ip' => Yii::t('app', 'Adr Ip'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'is_deleted' => Yii::t('app', 'Is Deleted'),
            'Alimentation' => Yii::t('app', 'Alimentation'),
            'cable' => Yii::t('app', 'Cable'),
            'hdd' => Yii::t('app', 'Hdd'),
            'ram' => Yii::t('app', 'Ram'),
            'carte_mere' => Yii::t('app', 'Carte Mere'),
            'lecteur' => Yii::t('app', 'Lecteur'),
            'ventilateur' => Yii::t('app', 'Ventilateur'),
            'bios' => Yii::t('app', 'Bios'),
            'os' => Yii::t('app', 'Os'),
            'antivirus' => Yii::t('app', 'Antivirus'),
            'cpu' => Yii::t('app', 'Cpu'),
            'registre' => Yii::t('app', 'Registre'),
            'autre_config' => Yii::t('app', 'Autre Config'),
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
        return $this->hasMany(Interventions::className(), ['machine_id' => 'id']);
    }
}
