<?php

namespace MeridienClube\Meridien\Historics;

use MeridienClube\Meridien\ContactType;
use ConfrariaWeb\Historic\Contracts\HistoricContract;

class ContactTypeUpdatedHistoricContract implements HistoricContract
{
    protected $type;

    public function __construct(ContactType $type)
    {
        $this->type = $type;
    }

    public function data()
    {
        return [
            'action' => 'updated',
            'content' => 'Tipo de contato ' . $this->type->name . ' foi atualizado com sucesso'
        ];
    }

    public function title()
    {
        return 'Tipo de contato atualizada';
    }

    public function user($collunn = null)
    {
        if($collunn == 'id'){
            return auth()->id();
        }
        return auth()->user();
    }
}
