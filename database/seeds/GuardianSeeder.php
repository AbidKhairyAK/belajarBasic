<?php

use App\Model\Guardian;
use Faker\Factory;
use Illuminate\Database\Seeder;

class GuardianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Guardian::truncate();

        $faker = Factory::create('it_IT');

        $this->command->getOutput()->progressStart(200);

        for ($i = 0; $i < 200; $i++) {

            $is_male = rand(0, 1);

            Guardian::create([
                'name'       => $faker->name($is_male ? 'male' : 'female'),
                'nik'        => $faker->taxId,
                'gender'     => $is_male ? 'l' : 'p',
                'phone'      => $faker->e164PhoneNumber,
                'birth_date' => $faker->date('Y-m-d', '2000-01-01'),
                'address'    => $faker->address,
                'is_parent'  => rand(0, 1),
            ]);

            $this->command->getOutput()->progressAdvance();
        }

        $this->command->getOutput()->progressFinish();
    }
}
