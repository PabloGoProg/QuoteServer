<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Quote;
use Illuminate\Database\Seeder;

class QuotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quote::unguard();
        Quote::create([
            'message'=>'xxx',
            'author'=>'xxx',
            'owner'=>1
        ]);
    }
}
