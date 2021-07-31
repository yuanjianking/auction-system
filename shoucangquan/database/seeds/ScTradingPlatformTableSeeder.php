<?php

use Illuminate\Database\Seeder;
use App\Models\ScTradingPlatform;
class ScTradingPlatformTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //银行分类
        ScTradingPlatform::create([
            'id'    => 'T0000000001',
            'name' => '支付宝',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScTradingPlatform::create([
            'id'    => 'T0000000002',
            'name' => '微信',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScTradingPlatform::create([
            'id'    => 'T0000000003',
            'name' => '中国银行',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScTradingPlatform::create([
            'id'    => 'T0000000004',
            'name' => '建设银行',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScTradingPlatform::create([
            'id'    => 'T0000000005',
            'name' => '工商银行',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScTradingPlatform::create([
            'id'    => 'T0000000006',
            'name' => '交通银行',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScTradingPlatform::create([
            'id'    => 'T0000000007',
            'name' => '华夏银行',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScTradingPlatform::create([
            'id'    => 'T0000000008',
            'name' => '招商银行',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScTradingPlatform::create([
            'id'    => 'T0000000009',
            'name' => '光大银行',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScTradingPlatform::create([
            'id'    => 'T0000000010',
            'name' => '邮政储蓄银行',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
    }
}
