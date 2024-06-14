<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendedor;
use App\Models\Cliente;
use App\Models\Tienda;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(VendedorSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(TiendaSeeder::class);

        Vendedor::factory(10)->create();
    //    Cliente::factory(10)->create();
   //     Tienda::factory(5)->create();

       // Tienda::factory()->has(Cliente::factory()->count(5))->create();
        //Tienda::factory()->has(Cliente::factory()->count(5))->create();
        //Tienda::factory()->has(Cliente::factory()->count(3))->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
