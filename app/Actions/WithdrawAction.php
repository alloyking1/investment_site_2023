<?php

namespace App\Actions;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Withdrawer;

class WithdrawAction
{
    public function handle()
    {
        $id = Auth::id();
        $userInvestment = User::find($id);
        if ($userInvestment->investment == null) {
            return redirect()->back()->with('error', 'You do not have any investment plan');
        } else {
            $invest_date = $userInvestment->investment->created_at;
            $today = date('y-m-d'); //todays date
            $withdraw_date = date('y-m-d', strtotime($invest_date . " " . ' + 7 days')); //withdraq date

            if ($today >= $withdraw_date) { //if today - investment date >= 10 withdraw 

                //check if user has requested already
                $details = Withdrawer::where("user_id", $id)->first();

                if ($details >= 1) {
                    return redirect('dashboard')->with('error', 'You have a pending request being processed. Contact support for more details');
                } else {

                    Withdrawer::create([
                        'user_id' => $id,
                        'bundle' => $userInvestment->investment->package,
                        'amount' => $userInvestment->investment->amount,
                        'wallet_id' => $userInvestment->investment->wallet_address,
                        'due_earnings' => $userInvestment->investment->due_earnings,
                    ]);
                    return redirect('dashboard')->with('success', 'Withdrawer Request Receive, payments will be done soon');
                }
            } else {
                return redirect('dashboard')->with('error', 'investment must mature for a week');
            }
        }
    }
}
