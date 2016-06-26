<?php

use yii\db\Migration;

/**
 * Handles the creation for table `type_interventions`.
 */
class m160624_194018_create_type_interventions extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('type_interventions', [
            'id' => $this->primaryKey(),
            'name' => $this->string(45)->notNull()->unique(),
            'code' => $this->string(45)->notNull()->unique(),
            'created_at' => $this->dateTime()->defaultValue(new \yii\db\Expression('NOW()')),
            'updated_at' => $this->dateTime(),
            'is_deleted' => $this->boolean()->defaultValue(false),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('type_interventions');
    }
}
