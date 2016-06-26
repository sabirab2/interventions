<?php

use yii\db\Migration;
use \yii\db\mysql\Schema;

/**
 * Handles the creation for table `interventions`.
 */
class m160624_194428_create_interventions extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('interventions', [
            'id' => $this->primaryKey(),
            'name' => $this->string(45)->notNull()->unique(),
            'code' => $this->string(45)->notNull()->unique(),
            'date_intervention' => Schema::TYPE_DATE,
            'created_at' => $this->dateTime()->defaultValue(new \yii\db\Expression('NOW()')),
            'updated_at' => $this->dateTime(),
            'type_id' => $this->integer()->notNull(),
            'correspondant_id' =>  $this->integer()->notNull(),
            'lieu_id' =>  $this->integer()->notNull(),
            'machine_id' =>  $this->integer()->notNull(),
            'is_deleted' => $this->boolean()->defaultValue(false),
        ]);
        // creates index for column `machine_id`
        $this->createIndex(
            'idx-interventions-machine_id',
            'interventions',
            'machine_id'
        );

        // add foreign key for table `machines`
        $this->addForeignKey(
            'fk-interventions-machine_id',
            'interventions',
            'machine_id',
            'machines',
            'id',
            'CASCADE'
        );

        // creates index for column `type_id`
        $this->createIndex(
            'idx-interventions-type_id',
            'interventions',
            'type_id'
        );

        // add foreign key for table `type_interventions`
        $this->addForeignKey(
            'fk-interventions-type_id',
            'interventions',
            'type_id',
            'type_interventions',
            'id',
            'CASCADE'
        );

        // creates index for column `lieu_id`
        $this->createIndex(
            'idx-interventions-lieu_id',
            'interventions',
            'lieu_id'
        );

        // add foreign key for table `lieu`
        $this->addForeignKey(
            'fk-interventions-lieu_id',
            'interventions',
            'lieu_id',
            'lieu',
            'id',
            'CASCADE'
        );

        // creates index for column `correspondant_id`
        $this->createIndex(
            'idx-interventions-correspondant_id',
            'interventions',
            'correspondant_id'
        );

        // add foreign key for table `lieu`
        $this->addForeignKey(
            'fk-interventions-correspondant_id',
            'interventions',
            'correspondant_id',
            'correspondants',
            'id',
            'CASCADE'
        );


    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('interventions');
    }
}
