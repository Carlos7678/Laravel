<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

class CreateDefaultUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Crear tres usuarios por defecto
        $users = [
            [
                'name' => 'Usuario 1',
                'email' => 'usuario1@example.com',
                'password' => Hash::make('contraseña1'),
            ],
            [
                'name' => 'Usuario 2',
                'email' => 'usuario2@example.com',
                'password' => Hash::make('contraseña2'),
            ],
            [
                'name' => 'Usuario 3',
                'email' => 'usuario3@example.com',
                'password' => Hash::make('contraseña3'),
            ],
        ];

        // Insertar los usuarios en la tabla 'users'
        foreach ($users as $userData) {
            \App\Models\User::create($userData);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Eliminar los usuarios creados
        \App\Models\User::whereIn('email', [
            'usuario1@example.com',
            'usuario2@example.com',
            'usuario3@example.com',
        ])->delete();
    }
}
