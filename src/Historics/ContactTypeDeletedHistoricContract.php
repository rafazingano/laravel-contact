<?php

namespace MeridienClube\Meridien\Historics;

use MeridienClube\Meridien\ContactType;
use ConfrariaWeb\Historic\Contracts\HistoricContract;

class ContactTypeDeletedHistoricContract implements HistoricContract
{
    protected $type;

    public function __construct(ContactType $type)
    {
        $this->type = $type;
    }

    public function data()
    {
        return [
            'action' => 'deleted',
            'content' => 'Tipo de contato ' . $this->type->name . ' foi deletada com sucesso'
        ];
    }

    public function title()
    {
        return 'Tipo de contat deletado';
    }

    public function user($collunn = null)
    {
        if($collunn == 'id'){
            return auth()->id();
        }
        return auth()->user();
    }
}
