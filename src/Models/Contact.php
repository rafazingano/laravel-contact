<?php

namespace ConfrariaWeb\Contact\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    protected $fillable = [
        'type_id',
        'content'
    ];

    public function contactable()
    {
        return $this->morphTo();
    }

    public function type()
    {
        return $this->belongsTo('ConfrariaWeb\Contact\ContactType', 'type_id');
    }

}
