<?php

use Illuminate\Database\Seeder;
use App\Models\ScControlType;
class ScControlTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //控件类型
        ScControlType::create([
            'type'    => 'C0000000001',
            'name' => '按钮',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScControlType::create([
            'type'    => 'C0000000002',
            'name' => '输入框',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScControlType::create([
            'type'    => 'C0000000003',
            'name' => '显示条',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScControlType::create([
            'type'    => 'C0000000004',
            'name' => '下拉列表',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScControlType::create([
            'type'    => 'C0000000005',
            'name' => '一览表',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScControlType::create([
            'type'    => 'C0000000006',
            'name' => '图片',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScControlType::create([
            'type'    => 'C0000000007',
            'name' => '视频',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
    }
}
