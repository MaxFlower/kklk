<?php

use yii\db\Schema;
use yii\db\Migration;

class m151113_072047_create_db_tables extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%customers}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull(),
            'soname' => $this->string(50)->notNull(),
            'email' => $this->string(50)->notNull(),
            'age' => $this->integer(2)->notNull(),
            'date' => $this->date(),            
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%customers}}');
    }    
}
