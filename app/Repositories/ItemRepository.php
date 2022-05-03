<?php

namespace App\Repositories;

use App\Models\Item;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ItemRepository
{
    protected $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    public function getAll() : Object
    {
        $item = $this->item->get();
        return $item;
    }

    
    public function save ($data)
    {
        $item = new $this->item;

        $item->name = $data['name'];
        $item->desc = $data['desc'];
        $item->type = $data['type'];
        $item->stock = $data['stock'];
        $item->price = $data['price'];



        $item->save();

        return $item->fresh();
        
    }

    public function getId($id)
    {
        return $this->item
        ->where('_id', $id)
        ->value('stock');

        return $this->item;
    }
}

