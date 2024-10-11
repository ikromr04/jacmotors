<nav class="fixed top-0 right-0 w-full max-w-80 h-full bg-[#181818] py-8 px-7 flex flex-col shadow-2xl transition-all duration-300 transform translate-x-full group-[.menu-shown]:translate-x-0 lg:static lg:w-auto lg:max-w-none lg:h-auto lg:py-0 lg:px-0 lg:shadow-none lg:translate-x-0">
  <div class="flex justify-end">
    <button class="hover:text-[#BA2031] transition-all duration-300 focus:text-[#BA2031] outline-none focus:outline-none lg:hidden" type="button" onclick="document.body.classList.remove('menu-shown')">
      <svg width="24" height="24">
        <title>{{ __('closeMenu') }}</title>
        <use xlink:href="#close" />
      </svg>
    </button>
  </div>

  <ul class="flex flex-col lg:flex-row lg:gap-x-6 xl:gap-x-10">
    <li>
      <a class="block py-2 hover:text-[#BA2031] transition-all duration-300 focus:text-[#BA2031] outline-none focus:outline-none relative{{ $routeName === 'page.models' ? ' lg:border-b-[1px] lg:border-white text-[#BA2031] lg:text-inherit' : '' }}" href="{{ route('page.models') }}">
        {{ __('title')['page.models'] }}
      </a>
    </li>
    <li>
      <a class="block py-2 hover:text-[#BA2031] transition-all duration-300 focus:text-[#BA2031] outline-none focus:outline-none relative{{ $routeName === 'page.service' ? ' lg:border-b-[1px] lg:border-white text-[#BA2031] lg:text-inherit' : '' }}" href="{{ route('page.service') }}">
        {{ __('title')['page.service'] }}
      </a>
    </li>
    <li>
      <a class="block py-2 hover:text-[#BA2031] transition-all duration-300 focus:text-[#BA2031] outline-none focus:outline-none relative" href="{{ route('page.index') . '#offers' }}">
        {{ __('title')['page.offers'] }}
      </a>
    </li>
    <li>
      <a class="block py-2 hover:text-[#BA2031] transition-all duration-300 focus:text-[#BA2031] outline-none focus:outline-none relative" href="#address" onclick="document.body.classList.remove('menu-shown')">
        {{ __('title')['page.address'] }}
      </a>
    </li>
  </ul>

  <a class="block py-2 hover:text-[#BA2031] transition-all duration-300 focus:text-[#BA2031] outline-none focus:outline-none lg:hidden" href="tel:+992446505070">
    +992 446 50 50 70
  </a>

  <ul class="mt-auto flex gap-x-4 lg:hidden">
    <li>
      <a class="flex items-center justify-center w-11 h-11 bg-[#D9D9D9] bg-opacity-30 rounded-full pr-1 transition-all duration-300 outline-none focus:outline-none focus:bg-[#BA2031] hover:bg-[#BA2031]" href="" target="_blank">
        <svg width="24" height="24">
          <title>{{ __('telegram') }}</title>
          <use xlink:href="#telegram" />
        </svg>
      </a>
    </li>
    <li>
      <a class="flex items-center justify-center w-11 h-11 bg-[#D9D9D9] bg-opacity-30 rounded-full pr-[2px] transition-all duration-300 outline-none focus:outline-none focus:bg-[#BA2031] hover:bg-[#BA2031]" href="https://www.instagram.com/jacmotors.tj/" target="_blank">
        <svg width="24" height="24">
          <title>{{ __('instagram') }}</title>
          <use xlink:href="#instagram" />
        </svg>
      </a>
    </li>
    <li>
      <a class="flex items-center justify-center w-11 h-11 bg-[#D9D9D9] bg-opacity-30 rounded-full transition-all duration-300 outline-none focus:outline-none focus:bg-[#BA2031] hover:bg-[#BA2031]" href="https://www.facebook.com/profile.php?id=100089136972855&mibextid=LQQJ4d" target="_blank">
        <svg width="24" height="24">
          <title>{{ __('facebook') }}</title>
          <use xlink:href="#facebook" />
        </svg>
      </a>
    </li>
  </ul>
</nav>
