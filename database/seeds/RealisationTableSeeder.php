<?php

use Illuminate\Database\Seeder;

class RealisationTableSeeder extends Seeder {

	public function run()
	{
		DB::table('realisations')->insert(array(
				'title' => 'MeetMap',
        'description' => "Application mobile Android et IOS que je développe dans un cadre personnel. Le front est en React-Native et le back en Laravel. C'est une map permettant de rencontrer des gens autour d'évenements ephemères créés par les utilisateurs. Encore en cours de test et développement, une version finale devrait être disponible pour l'été 2019.",
        'logo' => '/mycv/resources/images/meetmap.png',
        'url' => 'Disponible bientot sur le store Apple et Android',
        'role' => 'Développeur full-stack'
			));

    DB::table('realisations')->insert(array(
				'title' => 'MyCv',
        'description' => "Application web qui permet d'éditer facilement un cv en ligne, le front est en Bootsrap, blade et JQuery, le back en Laravel. Ce site est actuellement réalisé avec cette application.",
        'logo' => '/mycv/resources/images/mycv.png',
        'url' => 'http://www.jordi-vidaller.com',
        'role' => 'Développeur full-stack'
			));
	}
}
