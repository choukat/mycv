<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('ProfilTableSeeder');
		    $this->command->info('Profils table seeded!');
        $this->call('CompetenceTableSeeder');
        $this->command->info('Competences table seeded!');
        $this->call('ExperienceTableSeeder');
        $this->command->info('Experiences table seeded!');
        $this->call('RealisationTableSeeder');
        $this->command->info('Realisations table seeded!');
        $this->call('ClientTableSeeder');
        $this->command->info('Clients table seeded!');
    }
}
