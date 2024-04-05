<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\fees;

class FeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        fees::create(["menuName" => "サンプルA","menuFee" => 3000]);
        fees::create(["menuName" => "サンプルB","menuFee" => 6000]);
    }
}
