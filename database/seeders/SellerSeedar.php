<?php

namespace Database\Seeders;

use App\Models\Seller;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SellerSeedar extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Seller::factrory(1)->create();
    }
}
