<x-dashboard-layout>
    <div class="">
        <x-dashboard.large-card header="investment (2)">
            <div>
                <p>Wallet Address</p>
                <h3 class="md:text-2xl text-sm font-bold">bc1q05dsqr4p95cr9u3c52ykz80klg9qtlnmsz5en0</h3>
                <img src="" alt="">
            </div>
            <form method="POST" action="{{ route('investment.deposit.save') }}" enctype="multipart/form-data">
                @csrf
                <div>
                    {{-- get fro db --}}
                    <x-input-label for="Package" :value="__('Proof of payment')" />
                    <div class="p-2">
                        <input type="file" name="image" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                    </div>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ms-3">
                        {{ __('Finish') }}
                    </x-primary-button>
                </div>
            </form>
        </x-dashboard.large-card>
    </div>
</x-dashboard-layout>
