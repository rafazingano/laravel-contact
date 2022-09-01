<?php

namespace ConfrariaWeb\Client\Models;

use Illuminate\Database\Eloquent\Model;

class ClientType extends Model
{

    protected $fillable = [
        'name',
        'options'
    ];

    public function client()
    {
        return $this->belongsTo('ConfrariaWeb\Client\Models\ClientType', 'type_id');
    }

}
