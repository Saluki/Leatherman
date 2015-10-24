<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $table = 'parents';

    protected $primaryKey = 'parent_id';

    protected $fillable = ['firstname', 'lastname', 'email', 'phone', 'mobile', 'address_id'];
}
