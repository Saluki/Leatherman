<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relationship extends Model
{
    protected $table = 'relationships';

    protected $primaryKey = 'relationship_id';

    protected $fillable = ['scout_id', 'parent_id', 'type'];

    public $timestamps = false;
}
