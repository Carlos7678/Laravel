<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;

class CreateExampleUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Inserta algunos usuarios de ejemplo
        DB::table('users')->insert([
            [
                'name' => 'Ejemplo Usuario 1',
                'email' => 'usuario1@example.com',
                'password' => Hash::make('password1'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ejemplo Usuario 2',
                'email' => 'usuario2@example.com',
                'password' => Hash::make('password2'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Elimina los usuarios de ejemplo
        DB::table('users')->whereIn('email', ['usuario1@example.com', 'usuario2@example.com'])->delete();
    }
}
