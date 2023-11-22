<x-dashboard-layout>
    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
          <div class="flex flex-wrap -mx-3">
            @forelse ($investment as $investment)
              <x-dashboard.small-card :title="$investment->package" percentage="+10%">{{"$".$investment->amount }}</x-dashboard.small-card>
              <x-dashboard.small-card :title="$investment->contract" percentage="+10%">{{"$".$investment->amount }}</x-dashboard.small-card>
              <x-dashboard.small-card title="Ref Bonus" percentage="+10%">{{"$".$investment->amount }}</x-dashboard.small-card>
              <x-dashboard.small-card title="Ref Link" percentage="+10%">{{"$".$investment->amount }}</x-dashboard.small-card>
            @empty
                <x-dashboard.large-card>
                  <h3>You do not have an active investment package</h3>
                </x-dashboard.large-card>
            @endforelse
          </div>
        </div>
    </div>




    <div class="flex flex-wrap my-6 -mx-3">
        <!-- card 1 -->

        <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-1/2 md:flex-none lg:w-2/3 lg:flex-none">
          <div class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
            <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
              <div class="flex flex-wrap mt-0 -mx-3">
                <div class="flex-none w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                  <h6>Projects</h6>
                  <p class="mb-0 leading-normal text-sm">
                    <i class="fa fa-check text-cyan-500"></i>
                    <span class="ml-1 font-semibold">30 done</span>
                    this month
                  </p>
                </div>
                <div class="flex-none w-5/12 max-w-full px-3 my-auto text-right lg:w-1/2 lg:flex-none">
                  <div class="relative pr-6 lg:float-right">
                    <a dropdown-trigger class="cursor-pointer" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-slate-400"></i>
                    </a>
                    <p class="hidden transform-dropdown-show"></p>

                    <ul dropdown-menu class="z-100 text-sm transform-dropdown shadow-soft-3xl duration-250 before:duration-350 before:font-awesome before:ease-soft min-w-44 -ml-34 before:text-5.5 pointer-events-none absolute top-0 m-0 mt-2 list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:top-0 before:right-7 before:left-auto before:z-40 before:text-white before:transition-all before:content-['\f0d8']">
                      <li class="relative">
                        <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300" href="javascript:;">Action</a>
                      </li>
                      <li class="relative">
                        <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300" href="javascript:;">Another action</a>
                      </li>
                      <li class="relative">
                        <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300" href="javascript:;">Something else here</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex-auto p-6 px-0 pb-2">
                <div style="height:433px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; box-sizing:content-box; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F; padding: 0px; margin: 0px; width: 99%;">
                    <div>
                        <iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=light&cnt=6&pref_coin_id=1505&graph=yes" width="100%" height="409" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
                        </div>
                        <div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing:content-box; margin: 3px 6px 10px 0px; font-family: Verdana, Tahoma, Arial, sans-serif;"></div>
                    </div>
            </div>
          </div>
        </div>

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
                <div style="height:413px;">
                    <iframe src="https://widget.coinlib.io/widget?type=converter&theme=light" width="100%" height="310" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing:content-box; margin: 3px 6px 10px 0px; font-family: Verdana, Tahoma, Arial, sans-serif;"></div></div>
                </div>
            </div>
          </div>
        </div>
      </div>
</x-dashboard-layout>
