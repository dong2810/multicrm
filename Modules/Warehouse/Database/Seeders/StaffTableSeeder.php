<?php

namespace Modules\Warehouse\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Warehouse\Entities\Staff;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        factory(Staff::class, 10)->create();
        // $this->call("OthersTableSeeder");
    }
}
