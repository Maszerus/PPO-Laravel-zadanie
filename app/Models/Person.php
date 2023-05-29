<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'people';

    protected $fillable = [
        'FirstName',
        'LastName',
        'PhoneNumber',
        'e-mail',
        'Street',
        'Postcode',
        'City',
        'Country',
    ];

    public $timestamps = true;
}
