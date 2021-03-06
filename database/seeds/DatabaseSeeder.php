<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->call(TipeSoalSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserAdminSeeder::class);
        $this->call(AddSoalMBTISeeder::class);
    }

}
