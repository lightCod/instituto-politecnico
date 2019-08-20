<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $x = 1;
        for($i=0; $i<=300; $i++){
            if($x > 10){
                $x = 1;
            }            
            DB::table('students')->insert([
            'name' => $faker->name,
            'level' => $faker->randomElement($array = array ('1','2')),
            'contacto' => $faker->e164PhoneNumber,
            'scholarship' => $faker->numberBetween($min = 0, $max = 1),
            'scholarship_type' => $faker->randomElement($array = array ('1','2','3','4')),
            'obs' => $faker->text,
            'courses_id' => $x            
        ]); 
        $x++;  
    }
        }
    }
