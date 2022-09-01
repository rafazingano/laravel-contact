<?php

namespace ConfrariaWeb\Client\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $fillable = [
        'name',
        'options'
    ];

    public function type()
    {
        return $this->belongsTo('ConfrariaWeb\Client\Models\ClientType', 'type_id');
    }

}
