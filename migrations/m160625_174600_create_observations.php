<?php

use yii\db\Migration;

/**
 * Handles the creation for table `observations`.
 */
class m160625_174600_create_observations extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('observations', [
            'id' => $this->primaryKey(),
            'text' => $this->string(255)->notNull(),
            'intervention_id' =>  $this->integer()->notNull(),


        ]);

        // creates index for column `intervention_id`
        $this->createIndex(
            'idx-observations-intervention_id',
            'observations',
            'intervention_id'
        );

        // add foreign key for table `interventions`
        $this->addForeignKey(
            'fk-observations-intervention_id',
            'observations',
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
        $this->dropTable('observations');
    }
}
