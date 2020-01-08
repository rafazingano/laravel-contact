<?php

namespace ConfrariaWeb\Contact\Traits;

trait ContactTrait
{
    public function contacts()
    {
        return $this->morphMany('ConfrariaWeb\Contact\Models\Contact', 'contactable');
    }

}
