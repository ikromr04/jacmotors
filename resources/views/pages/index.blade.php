@extends('components.layouts.app')

@section('styles')
  <style>
    .banners {
      .swiper-pagination {
        display: flex;
        align-items: center;
        max-width: max-content;
        gap: 8px;

        @media (min-width: 1024px) {
          bottom: 48px;
          gap: 16px;
        }
      }

      .swiper-pagination {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        margin-bottom: 12px;

        @media (min-width: 1024px) {
          margin-bottom: 0;
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

    .specs {
      .swiper-pagination {
        display: flex;
        align-items: center;
        max-width: max-content;
        gap: 8px;

        @media (min-width: 1024px) {
          bottom: 28px;
          gap: 16px;
        }
      }

      .swiper-pagination {
        position: relative;
        left: 50%;
        transform: translateX(-50%);
        margin-bottom: 12px;

        @media (min-width: 1024px) {
          margin-bottom: 0;
        }
      }

      .swiper-pagination-bullet {
        background-color: black;
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

    .news {
      .swiper-pagination {
        display: flex;
        align-items: center;
        max-width: max-content;
        gap: 8px;
      }

      .swiper-pagination {
        position: relative;
        top: 0;
        left: 0;
        display: flex;
        justify-content: center;
        margin: 0 auto;
      }

      .swiper-pagination-bullet {
        background-color: black;
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

    .models {
      .swiper-pagination {
        display: flex;
        align-items: center;
        max-width: max-content;
        gap: 8px;
      }

      .swiper-pagination-bullet {
        background-color: #181818;
        opacity: 1;
        display: block;
        width: 6px;
        height: 6px;
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

    [data-models="0"] [data-category="0"] {
      padding-bottom: 4px;
      border-bottom: 1px solid black;
    }

    [data-models="1"] [data-category="1"] {
      padding-bottom: 4px;
      border-bottom: 1px solid black;
    }

    [data-models="2"] [data-category="2"] {
      padding-bottom: 4px;
      border-bottom: 1px solid black;
    }

    [data-models="3"] [data-category="3"] {
      padding-bottom: 4px;
      border-bottom: 1px solid black;
    }

    [data-models="4"] [data-category="4"] {
      padding-bottom: 4px;
      border-bottom: 1px solid black;
    }

    [data-models="1"] [data-slide]:not([data-slide="1"]) {
      display: none;
    }

    [data-models="2"] [data-slide]:not([data-slide="2"]) {
      display: none;
    }

    [data-models="3"] [data-slide]:not([data-slide="3"]) {
      display: none;
    }

    [data-models="4"] [data-slide]:not([data-slide="4"]) {
      display: none;
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
      <div class="swiper-wrapper relative -pt-1">
        <div class="swiper-slide overflow-hidden relative">
          <img class="absolute top-0 left-0 w-full h-full object-cover -z-10" src="{{ asset('/images/t-drive-js6.jpg') }}" width="1440" height="560">

          <div class="container flex flex-col uppercase justify-end h-full min-h-[520px] pb-6 pt-20 relative z-0">
            <div>
              <h3 class="text-5xl font-bold mb-4">JAC JS6</h3>

              <a class="text-sm flex items-center gap-3 max-w-max mb-28 transition-all duration-300 hover:opacity-60 lg:text-base" href="{{ route('page.models.show', 'JAC%20JS6') }}">
                Подробнее
                <span class="flex items-center justify-center w-5 h-5 rounded-full border pl-[1px]">
                  <svg width="4" height="10">
                    <use xlink:href="#more-info" />
                  </svg>
                </span>
              </a>
            </div>

            <a class="flex items-center gap-3 uppercase max-w-max" href="{{ route('page.test-drive.show', 'JAC%20JS6') }}">
              <svg width="33" height="37">
                <use xlink:href="#sign-up" />
              </svg>
              Записаться на тест-драйв
            </a>
          </div>
        </div>
        <div class="swiper-slide overflow-hidden relative">
          <img class="absolute top-0 left-0 w-full h-full object-cover -z-10" src="{{ asset('/images/t-drive-t9.jpg') }}" width="1440" height="560">

          <div class="container flex flex-col uppercase justify-end h-full min-h-[520px] pb-6 pt-20 relative z-0">
            <div>
              <h3 class="text-5xl font-bold mb-4">JAC T9</h3>

              <a class="text-sm flex items-center gap-3 max-w-max mb-28 transition-all duration-300 hover:opacity-60 lg:text-base" href="{{ route('page.models.show', 'JAC%20T9') }}">
                Подробнее
                <span class="flex items-center justify-center w-5 h-5 rounded-full border pl-[1px]">
                  <svg width="4" height="10">
                    <use xlink:href="#more-info" />
                  </svg>
                </span>
              </a>
            </div>

            <a class="flex items-center gap-3 uppercase max-w-max" href="{{ route('page.test-drive.show', 'JAC%20T9') }}">
              <svg width="33" height="37">
                <use xlink:href="#sign-up" />
              </svg>
              Записаться на тест-драйв
            </a>
          </div>
        </div>
        <div class="swiper-slide overflow-hidden relative">
          <img class="absolute top-0 left-0 w-full h-full object-cover -z-10" src="{{ asset('/images/t-drive-ejs4.jpg') }}" width="1440" height="560">

          <div class="container flex flex-col uppercase justify-end h-full min-h-[520px] pb-6 pt-20 relative z-0">
            <div>
              <h3 class="text-5xl font-bold mb-4">JAC e-JS4</h3>

              <a class="text-sm flex items-center gap-3 max-w-max mb-28 transition-all duration-300 hover:opacity-60 lg:text-base" href="{{ route('page.models.show', 'JAC%20e-JS4') }}">
                Подробнее
                <span class="flex items-center justify-center w-5 h-5 rounded-full border pl-[1px]">
                  <svg width="4" height="10">
                    <use xlink:href="#more-info" />
                  </svg>
                </span>
              </a>
            </div>

            <a class="flex items-center gap-3 uppercase max-w-max" href="{{ route('page.test-drive.show', 'JAC%20e-JS4') }}">
              <svg width="33" height="37">
                <use xlink:href="#sign-up" />
              </svg>
              Записаться на тест-драйв
            </a>
          </div>
        </div>
      </div>
    </div>

    <section class="container mt-8 mb-10" data-models="0">
      <h2 class="title mb-6">Модельный ряд</h2>

      <ul class="flex flex-wrap gap-x-4 mb-6 justify-center lg:mb-10">
        <li>
          <button class="font-semibold text-sm px-1" data-category="0" type="button">
            Все модели
          </button>
        </li>
        @foreach ($data->categories as $category)
          <li>
            <button class="font-semibold text-sm px-1" data-category="{{ $category->id }}" type="button">
              {{ $category->name }}
            </button>
          </li>
        @endforeach
      </ul>

      <div class="swiper models">
        <div class="swiper-wrapper flex">
          @foreach ($data->models as $key => $model)
            <div class="swiper-slide relative z-0 text-white grid model-grid rounded-md overflow-hidden min-h-[190px] mb-10" data-slide="{{ $model->category_id }}">
              <div>
                <img class="absolute w-full h-full -z-10 object-cover" src="{{ $model->card_image }}" width="1440" height="560" alt="{{ $model->name }}">
              </div>

              <div class="{{ $key % 2 == 0 ? 'bg-[#2D2D2D]' : 'bg-[#646363]' }} grow p-4 min-w-[160px] flex flex-col pb-6 relative z-0">
                <div class="opacity-70 flex gap-2 items-center leading-none mb-auto text-xs">
                  <time class="flex pr-2 border-r">{{ $model->year }}</time>
                  {{ mb_substr($model->category->name, 0, mb_strlen($model->category->name) - 1) }}
                </div>
                <p class="text-lg mb-4">{{ $model->price }}</p>
                <h3 class="font-bold text-xl mb-2">{{ $model->name }}</h3>
                <a class="text-xs flex items-center gap-3 max-w-max transition-all duration-300 hover:opacity-60 uppercase" href="{{ route('page.models.show', $model->name) }}">
                  Подробнее
                  <span class="flex items-center justify-center w-5 h-5 rounded-full border pl-[1px]">
                    <svg width="4" height="10">
                      <use xlink:href="#more-info" />
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          @endforeach
        </div>

        <div class="container flex items-baseline gap-x-8 justify-center" data-control>
          <button class="swiper-button-prev after:hidden text-inherit m-0 transform -scale-x-100 flex items-center justify-center w-8 h-8 relative bottom-0 top-0 left-0 right-0">
            <svg class="flex items-center !w-[26px] !h-[22px]" width="26" height="22">
              <use xlink:href="#arrow" />
            </svg>
          </button>
          <div class="swiper-pagination relative"></div>
          <button class="swiper-button-next after:hidden text-inherit m-0 flex items-center justify-center w-8 h-8 relative bottom-0 top-0 left-0 right-0">
            <svg class="flex items-center !w-[26px] !h-[22px]" width="26" height="22">
              <use xlink:href="#arrow" />
            </svg>
          </button>
        </div>
      </div>
    </section>

    <section class="bg-[#2D2D2D] pt-8 pb-10 text-white lg:pt-14 lg:pb-16">
      <div class="container">
        <h2 class="title mb-10">Услуги и сервис</h2>

        <ul class="grid gap-10 md:grid-cols-2 lg:grid-cols-3">
          <li class="relative before:hidden lg:before:flex before:absolute before:top-[10%] before:right-0 before:w-1 before:h-16 before:bg-white/25">
            <a class="flex flex-col items-center gap-10 pb-4 border-b-2 border-b-transparent hover:border-b-white" href="{{ route('page.service') }}#charge">
              <svg width="86" height="86">
                <use xlink:href="#station" />
              </svg>
              Зарядная станция
            </a>
          </li>
          <li class="relative before:hidden lg:before:flex before:absolute before:top-[10%] before:right-0 before:w-1 before:h-16 before:bg-white/25">
            <a class="flex flex-col items-center gap-10 pb-4 border-b-2 border-b-transparent hover:border-b-white" href="{{ route('page.test-drive') }}">
              <svg width="85" height="86">
                <use xlink:href="#test-drive" />
              </svg>
              Записаться на Тест-Драйв
            </a>
          </li>
          <li>
            <a class="flex flex-col items-center gap-10 pb-4 border-b-2 border-b-transparent hover:border-b-white" href="{{ route('page.service') }}#serv">
              <svg width="86" height="86">
                <use xlink:href="#service" />
              </svg>
              Сервис
            </a>
          </li>
        </ul>
      </div>
    </section>

    <section class="mb-10 lg:mb-20" id="offers">
      <h2 class="title mt-12 mb-10">Спец предложения</h2>

      <div class="specs">
        <div class="swiper-pagination"></div>

        <div class="swiper">
          <div class="swiper-wrapper relative">
            @foreach (range(1, 3) as $key)
              <div class="swiper-slide">
                <div class="text-white lg:grid lg:grid-cols-2">
                  <img class="h-[252px] w-full object-cover" src="{{ asset('images/special-offer.jpg') }}" width="1000" height="252" alt="Спец предложения">

                  <div class="bg-[#303030]">
                    <div class="container py-8 lg:w-auto px-10 lg:flex lg:flex-col lg:justify-center lg:h-[252px]">
                      <small class="opacity-70 uppercase mb-4 block">Спецпредложения</small>
                      <h3 class="title !text-left mb-6">
                        Льготный кредит по низкой процентной ставке
                      </h3>
                      <a class="text-sm flex items-center gap-3 max-w-max transition-all duration-300 hover:opacity-60 lg:text-base" href="{{ route('page.offers') }}">
                        Подробнее
                        <span class="flex items-center justify-center w-5 h-5 rounded-full border pl-[1px]">
                          <svg width="4" height="10">
                            <use xlink:href="#more-info" />
                          </svg>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>

    <div class="news container lg:!pb-20 !max-w-[1300px] mx-auto">
      <div class="swiper">
        <div class="swiper-wrapper relative">
          @foreach ($data->news as $news)
            <div class="swiper-slide">
              <div class="relative z-0 rounded-[5px] overflow-hidden text-white min-h-[480px] flex flex-col justify-end">
                <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-black/70 to-transparent"></div>
                <img class="absolute top-0 left-0 w-full h-full object-cover -z-10" src="{{ asset("/images/$news->img") }}" alt="{{ $news->title }}">

                <div class="relative z-0 py-10 px-9">
                  <p class="mb-2">{{ $news->category }}</p>
                  <h3 class="mb-3">{{ $news->title }}</h3>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>

      <div class="swiper-pagination pb-10 pt-6 lg:!hidden"></div>
    </div>
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

    new Swiper('.news .swiper', {
      loop: true,
      autoplay: {
        delay: 5000,
      },
      pagination: {
        el: '.news .swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 24
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 32
        },
      },
    });

    new Swiper('.specs .swiper', {
      loop: true,
      autoplay: {
        delay: 5000,
      },
      pagination: {
        el: '.specs .swiper-pagination',
        clickable: true,
      },
    });

    new Swiper('.test-drive', {
      navigation: {
        nextEl: '.test-drive .swiper-button-next',
        prevEl: '.test-drive .swiper-button-prev',
      },
    });

    const modelsSwiper = new Swiper('.models', {
      navigation: {
        nextEl: '.models .swiper-button-next',
        prevEl: '.models .swiper-button-prev',
      },
      pagination: {
        el: '.models .swiper-pagination',
      },
      spaceBetween: 24,
      slidesPerView: 1,
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 24
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 32
        },
        1280: {
          slidesPerView: 3,
          spaceBetween: 56
        },
        1400: {
          slidesPerView: 3,
          spaceBetween: 72
        },
      },
    });

    const modelsSection = document.querySelector('[data-models]');

    modelsSection.addEventListener('click', (evt) => {
      if (evt.target.closest('[data-category]')) {
        const
          control = modelsSection.querySelector('[data-control]'),
          wrapper = modelsSection.querySelector('.swiper-wrapper');

        modelsSwiper.slideTo(0);
        modelsSection.dataset.models = evt.target.dataset.category;
        if (evt.target.dataset.category == '0') {
          modelsSwiper.allowTouchMove = true;
          control.style.opacity = '1';
          control.style.pointerEvents = 'all';
          wrapper.style.flexWrap = 'nowrap';
        } else {
          wrapper.style.flexWrap = 'wrap';
          control.style.opacity = '0';
          control.style.pointerEvents = 'none';
          modelsSwiper.allowTouchMove = false;
        }
      }
    })
  </script>
@endsection
