<?php

use yii\db\Migration;

/**
 * Handles the creation for table `actions`.
 */
class m160625_174538_create_actions extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('actions', [
            'id' => $this->primaryKey(),
            'text' => $this->string(255)->notNull(),
            'type' => $this->string(45)->notNull()->defaultValue('materiel'),
            'intervention_id' =>  $this->integer()->notNull(),


        ]);

        // creates index for column `intervention_id`
        $this->createIndex(
            'idx-actions-intervention_id',
            'actions',
            'intervention_id'
        );

        // add foreign key for table `interventions`
        $this->addForeignKey(
            'fk-actions-intervention_id',
            'actions',
            'intervention_id',
            'interventions',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('actions');
    }
}
