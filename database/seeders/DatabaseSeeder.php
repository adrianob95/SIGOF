<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Oficio::factory()->create([

        //     'numeracao' => 10,
        //     'ano'  => '2022',
        //     'data' => date('y-m-d'),
        //     'cidade' => 'Santo Amaro',
        //     'destinatario' => 'Juliana Ferreira',
        //     'situacao' => 'Protocolado',
        //     'assunto' => 'Solicitação de onibus',
        //     'conteudo'  => 'Onibus para fju',
        //     'tratamento'  => 'Senhora',
        //     'cargodestino'  => 'Chefe de Gabinete',
        //     'localdestino'  => 'NESTA',
        // ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Adriano Barbosa de Jesus',
        //     'email' => 'teste@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //     'remember_token' => '12345678910',
        //     'autor' => 'Ademilson Araújo dos Santos',
        //     'cargoautor' => 'Vereador',
        //     'contato' => '75981401049',
        //     'contatoassessoria' => '075982055051',
        //     'emailautor' =>'adrianobarbosa95@gmail.com',
        // ]);

          
       
          \App\Models\Oficio::factory(10)->create();
       

     }
}
