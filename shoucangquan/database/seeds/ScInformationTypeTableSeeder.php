<?php

use Illuminate\Database\Seeder;
use App\Models\ScInformationType;

class ScInformationTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //材质分类
        ScInformationType::create([
            'type'    => 'M0000000001',
            'name' => '和田玉',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScInformationType::create([
            'type'    => 'M0000000002',
            'name' => '碧玉',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScInformationType::create([
            'type'    => 'M0000000003',
            'name' => '地方玉',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScInformationType::create([
            'type'    => 'M0000000004',
            'name' => '其它',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        //年代分类
        ScInformationType::create([
            'type'    => 'Y0000000001',
            'name' => '高古（文化期商周战汉）',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScInformationType::create([
            'type'    => 'Y0000000002',
            'name' => '中古（隋唐宋辽金元）',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScInformationType::create([
            'type'    => 'Y0000000003',
            'name' => '明清民国',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScInformationType::create([
            'type'    => 'Y0000000004',
            'name' => '当代新制 籽料 原石',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
    }
}
