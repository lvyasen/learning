<?php
namespace App\Admin\Services;

interface ShouldBroadcast{
    public function notifyOrderStatus();
}
