<?php

use Illuminate\Database\Seeder;
use App\Models\ScTransportCompany;
class ScTransportCompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //运输公司分类
        ScTransportCompany::create([
            'id'    => 'T0000000001',
            'name' => 'EMS',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScTransportCompany::create([
            'id'    => 'T0000000002',
            'name' => '韵达快递',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScTransportCompany::create([
            'id'    => 'T0000000003',
            'name' => '圆通快递',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScTransportCompany::create([
            'id'    => 'T0000000004',
            'name' => '申通快递',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScTransportCompany::create([
            'id'    => 'T0000000005',
            'name' => '顺丰快递',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScTransportCompany::create([
            'id'    => 'T0000000006',
            'name' => '联邦快递',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
    }
}
