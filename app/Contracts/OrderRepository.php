<?php

namespace App\Contracts;

interface OrderRepository
{
    public function addItem(int $orderId, int $productId, int $quantity): bool;
}
