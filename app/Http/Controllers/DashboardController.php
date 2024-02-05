<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use Illuminate\Support\Facades\Auth;
use App\Enum\InvestmentPackageEnum;
use App\Enum\ContractRoiEnum;
use App\Actions\InvestAction;
use App\Models\RefBonus;

class DashboardController extends Controller
{
    public function index(InvestAction $action)
    {
        $percentEarned = "";
        $investment = Investment::where('user_id', Auth::id())->get();
        $refBonus = RefBonus::where('user_id', Auth::id())->get();
        $package = implode(" ", $investment->pluck('package')->toArray());


        if ($package === InvestmentPackageEnum::BRONZE->value) {
            $percentEarned = ContractRoiEnum::BRONZE->value;
        }
        if ($package === InvestmentPackageEnum::SILVER->value) {
            $percentEarned = ContractRoiEnum::SILVER->value;
        }
        if ($package === InvestmentPackageEnum::GOLD->value) {
            $percentEarned = ContractRoiEnum::GOLD->value;
        }
        if ($package === InvestmentPackageEnum::DIAMOND->value) {
            $percentEarned = ContractRoiEnum::DIAMOND->value;
        }

        return view('dashboard', [
            'investment' => $investment,
            'percentEarned' => $percentEarned,
            'refBonus' =>  $refBonus->pluck('amount')->first()
        ]);
    }
}
