<?php

namespace ConfrariaWeb\Contact\Models;

use Illuminate\Database\Eloquent\Model;

class ContactType extends Model
{

    protected $fillable = [
        'name',
        'order',
        'slug'
    ];

}
