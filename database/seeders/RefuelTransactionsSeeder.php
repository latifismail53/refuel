<?php

namespace Database\Seeders;

use App\Models\RefuelTransactions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefuelTransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RefuelTransactions::factory(10)->create();
    }
}
