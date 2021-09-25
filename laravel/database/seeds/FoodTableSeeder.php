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
        $titles = ['豚肉', '餃子', 'エビフライ'];
        $details = [
            'https://1.bp.blogspot.com/-b5NJr3pGOUQ/X1CLEompXGI/AAAAAAABa0s/kG7wKCIsaok3ECvNcIwKZE8T-jk8rTevgCNcBGAsYHQ/s400/niku_manga.png',
            'https://1.bp.blogspot.com/-WxOp8O_dBbc/Vq88pc0hHGI/AAAAAAAA3dA/u0bHOFGUabY/s400/food_gyouza_mise.png',
            'https://1.bp.blogspot.com/-N4wY9yIahmw/XVKf6aSOBZI/AAAAAAABUFs/ENGPYG_Cq7kP5TWvamiXS5Ak_Q5NFsyuwCLcBGAs/s400/food_ebi_fry_set.png'
        ];

        foreach ($titles as $index => $title) {
            DB::table('food')->insert([
                'name' => $title,
                'image' => $details[$index],
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        }
    }
}
