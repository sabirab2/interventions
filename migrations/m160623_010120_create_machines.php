<?php

use yii\db\Migration;

/**
 * Handles the creation for table `type_machines`.
 */
class m160623_010120_create_machines extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('machines', [
            'id' => $this->primaryKey(),
            'name' => $this->string(45)->notNull(),
            's_n' => $this->string(45)->notNull()->unique(),
            'collaborator_name' => $this->string(45)->notNull(),
            'adr_mac_lan' => $this->string(45)->notNull()->unique(),
            'adr_ip' => $this->string(45)->notNull(),
            'created_at' => $this->dateTime()->defaultValue(new \yii\db\Expression('NOW()')),
            'updated_at' => $this->dateTime(),
            'is_deleted' => $this->boolean()->defaultValue(false),
            'Alimentation' => $this->string(45),
            'cable' => $this->string(45),
            'hdd' => $this->string(45),
            'ram' => $this->string(45),
            'carte_mere' => $this->string(45),
            'lecteur' => $this->string(45),
            'ventilateur' => $this->string(45),
            'bios' => $this->boolean()->defaultValue(true),
            'os' => $this->boolean()->defaultValue(true),
            'antivirus' => $this->boolean()->defaultValue(true),
            'cpu' => $this->boolean()->defaultValue(true),
            'registre' => $this->boolean()->defaultValue(true),
            'autre_config' => $this->boolean()->defaultValue(true),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('type_machines');
    }
}
