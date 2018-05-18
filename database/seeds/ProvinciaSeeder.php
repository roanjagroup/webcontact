<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provincias')->insert([
			['id' => '1', 'codigo' => '2', 'provincia' => 'Albacete', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '2', 'codigo' => '3', 'provincia' => 'Alicante/Alacant', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '3', 'codigo' => '4', 'provincia' => 'Almería', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '4', 'codigo' => '1', 'provincia' => 'Araba/Álava', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '5', 'codigo' => '33', 'provincia' => 'Asturias', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '6', 'codigo' => '5', 'provincia' => 'Ávila', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '7', 'codigo' => '6', 'provincia' => 'Badajoz', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '8', 'codigo' => '7', 'provincia' => 'Balears, Illes', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '9', 'codigo' => '8', 'provincia' => 'Barcelona', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '10', 'codigo' => '48', 'provincia' => 'Bizkaia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '11', 'codigo' => '9', 'provincia' => 'Burgos', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '12', 'codigo' => '10', 'provincia' => 'Cáceres', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '13', 'codigo' => '11', 'provincia' => 'Cádiz', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '14', 'codigo' => '39', 'provincia' => 'Cantabria', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '15', 'codigo' => '12', 'provincia' => 'Castellón/Castelló', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '16', 'codigo' => '13', 'provincia' => 'Ciudad Real', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '17', 'codigo' => '14', 'provincia' => 'Córdoba', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '18', 'codigo' => '15', 'provincia' => 'Coruña, A', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '19', 'codigo' => '16', 'provincia' => 'Cuenca', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '20', 'codigo' => '20', 'provincia' => 'Gipuzkoa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '21', 'codigo' => '17', 'provincia' => 'Girona', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '22', 'codigo' => '18', 'provincia' => 'Granada', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '23', 'codigo' => '19', 'provincia' => 'Guadalajara', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '24', 'codigo' => '21', 'provincia' => 'Huelva', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '25', 'codigo' => '22', 'provincia' => 'Huesca', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '26', 'codigo' => '23', 'provincia' => 'Jaén', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '27', 'codigo' => '24', 'provincia' => 'León', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '28', 'codigo' => '25', 'provincia' => 'Lleida', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '29', 'codigo' => '27', 'provincia' => 'Lugo', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '30', 'codigo' => '28', 'provincia' => 'Madrid', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '31', 'codigo' => '29', 'provincia' => 'Málaga', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '32', 'codigo' => '30', 'provincia' => 'Murcia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '33', 'codigo' => '31', 'provincia' => 'Navarra', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '34', 'codigo' => '32', 'provincia' => 'Ourense', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '35', 'codigo' => '34', 'provincia' => 'Palencia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '36', 'codigo' => '35', 'provincia' => 'Palmas, Las', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '37', 'codigo' => '36', 'provincia' => 'Pontevedra', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '38', 'codigo' => '26', 'provincia' => 'Rioja, La', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '39', 'codigo' => '37', 'provincia' => 'Salamanca', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '40', 'codigo' => '38', 'provincia' => 'Santa Cruz de Tenerife', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '41', 'codigo' => '40', 'provincia' => 'Segovia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '42', 'codigo' => '41', 'provincia' => 'Sevilla', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '43', 'codigo' => '42', 'provincia' => 'Soria', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '44', 'codigo' => '43', 'provincia' => 'Tarragona', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '45', 'codigo' => '44', 'provincia' => 'Teruel', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '46', 'codigo' => '45', 'provincia' => 'Toledo', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '47', 'codigo' => '46', 'provincia' => 'Valencia/València', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '48', 'codigo' => '47', 'provincia' => 'Valladolid', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '49', 'codigo' => '49', 'provincia' => 'Zamora', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '50', 'codigo' => '50', 'provincia' => 'Zaragoza', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '51', 'codigo' => '51', 'provincia' => 'Ceuta', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => '52', 'codigo' => '52', 'provincia' => 'Melilla', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		
        ]);
    }

}
