<?php

use yii\db\Migration;

/**
 * Handles the creation for table `taches`.
 */
class m160625_174549_create_taches extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('taches', [
            'id' => $this->primaryKey(),
            'text' => $this->string(255)->notNull(),
            'intervention_id' =>  $this->integer()->notNull(),


        ]);

        // creates index for column `intervention_id`
        $this->createIndex(
            'idx-taches-intervention_id',
            'taches',
            'intervention_id'
        );

        // add foreign key for table `interventions`
        $this->addForeignKey(
            'fk-taches-intervention_id',
            'taches',
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
        $this->dropTable('taches');
    }
}
