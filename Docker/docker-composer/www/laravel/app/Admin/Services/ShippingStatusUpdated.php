<?php
namespace App\Admin\Services;
use Illuminate\Broadcasting\PrivateChannel;

class ShippingStatusUpdated implements ShouldBroadcast{
    public $order;
    public function notifyOrderStatus()
    {
        // TODO: Implement notifyOrderStatus() method.
    }

    public function broadcastOn()
    {
        return new PrivateChannel('order.',$this->order->id);
    }
}
