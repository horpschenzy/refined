<?php

use App\User;
use App\Models\Application;
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
        $application = new Application();
        $application->firstname = 'Admin';
        $application->save();
        User::create([
            'reg_no' => 'admin',
            'application_id' => $application->id,
            'usertype' => 'admin',
            'password' => bcrypt('123456'),
        ]);
    }
}
