<header class="bg-[#181818] text-white uppercase font-medium py-5">
  <div class="container grid grid-cols-3 items-center lg:flex lg:gap-x-8 xl:gap-x-14">
    <div class="flex justify-start lg:hidden">
      <button class="uppercase hover:text-[#BA2031] transition-all duration-300 focus:text-[#BA2031] outline-none focus:outline-none" type="button" onclick="document.body.classList.add('menu-shown')">
        {{ __('header')['menu'] }}
      </button>
    </div>

    <div class="fixed w-screen h-screen left-0 top-0 transition-all duration-300 pointer-events-none backdrop-blur-sm opacity-0 group-[.menu-shown]:pointer-events-auto group-[.menu-shown]:opacity-100 lg:opacity-100 lg:backdrop-blur-0 lg:static lg:w-auto lg:h-auto lg:pointer-events-auto lg:mr-auto">
      <x-layouts.navbar />
    </div>

    <div class="flex justify-center lg:order-[-1]">
      <x-ui.logo />
    </div>

    <div class="flex justify-end">
      <a class="hover:text-[#BA2031] transition-all duration-300 focus:text-[#BA2031] outline-none focus:outline-none" href="{{ route('page.index') . '#contacts' }}">
        {{ __('title')['page.contacts'] }}
      </a>
    </div>
  </div>
</header>
