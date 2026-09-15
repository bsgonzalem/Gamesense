<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    /**
     * ITEM ATTRIBUTES
     *
     * $this->attributes['id'] - int - contains the item primary key (id)
     * $this->attributes['quantity'] - int - contains the item quantity
     * $this->attributes['unitPrice'] - double - contains the item unit price
     * $this->attributes['subtotal'] - double - contains the item subtotal
     * $this->attributes['order_id'] - int - contains the order foreign key
     * $this->attributes['product_id'] - int - contains the product foreign key
     */

    protected $fillable = [
        'quantity',
        'unitPrice',
        'subtotal',
        'order_id',
        'product_id',
    ];

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

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function getOrder(): Order
    {
        return $this->order;
    }

    public function setOrder(Order $order): void
    {
        $this->order()->associate($order);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function getProduct(): Product
    {
        return $this->product;
    }

    public function setProduct(Product $product): void
    {
        $this->product()->associate($product);
    }

    public function calculateSubtotal(): float
    {
        return $this->getQuantity() * $this->getUnitPrice();
    }
}