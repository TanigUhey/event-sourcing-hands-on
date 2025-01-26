<?php

namespace App\Http\Controllers;

use App\Aggregates\Account;
use App\Events\Account\AccountCreated;
use App\Events\Account\MoneyAdded;
use App\Events\Account\MoneySubtracted;
use App\Events\HelloWorldEvent;
use Ramsey\Uuid\Uuid;

class TestController extends Controller
{
    public function index()
    {
        // $uuid = (string) Uuid::uuid7();

        return view('index');
    }
}
