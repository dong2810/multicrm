<?php

namespace Modules\Warehouse\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Warehouse\Entities\Management;

class ManagementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        factory(Management::class, 10)->create();

    }
}
