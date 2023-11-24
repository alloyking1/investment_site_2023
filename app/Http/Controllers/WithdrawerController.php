<?php

namespace App\Http\Controllers;

use App\Actions\WithdrawAction;

class WithdrawerController extends Controller
{
    public function __invoke(WithdrawAction $action)
    {
        try {
            return $action->handle();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
