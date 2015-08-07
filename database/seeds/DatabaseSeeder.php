<?php

use GestorImagenes\Album;
use GestorImagenes\Foto;
use GestorImagenes\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        Foto::truncate();
        Album::truncate();
        Usuario::truncate();

        $this->call('UsuariosSeeder');
        $this->call('AlbumesSeeder');
        $this->call('FotosSeeder');

        Model::reguard();
    }
}
