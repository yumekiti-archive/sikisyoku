<?php

use Illuminate\Database\Seeder;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $titles = ['赤食品', '緑食品', '黄食品'];
        $details = [
            'images/manga_niku.png',
            'images/vegetable.png',
            'images/kome_hakumai.png'
        ];

        foreach ($titles as $index => $title) {
            DB::table('food')->insert([
                'name' => $title,
                'image' => $details[$index],
                'color' => ($index + 1),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        }
    }
}
