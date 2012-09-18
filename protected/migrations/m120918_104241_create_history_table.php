<?php

class m120918_104241_create_history_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('dcc_history', array(
				'id' => 'pk',
				'text' => 'string NULL',
				)
			);	
	}

	public function down()
	{
		//echo "m120918_104241_create_history_table does not support migration down.\n";
		$this->dropTable('dcc_history');
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}