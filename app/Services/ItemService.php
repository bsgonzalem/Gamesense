<?php

namespace App\Services;

use App\Models\Item;
use Illuminate\Database\Eloquent\Collection;

class ItemService
{
    public function getAllItems(): Collection
    {
        return Item::all();
    }

    public function createItem(array $itemData): Item
    {
        return Item::create($itemData);
    }

    public function getItemById(int $id): Item
    {
        return Item::findOrFail($id);
    }

    public function updateItem(Item $item, array $itemData): Item
    {
        $item->update($itemData);

        return $item;
    }

    public function deleteItem(Item $item): void
    {
        $item->delete();
    }
}