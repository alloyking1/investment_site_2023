<?php

namespace App\Actions;

use App\Enum\ContractRoiEnum;
use App\Enum\InvestmentPackageEnum;
use App\Enum\InvestmentPackageAmountEnum;
use App\Models\Investment;
use Illuminate\Support\Facades\Auth;
use Exception;

class InvestAction
{
    public function handle($request)
    {
        if (InvestmentPackageEnum::BRONZE->value === $request['package']) {
            $dueEarning = $this->dueEarning(ContractRoiEnum::BRONZE->value, $request['amount']);
            return $this->validateAndSave($request['amount'], InvestmentPackageAmountEnum::BRONZE_MIN_AMOUNT->value, InvestmentPackageAmountEnum::BRONZE_MAX_AMOUNT->value, $request, $dueEarning);
        }
        if (InvestmentPackageEnum::SILVER->value === $request['package']) {
            $dueEarning = $this->dueEarning(ContractRoiEnum::SILVER->value, $request['amount']);
            return $this->validateAndSave($request['amount'], InvestmentPackageAmountEnum::SILVER_MIN_AMOUNT->value, InvestmentPackageAmountEnum::SILVER_MAX_AMOUNT->value, $request, $dueEarning);
        }
        if (InvestmentPackageEnum::GOLD->value === $request['package']) {
            $dueEarning = $this->dueEarning(ContractRoiEnum::GOLD->value, $request['amount']);
            return $this->validateAndSave($request['amount'], InvestmentPackageAmountEnum::GOLD_MIN_AMOUNT->value, InvestmentPackageAmountEnum::GOLD_MAX_AMOUNT->value, $request, $dueEarning);
        }
        if (InvestmentPackageEnum::DIAMOND->value === $request['package']) {
            $dueEarning = $this->dueEarning(InvestmentPackageEnum::DIAMOND->value, $request['amount']);
            return $this->validateAndSave($request['amount'], InvestmentPackageAmountEnum::DIAMOND_MIN_AMOUNT->value, InvestmentPackageAmountEnum::DIAMOND_MAX_AMOUNT->value, $request, $dueEarning);
        }
    }

    private function validateAndSave($selectedAmount, $packageMinAmount, $packageMaxAmount, $formValue, $dueEarning)
    {
        if ($selectedAmount >= $packageMinAmount && $selectedAmount <= $packageMaxAmount) {
            return Investment::create([
                'user_id' => Auth::user()->id,
                'package' => $formValue['package'],
                'amount' => $formValue['amount'],
                'wallet_address' => $formValue['wallet_address'],
                'payment_coin' => $formValue['payment_coin'],
                'due_earnings' => $dueEarning,
                'contract' => $formValue['contract'],
            ]);
        } else {
            throw new Exception('Investment amount must be between ' . $packageMinAmount . ' to ' . $packageMaxAmount . ' for ' . $formValue['package'] . ' package');
            return 'Investment amount must be between ' . $packageMinAmount . ' to ' . $packageMaxAmount . ' for ' . $formValue['package'] . ' package';
        }
    }

    private function dueEarning($roi, $amount)
    {
        $percent_return = ($roi / 100) * $amount;
        return $percent_return;
    }
}
