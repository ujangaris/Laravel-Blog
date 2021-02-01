<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => "Laravel's Blog",
            'address' => "Indonesia, Jakarta",
            'contact_number' => "089618051183",
            'contact_email' => "infobelajarbareng@gmail.com",
        ]);
    }
}
