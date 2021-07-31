<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ScInformationTypeTableSeeder::class);
        $this->call(ScInformationTableSeeder::class);
        $this->call(SequenceTableSeeder::class);
        $this->call(ScProductTypeTableSeeder::class);
        $this->call(ScControlTypeTableSeeder::class);
        $this->call(ScUserAuthorizationTableSeeder::class);
        $this->call(ScRoleAuthorizationTableSeeder::class);
        $this->call(ScRoleTableSeeder::class);
        $this->call(ScTradingPlatformTableSeeder::class);
        $this->call(ScTransportCompanyTableSeeder::class);
        $this->call(ScAddressTableSeeder::class);

    }
}
