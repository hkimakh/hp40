<?php

class m150225_014205_createtables extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_employee', array(
				'id'=>'pk',
				'name'=>'string NOT NULL',
				'address'=>'text NOT NULL',
				'phoneno'=>'string NOT NULL',
				'date_joining'=>'datetime DEFAULT NULL',
				'position'=>'string NOT NULL',
				'type'=>'tinyint DEFAULT 1 NOT NULL'
		    ),   'ENGINE=InnoDB');
		/*$this->createTable('tbl_technologies', array(
						'id'=>'pk',
						'name'=>'string NOT NULL'
						
				), 'ENGINE=InnoDB');
		$this->createTable('tbl_rating', array(
				'id'=>'pk',
				'employee_id'=>'int(11) NOT NULL',
				'technology_id'=>'int(11) NOT NULL',
				 'rating'=>'int(3) NOT NULL'
		
		), 'ENGINE=InnoDB');
		
		//foreign key relationship
		$this->addForeignKey("fk_employee_id", "tbl_rating", "employee_id","tbl_employee", "id","CASCADE","RESTRICT");
		$this->addForeignKey("fk_technology_id", "tbl_rating", "technology_id","tbl_technologies", "id","CASCADE","RESTRICT");
		)*/
	}

	public function down()
	{
		echo "m150225_014205_createtables does not support migration down.\n";
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