<x-dashboard-layout>
    <div class="">
        <x-dashboard.large-card header="investment (2)">
            <div>
                <img src="https://www.imgonline.com.ua/eng/scan-qr-bar-code.php" alt="">
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
