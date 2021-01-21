<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m210121_110753_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%news}}', [
            'news_id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'body' => $this->text(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news}}');
    }
}
