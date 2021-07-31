<?php

use Illuminate\Database\Seeder;
use App\Models\ScRoleAuthorization;
class ScRoleAuthorizationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //权限分类
        ScRoleAuthorization::create([
            'code'    => 'R0000000001',
            'name' => '禁止访问',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScRoleAuthorization::create([
            'code'    => 'R0000000002',
            'name' => '只读',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
        ScRoleAuthorization::create([
            'code'    => 'R0000000003',
            'name' => '读写',
            'creator_id' => 'admin',
            'updater_id' => 'admin',
        ]);
    }
}
