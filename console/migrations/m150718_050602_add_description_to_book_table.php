<?php

use yii\db\Schema;
use yii\db\Migration;

class m150718_050602_add_description_to_book_table extends Migration
{
    public function up()
    {
        $this->addColumn('{{%book}}', 'author_id', Schema::TYPE_INTEGER);
    }

    public function down()
    {
        $this->dropColumn('{{%book}}', 'book_desc');
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
