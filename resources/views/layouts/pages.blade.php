<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}" />
    {{-- @vite(['resources/css/app.css']) --}}

    <!--Start of Tawk.to Script-->
    {{-- <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6559e234d600b968d314d434/1hfjhn7so';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script> --}}
   

    <!-- ==== WOW JS ==== -->
    <script src="assets/js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    
  </head>
  <body>

<body class="">
        <div class="">
          {{ $slot }}
        </div>
        

    <!-- ====== All Scripts -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
      // ==== for menu scroll
      const pageLink = document.querySelectorAll(".ud-menu-scroll");

      pageLink.forEach((elem) => {
        elem.addEventListener("click", (e) => {
          e.preventDefault();
          document.querySelector(elem.getAttribute("href")).scrollIntoView({
            behavior: "smooth",
            offsetTop: 1 - 60,
          });
        });
      });

      // section menu active
      // function onScroll(event) {
      //   const sections = document.querySelectorAll(".ud-menu-scroll");
      //   const scrollPos =
      //     window.pageYOffset ||
      //     document.documentElement.scrollTop ||
      //     document.body.scrollTop;

      //   for (let i = 0; i < sections.length; i++) {
      //     const currLink = sections[i];
      //     const val = currLink.getAttribute("href");
      //     const refElement = document.querySelector(val);
      //     const scrollTopMinus = scrollPos + 73;
      //     if (
      //       refElement.offsetTop <= scrollTopMinus &&
      //       refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
      //     ) {
      //       document
      //         .querySelector(".ud-menu-scroll")
      //         .classList.remove("active");
      //       currLink.classList.add("active");
      //     } else {
      //       currLink.classList.remove("active");
      //     }
      //   }
      }

      window.document.addEventListener("scroll", onScroll);
    </script>
  </body>
</html>