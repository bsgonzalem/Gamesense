<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * Item ATTRIBUTES
     * $this->attributes['id'] - int - contains the item primary key (id)
     * $this->attributes['quantity'] - int - contains the item quantity
     * $this->attributes['unitPrice'] - double - contains the item unit price
     * $this->attributes['subtotal'] - double - contains the item subtotal
     */

    protected $fillable = ['quantity', 'unitPrice', 'subtotal'];

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function setId(int $id): void
    {
        $this->attributes['id'] = $id;
    }

    public function getQuantity(): int
    {
        return $this->attributes['quantity'];
    }

    public function setQuantity(int $quantity): void
    {
        $this->attributes['quantity'] = $quantity;
    }

    public function getUnitPrice(): float
    {
        return $this->attributes['unitPrice'];
    }

    public function setUnitPrice(float $unitPrice): void
    {
        $this->attributes['unitPrice'] = $unitPrice;
    }

    public function getSubtotal(): float
    {
        return $this->attributes['subtotal'];
    }

    public function setSubtotal(float $subtotal): void
    {
        $this->attributes['subtotal'] = $subtotal;
    }
}