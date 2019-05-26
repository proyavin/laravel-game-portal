<?php

use Illuminate\Database\Seeder;

class AchivsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('achivs')->insert([
          'title' => 'Награда за 5 опубликованных игр',
          'img' => 'games.count5.png'
      ]);
      DB::table('achivs')->insert([
          'title' => 'Награда за 10 опубликованных игр',
          'img' => 'games.count10.png'
      ]);
      DB::table('achivs')->insert([
          'title' => 'Награда за 15 опубликованных игр',
          'img' => 'games.count15.png'
      ]);
      DB::table('achivs')->insert([
          'title' => 'Награда за 5 опубликованных комментариев',
          'img' => 'comments.count5.png'
      ]);
      DB::table('achivs')->insert([
          'title' => 'Награда за 10 опубликованных комментариев',
          'img' => 'comments.count10.png'
      ]);
      DB::table('achivs')->insert([
          'title' => 'Награда за 15 опубликованных комментариев',
          'img' => 'comments.count15.png'
      ]);
    }
}
