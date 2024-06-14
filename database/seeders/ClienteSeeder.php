<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{



    public function run(): void
    {
        $cliente1 = new Cliente();
        $cliente1->nombre_apellido = 'Alejandra Orozco Franco';
        $cliente1->edad = 27;
        $cliente1->telefono = '71781160';
        $cliente1->direccion = 'Rosal Punata';
        $cliente1->save();
    
        $cliente2 = new Cliente();
        $cliente2->nombre_apellido = 'Ariel Franco';
        $cliente2->edad = 37;
        $cliente2->telefono = '71781198';
        $cliente2->direccion = 'Arani';
        $cliente2->save();
    
        $cliente3 = new Cliente();
        $cliente3->nombre_apellido = 'Andrea Torrico';
        $cliente3->edad = 30;
        $cliente3->telefono = '78878954';
        $cliente3->direccion = 'Av. Uyuni';
        $cliente3->save();
    
    
    $cliente4 = new Cliente();
    $cliente4->nombre_apellido = 'Rebeca Arteaga';
    $cliente4->edad = 35;
    $cliente4->telefono = '72246879';
    $cliente4->direccion = 'Av. Heroinas';
    $cliente4->save();
    
    $cliente5 = new Cliente();
    $cliente5->nombre_apellido = 'Andrea Paniagua';
    $cliente5->edad = 22;
    $cliente5->telefono = '73789545';
    $cliente5->direccion = 'Av. Blanco Galingo';
    $cliente5->save();
    
    $cliente6 = new Cliente();
    $cliente6->nombre_apellido = 'Lizbedt Torrico';
    $cliente6->edad = 36;
    $cliente6->telefono = '74578123';
    $cliente6->direccion = 'Av. El Fuerte';
    $cliente6->save();
    }
}
