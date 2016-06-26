<?php

use yii\db\Migration;

/**
 * Handles the creation for table `lieu`.
 */
class m160624_193636_create_lieu extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('lieu', [
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
        $this->dropTable('lieu');
    }
}
