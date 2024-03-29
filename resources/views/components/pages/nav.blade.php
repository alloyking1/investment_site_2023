 <!-- ====== Navbar Section Start -->
 <div class="ud-header absolute top-0 left-0 z-40 flex w-full items-center bg-transparent">
    <div class="container">
      <div class="relative -mx-4 flex items-center justify-between">

        <div class="w-60 max-w-full px-4">
          <ul class="blcok lg:flex 2xl:ml-20">
            <li class="group relative">
              <a href="{{ route('home') }}"
                class="ud-menu-scroll mx-8 flex py-8 font-bold text-2xl text-dark dark:text-white group-hover:text-primary lg:mr-0 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70">
                <span class="">{{ env('APP_LOGO') }}</span>
              </a>
            </li>
          </ul>
        </div>

        <div class="flex w-full items-center justify-between px-4">
          <div>
            <button id="navbarToggler"
              class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
              <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
              <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
              <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
            </button>

            <nav id="navbarCollapse"
              class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white dark:bg-dark-2 py-5 shadow-lg lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent dark:lg:bg-transparent lg:py-0 lg:px-4 lg:shadow-none xl:px-6">
              <ul class="blcok lg:flex 2xl:ml-20">
                <li class="group relative">
                  <a href="{{ route('home') }}"
                    class="ud-menu-scroll mx-8 flex py-2 font-medium text-base text-dark dark:text-white group-hover:text-primary lg:mr-0 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70">
                    Home
                  </a>
                </li>
                <li class="group relative">
                  <a href="{{ route('about') }}"
                    class="ud-menu-scroll mx-8 flex py-2 font-medium text-base text-dark dark:text-white group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10">
                    About
                  </a>
                </li>

                <li class="group relative">
                  <a href="{{ route('services') }}"
                    class="ud-menu-scroll mx-8 flex py-2 font-medium text-base text-dark dark:text-white group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10">
                    Services
                  </a>
                </li>
                <li class="group relative">
                  <a href="{{ route('price') }}"
                    class="ud-menu-scroll mx-8 flex py-2 font-medium text-base text-dark dark:text-white group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10">
                    Pricing
                  </a>
                </li>
                <li class="group relative">
                  <a href="{{ route('team') }}"
                    class="ud-menu-scroll mx-8 flex py-2 font-medium text-base text-dark dark:text-white group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10">
                    Team
                  </a>
                </li>
                <li class="group relative">
                  <a href="{{ route('contact') }}"
                    class="ud-menu-scroll mx-8 flex py-2 font-medium text-base text-dark dark:text-white group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10">
                    Contact
                  </a>
                </li>
                <li class="group relative">
                  <div class="">
                    <a href="{{ route('login') }}" 
                    class="lg:hidden mx-8 flex py-2 font-medium text-base text-dark dark:text-white 
                    group-hover:text-primary 
                    ">Login</a>
                    <a href="{{ route('register') }}" 
                    class="lg:hidden mx-8 flex py-2 font-medium text-base text-dark dark:text-white 
                    group-hover:text-primary 
                    ">register</a>
                  </div>
                </li>
                
              </ul>
            </nav>
          </div>
          <div class="justify-end pr-16 flex items-center lg:pr-0">
            <div class="hidden sm:flex">
              <a href="{{ route('login') }}" class="loginBtn py-2 px-[22px] text-base font-medium text-white hover:opacity-70 mr-4">
                Sign In
              </a>
              <a href="{{ route('register') }}"
                class="signUpBtn rounded-md bg-white bg-opacity-20 py-2 px-6 text-base font-medium text-white duration-300 ease-in-out hover:bg-opacity-100 hover:text-dark">
                Sign Up
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ====== Navbar Section End -->

  