<?php

use Illuminate\Database\Seeder;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //import library faker
		
		$Limit = 10;
		
		for ($i = 0; $i < $Limit; $i++){
			DB::table('user')->insert([
				'nama'=> $faker->name,
				'harga'=> $faker->harga,
				'stock'=> $faker->stock, 
				'expired_date'=> $faker->expiredDate, 
				'production_date'=> $faker->productionDate, 
			]);
		}
    }
}
