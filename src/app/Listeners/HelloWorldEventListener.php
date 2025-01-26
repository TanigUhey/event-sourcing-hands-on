<?php

namespace App\Listeners;

use App\Events\HelloWorldEvent;

class HelloWorldEventListener
{
    /**
     * 注文作成イベントを処理する
     *
     * @param \App\Events\HelloWorldEvent $event 注文作成イベント
     * @return void
     */
    public function handle(HelloWorldEvent $event): void
    {
        echo 'イベントが発行されました:' . $event->createdAt->format('Y-m-d H:i:s');
    }
}
