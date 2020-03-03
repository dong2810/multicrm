<?php

namespace Modules\Warehouse\Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Modules\Warehouse\Entities\Management;
use function Stringy\create;

class WarehouseDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Model::unguard();
        $this->call(ManagementTableSeeder::class);
        $this->call(StaffTableSeeder::class);
    }
}
