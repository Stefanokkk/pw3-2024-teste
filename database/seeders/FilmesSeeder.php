<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmesSeeder extends Seeder
{
    /**

Run the database seeds.*/
  public function run(): void{DB::table('filmes')->insert([[
    'nome' => 'Filme de ação',
    'sinopse' => 'Filme muito loco. Tiro, porrada e bomba.',
    'ano' => '2020',
    'categoria' => 'Ação',
    'imagem' => 'capaTeste.jpg',
    'link' => 'https://www.youtube.com/'
]]);}}
