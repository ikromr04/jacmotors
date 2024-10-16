<footer class="mt-auto bg-[#181818] text-white">
  <div class="bg-[#303030] py-4 lg:py-10">
    <p class="container text-justify">
      <span class="text-[#BA2031]">JAC</span> Motors является ведущей китайской автомобильной компанией. Она известна доступными ценами, хорошим оснащением и разнообразием моделей. 17 марта 2023 года открылся первый и единственный дистрибьютор JAC в Таджикистане. Теперь вы можете приобрести надежные автомобили JAC с полным спектром гарантийного и сервисного обслуживания.
    </p>
  </div>
  <div class="container text-center py-8 lg:text-left lg:py-10">
    <div class="lg:flex lg:justify-between">
      <h2 class="whitespace-pre-line mb-8">{{ "Официальный Дистрибьютер\nJAC Motors в Таджикистане" }}</h2>

      <address class="flex flex-col not-italic gap-y-2 mb-12 lg:text-right" id="contacts">
        <a class="transition-all duration-300 outline-none focus:outline-none focus:text-[#BA2031] hover:text-[#BA2031]" id="address" href="https://www.google.com/maps/place/Sportivnaya+Street,+Dushanbe/@38.5866174,68.7650474,17z/data=!3m1!4b1!4m6!3m5!1s0x38b5d3cd66bec97d:0xeffeadad31c52486!8m2!3d38.5866174!4d68.7650474!16s%2Fg%2F1tpc6bjn?entry=ttu&g_ep=EgoyMDI0MDgyOC4wIKXMDSoASAFQAw%3D%3D" target="_blank">
          г. Душанбе, ул. Спортивная
        </a>
        <a class="transition-all duration-300 outline-none focus:outline-none focus:text-[#BA2031] hover:text-[#BA2031]" href="tel:+992446505070">
          +992 446 50 50 70
        </a>
        <a class="transition-all duration-300 outline-none focus:outline-none focus:text-[#BA2031] hover:text-[#BA2031]" href="mailto:info@jacmotors.tj">
          info@jacmotors.tj
        </a>
      </address>
    </div>

    <div class="flex flex-col items-center gap-10 mb-10 lg:flex-row-reverse lg:justify-between">
      <ul class="flex gap-x-4">
        <li>
          <a class="flex items-center justify-center w-11 h-11 bg-[#D9D9D9] bg-opacity-30 rounded-full pr-1 transition-all duration-300 outline-none focus:outline-none focus:bg-[#BA2031] hover:bg-[#BA2031]" href="https://t.me/jacmotorstj" target="_blank">
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

      <x-ui.logo horizontal />
    </div>

    <div class="flex flex-col items-center gap-4 text-[#ADADAD] lg:flex-row-reverse lg:justify-between">
      <a class="transition-all duration-300 outline-none focus:outline-none focus:text-white hover:text-white" href="{{ asset('privacy-policy.pdf') }}" target="_blank">
        Политика конфиденциальности
      </a>
      <p>
        {{ date('Y') }}. Все права защищены.
      </p>
    </div>
  </div>
</footer>
