<?php

namespace App\Actions;

use App\Enum\InvestmentPackageEnum;
use App\Enum\ContractRoiEnum;
use App\Models\Investment;
use App\Models\RefBonus;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RefBonusAction
{

    public function handle($action, $package, $investmentAmount)
    {
        $refs = User::where('email', auth()->user()->ref)->get();

        if ($package === InvestmentPackageEnum::BRONZE->value) {
            $refBonusAmount = $action->dueEarning(ContractRoiEnum::BRONZE->value, $investmentAmount);
            return $this->save($refBonusAmount, $refs->pluck('id')->first());
        }
        if ($package === InvestmentPackageEnum::SILVER->value) {
            $refBonusAmount = $action->dueEarning(ContractRoiEnum::BRONZE->value, $investmentAmount);
            return $this->save($refBonusAmount, $refs->pluck('id')->first());
        }
        if ($package === InvestmentPackageEnum::GOLD->value) {
            $refBonusAmount = $action->dueEarning(ContractRoiEnum::BRONZE->value, $investmentAmount);
            return $this->save($refBonusAmount, $refs->pluck('id')->first());
        }
        if ($package === InvestmentPackageEnum::DIAMOND->value) {
            $refBonusAmount = $action->dueEarning(ContractRoiEnum::BRONZE->value, $investmentAmount);
            return $this->save($refBonusAmount, $refs->pluck('id')->first());
        }
    }

    public function save($amount, $refId)
    {
        $ref = RefBonus::where('user_id', $refId)->get(); //change
        $id = $ref->pluck('id')->first();
        $total = $amount + $ref->pluck('amount')->first();
        RefBonus::UpdateOrCreate(
            ['id' => $id],
            [
                'user_id' => $refId,
                'amount' => $total,
            ]
        );

        return $total;
    }
}
