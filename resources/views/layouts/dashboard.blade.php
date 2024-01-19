<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <title>Soft UI Dashboard Tailwind</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <link href="{{ asset('/assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5')}}" rel="stylesheet" />

     <!-- Scripts -->
     @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    <div x-data="{ openSideBar: false }"  class="flex justify-between">
      <div x-show="openSideBar" class="mx:block">
        <x-dashboard.aside/>
      </div>
      <ul x-on:click="openSideBar = ! openSideBar" class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
          
        <li class="flex items-center pl-4 xl:hidden p-4 mt-4">
          <a href="javascript:;" class="block p-0 transition-all ease-nav-brand text-sm text-slate-500" sidenav-trigger>
            <div class="w-4.5 overflow-hidden">
              <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
              <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
              <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
            </div>
          </a>
        </li>
      </ul>
    </div>

    <div class="hidden md:block">
      <x-dashboard.aside/>
    </div>

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
      <x-dashboard.nav/>

      <div class="p-10">
          {{ $slot }}
      </div>
    </main>

  </body>
  <!-- plugin for charts  -->
  <script src="{{ asset('/assets/js/plugins/chartjs.min.js') }}" async></script>
  <!-- plugin for scrollbar  -->
  <script src="{{ asset('/assets/js/plugins/perfect-scrollbar.min.js') }}" async></script>
  <!-- github button -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- main script file  -->
  <script src="{{ asset('/assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5') }}" async></script>
</html>
