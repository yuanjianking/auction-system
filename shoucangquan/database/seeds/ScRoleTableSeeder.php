<?php

use Illuminate\Database\Seeder;
use App\Models\ScRole;
class ScRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //角色分类
        ScRole::create([
            'code'    => 'R0000000001',
            'name' => '游客',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScRole::create([
            'code'    => 'R0000000002',
            'name' => '普通会员',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScRole::create([
            'code'    => 'R0000000003',
            'name' => '中级会员',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScRole::create([
            'code'    => 'R0000000004',
            'name' => '高级会员',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScRole::create([
            'code'    => 'R0000000005',
            'name' => '至尊级会员',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScRole::create([
            'code'    => 'R0000000006',
            'name' => '管会员',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScRole::create([
            'code'    => 'R0000000007',
            'name' => '超级管会员',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
    }
}
