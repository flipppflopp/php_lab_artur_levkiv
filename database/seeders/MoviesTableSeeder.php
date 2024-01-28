<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            'movie_title' => "movie1",
            'movie_director_name' => "director1",
            'production_year' => "2001",
            'kind' => "horror"
            ]);
        DB::table('movies')->insert([
            'movie_title' => "movie2",
            'movie_director_name' => "director2",
            'production_year' => "2002",
            'kind' => "action"
        ]);
        DB::table('movies')->insert([
            'movie_title' => "movie3",
            'movie_director_name' => "director3",
            'production_year' => "2003",
            'kind' => "drama"
            ]);
    }
}
