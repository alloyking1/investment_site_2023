<x-pages-layout>
    <x-pages.nav/>

    <!-- ====== Banner Section Start -->
    <div
      class="
        relative
        z-10
        pt-[120px]
        md:pt-[130px]
        lg:pt-[160px]
        pb-[100px]
        bg-primary
        overflow-hidden
      "
        >
      

        <div class="flex flex-wrap items-center -mx-4">
            <div class="w-full px-4 p-10">
              <div
                class="
                  hero-content
                  text-center
                  max-w-[780px]
                  mx-auto
                  wow
                  fadeInUp
                "
                data-wow-delay=".2s"
              >
                <h1
                  class="
                    text-white
                    font-bold
                    text-3xl
                    sm:text-4xl
                    md:text-[45px]
                    leading-snug
                    sm:leading-snug
                    md:leading-snug
                    mb-8
                  "
                >
                The Faces Behind {{ env('APP_NAME') }}
                </h1>
                <p
                  class="
                    text-base
                    sm:text-lg sm:leading-relaxed
                    md:text-xl md:leading-relaxed
                    mx-auto
                    mb-10
                    text-[#e4e4e4]
                    max-w-[600px]
                  "
                >
                We’re a global consultancy that helps the world’s most ambitious change makers define the future
                </p>
              </div>
            </div>
  
            <div class="w-full px-4">
              <div
                class="mx-auto max-w-[845px] relative z-10 wow fadeInUp"
                data-wow-delay=".25s">
                <div class="mt-16">
                  {{-- <img
                    src="https://www.vidyard.com/wp-content/themes/vidyard-website/img/pages/company/about-us/main-image.png.webp"
                    alt="hero"
                    class="max-w-xs w-[12] h-[12]"
                  /> --}}
                </div>
                <div class="absolute z-[-1] bottom-0 -left-9">
                  <svg
                    width="134"
                    height="106"
                    viewBox="0 0 134 106"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <circle
                      cx="1.66667"
                      cy="104"
                      r="1.66667"
                      transform="rotate(-90 1.66667 104)"
                      fill="white"
                    />
                    <circle
                      cx="16.3333"
                      cy="104"
                      r="1.66667"
                      transform="rotate(-90 16.3333 104)"
                      fill="white"
                    />
                    <circle
                      cx="31"
                      cy="104"
                      r="1.66667"
                      transform="rotate(-90 31 104)"
                      fill="white"
                    />
                    <circle
                      cx="45.6667"
                      cy="104"
                      r="1.66667"
                      transform="rotate(-90 45.6667 104)"
                      fill="white"
                    />
                    <circle
                      cx="60.3333"
                      cy="104"
                      r="1.66667"
                      transform="rotate(-90 60.3333 104)"
                      fill="white"
                    />
                    <circle
                      cx="88.6667"
                      cy="104"
                      r="1.66667"
                      transform="rotate(-90 88.6667 104)"
                      fill="white"
                    />
                    <circle
                      cx="117.667"
                      cy="104"
                      r="1.66667"
                      transform="rotate(-90 117.667 104)"
                      fill="white"
                    />
                    <circle
                      cx="74.6667"
                      cy="104"
                      r="1.66667"
                      transform="rotate(-90 74.6667 104)"
                      fill="white"
                    />
                    <circle
                      cx="103"
                      cy="104"
                      r="1.66667"
                      transform="rotate(-90 103 104)"
                      fill="white"
                    />
                    <circle
                      cx="132"
                      cy="104"
                      r="1.66667"
                      transform="rotate(-90 132 104)"
                      fill="white"
                    />
                    <circle
                      cx="1.66667"
                      cy="89.3333"
                      r="1.66667"
                      transform="rotate(-90 1.66667 89.3333)"
                      fill="white"
                    />
                    <circle
                      cx="16.3333"
                      cy="89.3333"
                      r="1.66667"
                      transform="rotate(-90 16.3333 89.3333)"
                      fill="white"
                    />
                    <circle
                      cx="31"
                      cy="89.3333"
                      r="1.66667"
                      transform="rotate(-90 31 89.3333)"
                      fill="white"
                    />
                    <circle
                      cx="45.6667"
                      cy="89.3333"
                      r="1.66667"
                      transform="rotate(-90 45.6667 89.3333)"
                      fill="white"
                    />
                    <circle
                      cx="60.3333"
                      cy="89.3338"
                      r="1.66667"
                      transform="rotate(-90 60.3333 89.3338)"
                      fill="white"
                    />
                    <circle
                      cx="88.6667"
                      cy="89.3338"
                      r="1.66667"
                      transform="rotate(-90 88.6667 89.3338)"
                      fill="white"
                    />
                    <circle
                      cx="117.667"
                      cy="89.3338"
                      r="1.66667"
                      transform="rotate(-90 117.667 89.3338)"
                      fill="white"
                    />
                    <circle
                      cx="74.6667"
                      cy="89.3338"
                      r="1.66667"
                      transform="rotate(-90 74.6667 89.3338)"
                      fill="white"
                    />
                    <circle
                      cx="103"
                      cy="89.3338"
                      r="1.66667"
                      transform="rotate(-90 103 89.3338)"
                      fill="white"
                    />
                    <circle
                      cx="132"
                      cy="89.3338"
                      r="1.66667"
                      transform="rotate(-90 132 89.3338)"
                      fill="white"
                    />
                    <circle
                      cx="1.66667"
                      cy="74.6673"
                      r="1.66667"
                      transform="rotate(-90 1.66667 74.6673)"
                      fill="white"
                    />
                    <circle
                      cx="1.66667"
                      cy="31.0003"
                      r="1.66667"
                      transform="rotate(-90 1.66667 31.0003)"
                      fill="white"
                    />
                    <circle
                      cx="16.3333"
                      cy="74.6668"
                      r="1.66667"
                      transform="rotate(-90 16.3333 74.6668)"
                      fill="white"
                    />
                    <circle
                      cx="16.3333"
                      cy="31.0003"
                      r="1.66667"
                      transform="rotate(-90 16.3333 31.0003)"
                      fill="white"
                    />
                    <circle
                      cx="31"
                      cy="74.6668"
                      r="1.66667"
                      transform="rotate(-90 31 74.6668)"
                      fill="white"
                    />
                    <circle
                      cx="31"
                      cy="31.0003"
                      r="1.66667"
                      transform="rotate(-90 31 31.0003)"
                      fill="white"
                    />
                    <circle
                      cx="45.6667"
                      cy="74.6668"
                      r="1.66667"
                      transform="rotate(-90 45.6667 74.6668)"
                      fill="white"
                    />
                    <circle
                      cx="45.6667"
                      cy="31.0003"
                      r="1.66667"
                      transform="rotate(-90 45.6667 31.0003)"
                      fill="white"
                    />
                    <circle
                      cx="60.3333"
                      cy="74.6668"
                      r="1.66667"
                      transform="rotate(-90 60.3333 74.6668)"
                      fill="white"
                    />
                    <circle
                      cx="60.3333"
                      cy="31.0001"
                      r="1.66667"
                      transform="rotate(-90 60.3333 31.0001)"
                      fill="white"
                    />
                    <circle
                      cx="88.6667"
                      cy="74.6668"
                      r="1.66667"
                      transform="rotate(-90 88.6667 74.6668)"
                      fill="white"
                    />
                    <circle
                      cx="88.6667"
                      cy="31.0001"
                      r="1.66667"
                      transform="rotate(-90 88.6667 31.0001)"
                      fill="white"
                    />
                    <circle
                      cx="117.667"
                      cy="74.6668"
                      r="1.66667"
                      transform="rotate(-90 117.667 74.6668)"
                      fill="white"
                    />
                    <circle
                      cx="117.667"
                      cy="31.0001"
                      r="1.66667"
                      transform="rotate(-90 117.667 31.0001)"
                      fill="white"
                    />
                    <circle
                      cx="74.6667"
                      cy="74.6668"
                      r="1.66667"
                      transform="rotate(-90 74.6667 74.6668)"
                      fill="white"
                    />
                    <circle
                      cx="74.6667"
                      cy="31.0001"
                      r="1.66667"
                      transform="rotate(-90 74.6667 31.0001)"
                      fill="white"
                    />
                    <circle
                      cx="103"
                      cy="74.6668"
                      r="1.66667"
                      transform="rotate(-90 103 74.6668)"
                      fill="white"
                    />
                    <circle
                      cx="103"
                      cy="31.0001"
                      r="1.66667"
                      transform="rotate(-90 103 31.0001)"
                      fill="white"
                    />
                    <circle
                      cx="132"
                      cy="74.6668"
                      r="1.66667"
                      transform="rotate(-90 132 74.6668)"
                      fill="white"
                    />
                    <circle
                      cx="132"
                      cy="31.0001"
                      r="1.66667"
                      transform="rotate(-90 132 31.0001)"
                      fill="white"
                    />
                    <circle
                      cx="1.66667"
                      cy="60.0003"
                      r="1.66667"
                      transform="rotate(-90 1.66667 60.0003)"
                      fill="white"
                    />
                    <circle
                      cx="1.66667"
                      cy="16.3336"
                      r="1.66667"
                      transform="rotate(-90 1.66667 16.3336)"
                      fill="white"
                    />
                    <circle
                      cx="16.3333"
                      cy="60.0003"
                      r="1.66667"
                      transform="rotate(-90 16.3333 60.0003)"
                      fill="white"
                    />
                    <circle
                      cx="16.3333"
                      cy="16.3336"
                      r="1.66667"
                      transform="rotate(-90 16.3333 16.3336)"
                      fill="white"
                    />
                    <circle
                      cx="31"
                      cy="60.0003"
                      r="1.66667"
                      transform="rotate(-90 31 60.0003)"
                      fill="white"
                    />
                    <circle
                      cx="31"
                      cy="16.3336"
                      r="1.66667"
                      transform="rotate(-90 31 16.3336)"
                      fill="white"
                    />
                    <circle
                      cx="45.6667"
                      cy="60.0003"
                      r="1.66667"
                      transform="rotate(-90 45.6667 60.0003)"
                      fill="white"
                    />
                    <circle
                      cx="45.6667"
                      cy="16.3336"
                      r="1.66667"
                      transform="rotate(-90 45.6667 16.3336)"
                      fill="white"
                    />
                    <circle
                      cx="60.3333"
                      cy="60.0003"
                      r="1.66667"
                      transform="rotate(-90 60.3333 60.0003)"
                      fill="white"
                    />
                    <circle
                      cx="60.3333"
                      cy="16.3336"
                      r="1.66667"
                      transform="rotate(-90 60.3333 16.3336)"
                      fill="white"
                    />
                    <circle
                      cx="88.6667"
                      cy="60.0003"
                      r="1.66667"
                      transform="rotate(-90 88.6667 60.0003)"
                      fill="white"
                    />
                    <circle
                      cx="88.6667"
                      cy="16.3336"
                      r="1.66667"
                      transform="rotate(-90 88.6667 16.3336)"
                      fill="white"
                    />
                    <circle
                      cx="117.667"
                      cy="60.0003"
                      r="1.66667"
                      transform="rotate(-90 117.667 60.0003)"
                      fill="white"
                    />
                    <circle
                      cx="117.667"
                      cy="16.3336"
                      r="1.66667"
                      transform="rotate(-90 117.667 16.3336)"
                      fill="white"
                    />
                    <circle
                      cx="74.6667"
                      cy="60.0003"
                      r="1.66667"
                      transform="rotate(-90 74.6667 60.0003)"
                      fill="white"
                    />
                    <circle
                      cx="74.6667"
                      cy="16.3336"
                      r="1.66667"
                      transform="rotate(-90 74.6667 16.3336)"
                      fill="white"
                    />
                    <circle
                      cx="103"
                      cy="60.0003"
                      r="1.66667"
                      transform="rotate(-90 103 60.0003)"
                      fill="white"
                    />
                    <circle
                      cx="103"
                      cy="16.3336"
                      r="1.66667"
                      transform="rotate(-90 103 16.3336)"
                      fill="white"
                    />
                    <circle
                      cx="132"
                      cy="60.0003"
                      r="1.66667"
                      transform="rotate(-90 132 60.0003)"
                      fill="white"
                    />
                    <circle
                      cx="132"
                      cy="16.3336"
                      r="1.66667"
                      transform="rotate(-90 132 16.3336)"
                      fill="white"
                    />
                    <circle
                      cx="1.66667"
                      cy="45.3336"
                      r="1.66667"
                      transform="rotate(-90 1.66667 45.3336)"
                      fill="white"
                    />
                    <circle
                      cx="1.66667"
                      cy="1.66683"
                      r="1.66667"
                      transform="rotate(-90 1.66667 1.66683)"
                      fill="white"
                    />
                    <circle
                      cx="16.3333"
                      cy="45.3336"
                      r="1.66667"
                      transform="rotate(-90 16.3333 45.3336)"
                      fill="white"
                    />
                    <circle
                      cx="16.3333"
                      cy="1.66683"
                      r="1.66667"
                      transform="rotate(-90 16.3333 1.66683)"
                      fill="white"
                    />
                    <circle
                      cx="31"
                      cy="45.3336"
                      r="1.66667"
                      transform="rotate(-90 31 45.3336)"
                      fill="white"
                    />
                    <circle
                      cx="31"
                      cy="1.66683"
                      r="1.66667"
                      transform="rotate(-90 31 1.66683)"
                      fill="white"
                    />
                    <circle
                      cx="45.6667"
                      cy="45.3336"
                      r="1.66667"
                      transform="rotate(-90 45.6667 45.3336)"
                      fill="white"
                    />
                    <circle
                      cx="45.6667"
                      cy="1.66683"
                      r="1.66667"
                      transform="rotate(-90 45.6667 1.66683)"
                      fill="white"
                    />
                    <circle
                      cx="60.3333"
                      cy="45.3338"
                      r="1.66667"
                      transform="rotate(-90 60.3333 45.3338)"
                      fill="white"
                    />
                    <circle
                      cx="60.3333"
                      cy="1.66707"
                      r="1.66667"
                      transform="rotate(-90 60.3333 1.66707)"
                      fill="white"
                    />
                    <circle
                      cx="88.6667"
                      cy="45.3338"
                      r="1.66667"
                      transform="rotate(-90 88.6667 45.3338)"
                      fill="white"
                    />
                    <circle
                      cx="88.6667"
                      cy="1.66707"
                      r="1.66667"
                      transform="rotate(-90 88.6667 1.66707)"
                      fill="white"
                    />
                    <circle
                      cx="117.667"
                      cy="45.3338"
                      r="1.66667"
                      transform="rotate(-90 117.667 45.3338)"
                      fill="white"
                    />
                    <circle
                      cx="117.667"
                      cy="1.66707"
                      r="1.66667"
                      transform="rotate(-90 117.667 1.66707)"
                      fill="white"
                    />
                    <circle
                      cx="74.6667"
                      cy="45.3338"
                      r="1.66667"
                      transform="rotate(-90 74.6667 45.3338)"
                      fill="white"
                    />
                    <circle
                      cx="74.6667"
                      cy="1.66707"
                      r="1.66667"
                      transform="rotate(-90 74.6667 1.66707)"
                      fill="white"
                    />
                    <circle
                      cx="103"
                      cy="45.3338"
                      r="1.66667"
                      transform="rotate(-90 103 45.3338)"
                      fill="white"
                    />
                    <circle
                      cx="103"
                      cy="1.66707"
                      r="1.66667"
                      transform="rotate(-90 103 1.66707)"
                      fill="white"
                    />
                    <circle
                      cx="132"
                      cy="45.3338"
                      r="1.66667"
                      transform="rotate(-90 132 45.3338)"
                      fill="white"
                    />
                    <circle
                      cx="132"
                      cy="1.66707"
                      r="1.66667"
                      transform="rotate(-90 132 1.66707)"
                      fill="white"
                    />
                  </svg>
                </div>
                <div class="absolute z-[-1] -top-6 -right-6">
                  <svg
                    width="134"
                    height="106"
                    viewBox="0 0 134 106"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <circle
                      cx="1.66667"
                      cy="104"
                      r="1.66667"
                      transform="rotate(-90 1.66667 104)"
                      fill="white"
                    />
                    <circle
                      cx="16.3333"
                      cy="104"
                      r="1.66667"
                      transform="rotate(-90 16.3333 104)"
                      fill="white"
                    />
                    <circle
                      cx="31"
                      cy="104"
                      r="1.66667"
                      transform="rotate(-90 31 104)"
                      fill="white"
                    />
                    <circle
                      cx="45.6667"
                      cy="104"
                      r="1.66667"
                      transform="rotate(-90 45.6667 104)"
                      fill="white"
                    />
                    <circle
                      cx="60.3333"
                      cy="104"
                      r="1.66667"
                      transform="rotate(-90 60.3333 104)"
                      fill="white"
                    />
                    <circle
                      cx="88.6667"
                      cy="104"
                      r="1.66667"
                      transform="rotate(-90 88.6667 104)"
                      fill="white"
                    />
                    <circle
                      cx="117.667"
                      cy="104"
                      r="1.66667"
                      transform="rotate(-90 117.667 104)"
                      fill="white"
                    />
                    <circle
                      cx="74.6667"
                      cy="104"
                      r="1.66667"
                      transform="rotate(-90 74.6667 104)"
                      fill="white"
                    />
                    <circle
                      cx="103"
                      cy="104"
                      r="1.66667"
                      transform="rotate(-90 103 104)"
                      fill="white"
                    />
                    <circle
                      cx="132"
                      cy="104"
                      r="1.66667"
                      transform="rotate(-90 132 104)"
                      fill="white"
                    />
                    <circle
                      cx="1.66667"
                      cy="89.3333"
                      r="1.66667"
                      transform="rotate(-90 1.66667 89.3333)"
                      fill="white"
                    />
                    <circle
                      cx="16.3333"
                      cy="89.3333"
                      r="1.66667"
                      transform="rotate(-90 16.3333 89.3333)"
                      fill="white"
                    />
                    <circle
                      cx="31"
                      cy="89.3333"
                      r="1.66667"
                      transform="rotate(-90 31 89.3333)"
                      fill="white"
                    />
                    <circle
                      cx="45.6667"
                      cy="89.3333"
                      r="1.66667"
                      transform="rotate(-90 45.6667 89.3333)"
                      fill="white"
                    />
                    <circle
                      cx="60.3333"
                      cy="89.3338"
                      r="1.66667"
                      transform="rotate(-90 60.3333 89.3338)"
                      fill="white"
                    />
                    <circle
                      cx="88.6667"
                      cy="89.3338"
                      r="1.66667"
                      transform="rotate(-90 88.6667 89.3338)"
                      fill="white"
                    />
                    <circle
                      cx="117.667"
                      cy="89.3338"
                      r="1.66667"
                      transform="rotate(-90 117.667 89.3338)"
                      fill="white"
                    />
                    <circle
                      cx="74.6667"
                      cy="89.3338"
                      r="1.66667"
                      transform="rotate(-90 74.6667 89.3338)"
                      fill="white"
                    />
                    <circle
                      cx="103"
                      cy="89.3338"
                      r="1.66667"
                      transform="rotate(-90 103 89.3338)"
                      fill="white"
                    />
                    <circle
                      cx="132"
                      cy="89.3338"
                      r="1.66667"
                      transform="rotate(-90 132 89.3338)"
                      fill="white"
                    />
                    <circle
                      cx="1.66667"
                      cy="74.6673"
                      r="1.66667"
                      transform="rotate(-90 1.66667 74.6673)"
                      fill="white"
                    />
                    <circle
                      cx="1.66667"
                      cy="31.0003"
                      r="1.66667"
                      transform="rotate(-90 1.66667 31.0003)"
                      fill="white"
                    />
                    <circle
                      cx="16.3333"
                      cy="74.6668"
                      r="1.66667"
                      transform="rotate(-90 16.3333 74.6668)"
                      fill="white"
                    />
                    <circle
                      cx="16.3333"
                      cy="31.0003"
                      r="1.66667"
                      transform="rotate(-90 16.3333 31.0003)"
                      fill="white"
                    />
                    <circle
                      cx="31"
                      cy="74.6668"
                      r="1.66667"
                      transform="rotate(-90 31 74.6668)"
                      fill="white"
                    />
                    <circle
                      cx="31"
                      cy="31.0003"
                      r="1.66667"
                      transform="rotate(-90 31 31.0003)"
                      fill="white"
                    />
                    <circle
                      cx="45.6667"
                      cy="74.6668"
                      r="1.66667"
                      transform="rotate(-90 45.6667 74.6668)"
                      fill="white"
                    />
                    <circle
                      cx="45.6667"
                      cy="31.0003"
                      r="1.66667"
                      transform="rotate(-90 45.6667 31.0003)"
                      fill="white"
                    />
                    <circle
                      cx="60.3333"
                      cy="74.6668"
                      r="1.66667"
                      transform="rotate(-90 60.3333 74.6668)"
                      fill="white"
                    />
                    <circle
                      cx="60.3333"
                      cy="31.0001"
                      r="1.66667"
                      transform="rotate(-90 60.3333 31.0001)"
                      fill="white"
                    />
                    <circle
                      cx="88.6667"
                      cy="74.6668"
                      r="1.66667"
                      transform="rotate(-90 88.6667 74.6668)"
                      fill="white"
                    />
                    <circle
                      cx="88.6667"
                      cy="31.0001"
                      r="1.66667"
                      transform="rotate(-90 88.6667 31.0001)"
                      fill="white"
                    />
                    <circle
                      cx="117.667"
                      cy="74.6668"
                      r="1.66667"
                      transform="rotate(-90 117.667 74.6668)"
                      fill="white"
                    />
                    <circle
                      cx="117.667"
                      cy="31.0001"
                      r="1.66667"
                      transform="rotate(-90 117.667 31.0001)"
                      fill="white"
                    />
                    <circle
                      cx="74.6667"
                      cy="74.6668"
                      r="1.66667"
                      transform="rotate(-90 74.6667 74.6668)"
                      fill="white"
                    />
                    <circle
                      cx="74.6667"
                      cy="31.0001"
                      r="1.66667"
                      transform="rotate(-90 74.6667 31.0001)"
                      fill="white"
                    />
                    <circle
                      cx="103"
                      cy="74.6668"
                      r="1.66667"
                      transform="rotate(-90 103 74.6668)"
                      fill="white"
                    />
                    <circle
                      cx="103"
                      cy="31.0001"
                      r="1.66667"
                      transform="rotate(-90 103 31.0001)"
                      fill="white"
                    />
                    <circle
                      cx="132"
                      cy="74.6668"
                      r="1.66667"
                      transform="rotate(-90 132 74.6668)"
                      fill="white"
                    />
                    <circle
                      cx="132"
                      cy="31.0001"
                      r="1.66667"
                      transform="rotate(-90 132 31.0001)"
                      fill="white"
                    />
                    <circle
                      cx="1.66667"
                      cy="60.0003"
                      r="1.66667"
                      transform="rotate(-90 1.66667 60.0003)"
                      fill="white"
                    />
                    <circle
                      cx="1.66667"
                      cy="16.3336"
                      r="1.66667"
                      transform="rotate(-90 1.66667 16.3336)"
                      fill="white"
                    />
                    <circle
                      cx="16.3333"
                      cy="60.0003"
                      r="1.66667"
                      transform="rotate(-90 16.3333 60.0003)"
                      fill="white"
                    />
                    <circle
                      cx="16.3333"
                      cy="16.3336"
                      r="1.66667"
                      transform="rotate(-90 16.3333 16.3336)"
                      fill="white"
                    />
                    <circle
                      cx="31"
                      cy="60.0003"
                      r="1.66667"
                      transform="rotate(-90 31 60.0003)"
                      fill="white"
                    />
                    <circle
                      cx="31"
                      cy="16.3336"
                      r="1.66667"
                      transform="rotate(-90 31 16.3336)"
                      fill="white"
                    />
                    <circle
                      cx="45.6667"
                      cy="60.0003"
                      r="1.66667"
                      transform="rotate(-90 45.6667 60.0003)"
                      fill="white"
                    />
                    <circle
                      cx="45.6667"
                      cy="16.3336"
                      r="1.66667"
                      transform="rotate(-90 45.6667 16.3336)"
                      fill="white"
                    />
                    <circle
                      cx="60.3333"
                      cy="60.0003"
                      r="1.66667"
                      transform="rotate(-90 60.3333 60.0003)"
                      fill="white"
                    />
                    <circle
                      cx="60.3333"
                      cy="16.3336"
                      r="1.66667"
                      transform="rotate(-90 60.3333 16.3336)"
                      fill="white"
                    />
                    <circle
                      cx="88.6667"
                      cy="60.0003"
                      r="1.66667"
                      transform="rotate(-90 88.6667 60.0003)"
                      fill="white"
                    />
                    <circle
                      cx="88.6667"
                      cy="16.3336"
                      r="1.66667"
                      transform="rotate(-90 88.6667 16.3336)"
                      fill="white"
                    />
                    <circle
                      cx="117.667"
                      cy="60.0003"
                      r="1.66667"
                      transform="rotate(-90 117.667 60.0003)"
                      fill="white"
                    />
                    <circle
                      cx="117.667"
                      cy="16.3336"
                      r="1.66667"
                      transform="rotate(-90 117.667 16.3336)"
                      fill="white"
                    />
                    <circle
                      cx="74.6667"
                      cy="60.0003"
                      r="1.66667"
                      transform="rotate(-90 74.6667 60.0003)"
                      fill="white"
                    />
                    <circle
                      cx="74.6667"
                      cy="16.3336"
                      r="1.66667"
                      transform="rotate(-90 74.6667 16.3336)"
                      fill="white"
                    />
                    <circle
                      cx="103"
                      cy="60.0003"
                      r="1.66667"
                      transform="rotate(-90 103 60.0003)"
                      fill="white"
                    />
                    <circle
                      cx="103"
                      cy="16.3336"
                      r="1.66667"
                      transform="rotate(-90 103 16.3336)"
                      fill="white"
                    />
                    <circle
                      cx="132"
                      cy="60.0003"
                      r="1.66667"
                      transform="rotate(-90 132 60.0003)"
                      fill="white"
                    />
                    <circle
                      cx="132"
                      cy="16.3336"
                      r="1.66667"
                      transform="rotate(-90 132 16.3336)"
                      fill="white"
                    />
                    <circle
                      cx="1.66667"
                      cy="45.3336"
                      r="1.66667"
                      transform="rotate(-90 1.66667 45.3336)"
                      fill="white"
                    />
                    <circle
                      cx="1.66667"
                      cy="1.66683"
                      r="1.66667"
                      transform="rotate(-90 1.66667 1.66683)"
                      fill="white"
                    />
                    <circle
                      cx="16.3333"
                      cy="45.3336"
                      r="1.66667"
                      transform="rotate(-90 16.3333 45.3336)"
                      fill="white"
                    />
                    <circle
                      cx="16.3333"
                      cy="1.66683"
                      r="1.66667"
                      transform="rotate(-90 16.3333 1.66683)"
                      fill="white"
                    />
                    <circle
                      cx="31"
                      cy="45.3336"
                      r="1.66667"
                      transform="rotate(-90 31 45.3336)"
                      fill="white"
                    />
                    <circle
                      cx="31"
                      cy="1.66683"
                      r="1.66667"
                      transform="rotate(-90 31 1.66683)"
                      fill="white"
                    />
                    <circle
                      cx="45.6667"
                      cy="45.3336"
                      r="1.66667"
                      transform="rotate(-90 45.6667 45.3336)"
                      fill="white"
                    />
                    <circle
                      cx="45.6667"
                      cy="1.66683"
                      r="1.66667"
                      transform="rotate(-90 45.6667 1.66683)"
                      fill="white"
                    />
                    <circle
                      cx="60.3333"
                      cy="45.3338"
                      r="1.66667"
                      transform="rotate(-90 60.3333 45.3338)"
                      fill="white"
                    />
                    <circle
                      cx="60.3333"
                      cy="1.66707"
                      r="1.66667"
                      transform="rotate(-90 60.3333 1.66707)"
                      fill="white"
                    />
                    <circle
                      cx="88.6667"
                      cy="45.3338"
                      r="1.66667"
                      transform="rotate(-90 88.6667 45.3338)"
                      fill="white"
                    />
                    <circle
                      cx="88.6667"
                      cy="1.66707"
                      r="1.66667"
                      transform="rotate(-90 88.6667 1.66707)"
                      fill="white"
                    />
                    <circle
                      cx="117.667"
                      cy="45.3338"
                      r="1.66667"
                      transform="rotate(-90 117.667 45.3338)"
                      fill="white"
                    />
                    <circle
                      cx="117.667"
                      cy="1.66707"
                      r="1.66667"
                      transform="rotate(-90 117.667 1.66707)"
                      fill="white"
                    />
                    <circle
                      cx="74.6667"
                      cy="45.3338"
                      r="1.66667"
                      transform="rotate(-90 74.6667 45.3338)"
                      fill="white"
                    />
                    <circle
                      cx="74.6667"
                      cy="1.66707"
                      r="1.66667"
                      transform="rotate(-90 74.6667 1.66707)"
                      fill="white"
                    />
                    <circle
                      cx="103"
                      cy="45.3338"
                      r="1.66667"
                      transform="rotate(-90 103 45.3338)"
                      fill="white"
                    />
                    <circle
                      cx="103"
                      cy="1.66707"
                      r="1.66667"
                      transform="rotate(-90 103 1.66707)"
                      fill="white"
                    />
                    <circle
                      cx="132"
                      cy="45.3338"
                      r="1.66667"
                      transform="rotate(-90 132 45.3338)"
                      fill="white"
                    />
                    <circle
                      cx="132"
                      cy="1.66707"
                      r="1.66667"
                      transform="rotate(-90 132 1.66707)"
                      fill="white"
                    />
                  </svg>
                </div>
  
              </div>
            </div>
          </div>



      <div>
        <span class="absolute top-0 left-0 z-[-1]">
          <svg
            width="495"
            height="470"
            viewBox="0 0 495 470"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <circle
              cx="55"
              cy="442"
              r="138"
              stroke="white"
              stroke-opacity="0.04"
              stroke-width="50"
            />
            <circle
              cx="446"
              r="39"
              stroke="white"
              stroke-opacity="0.04"
              stroke-width="20"
            />
            <path
              d="M245.406 137.609L233.985 94.9852L276.609 106.406L245.406 137.609Z"
              stroke="white"
              stroke-opacity="0.08"
              stroke-width="12"
            />
          </svg>
        </span>
        <span class="absolute top-0 right-0 z-[-1]">
          <svg
            width="493"
            height="470"
            viewBox="0 0 493 470"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <circle
              cx="462"
              cy="5"
              r="138"
              stroke="white"
              stroke-opacity="0.04"
              stroke-width="50"
            />
            <circle
              cx="49"
              cy="470"
              r="39"
              stroke="white"
              stroke-opacity="0.04"
              stroke-width="20"
            />
            <path
              d="M222.393 226.701L272.808 213.192L259.299 263.607L222.393 226.701Z"
              stroke="white"
              stroke-opacity="0.06"
              stroke-width="13"
            />
          </svg>
        </span>
      </div>
    </div>
    <!-- ====== Banner Section End -->

    <!-- ====== Team Section Start -->
    <section id="team" class="pt-20 lg:pt-[120px] pb-10 lg:pb-20">
        <div class="container">
          <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
              <div class="text-center mx-auto mb-[60px] max-w-[620px]">
                <span class="font-semibold text-lg text-primary mb-2 block">
                  Our Team
                </span>
                <h2
                  class="
                    font-bold
                    text-3xl
                    sm:text-4xl
                    md:text-[42px]
                    text-dark
                    mb-4
                  "
                >
                  Meet Our Team
                </h2>
                <p
                  class="
                    text-lg
                    sm:text-xl
                    leading-relaxed
                    sm:leading-relaxed
                    text-body-color
                  "
                >
                Meet the team behind our amazing success.
                </p>
              </div>
            </div>
          </div>
  
          <div class="flex flex-wrap justify-center -mx-4">
            <div class="w-full sm:w-1/2 lg:w-1/4 px-4">
              <div class="mb-10 wow fadeInUp" data-wow-delay=".1s">
                <div
                  class="
                    relative
                    w-[170px]
                    h-170px]
                    rounded-full
                    z-10
                    mx-auto
                    mb-6
                  "
                >
                  <img
                    src="{{asset('assets/theme_asset/img/faces/12.jpg')}}"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  <span class="absolute top-0 left-0 z-[-1]">
                    <svg
                      width="71"
                      height="82"
                      viewBox="0 0 71 82"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle
                        cx="1.29337"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 1.29337 80.7066)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 12.6747 80.7066)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 24.0575 80.7066)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 35.4379 80.7066)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 46.8197 80.7066)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 68.807 80.7066)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9443"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 57.9443 80.7066)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.29337"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 1.29337 69.3249)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 12.6747 69.3249)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 24.0575 69.3249)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 35.4379 69.3249)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="69.325"
                        r="1.29337"
                        transform="rotate(-90 46.8197 69.325)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="69.325"
                        r="1.29337"
                        transform="rotate(-90 68.807 69.325)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9433"
                        cy="69.325"
                        r="1.29337"
                        transform="rotate(-90 57.9433 69.325)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.29337"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 1.29337 57.9433)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.29337"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 1.29337 24.0568)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 12.6747 57.9433)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 12.6747 24.0568)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 24.0575 57.9433)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 24.0575 24.0568)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 35.4379 57.9433)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 35.4379 24.0568)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="57.9431"
                        r="1.29337"
                        transform="rotate(-90 46.8197 57.9431)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="24.0567"
                        r="1.29337"
                        transform="rotate(-90 46.8197 24.0567)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="57.9431"
                        r="1.29337"
                        transform="rotate(-90 68.807 57.9431)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="24.0567"
                        r="1.29337"
                        transform="rotate(-90 68.807 24.0567)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9433"
                        cy="57.9431"
                        r="1.29337"
                        transform="rotate(-90 57.9433 57.9431)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9443"
                        cy="24.0567"
                        r="1.29337"
                        transform="rotate(-90 57.9443 24.0567)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.29337"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 1.29337 46.5615)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.29337"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 1.29337 12.6751)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 12.6747 46.5615)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 12.6747 12.6751)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 24.0575 46.5615)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 24.0575 12.6751)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 35.4379 46.5615)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 35.4379 12.6751)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 46.8197 46.5615)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 46.8197 12.6751)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 68.807 46.5615)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 68.807 12.6751)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9433"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 57.9433 46.5615)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9443"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 57.9443 12.6751)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.29337"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 1.29337 35.1798)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.29337"
                        cy="1.2933"
                        r="1.29337"
                        transform="rotate(-90 1.29337 1.2933)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 12.6747 35.1798)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="1.2933"
                        r="1.29337"
                        transform="rotate(-90 12.6747 1.2933)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 24.0575 35.1798)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="1.29336"
                        r="1.29337"
                        transform="rotate(-90 24.0575 1.29336)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 35.4379 35.1798)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="1.29336"
                        r="1.29337"
                        transform="rotate(-90 35.4379 1.29336)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="35.18"
                        r="1.29337"
                        transform="rotate(-90 46.8197 35.18)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="1.29354"
                        r="1.29337"
                        transform="rotate(-90 46.8197 1.29354)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="35.18"
                        r="1.29337"
                        transform="rotate(-90 68.807 35.18)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="1.29354"
                        r="1.29337"
                        transform="rotate(-90 68.807 1.29354)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9443"
                        cy="35.18"
                        r="1.29337"
                        transform="rotate(-90 57.9443 35.18)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9443"
                        cy="1.29354"
                        r="1.29337"
                        transform="rotate(-90 57.9443 1.29354)"
                        fill="#3056D3"
                      />
                    </svg>
                  </span>
                  <span class="absolute right-0 bottom-0">
                    <svg
                      width="22"
                      height="22"
                      viewBox="0 0 22 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z"
                        stroke="#13C296"
                      />
                    </svg>
                  </span>
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Anthony Jack
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Real Estate Associate
                  </p>
                  {{-- <div class="flex items-center justify-center">
                    <a
                      href="javascript:void(0)"
                      class="
                        text-[#cdced6]
                        hover:text-primary
                        w-8
                        h-8
                        mx-2
                        flex
                        items-center
                        justify-center
                      "
                    >
                      <svg
                        width="10"
                        height="18"
                        viewBox="0 0 10 18"
                        class="fill-current"
                        >
                        <path
                          d="M9.29878 7.2H7.74898H7.19548V6.61935V4.81936V4.23871H7.74898H8.91133C9.21575 4.23871 9.46483 4.00645 9.46483 3.65806V0.580645C9.46483 0.26129 9.24343 0 8.91133 0H6.89106C4.70474 0 3.18262 1.62581 3.18262 4.03548V6.56129V7.14194H2.62912H0.747223C0.359774 7.14194 0 7.46129 0 7.92581V10.0161C0 10.4226 0.304424 10.8 0.747223 10.8H2.57377H3.12727V11.3806V17.2161C3.12727 17.6226 3.43169 18 3.87449 18H6.47593C6.64198 18 6.78036 17.9129 6.89106 17.7968C7.00176 17.6806 7.08478 17.4774 7.08478 17.3032V11.4097V10.829H7.66596H8.91133C9.2711 10.829 9.54785 10.5968 9.6032 10.2484V10.2194V10.1903L9.99065 8.1871C10.0183 7.98387 9.99065 7.75161 9.8246 7.51935C9.76925 7.37419 9.52018 7.22903 9.29878 7.2Z"
                        />
                      </svg>
                    </a>
                    <a
                      href="javascript:void(0)"
                      class="
                        text-[#cdced6]
                        hover:text-primary
                        w-8
                        h-8
                        mx-2
                        flex
                        items-center
                        justify-center
                      "
                    >
                      <svg
                        width="18"
                        height="14"
                        viewBox="0 0 18 14"
                        class="fill-current"
                      >
                        <path
                          d="M15.9968 2.41096L17.1 1.09589C17.4194 0.739726 17.5065 0.465753 17.5355 0.328767C16.6645 0.821918 15.8516 0.986301 15.329 0.986301H15.1258L15.0097 0.876712C14.3129 0.30137 13.4419 0 12.5129 0C10.4806 0 8.88387 1.58904 8.88387 3.42466C8.88387 3.53425 8.88387 3.69863 8.9129 3.80822L9 4.35616L8.39032 4.32877C4.67419 4.21918 1.62581 1.20548 1.13226 0.684932C0.319355 2.05479 0.783871 3.36986 1.27742 4.19178L2.26452 5.72603L0.696774 4.90411C0.725806 6.05479 1.19032 6.9589 2.09032 7.61644L2.87419 8.16438L2.09032 8.46575C2.58387 9.86301 3.6871 10.4384 4.5 10.6575L5.57419 10.9315L4.55806 11.589C2.93226 12.6849 0.9 12.6027 0 12.5205C1.82903 13.726 4.00645 14 5.51613 14C6.64839 14 7.49032 13.8904 7.69355 13.8082C15.8226 12 16.2 5.15068 16.2 3.78082V3.58904L16.3742 3.47945C17.3613 2.60274 17.7677 2.13699 18 1.86301C17.9129 1.89041 17.7968 1.94521 17.6806 1.9726L15.9968 2.41096Z"
                        />
                      </svg>
                    </a>
                    <a
                      href="javascript:void(0)"
                      class="
                        text-[#cdced6]
                        hover:text-primary
                        w-8
                        h-8
                        mx-2
                        flex
                        items-center
                        justify-center
                      "
                    >
                      <svg
                        width="18"
                        height="18"
                        viewBox="0 0 18 18"
                        class="fill-current"
                      >
                        <path
                          d="M8.90245 12.1939C10.7363 12.1939 12.2229 10.7073 12.2229 8.87352C12.2229 7.0397 10.7363 5.5531 8.90245 5.5531C7.06863 5.5531 5.58203 7.0397 5.58203 8.87352C5.58203 10.7073 7.06863 12.1939 8.90245 12.1939Z"
                        />
                        <path
                          d="M12.5088 0H5.23824C2.34719 0 0 2.34719 0 5.23824V12.4516C0 15.3999 2.34719 17.7471 5.23824 17.7471H12.4516C15.3999 17.7471 17.7471 15.3999 17.7471 12.5088V5.23824C17.7471 2.34719 15.3999 0 12.5088 0ZM8.90215 13.2244C6.46909 13.2244 4.55126 11.2493 4.55126 8.87353C4.55126 6.49771 6.49771 4.52264 8.90215 4.52264C11.278 4.52264 13.2244 6.49771 13.2244 8.87353C13.2244 11.2493 11.3066 13.2244 8.90215 13.2244ZM14.9133 4.92338C14.627 5.23824 14.1976 5.40999 13.711 5.40999C13.2817 5.40999 12.8523 5.23824 12.5088 4.92338C12.1939 4.60851 12.0222 4.20777 12.0222 3.72116C12.0222 3.23454 12.1939 2.86243 12.5088 2.51894C12.8237 2.17545 13.2244 2.0037 13.711 2.0037C14.1404 2.0037 14.5984 2.17545 14.9133 2.49031C15.1995 2.86243 15.3999 3.29179 15.3999 3.74978C15.3712 4.20777 15.1995 4.60851 14.9133 4.92338Z"
                        />
                        <path
                          d="M13.7397 3.03418C13.3676 3.03418 13.0527 3.34905 13.0527 3.72116C13.0527 4.09328 13.3676 4.40815 13.7397 4.40815C14.1118 4.40815 14.4267 4.09328 14.4267 3.72116C14.4267 3.34905 14.1405 3.03418 13.7397 3.03418Z"
                        />
                      </svg>
                    </a>
                  </div> --}}
                </div>
              </div>
            </div>

            <div class="w-full sm:w-1/2 lg:w-1/4 px-4">
              <div class="mb-10 wow fadeInUp" data-wow-delay=".15s">
                <div
                  class="
                    relative
                    w-[170px]
                    h-170px]
                    rounded-full
                    z-10
                    mx-auto
                    mb-6
                  "
                >
                  <img
                    src="{{asset('assets/theme_asset/img/faces/17.jpg')}}"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  <span class="absolute top-0 left-0 z-[-1]">
                    <svg
                      width="71"
                      height="82"
                      viewBox="0 0 71 82"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle
                        cx="1.29337"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 1.29337 80.7066)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 12.6747 80.7066)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 24.0575 80.7066)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 35.4379 80.7066)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 46.8197 80.7066)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 68.807 80.7066)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9443"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 57.9443 80.7066)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.29337"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 1.29337 69.3249)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 12.6747 69.3249)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 24.0575 69.3249)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 35.4379 69.3249)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="69.325"
                        r="1.29337"
                        transform="rotate(-90 46.8197 69.325)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="69.325"
                        r="1.29337"
                        transform="rotate(-90 68.807 69.325)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9433"
                        cy="69.325"
                        r="1.29337"
                        transform="rotate(-90 57.9433 69.325)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.29337"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 1.29337 57.9433)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.29337"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 1.29337 24.0568)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 12.6747 57.9433)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 12.6747 24.0568)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 24.0575 57.9433)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 24.0575 24.0568)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 35.4379 57.9433)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 35.4379 24.0568)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="57.9431"
                        r="1.29337"
                        transform="rotate(-90 46.8197 57.9431)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="24.0567"
                        r="1.29337"
                        transform="rotate(-90 46.8197 24.0567)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="57.9431"
                        r="1.29337"
                        transform="rotate(-90 68.807 57.9431)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="24.0567"
                        r="1.29337"
                        transform="rotate(-90 68.807 24.0567)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9433"
                        cy="57.9431"
                        r="1.29337"
                        transform="rotate(-90 57.9433 57.9431)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9443"
                        cy="24.0567"
                        r="1.29337"
                        transform="rotate(-90 57.9443 24.0567)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.29337"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 1.29337 46.5615)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.29337"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 1.29337 12.6751)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 12.6747 46.5615)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 12.6747 12.6751)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 24.0575 46.5615)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 24.0575 12.6751)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 35.4379 46.5615)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 35.4379 12.6751)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 46.8197 46.5615)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 46.8197 12.6751)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 68.807 46.5615)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 68.807 12.6751)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9433"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 57.9433 46.5615)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9443"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 57.9443 12.6751)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.29337"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 1.29337 35.1798)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.29337"
                        cy="1.2933"
                        r="1.29337"
                        transform="rotate(-90 1.29337 1.2933)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 12.6747 35.1798)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="1.2933"
                        r="1.29337"
                        transform="rotate(-90 12.6747 1.2933)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 24.0575 35.1798)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="1.29336"
                        r="1.29337"
                        transform="rotate(-90 24.0575 1.29336)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 35.4379 35.1798)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="1.29336"
                        r="1.29337"
                        transform="rotate(-90 35.4379 1.29336)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="35.18"
                        r="1.29337"
                        transform="rotate(-90 46.8197 35.18)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="1.29354"
                        r="1.29337"
                        transform="rotate(-90 46.8197 1.29354)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="35.18"
                        r="1.29337"
                        transform="rotate(-90 68.807 35.18)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="1.29354"
                        r="1.29337"
                        transform="rotate(-90 68.807 1.29354)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9443"
                        cy="35.18"
                        r="1.29337"
                        transform="rotate(-90 57.9443 35.18)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9443"
                        cy="1.29354"
                        r="1.29337"
                        transform="rotate(-90 57.9443 1.29354)"
                        fill="#3056D3"
                      />
                    </svg>
                  </span>
                  <span class="absolute right-0 bottom-0">
                    <svg
                      width="22"
                      height="22"
                      viewBox="0 0 22 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z"
                        stroke="#13C296"
                      />
                    </svg>
                  </span>
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">Williams Morgray</h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Cryptocurrency Lead
                  </p>
                  {{-- <div class="flex items-center justify-center">
                    <a
                      href="javascript:void(0)"
                      class="
                        text-[#cdced6]
                        hover:text-primary
                        w-8
                        h-8
                        mx-2
                        flex
                        items-center
                        justify-center
                      "
                    >
                      <svg
                        width="10"
                        height="18"
                        viewBox="0 0 10 18"
                        class="fill-current"
                      >
                        <path
                          d="M9.29878 7.2H7.74898H7.19548V6.61935V4.81936V4.23871H7.74898H8.91133C9.21575 4.23871 9.46483 4.00645 9.46483 3.65806V0.580645C9.46483 0.26129 9.24343 0 8.91133 0H6.89106C4.70474 0 3.18262 1.62581 3.18262 4.03548V6.56129V7.14194H2.62912H0.747223C0.359774 7.14194 0 7.46129 0 7.92581V10.0161C0 10.4226 0.304424 10.8 0.747223 10.8H2.57377H3.12727V11.3806V17.2161C3.12727 17.6226 3.43169 18 3.87449 18H6.47593C6.64198 18 6.78036 17.9129 6.89106 17.7968C7.00176 17.6806 7.08478 17.4774 7.08478 17.3032V11.4097V10.829H7.66596H8.91133C9.2711 10.829 9.54785 10.5968 9.6032 10.2484V10.2194V10.1903L9.99065 8.1871C10.0183 7.98387 9.99065 7.75161 9.8246 7.51935C9.76925 7.37419 9.52018 7.22903 9.29878 7.2Z"
                        />
                      </svg>
                    </a>
                    <a
                      href="javascript:void(0)"
                      class="
                        text-[#cdced6]
                        hover:text-primary
                        w-8
                        h-8
                        mx-2
                        flex
                        items-center
                        justify-center
                      "
                    >
                      <svg
                        width="18"
                        height="14"
                        viewBox="0 0 18 14"
                        class="fill-current"
                      >
                        <path
                          d="M15.9968 2.41096L17.1 1.09589C17.4194 0.739726 17.5065 0.465753 17.5355 0.328767C16.6645 0.821918 15.8516 0.986301 15.329 0.986301H15.1258L15.0097 0.876712C14.3129 0.30137 13.4419 0 12.5129 0C10.4806 0 8.88387 1.58904 8.88387 3.42466C8.88387 3.53425 8.88387 3.69863 8.9129 3.80822L9 4.35616L8.39032 4.32877C4.67419 4.21918 1.62581 1.20548 1.13226 0.684932C0.319355 2.05479 0.783871 3.36986 1.27742 4.19178L2.26452 5.72603L0.696774 4.90411C0.725806 6.05479 1.19032 6.9589 2.09032 7.61644L2.87419 8.16438L2.09032 8.46575C2.58387 9.86301 3.6871 10.4384 4.5 10.6575L5.57419 10.9315L4.55806 11.589C2.93226 12.6849 0.9 12.6027 0 12.5205C1.82903 13.726 4.00645 14 5.51613 14C6.64839 14 7.49032 13.8904 7.69355 13.8082C15.8226 12 16.2 5.15068 16.2 3.78082V3.58904L16.3742 3.47945C17.3613 2.60274 17.7677 2.13699 18 1.86301C17.9129 1.89041 17.7968 1.94521 17.6806 1.9726L15.9968 2.41096Z"
                        />
                      </svg>
                    </a>
                    <a
                      href="javascript:void(0)"
                      class="
                        text-[#cdced6]
                        hover:text-primary
                        w-8
                        h-8
                        mx-2
                        flex
                        items-center
                        justify-center
                      "
                    >
                      <svg
                        width="18"
                        height="18"
                        viewBox="0 0 18 18"
                        class="fill-current"
                      >
                        <path
                          d="M8.90245 12.1939C10.7363 12.1939 12.2229 10.7073 12.2229 8.87352C12.2229 7.0397 10.7363 5.5531 8.90245 5.5531C7.06863 5.5531 5.58203 7.0397 5.58203 8.87352C5.58203 10.7073 7.06863 12.1939 8.90245 12.1939Z"
                        />
                        <path
                          d="M12.5088 0H5.23824C2.34719 0 0 2.34719 0 5.23824V12.4516C0 15.3999 2.34719 17.7471 5.23824 17.7471H12.4516C15.3999 17.7471 17.7471 15.3999 17.7471 12.5088V5.23824C17.7471 2.34719 15.3999 0 12.5088 0ZM8.90215 13.2244C6.46909 13.2244 4.55126 11.2493 4.55126 8.87353C4.55126 6.49771 6.49771 4.52264 8.90215 4.52264C11.278 4.52264 13.2244 6.49771 13.2244 8.87353C13.2244 11.2493 11.3066 13.2244 8.90215 13.2244ZM14.9133 4.92338C14.627 5.23824 14.1976 5.40999 13.711 5.40999C13.2817 5.40999 12.8523 5.23824 12.5088 4.92338C12.1939 4.60851 12.0222 4.20777 12.0222 3.72116C12.0222 3.23454 12.1939 2.86243 12.5088 2.51894C12.8237 2.17545 13.2244 2.0037 13.711 2.0037C14.1404 2.0037 14.5984 2.17545 14.9133 2.49031C15.1995 2.86243 15.3999 3.29179 15.3999 3.74978C15.3712 4.20777 15.1995 4.60851 14.9133 4.92338Z"
                        />
                        <path
                          d="M13.7397 3.03418C13.3676 3.03418 13.0527 3.34905 13.0527 3.72116C13.0527 4.09328 13.3676 4.40815 13.7397 4.40815C14.1118 4.40815 14.4267 4.09328 14.4267 3.72116C14.4267 3.34905 14.1405 3.03418 13.7397 3.03418Z"
                        />
                      </svg>
                    </a>
                  </div> --}}
                </div>
              </div>
            </div>
            <div class="w-full sm:w-1/2 lg:w-1/4 px-4">
              <div class="mb-10 wow fadeInUp" data-wow-delay=".2s">
                <div
                  class="
                    relative
                    w-[170px]
                    h-170px]
                    rounded-full
                    z-10
                    mx-auto
                    mb-6
                  "
                >
                  <img
                    src="{{asset('assets/theme_asset/img/faces/13.jpg')}}"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  <span class="absolute top-0 left-0 z-[-1]">
                    <svg
                      width="71"
                      height="82"
                      viewBox="0 0 71 82"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle
                        cx="1.29337"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 1.29337 80.7066)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 12.6747 80.7066)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 24.0575 80.7066)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 35.4379 80.7066)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 46.8197 80.7066)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 68.807 80.7066)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9443"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 57.9443 80.7066)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.29337"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 1.29337 69.3249)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 12.6747 69.3249)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 24.0575 69.3249)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 35.4379 69.3249)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="69.325"
                        r="1.29337"
                        transform="rotate(-90 46.8197 69.325)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="69.325"
                        r="1.29337"
                        transform="rotate(-90 68.807 69.325)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9433"
                        cy="69.325"
                        r="1.29337"
                        transform="rotate(-90 57.9433 69.325)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.29337"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 1.29337 57.9433)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.29337"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 1.29337 24.0568)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 12.6747 57.9433)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 12.6747 24.0568)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 24.0575 57.9433)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 24.0575 24.0568)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 35.4379 57.9433)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 35.4379 24.0568)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="57.9431"
                        r="1.29337"
                        transform="rotate(-90 46.8197 57.9431)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="24.0567"
                        r="1.29337"
                        transform="rotate(-90 46.8197 24.0567)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="57.9431"
                        r="1.29337"
                        transform="rotate(-90 68.807 57.9431)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="24.0567"
                        r="1.29337"
                        transform="rotate(-90 68.807 24.0567)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9433"
                        cy="57.9431"
                        r="1.29337"
                        transform="rotate(-90 57.9433 57.9431)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9443"
                        cy="24.0567"
                        r="1.29337"
                        transform="rotate(-90 57.9443 24.0567)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.29337"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 1.29337 46.5615)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.29337"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 1.29337 12.6751)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 12.6747 46.5615)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 12.6747 12.6751)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 24.0575 46.5615)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 24.0575 12.6751)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 35.4379 46.5615)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 35.4379 12.6751)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 46.8197 46.5615)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 46.8197 12.6751)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 68.807 46.5615)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 68.807 12.6751)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9433"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 57.9433 46.5615)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9443"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 57.9443 12.6751)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.29337"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 1.29337 35.1798)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.29337"
                        cy="1.2933"
                        r="1.29337"
                        transform="rotate(-90 1.29337 1.2933)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 12.6747 35.1798)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="1.2933"
                        r="1.29337"
                        transform="rotate(-90 12.6747 1.2933)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 24.0575 35.1798)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="1.29336"
                        r="1.29337"
                        transform="rotate(-90 24.0575 1.29336)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 35.4379 35.1798)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="1.29336"
                        r="1.29337"
                        transform="rotate(-90 35.4379 1.29336)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="35.18"
                        r="1.29337"
                        transform="rotate(-90 46.8197 35.18)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="1.29354"
                        r="1.29337"
                        transform="rotate(-90 46.8197 1.29354)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="35.18"
                        r="1.29337"
                        transform="rotate(-90 68.807 35.18)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="1.29354"
                        r="1.29337"
                        transform="rotate(-90 68.807 1.29354)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9443"
                        cy="35.18"
                        r="1.29337"
                        transform="rotate(-90 57.9443 35.18)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9443"
                        cy="1.29354"
                        r="1.29337"
                        transform="rotate(-90 57.9443 1.29354)"
                        fill="#3056D3"
                      />
                    </svg>
                  </span>
                  <span class="absolute right-0 bottom-0">
                    <svg
                      width="22"
                      height="22"
                      viewBox="0 0 22 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z"
                        stroke="#13C296"
                      />
                    </svg>
                  </span>
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Anna Swift
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    Agriculture Associate
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full sm:w-1/2 lg:w-1/4 px-4">
              <div class="mb-10 wow fadeInUp" data-wow-delay=".25s">
                <div
                  class="
                    relative
                    w-[170px]
                    h-170px]
                    rounded-full
                    z-10
                    mx-auto
                    mb-6
                  "
                >
                  <img
                    src="{{asset('assets/theme_asset/img/faces/16.jpg')}}"
                    alt="image"
                    class="w-full rounded-full"
                  />
                  <span class="absolute top-0 left-0 z-[-1]">
                    <svg
                      width="71"
                      height="82"
                      viewBox="0 0 71 82"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <circle
                        cx="1.29337"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 1.29337 80.7066)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 12.6747 80.7066)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 24.0575 80.7066)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 35.4379 80.7066)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 46.8197 80.7066)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 68.807 80.7066)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9443"
                        cy="80.7066"
                        r="1.29337"
                        transform="rotate(-90 57.9443 80.7066)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.29337"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 1.29337 69.3249)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 12.6747 69.3249)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 24.0575 69.3249)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="69.3249"
                        r="1.29337"
                        transform="rotate(-90 35.4379 69.3249)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="69.325"
                        r="1.29337"
                        transform="rotate(-90 46.8197 69.325)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="69.325"
                        r="1.29337"
                        transform="rotate(-90 68.807 69.325)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9433"
                        cy="69.325"
                        r="1.29337"
                        transform="rotate(-90 57.9433 69.325)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.29337"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 1.29337 57.9433)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.29337"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 1.29337 24.0568)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 12.6747 57.9433)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 12.6747 24.0568)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 24.0575 57.9433)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 24.0575 24.0568)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="57.9433"
                        r="1.29337"
                        transform="rotate(-90 35.4379 57.9433)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="24.0568"
                        r="1.29337"
                        transform="rotate(-90 35.4379 24.0568)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="57.9431"
                        r="1.29337"
                        transform="rotate(-90 46.8197 57.9431)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="24.0567"
                        r="1.29337"
                        transform="rotate(-90 46.8197 24.0567)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="57.9431"
                        r="1.29337"
                        transform="rotate(-90 68.807 57.9431)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="24.0567"
                        r="1.29337"
                        transform="rotate(-90 68.807 24.0567)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9433"
                        cy="57.9431"
                        r="1.29337"
                        transform="rotate(-90 57.9433 57.9431)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9443"
                        cy="24.0567"
                        r="1.29337"
                        transform="rotate(-90 57.9443 24.0567)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.29337"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 1.29337 46.5615)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.29337"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 1.29337 12.6751)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 12.6747 46.5615)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 12.6747 12.6751)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 24.0575 46.5615)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 24.0575 12.6751)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 35.4379 46.5615)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 35.4379 12.6751)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 46.8197 46.5615)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 46.8197 12.6751)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 68.807 46.5615)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 68.807 12.6751)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9433"
                        cy="46.5615"
                        r="1.29337"
                        transform="rotate(-90 57.9433 46.5615)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9443"
                        cy="12.6751"
                        r="1.29337"
                        transform="rotate(-90 57.9443 12.6751)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.29337"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 1.29337 35.1798)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="1.29337"
                        cy="1.2933"
                        r="1.29337"
                        transform="rotate(-90 1.29337 1.2933)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 12.6747 35.1798)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="12.6747"
                        cy="1.2933"
                        r="1.29337"
                        transform="rotate(-90 12.6747 1.2933)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 24.0575 35.1798)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="24.0575"
                        cy="1.29336"
                        r="1.29337"
                        transform="rotate(-90 24.0575 1.29336)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="35.1798"
                        r="1.29337"
                        transform="rotate(-90 35.4379 35.1798)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="35.4379"
                        cy="1.29336"
                        r="1.29337"
                        transform="rotate(-90 35.4379 1.29336)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="35.18"
                        r="1.29337"
                        transform="rotate(-90 46.8197 35.18)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="46.8197"
                        cy="1.29354"
                        r="1.29337"
                        transform="rotate(-90 46.8197 1.29354)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="35.18"
                        r="1.29337"
                        transform="rotate(-90 68.807 35.18)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="68.807"
                        cy="1.29354"
                        r="1.29337"
                        transform="rotate(-90 68.807 1.29354)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9443"
                        cy="35.18"
                        r="1.29337"
                        transform="rotate(-90 57.9443 35.18)"
                        fill="#3056D3"
                      />
                      <circle
                        cx="57.9443"
                        cy="1.29354"
                        r="1.29337"
                        transform="rotate(-90 57.9443 1.29354)"
                        fill="#3056D3"
                      />
                    </svg>
                  </span>
                  <span class="absolute right-0 bottom-0">
                    <svg
                      width="22"
                      height="22"
                      viewBox="0 0 22 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M21.5 21.5L0.505701 21.5C0.767606 10.023 10.023 0.767604 21.5 0.505697L21.5 21.5Z"
                        stroke="#13C296"
                      />
                    </svg>
                  </span>
                </div>
                <div class="text-center">
                  <h4 class="font-medium text-lg text-dark mb-2">
                    Lucas Noah
                  </h4>
                  <p class="font-medium text-sm text-body-color mb-5">
                    ACTIVE EQUITY
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ====== Team Section End -->

      
      <!-- ====== Call To Action Section Start -->
    <section class="py-20 lg:py-[120px] bg-white dark:bg-dark">
        <div class="container mx-auto">
          <div
              class="relative z-10 overflow-hidden rounded bg-primary py-12 px-8 md:p-[70px]"
              >
              <div class="flex flex-wrap items-center -mx-4">
                <div class="w-full px-4 lg:w-1/2">
                    <span class="block mb-4 text-base font-medium text-white">
                      Unique and Sustanable 
                    </span>
                    <h2
                      class="mb-6 text-3xl font-bold leading-tight text-white sm:mb-8 sm:text-[40px]/[48px] lg:mb-0"
                      >
                      <span class="xs:block"> Get started with </span>
                      <span>{{ env('APP_NAME') }}</span>
                    </h2>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <div class="flex flex-wrap lg:justify-end">
                      <a
                          href="{{ route('login') }}"
                          class="inline-flex py-3 my-1 mr-4 text-base font-medium transition bg-white rounded-md hover:bg-shadow-1 text-primary px-7"
                          >
                      Log in
                      </a>
                      <a
                          href="{{ route('register') }}"
                          class="inline-flex py-3 my-1 text-base font-medium text-white transition rounded-md bg-secondary px-7 hover:bg-opacity-90"
                          >
                      Register
                      </a>
                    </div>
                </div>
              </div>
              <div>
                <span class="absolute top-0 left-0 z-[-1]">
                    <svg
                      width="189"
                      height="162"
                      viewBox="0 0 189 162"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                      >
                      <ellipse
                          cx="16"
                          cy="-16.5"
                          rx="173"
                          ry="178.5"
                          transform="rotate(180 16 -16.5)"
                          fill="url(#paint0_linear)"
                          />
                      <defs>
                          <linearGradient
                            id="paint0_linear"
                            x1="-157"
                            y1="-107.754"
                            x2="98.5011"
                            y2="-106.425"
                            gradientUnits="userSpaceOnUse"
                            >
                            <stop stop-color="white" stop-opacity="0.07" />
                            <stop offset="1" stop-color="white" stop-opacity="0" />
                          </linearGradient>
                      </defs>
                    </svg>
                </span>
                <span class="absolute bottom-0 right-0 z-[-1]">
                    <svg
                      width="191"
                      height="208"
                      viewBox="0 0 191 208"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                      >
                      <ellipse
                          cx="173"
                          cy="178.5"
                          rx="173"
                          ry="178.5"
                          fill="url(#paint0_linear)"
                          />
                      <defs>
                          <linearGradient
                            id="paint0_linear"
                            x1="-3.27832e-05"
                            y1="87.2457"
                            x2="255.501"
                            y2="88.5747"
                            gradientUnits="userSpaceOnUse"
                            >
                            <stop stop-color="white" stop-opacity="0.07" />
                            <stop offset="1" stop-color="white" stop-opacity="0" />
                          </linearGradient>
                      </defs>
                    </svg>
                </span>
              </div>
          </div>
        </div>
      </section>
      <!-- ====== Call To Action Section End -->

    <x-pages.footer/>
</x-pages-layout>
