<?php

namespace Modules\Warehouse\Entities;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = ['name', 'address', 'phone'];
    protected $table = ['staff'];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class, 'staff_id');
    }
}
