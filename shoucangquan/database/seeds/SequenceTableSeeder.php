<?php

use Illuminate\Database\Seeder;
use App\Models\Sequence;
class SequenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Sequence::create([
            'name' => 's_sc_order_item'
        ]);
        Sequence::create([
            'name' => 's_sc_news'
        ]);
        Sequence::create([
            'name' => 's_sc_users'
        ]);
        Sequence::create([
            'name' => 's_sc_salesroom'
        ]);
        Sequence::create([
            'name' => 's_sc_products'
        ]);
        Sequence::create([
            'name' => 's_sc_trading_information'
        ]);
    }
}
