<x-dashboard-layout>
    <div class="w-full px-6 py-6 mx-auto">
        
        @if (Session::has('error'))
            <x-dashboard.flash-success>{{Session::get('error')}}</x-dashboard.flash-success>
        @endif
        @if (Session::has('success'))
            <x-dashboard.flash-error>{{Session::get('success')}}</x-dashboard.flash-error>
        @endif
        <div class="flex flex-wrap -mx-3">
          @forelse ($investment as $investment)
            <x-dashboard.small-card :title="$investment->package" percentage="{{ $percentEarned.'%' }}">{{"$".$investment->amount }}</x-dashboard.small-card>
            <x-dashboard.small-card :title="$investment->contract" percentage="">
              <span class="flex gap-1">
                {{"$".$investment->due_earnings }}
                <form action="{{ route('withdrawer.save') }}" method="Post">
                  @csrf
                  <button type="submit" class="rounded px-2 bg-blue-900 text-gray-200 font-bold text-xs">Withdraw</button>
                </form> 
              </span>
            </x-dashboard.small-card>
            <x-dashboard.small-card title="Ref Bonus" percentage=""> 
                <span class="flex gap-1">
                {{"$".$refBonus }}
                <form action="{{ route('withdrawer.save') }}" method="Post">
                  @csrf
                  <button type="submit" class="rounded px-2 bg-blue-900 text-gray-200 font-bold text-xs">Withdraw</button>
                </form> 
              </span>
            </x-dashboard.small-card>
            <x-dashboard.small-card-ref-bonus title="Ref Link" percentage=""><span class="text-[6px]">
                {{url('/register?ref='.Auth::user()->email)}}
            </span>
            </x-dashboard.small-card-ref-bonus>
          @empty
              <x-dashboard.large-card>
                <h3>You do not have an active investment package</h3>
              </x-dashboard.large-card>
          @endforelse
        </div>
    </div>


    <div class="flex flex-wrap my-6 -mx-3">
        <!-- card 1 -->

        <x-dashboard.large-card header="Investment (1)">
            
            <form method="POST" action="{{ route('investment.save') }}">
                @csrf
        
                <div>
                    {{-- get fro db --}}
                    <x-input-label for="Package" :value="__('Package')" />
                    <select name="package"
                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
                        >
                        @foreach(App\Enum\InvestmentPackageEnum::cases() as $package)
                        <option value="{{ $package }}">{{ $package }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('package')" class="mt-2" />
                </div>
        
                <div class="mt-4">
                    <x-input-label for="amount" :value="__('Amount')" />
        
                    <x-text-input id="amount" class="block mt-1 w-full"
                                    type="number"
                                    name="amount"
                                    required autocomplete="current-password" />
        
                    <x-input-error :messages="$errors->get('amount')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="wallet_address" :value="__('Wallet Address')" />
        
                    <x-text-input id="wallet_address" class="block mt-1 w-full"
                                    type="text"
                                    name="wallet_address"
                                    required/>
        
                    <x-input-error :messages="$errors->get('wallet_address')" class="mt-2" />
                </div>

                <div class="mt-4">
                    {{-- get fro db --}}
                    <x-input-label for="payment_coin" :value="__('Investment coin type')" />
                    <select name="payment_coin" id="" 
                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
                        >
                        <option value="bitcon">Bitcoin</option>
                        <option value="etherium">Etherium</option>
                    </select>
                    <x-input-error :messages="$errors->get('payment_coin')" class="mt-2" />
                </div>

                <div class="mt-4">
                    {{-- get fro db --}}
                    <x-input-label for="contract" :value="__('Contract type')" />
                    <select name="contract" id="" 
                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
                        >
                        @foreach (App\Enum\ContractDurationEnum::cases() as $contract)
                            <option value="{{ $contract }}">{{ $contract }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('payment_coin')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ms-3">
                        {{ __('Proceed') }}
                    </x-primary-button>
                </div>
            </form>
        </x-dashboard.large-card>

        <div class="btcwdgt-chart" bw-cash="true" bw-noshadow="true"></div>
            <div style="height:560px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; box-sizing:content-box; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;padding:1px;padding: 0px; margin: 0px;">
            <div style="height:540px;padding:0px;margin:0px;">
                <iframe src="https://widget.coinlib.io/widget?type=chart&theme=light&coin_id=859&pref_coin_id=1505" width="100%" height="536" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;box-sizing:content-box;"></iframe></div>
                <div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing:content-box; margin: 3px 6px 10px 0px; font-family: Verdana, Tahoma, Arial, sans-serif;"></div>
            </div>	
        </div>
</x-dashboard-layout>
