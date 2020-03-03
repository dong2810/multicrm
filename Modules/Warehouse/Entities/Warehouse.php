<?php

namespace Modules\Warehouse\Entities;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $fillable = ['name','address','city','product'];
    protected $table    = ['warehouse'];


    public function management()
    {
        return $this->hasOne(Management::class,'mana_id');
    }

    public function staff()
    {
        return $this->hasOne(Staff::class,'staff_id');
    }
}
