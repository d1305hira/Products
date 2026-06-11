<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Content;

class ContentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Content::create([
            'content' => 'A'
        ]);

        Content::create([
            'content' => 'B'
        ]);

        Content::create([
            'content' => 'C'
        ]);
    }
}
