<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scout extends Model
{
    protected $table = 'scouts';

    protected $primaryKey = 'scout_id';

    public function scopeAddress($query)
    {
        $query->leftJoin('addresses', 'addresses.address_id', '=', 'scouts.address_id');
    }

    public function scopePatrol($query)
    {
        $query->leftJoin('patrols', 'patrols.patrol_id', '=', 'scouts.patrol_id');
    }

    public function scopeParents($query)
    {
        $query->join('relationships', 'scouts.scout_id', '=', 'relationships.scout_id')
            ->join('parents', 'parents.parent_id', '=', 'relationships.parent_id');
    }
}
