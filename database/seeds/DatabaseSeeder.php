<?php


use Illuminate\Database\Seeder;
use App\Barangg;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(PostTableSeeder::class);
        //$this->call(Penggajian::class);
        // $this->call(ArtikelSeeder::class);
        factory(Barangg::class,100)->create();
    }
}
