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
      $this->call(PenyalurTkiSeeder::class);
      $this->call(StatusKawinSeeder::class);
      $this->call(StatusTinggalSeeder::class);
      $this->call(JabatanSeeder::class);
      $this->call(SuratSeeder::class);
      $this->call(PerangkatDesaSeeder::class);
      $this->call(JenisKelaminSeeder::class);
      $this->call(GolonganDarahSeeder::class);
      $this->call(CacatSeeder::class);
      $this->call(StatusKependudukanSeeder::class);
    }
}
