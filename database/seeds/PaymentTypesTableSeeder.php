<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PaymentTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0; $i<8; $i++){
            DB::table('payment_types')->insert([
                'payment_name' => $faker->shuffle('Propina', 'Exame', 'Uniforme', 'Recorrencia', 'Inscricao', 'Certificado', 'Exame Especial', 'Caderneta'),
                'amount' => $faker->randomNumber(2)
            ]);
        }
            
        }
    }
