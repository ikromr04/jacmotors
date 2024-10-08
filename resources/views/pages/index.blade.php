@extends('components.layouts.app')

@section('styles')
  <style>
    .banners {
      .swiper-pagination {
        display: flex;
        align-items: center;
        position: absolute;
        left: 50%;
        bottom: 16px;
        transform: translateX(-50%);
        max-width: max-content;
        gap: 8px;

        @media (min-width: 1024px) {
          bottom: 48px;
          gap: 16px;
        }
      }

      .swiper-pagination-bullet {
        background-color: white;
        opacity: 1;
        display: block;
        width: 4px;
        height: 4px;
        margin: 0 !important;

        @media (min-width: 1024px) {
          width: 8px;
          height: 8px;
        }
      }

      .swiper-pagination-bullet-active {
        background-color: transparent;
        width: 8px;
        height: 8px;
        border: 1px solid #AE2C27;

        @media (min-width: 1024px) {
          width: 12px;
          height: 12px;
        }
      }
    }

    .test-drive {
      .swiper-button-disabled {
        display: none;
        visibility: hidden;
      }
    }
  </style>
@endsection

@section('content')
  <main>
    <div class="swiper banners">
      <div class="swiper-wrapper relative">
        @foreach ($data->banners as $banner)
          <div class="relative swiper-slide min-h-[calc(100vh-72px)] bg-slate-400 text-white flex items-end py-10 lg:min-h-[calc(100vh-80px)] lg:py-20">
            <img class="absolute top-0 left-0 w-full h-full object-cover -z-[1]" src="{{ asset($banner->image) }}" width="1440" height="650" alt="{{ $banner->description }}">

            <div class="container flex flex-col items-center uppercase">
              <h2 class="whitespace-pre-line text-center font-semibold mb-2 text-lg leading-[1.3] lg:text-3xl">{{ $banner->description }}</h2>

              @if ($banner->link)
                <a class="text-sm flex items-center gap-3 transition-all duration-300 hover:opacity-60 lg:text-base" href="{{ $banner->link }}">
                  Подробнее
                  <span class="flex items-center justify-center w-5 h-5 rounded-full border pl-[1px]">
                    <svg width="4" height="10">
                      <use xlink:href="#more-info" />
                    </svg>
                  </span>
                </a>
              @endif
            </div>
          </div>
        @endforeach
      </div>
      <div class="swiper-pagination"></div>
    </div>

    <div class="swiper test-drive overflow-hidden relative bg-slate-400 text-white">
      <div class="container relative">
        <div class="absolute top-6 left-0 flex gap-x-2">
          <button class="swiper-button-prev after:hidden text-inherit m-0 transform -scale-x-100 flex items-center justify-center w-8 h-8 relative bottom-0 top-0 left-0 right-0">
            <svg class="flex items-center !w-[26px] !h-[22px]" width="26" height="22">
              <use xlink:href="#arrow" />
            </svg>
          </button>
          <button class="swiper-button-next after:hidden text-inherit m-0 flex items-center justify-center w-8 h-8 relative bottom-0 top-0 left-0 right-0">
            <svg class="flex items-center !w-[26px] !h-[22px]" width="26" height="22">
              <use xlink:href="#arrow" />
            </svg>
          </button>
        </div>
      </div>
      <div class="swiper-wrapper relative">
        @foreach ($data->testDrives as $car)
          <div class="swiper-slide overflow-hidden">
            <div class="container flex flex-col uppercase justify-between h-full min-h-[520px] pb-6 pt-20">
              <img class="absolute -top-[2px] right-[calc(50%-64px)] w-[calc(50%+65px)] brightness-[30%] -z-10 h-[110%] object-cover mask-left" src="{{ $car->main_image }}" width="1440" height="560" alt="{{ $car->name }}">
              <img class="absolute -top-[2px] left-[calc(50%-65px)] w-[calc(50%+65px)] h-[110%] object-cover -z-10 mask-right" src="{{ $car->exterior_image }}" width="1440" height="560" alt="{{ $car->name }}">

              <div>
                <h3 class="text-5xl font-bold mb-4">{{ $car->name }}</h3>

                <a class="text-sm flex items-center gap-3 max-w-max transition-all duration-300 hover:opacity-60 lg:text-base" href="{{ route('page.models.show', $car->name) }}">
                  Подробнее
                  <span class="flex items-center justify-center w-5 h-5 rounded-full border pl-[1px]">
                    <svg width="4" height="10">
                      <use xlink:href="#more-info" />
                    </svg>
                  </span>
                </a>
              </div>

              <a class="flex items-center gap-3 uppercase max-w-max" href="{{ route('page.test-drive', $car->name) }}">
                <svg width="33" height="37">
                  <use xlink:href="#sign-up" />
                </svg>
                Записаться на тест-драйв
              </a>
            </div>
          </div>
        @endforeach
      </div>
    </div>

    <section class="container">
      <h2 class="title">Модельный ряд</h2>
    </section>
  </main>
@endsection

@section('scripts')
  <script>
    new Swiper('.banners', {
      loop: true,
      autoplay: {
        delay: 5000,
      },
      pagination: {
        el: '.banners .swiper-pagination',
      },
    });

    new Swiper('.test-drive', {
      navigation: {
        nextEl: '.test-drive .swiper-button-next',
        prevEl: '.test-drive .swiper-button-prev',
      },
    });
  </script>
@endsection
