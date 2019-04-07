<?php

use Illuminate\Database\Seeder;

class ExperienceTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('profils')->delete();

		// test
		DB::table('experiences')->insert(array(
				'title' => "Ingénieur d'étude conception et développement (client Airbus)",
        'description' => "Développement d'améliorations pour l'application SABRE qui permet la préparation et la configurations des tests aux essais en vols sur les avions en sorties d'usine. Développement de scripts batch pour sécuriser l'échange de données sensibles sur l'A400M entre Blagnac et Séville. Technologies : Bash/JAVA/C/Ingres/SQL/HPALM/OpenRoad",
        'logo' => '/mycv/resources/images/techmahindra.png',
        'begin' => '2015-01-01',
        'end' => '2017-01-01'
			));

    DB::table('experiences')->insert(array(
				'title' => "Développeur secteur recherche et développement",
        'description' => "Participation au développement d'un logiciel dans le domaine du transport de marchandise. Technologies : Progress",
        'logo' => '/mycv/resources/images/akanea.jpg',
        'begin' => '2014-01-01',
        'end' => '2015-01-01'
			));

    DB::table('experiences')->insert(array(
				'title' => "Ingénieur d'étude conception et développement (Client : Intel)",
        'description' => "Développement de pages de statistiques (graphiques, tableaux) afin de recenser et d'analyser des résultats de tests dans le cadre de la R&D mobile. Technologies : Javascript, php, html5",
        'logo' => '/mycv/resources/images/celad.png',
        'begin' => '2013-01-01',
        'end' => '2013-01-01'
			));

    DB::table('experiences')->insert(array(
				'title' => "Ingénieur d'étude conception et développement (Client : Airbus)",
        'description' => "Migration d'une application de calcul structure dans le domaine aéronautique FORTRAN vers le framework CAESAM, production de Dossier de spécification/Design Dossier/campagne de test automatisée. Technologies : C/C++/Java/framework CAESAM/FORTRAN/ksh/HPALM",
        'logo' => '/mycv/resources/images/sogetiht.jpg',
        'begin' => '2012-01-01',
        'end' => '2013-01-01'
			));

    DB::table('experiences')->insert(array(
        'title' => "Développeur web",
        'description' => "Réalisation d'outils web pour l'intranet de la société en autonomie totale (Interface de gestion des absences/Outils de reporting/migration du site Extranet de la société). Technologies : Javascript/php/Html/Oracle/MySQL/UML avec implémentation d'un modèle MVC",
        'logo' => '/mycv/resources/images/natixis.png',
        'begin' => '2008-01-01',
        'end' => '2012-01-01'
      ));
  }
}
