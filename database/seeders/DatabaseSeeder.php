<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        try {
            \Spatie\Permission\Models\Role::findByName('Administrator');
        } catch (\Throwable $th) {
            \Spatie\Permission\Models\Role::create(['name' => 'Administrator']);
        }

        $user = \App\Models\User::find(1);

        if (! $user){
            $user = \App\Models\User::create([
                'name' => 'Administrator',
                'uuid' => \Illuminate\Support\Str::uuid(),
                'email' => 'admin@localhost.local',
                'email_verified_at' => date('Y-m-d H:i:d'),
                'password' => bcrypt('str0ngP@ssw0rd')
            ]);
        }

        $user->assignRole('Administrator');

        \App\Models\Category::create([
            'name' => 'Uncategorized'
        ]);
    }
}
