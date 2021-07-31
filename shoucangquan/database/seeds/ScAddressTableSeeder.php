<?php

use Illuminate\Database\Seeder;
use App\Models\ScAddress;
class ScAddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //地址
        ScAddress::create([
            'id'    => 'A0000000001',
            'name' => '中国',
            'parent_id'    => '',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);

        ScAddress::create([
            'id'    => 'B0000000001',
            'name' => '江苏',
            'parent_id'    => 'A0000000001',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);

        ScAddress::create([
            'id'    => 'C0000000001',
            'name' => '无锡',
            'parent_id'    => 'B0000000001',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);

        ScAddress::create([
            'id'    => 'D0000000001',
            'name' => '滨湖区',
            'parent_id'    => 'C0000000001',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScAddress::create([
            'id'    => 'D0000000003',
            'name' => '惠山区',
            'parent_id'    => 'C0000000001',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);

        ScAddress::create([
            'id'    => 'C0000000002',
            'name' => '苏州',
            'parent_id'    => 'B0000000001',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);

        ScAddress::create([
            'id'    => 'D0000000004',
            'name' => '吴中区',
            'parent_id'    => 'C0000000002',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
    }
}
