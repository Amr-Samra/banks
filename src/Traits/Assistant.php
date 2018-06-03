<?php

namespace Bdwey\Banks\Traits;

use Bdwey\Banks\Model\Banks as Model;

trait Assistant
{
    public function importBanks($users)
    {
        foreach($users as $user) {
            if($user->bank_accounts) {
                $user->banks()->create([
                    'bank_name'         => 'Default',
                    'account_number'    => $user->bank_accounts,
                    'is_main'           => 1,
                    'is_active'         => 1,
                    'notes'             => NULL
                ]);
            }
        }
        return;
    }
}