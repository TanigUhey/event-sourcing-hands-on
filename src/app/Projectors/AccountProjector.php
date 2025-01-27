<?php

namespace App\Projectors;

use App\Events\Account\AccountCreated;
use App\Events\Account\MoneyAdded;
use App\Events\Account\MoneySubtracted;
use App\Models\Account;
use App\Models\PremiumAccount;
use Spatie\EventSourcing\EventHandlers\Projectors\Projector;

class AccountProjector extends Projector
{
    /**
     * 口座作成イベントを反映する
     *
     * @param \App\Events\Account\AccountCreated $event 口座作成イベント
     * @return void
     */
    public function onAccountCreated(AccountCreated $event): void
    {
        // // アカウントを新規作成
        // $account = new Account(['uuid' => $event->uuid, 'user_name' => $event->userName]);

        // $account->save();
    }

    /**
     * 入金イベントを反映する
     *
     * @param \App\Events\Account\MoneyAdded $event 入金イベント
     * @return void
     */
    public function onMoneyAdded(MoneyAdded $event): void
    {
        // // accountsテーブルを検索
        // $account = Account::uuid($event->uuid);

        // if ($account === null) {
        //     return;
        // }

        // // 残高を更新
        // $account->balance += $event->amount;
        // $account->save();

        // if ($account->balance > 10000) {
        //     // premium_accountsテーブルを検索
        //     $premiumAccount = PremiumAccount::userName($account->user_name);

        //     if ($premiumAccount === null) {
        //         // プレミアム登録されていなければ追加
        //         (new PremiumAccount(['user_name' => $account->user_name]))->save();
        //     }
        // }
    }

    /**
     * 出金イベントを反映する
     *
     * @param \App\Events\Account\MoneySubtracted $event 出金イベント
     * @return void
     */
    public function onMoneySubtracted(MoneySubtracted $event): void
    {
        // TODO: accountsテーブルを検索

        // TODO: 残高を更新

        // TODO: premium_accountsテーブルを検索

        // TODO: プレミアム登録されていれば削除
        // $premiumAccount->delete();
    }
}
