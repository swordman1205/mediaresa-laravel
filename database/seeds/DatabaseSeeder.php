<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('AdminSeeder');
		$this->call('SupportSeeder');
		$this->call('FrequencySeeder');
		$this->call('BroadcastingAreaSeeder');
		$this->call('CategorySeeder');
		$this->call('ThemeSeeder');
		$this->call('TargetSeeder');
		$this->call('FormatSeeder');
		$this->call('TechnicalSupportSeeder');
		$this->call('TemplateSeeder');
	}
}
