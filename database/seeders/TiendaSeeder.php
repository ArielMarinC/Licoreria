<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tienda;

class TiendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tienda1 = new Tienda();
        $tienda1->sucursal = 'América';
        $tienda1->zona = 'Oeste';
        $tienda1->horas_venta = '120 Horas';
        $tienda1->vendedor_id = 1;
        $tienda1->save();
        
        $tienda2 = new Tienda();
        $tienda2->sucursal = '6 de agosto';
        $tienda2->zona = 'Zud';
        $tienda2->horas_venta = '120 Horas';
        $tienda2->vendedor_id = 2;
        $tienda2->save();
        
    //    $tienda3 = new Tienda();
    //    $tienda3->sucursal = 'Blanco Galindo';
    //    $tienda3->zona = 'Oeste';
    //    $tienda3->horas_venta = '120 Horas';
    //    $tienda3->vendedor_id = 3;
    //    $tienda3->save();


     //   $tienda1->clientes()->attach(1);
      //  $tienda1->clientes()->attach(2);
      //  $tienda1->clientes()->attach(3);
        
      //  $tienda2->clientes()->attach(1);
      //  $tienda2->clientess()->attach(3);
    }
}
