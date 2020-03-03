<?php

namespace Modules\Warehouse\Entities;

use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    protected $fillable = ['name', 'address', 'phone'];
    protected $table = ['management'];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class, 'mana_id');
    }
}
