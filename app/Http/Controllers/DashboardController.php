<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Enum\InvestmentPackageEnum;
use App\Enum\ContractRoiEnum;
use App\Models\User;
use App\Actions\InvestAction;
use App\Models\RefBonus;

class DashboardController extends Controller
{
    public function index(InvestAction $action)
    {
        $percentEarned = "";
        $investment = Investment::where('user_id', Auth::id())->get();
        $refBonus = $this->refBonus($action);
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
            'refBonus' => $refBonus
        ]);
    }

    private function refBonus($action)
    {
        $refs = User::where('ref', Auth::user()->email)->get();
        foreach ($refs as $ref) {
            if ($ref->investment && $ref->investment->investment_status == 1) {
                $package = $ref->investment->package;

                if ($package === InvestmentPackageEnum::BRONZE->value) {
                    $refBonusAmount = $action->dueEarning(ContractRoiEnum::BRONZE->value, $ref->investment->amount);
                    return $this->save($refBonusAmount);
                }
                if ($package === InvestmentPackageEnum::SILVER->value) {
                    $refBonusAmount = $action->dueEarning(ContractRoiEnum::BRONZE->value, $ref->investment->amount);
                    return $this->save($refBonusAmount);
                }
                if ($package === InvestmentPackageEnum::GOLD->value) {
                    $refBonusAmount = $action->dueEarning(ContractRoiEnum::BRONZE->value, $ref->investment->amount);
                    return $this->save($refBonusAmount);
                }
                if ($package === InvestmentPackageEnum::DIAMOND->value) {
                    $refBonusAmount = $action->dueEarning(ContractRoiEnum::BRONZE->value, $ref->investment->amount);
                    return $this->save($refBonusAmount);
                }
            } else {

                dump(false);
            }
        }
    }

    private function save($amount)
    {
        $ref = RefBonus::where('user_id', Auth::id())->get();
        $id = implode(", ", $ref->pluck('id')->toArray());
        $total = $amount + implode(", ", $ref->pluck('amount')->toArray());
        RefBonus::UpdateOrCreate(
            ['id' => $id],
            [
                'user_id' => Auth::id(),
                'amount' => $total,
            ]
        );

        return $total;
    }
}
