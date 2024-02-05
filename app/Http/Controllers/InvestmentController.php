<?php

namespace App\Http\Controllers;

use App\Actions\InvestAction;
use App\Actions\RefBonusAction;
use App\Http\Requests\InvestmentRequest;
use App\Models\Investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class InvestmentController extends Controller
{

    public function index()
    {
        return view('investment.create');
    }

    public function save(InvestmentRequest $request, InvestAction $investmentAction)
    {
        try {
            $investmentAction->handle($request->all());
            return redirect()->route('investment.deposit');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function deposit()
    {
        return view('investment.deposit');
    }

    public function depositSave(Request $request, InvestAction $action, RefBonusAction $refAction)
    {
        $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $filename = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $filename);
        $investment = Investment::where('user_id', Auth::id())->update(['payment_img' => $filename]);

        /**
         * assign ref bonus
         * This should be changed to where admin approves investment later
         */
        $investmentInfo = Investment::where('user_id', Auth::id())->get();
        $refAction->handle($action, $investmentInfo->pluck('package')->first(), $investmentInfo->pluck('amount')->first());

        return redirect('dashboard')->with('success', 'Investement created successfully');
    }
}
