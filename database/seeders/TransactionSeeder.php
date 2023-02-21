<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Kodego SP404',
            'email' => 'sp404@gmail.com'
        ]);
        
        DB::table('transactions')->insert([
            //Admin
            [
            'user_id' => $user->id,
                'description' => 'Withdrawal With Paypal',
            'tnx' => 'TRXCVXYOMJ5S',
            'invest_amount' => '1000',
            'method' => 'Deposit',
            'status' => 'Pending',

            ],
            //User
            [
                'description' => 'Withdrawal With Gcash',
                'tnx' => 'QWECVXYOMJ5S',
                'invest_amount' => '2000',
                'method' => 'Withdraw',
                'status' => 'Success',
            ]
        ]);
    }
}
