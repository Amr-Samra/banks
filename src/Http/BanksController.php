<?php

namespace App\Http\Controllers;

use App\Http\Controllers\FrontendBaseController;
use Illuminate\Http\Request;
use App\Models\Users;
use Bdwey\Banks\Traits\Assistant;
use Bdwey\Banks\Model\Banks;

class BanksController extends FrontendBaseController
{
    use Assistant;

    public function importing()
    {
        if(Banks::count() == 0) {
            $users = Users::get();
            $this->importBanks($users);
            dd('Completed');
        }
        dd('Failed');
    }
}