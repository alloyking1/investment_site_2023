<x-dashboard-layout>
    <div class="w-full px-6 py-6 mx-auto">
        <!-- row 1 -->
        <div class="flex flex-wrap -mx-3">
            <x-dashboard.small-card>55</x-dashboard.small-card>
            <x-dashboard.small-card>55</x-dashboard.small-card>
            <x-dashboard.small-card>55</x-dashboard.small-card>
            <x-dashboard.small-card>55</x-dashboard.small-card>
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

        <!-- card 2 -->

        <div class="w-full max-w-full px-3 md:w-1/2 md:flex-none lg:w-1/3 lg:flex-none">
          <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
            <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
              <h6>Orders overview</h6>
              <p class="leading-normal text-sm">
                <i class="fa fa-arrow-up text-lime-500"></i>
                <span class="font-semibold">24%</span> this month
              </p>
            </div>
            <div class="flex-auto p-4">
              <div class="before:border-r-solid relative before:absolute before:top-0 before:left-4 before:h-full before:border-r-2 before:border-r-slate-100 before:content-[''] before:lg:-ml-px">
                <div class="relative mb-4 mt-0 after:clear-both after:table after:content-['']">
                  <span class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                    <i class="relative z-10 text-transparent ni leading-none ni-bell-55 leading-pro bg-gradient-to-tl from-green-600 to-lime-400 bg-clip-text fill-transparent"></i>
                  </span>
                  <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                    <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">$2400, Design changes</h6>
                    <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">22 DEC 7:20 PM</p>
                  </div>
                </div>
                <div class="relative mb-4 after:clear-both after:table after:content-['']">
                  <span class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                    <i class="relative z-10 text-transparent ni leading-none ni-html5 leading-pro bg-gradient-to-tl from-red-600 to-rose-400 bg-clip-text fill-transparent"></i>
                  </span>
                  <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                    <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">New order #1832412</h6>
                    <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">21 DEC 11 PM</p>
                  </div>
                </div>
                <div class="relative mb-4 after:clear-both after:table after:content-['']">
                  <span class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                    <i class="relative z-10 text-transparent ni leading-none ni-cart leading-pro bg-gradient-to-tl from-blue-600 to-cyan-400 bg-clip-text fill-transparent"></i>
                  </span>
                  <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                    <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">Server payments for April</h6>
                    <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">21 DEC 9:34 PM</p>
                  </div>
                </div>
                <div class="relative mb-4 after:clear-both after:table after:content-['']">
                  <span class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                    <i class="relative z-10 text-transparent ni leading-none ni-credit-card leading-pro bg-gradient-to-tl from-red-500 to-yellow-400 bg-clip-text fill-transparent"></i>
                  </span>
                  <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                    <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">New card added for order #4395133</h6>
                    <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">20 DEC 2:20 AM</p>
                  </div>
                </div>
                <div class="relative mb-4 after:clear-both after:table after:content-['']">
                  <span class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                    <i class="relative z-10 text-transparent ni leading-none ni-key-25 leading-pro bg-gradient-to-tl from-purple-700 to-pink-500 bg-clip-text fill-transparent"></i>
                  </span>
                  <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                    <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">Unlock packages for development</h6>
                    <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">18 DEC 4:54 AM</p>
                  </div>
                </div>
                <div class="relative mb-0 after:clear-both after:table after:content-['']">
                  <span class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                    <i class="relative z-10 text-transparent ni leading-none ni-money-coins leading-pro bg-gradient-to-tl from-gray-900 to-slate-800 bg-clip-text fill-transparent"></i>
                  </span>
                  <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                    <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">New order #9583120</h6>
                    <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">17 DEC</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</x-dashboard-layout>
