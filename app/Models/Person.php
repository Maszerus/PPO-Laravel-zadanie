<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'people'; // Nazwa istniejącej tabeli w bazie danych

    protected $fillable = [
        'FirstName',
        'LastName',
        'PhoneNumber',
        'E-mail Adress',
        'Street',
        'Postcode',
        'City',
        'Country',
    ];

    public $timestamps = true; // Jeśli tabela nie zawiera kolumn z timestampami, ustaw wartość na false
}
