<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';

    protected $primaryKey = 'address_id';

    protected $fillable = ['street', 'number', 'box', 'locality', 'zip_code', 'country_code'];
}
