<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('profils')->delete();

		// test
		DB::table('clients')->insert(array(
				'name' => 'Airbus',
        'description' => 'Airbus',
        'logo' => '/mycv/resources/images/airbus.png',
        'url' => 'http://www.airbus.com'
			));

    DB::table('clients')->insert(array(
        'name' => 'Intel',
        'description' => 'Intel',
        'logo' => '/mycv/resources/images/intel.png',
        'url' => 'http://www.intel.com'
      ));

    DB::table('clients')->insert(array(
        'name' => 'Natixis',
        'description' => 'Natixis',
        'logo' => '/mycv/resources/images/natixis2.png',
        'url' => 'http://www.intel.com'
      ));
	}
}
