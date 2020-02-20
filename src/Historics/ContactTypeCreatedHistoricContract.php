<?php

namespace MeridienClube\Meridien\Historics;

use MeridienClube\Meridien\ContactType;
use ConfrariaWeb\Historic\Contracts\HistoricContract;

class ContactTypeCreatedHistoricContract implements HistoricContract
{
    protected $type;

    public function __construct(ContactType $type)
    {
        $this->type = $type;
    }

    public function data()
    {
        return [
            'action' => 'created',
            'content' => 'Tipo de contato foi ' . $this->type->name . ' criado com sucesso'
        ];
    }

    public function title()
    {
        return 'Tipo de contato criada';
    }

    public function user($collunn = null)
    {
        if ($collunn == 'id') {
            return auth()->id();
        }
        return auth()->user();
    }
}
