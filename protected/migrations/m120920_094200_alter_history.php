<?php

class m120920_094200_alter_history extends CDbMigration
{
	public function up()
	{
		$this->addColumn('dcc_history', 'calc_date', 'datetime');
	}

	public function down()
	{
		//echo "m120920_094200_alter_history does not support migration down.\n";
		//return false;
		$this->dropColumn('dcc_history', 'calc_date');
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
