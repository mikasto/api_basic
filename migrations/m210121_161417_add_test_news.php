<?php

use yii\db\Migration;

/**
 * Class m210121_161417_add_test_news
 */
class m210121_161417_add_test_news extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		echo "Add test news\n";
        $this->insert(
            '{{%news}}', 
            [
                'title' => 'Title News 1',
                'body' => "Body text for news 1\nBody text for news 1\nBody text for news 1\n",
            ]
        );
		$this->insert(
            '{{%news}}', 
            [
                'title' => 'Title News 2',
                'body' => "Body text for news 2\nBody text for news 2\nBody text for news 2\n",
            ]
        );
		$this->insert(
            '{{%news}}', 
            [
                'title' => 'Title News 3',
                'body' => "Body text for news 3\nBody text for news 3\n",
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "delete test news\n";

        $this->delete(
            '{{%news}}', 
            'news_id < 4',
            );
    }
}
