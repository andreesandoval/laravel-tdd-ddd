<?php

namespace Tests\Mocks;

use App\Contracts\OrderRepository as ContractsOrderRepository;

class OrderRepository implements ContractsOrderRepository
{
    public function addItem(int $orderId, int $productId, int $quantity): bool
    {
        return false;
    }
}
