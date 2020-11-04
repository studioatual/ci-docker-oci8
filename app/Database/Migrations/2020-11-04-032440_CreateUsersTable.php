<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'BIGINTEGER',
				'unsigned' => true,
				'auto_increment' => true,
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
			],
			'blog_description' => [
				'type' => 'TEXT',
				'null' => true,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('users');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
