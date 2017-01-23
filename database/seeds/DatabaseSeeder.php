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
      $this->call(UsersSeeder::class);
      $this->call(IdentitasSeeder::class);
      $this->call(AgamaSeeder::class);
      $this->call(HubunganKeluargaSeeder::class);
      $this->call(PekerjaanSeeder::class);
      $this->call(PendidikanSeeder::class);
    }
}
