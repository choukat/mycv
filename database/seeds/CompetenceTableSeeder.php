<?php

use Illuminate\Database\Seeder;

class CompetenceTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('profils')->delete();

		// test
		DB::table('competences')->insert(array(
				'name' => 'React Native',
				'description' => "Parmis les nombreuses technologies utilisées actuellement pour le développement front mobile, React Native me semble un très bon compromis répondant au besoin de la plupart des applications actuelles. Je l'utilise personellement pour l'application que je développe et j'en suis très satisfait.",
				'level' => '75',
				'logo' => '/mycv/resources/images/reactnative.png'
			));

		DB::table('competences')->insert(array(
				'name' => 'Laravel (PHP)',
				'description' => "C'est un des framework PHP les plus populaires, l'apprentissage n'est pas évident mais ses performances ne sont plus à prouver, je l'utilise nottament pour faire des API, mais il a aussi servit à faire le back-end de mon site CV (histoire d'apprendre tout en se rendant service).",
				'level' => '60',
				'logo' => '/mycv/resources/images/laravel.png'
			));

		DB::table('competences')->insert(array(
				'name' => 'React',
				'description' => "Développer en React Native a forcément entrainer ma curiosité vers son papa version web à savoir React. Très performant, je le recommanderai cependant uniquement pour des applications web un peu complexes, des librairies front comme Bootstrap et JQuery font souvent très bien l'affaire pour la plupart des besoins.",
				'level' => '50',
				'logo' => '/mycv/resources/images/reactnative.png'
			));

		DB::table('competences')->insert(array(
				'name' => 'JAVA',
				'description' => "J'ai beaucoup travaillé en Java dans le domaine industriel mais il me permet de faire des développements spécifiques sous Android. Ce langage permet un bon bagage pour réaliser toute sortes d'applications lourdes.",
				'level' => '80',
				'logo' => '/mycv/resources/images/java.png'
			));

		DB::table('competences')->insert(array(
				'name' => 'C/C++',
				'description' => "Bien qu'actuellement boudé par bon nombre de développeur, C et C++ sont pour moi des bases solides pour se sortir de beaucoup de situations. La rigueur imposée par ces langages a été pour moi une bonne formation, je les utilise très peu aujourd'hui.",
				'level' => '80',
				'logo' => '/mycv/resources/images/C.png'
			));

		DB::table('competences')->insert(array(
				'name' => 'Divers',
				'description' => "Architecture Redux avec React et ReactNative, SQL (MySQL, Oracle), Linux et programmation Bash (Debian), HTML5 CSS et Javascript avec Bootstrap et JQuery, je garde aussi un oeil sur Python, Flutter, NodeJS et bien d'autres car il faut toujours être prêt à migrer vers d'autres technologies.",
				'level' => '80',
				'logo' => '/mycv/resources/images/divers.png'
			));
	}
}
