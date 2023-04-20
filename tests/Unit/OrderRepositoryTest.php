<?php

namespace Tests\Unit;

use App\Contracts\OrderRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OrderRepositoryTest extends TestCase
{

    private OrderRepository $orderRepository;

    protected function setUp(): void
    {
        parent::setUp();
        $this->orderRepository = new \Tests\Mocks\OrderRepository();
    }

    /**
     * A basic feature test example.
     */
    public function test_add_item_to_order(): void
    {
        //$this->assertTrue($this->orderRepository->addItem(1, 1, 1));
        $this->assertFalse($this->orderRepository->addItem(1, 1, 1));
    }
}
