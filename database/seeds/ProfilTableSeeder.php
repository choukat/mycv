<?php

use Illuminate\Database\Seeder;

class ProfilTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('profils')->delete();

		// test
		DB::table('profils')->insert(array(
				'name' => 'Jordi',
				'surname' => 'Vidaller',
				'description1' => "Je suis développeur depuis une dizaine d'année, de formation ingénieur, j'ai longtemps travaillé dans de grandes et petites sociétés (SSII, Editeurs etc...). Ayant acquis une certaine experience professionelle, j'ai décidé de me reconvertir en freelance depuis peu.",
				'description2' => "J'ai pu grace à mon expérience toucher à beaucoup de technologies différentes, j'ai commencé par du développement web il y a longtemps, puis j'ai commencé à me tourner vers le développement industriel avec des langages durs au travers de grands clients comme Airbus ou Intel.",
				'description3' => "Aujourd'hui, j'ai décidé de lancer ma propre application sur mobile, mais afin de garder la main je reste en parallèle disponible en freelance afin de mettre en application mon apprentissage récent et ne pas me cantonner à mon seul projet. Se diversifier est pour moi une qualité importante qu'un développeur doit avoir.",
				'description4' => "Je peux assumer un grand nombre de projet, mais je souhaite avant tout me concentrer sur du développement mobile front (React-Native) et du back en Laravel (quelque soit le contexte). De nature touche à tout, autodidacte et de part mon expérience dans beaucoup de technologies et langages différents, je peux devenir facilement un développeur full-stack si les technologies utilisées correspondent.",
				'birthdate' => '1988-12-06',
				'email' => 'jordi.vidaller@gmail.com',
				'title' => 'Développeur full stack',
				'tags' => 'React Native,Laravel,Java,PHP,SQL,Oracle',
				'phone' => '+336 50 46 44 17',
				'address' => 'Toulouse'
			));
	}
}
