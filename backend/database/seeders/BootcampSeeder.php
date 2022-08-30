<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use File;
use App\Models\bootcamp;
use Illuminate\Support\Facades\Hash;
class BootcampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            //1.Leer el archivo de datos
            $json=File::get('database/_data/Bootcamps.json');
            //2.convertir los datos en un arreglo
            $arreglo_bootcamps=json_decode($json);
            //3.recorrer el arreglo
            foreach($arreglo_bootcamps as $bootcamp){
                //4.por cada elemento del arreglo crear
                //se utiliza el metodo ::create 
                Bootcamp::create([
                    "name" => $bootcamp->name,
                    "description" => $bootcamp->description,
                    "website" => $bootcamp->website,
                    "phone" => $bootcamp->phone,
                    "user_id" => $bootcamp->user_id,
                    
                ]);
            }
    }
}
