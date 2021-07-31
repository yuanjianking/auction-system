<?php

use Illuminate\Database\Seeder;
use App\Models\ScProductType;
class ScProductTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //类别分类
        ScProductType::create([
            'type'    => 'I0000000001',
            'name' => '书籍',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScProductType::create([
            'type'    => 'I0000000002',
            'name' => '文献',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScProductType::create([
            'type'    => 'I0000000003',
            'name' => '资料',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScProductType::create([
            'type'    => 'I0000000004',
            'name' => '图片',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScProductType::create([
            'type'    => 'I0000000005',
            'name' => '视频',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        //年代分类
        ScProductType::create([
            'type'    => 'Y0000000001',
            'name' => '高古（文化期商周战汉）',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScProductType::create([
            'type'    => 'Y0000000002',
            'name' => '中古（隋唐宋辽金元）',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScProductType::create([
            'type'    => 'Y0000000003',
            'name' => '明清民国',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScProductType::create([
            'type'    => 'Y0000000004',
            'name' => '当代新制 籽料 原石',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
    }
}
