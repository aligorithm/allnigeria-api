<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Seeding database from SQL file...');
        DB::unprepared(file_get_contents(database_path('seeds/seed.sqlite.sql')));
        $this->command->info('Database seeded.');
    }
}
