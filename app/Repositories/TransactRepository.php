<?php

namespace App\Repositories;

use App\Models\Transact;
use App\Models\Item;

class TrnsactRepository
{
    protected $transact;
    protected $item;

    

    public function __construct(Transact $transact,Item $item)
    {
        $this->transact = $transact;
        $this->item = $item;

    }

    public function addTransact($data)
    {
        $transact = new $this->transact;

        $transact->name = $data['name'];
        $transact->addres = $data['addres'];
        $transact->money = $data['money'];
        $transact->item = $data['item'];

        $transact->save();
        $result='transaction sucsess';

        return response()->json($data, $result['status']);
    }

    
}

