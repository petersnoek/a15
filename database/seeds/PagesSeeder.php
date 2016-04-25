<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('nl_NL');
        foreach (range(1,10) as $index) {
            $created = $faker->dateTime();
            $id = DB::table('pages')->insertGetId([
                'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'content' => $faker->paragraph($nbSentences = 12, $variableNbSentences = true),
                'created_at' => $created,
                'updated_at' => $created,
            ]);

            DB::table('menuitems')->insert([
                'menutitle' => $faker->sentence($nbWords = 1, $variableNbWords = true),
                'url' => 'http://a15.dev/pages/' . $id,
            ]);
        }
    }
}
