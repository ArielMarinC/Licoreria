<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendedor;

class VendedorSeeder extends Seeder
{



    public function run(): void
    {
        $vendedor1= new Vendedor;

        $vendedor1->nombre_apellido = 'Ariel Marin';
        $vendedor1->profesion = 'Ingeniero de sistemas';
        $vendedor1->grado_academico = 'Licenciatura';
        
        $vendedor1->save();
        
        
        $vendedor2 = new Vendedor;
        $vendedor2->nombre_apellido = 'Danitza Tordoya';
        $vendedor2->profesion = 'Gerente';
        $vendedor2->grado_academico = 'Licenciada';
        $vendedor2->save();
        
        $vendedor3 = new Vendedor;
        $vendedor3->nombre_apellido = 'Camilo Vega';
        $vendedor3->profesion = 'Auxiliar';
        $vendedor3->grado_academico = 'Tecnico';
        $vendedor3->save();
        
        $vendedor4 = new Vendedor;
        $vendedor4->nombre_apellido = 'Nicolay Tordoya';
        $vendedor4->profesion = 'Patron';
        $vendedor4->grado_academico = 'Licenciatura';
        $vendedor4->save();
    }
}
