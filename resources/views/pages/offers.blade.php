@extends('components.layouts.app')

@section('content')
  <main class="container">
    <h2 class="title mt-12 mb-10">
      АВТОКРЕДИТ БЕЗ ПРЕДОПЛАТЫ
    </h2>

    <p>Мечтаете о новом автомобиле, но не хватает накоплений на первый взнос?</p>
    <p>Не беспокойтесь!</p>
    <p>Спитамен Банк предлагает автокредит без предоплаты по выгодным ставкам:</p>
    <br>
    <p>14% годовых в долларах</p>
    <p>24% годовых в сомони</p>
    <br>
    <p>Срок кредитования - до 48 месяцев!</p>
    <p>Плюс, вы получаете бесплатную страховку КАСКО и гарантию до 3 лет на приобретаемый автомобиль.</p>
    <p class="mb-10">Подробности по номеру +992 446505070</p>

    <section class="mb-10 lg:mb-20">
      <div class="banners flex items-center gap-6 md:gap-12 lg:gap-28 max-w-screen-lg mx-auto lg:mt-20">
        <button class="swiper-button-prev after:hidden text-inherit m-0 transform -scale-x-100 flex items-center justify-center w-8 h-8 relative bottom-0 top-0 left-0 right-0">
          <svg class="flex items-center !w-[26px] !h-[22px]" width="26" height="22">
            <use xlink:href="#arrow" />
          </svg>
        </button>

        <div class="swiper">
          <div class="swiper-wrapper relative">
            @foreach (range(1, 3) as $key)
              <div class="swiper-slide">
                <img class="h-auto w-full object-contain" src="{{ asset('images/offers.png') }}" width="1000" height="252" alt="Спец предложения">
              </div>
            @endforeach
          </div>
        </div>

        <button class="swiper-button-next after:hidden text-inherit m-0 flex items-center justify-center w-8 h-8 relative bottom-0 top-0 left-0 right-0">
          <svg class="flex items-center !w-[26px] !h-[22px]" width="26" height="22">
            <use xlink:href="#arrow" />
          </svg>
        </button>
      </div>
    </section>
  </main>
@endsection


@section('scripts')
  <script>
    new Swiper('.banners .swiper', {
      loop: true,
      navigation: {
        nextEl: '.banners .swiper-button-next',
        prevEl: '.banners .swiper-button-prev',
      },
    });
  </script>
@endsection
