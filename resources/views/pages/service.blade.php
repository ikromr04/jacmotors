@extends('components.layouts.app')

@section('content')
  <main>
    <div class="bg-slate-400 relative">
      <img class="absolute top-0 right-0 object-cover object-right-top w-full h-full z-0" src="{{ asset('/images/service.jpg') }}" alt="Услуги и сервис">

      <div class="flex flex-col justify-end text-white relative z-10 service-vitrin">
        <div class="container min-h-[432px] py-12 flex flex-col justify-end lg:py-[96px] lg:min-h-[620px]">
          <h1 class="flex flex-col font-semibold gap-4 uppercase lg:text-xl">
            Jac motors Tajikistan
            <small class="flex text-4xl font-bold lg:text-[80px] leading-[1]">Услуги и <br> сервис</small>
          </h1>
        </div>
      </div>
    </div>

    <section class="container py-8 lg:grid lg:grid-cols-2 lg:py-20">
      <div class="self-center">
        <h2 class="title mb-6 lg:text-left">
          Зарядная станция для <br> электромобилей
        </h2>

        <h3 class="font-semibold mb-4">Особенности:</h3>
        <ul class="flex flex-col gap-4 mb-6 pl-4">
          <li class="font-medium flex items-start gap-4">
            <span class="block min-w-[13px] w-4">
              <svg class="mt-1" width="18" height="14">
                <use xlink:href="#check" />
              </svg>
            </span>
            Доступна 24/7
          </li>
          <li class="font-medium flex items-start gap-4">
            <span class="block min-w-[13px] w-4">
              <svg class="mt-1" width="18" height="14">
                <use xlink:href="#check" />
              </svg>
            </span>
            Два режима: быстрая и классическая зарядка
          </li>
          <li class="font-medium flex items-start gap-4">
            <span class="block min-w-[13px] w-4">
              <svg class="mt-1" width="18" height="14">
                <use xlink:href="#check" />
              </svg>
            </span>
            Совместимость со всеми китайскими электромобилями
          </li>
        </ul>

        <h3 class="font-semibold mb-4">Преимущества:</h3>
        <ul class="flex flex-col gap-4 mb-6 pl-4 lg:mb-0">
          <li class="font-medium flex items-start gap-4">
            <span class="block min-w-[13px] w-4">
              <svg class="mt-1" width="18" height="14">
                <use xlink:href="#check" />
              </svg>
            </span>
            Удобное расположение Ул. Спортивная 5, ориентир: напротив ДОСААФ (сзади Исмаилитского Центра)
          </li>
          <li class="font-medium flex items-start gap-4">
            <span class="block min-w-[13px] w-4">
              <svg class="mt-1" width="18" height="14">
                <use xlink:href="#check" />
              </svg>
            </span>
            Надёжность и безопасность оборудования
          </li>
          <li class="font-medium flex items-start gap-4">
            <span class="block min-w-[13px] w-4">
              <svg class="mt-1" width="18" height="14">
                <use xlink:href="#check" />
              </svg>
            </span>
            Доступность в любое время
          </li>
        </ul>
      </div>

      <div class="relative flex mx-auto max-w-max lg-mask lg:max-w-full lg:w-full">
        <b class="absolute top-6 left-6 flex font-bold text-2xl text-white uppercase lg:text-[36px] leading-[1] lg:left-[160px]">
          Близко <br>
          Комфортно <br>
          Быстро <br>
        </b>
        <img class="lg:object-cover lg:w-full" src="{{ asset('/images/service-1.png') }}" width="418" height="550" alt="Зарядная станция для электромобилей">
      </div>
    </section>

    <section class="container flex flex-col-reverse py-8 lg:grid lg:grid-cols-2 lg:py-20 lg:gap-8">
      <div class="relative flex mx-auto max-w-max lg-mask-left lg:max-w-full lg:w-full">
        <img class="lg:object-cover lg:w-full" src="{{ asset('/images/service-2.png') }}" width="418" height="550" alt="Зарядная станция для электромобилей">
      </div>

      <div class="self-center">
        <h2 class="title mb-6 lg:text-left">
          Сервис
        </h2>

        <p class="mb-6 font-medium">
          Наш сервисный центр оказывает полный спектр услуг по техническому обслуживанию марок BYD, GAC AION, а также гарантийному обслуживанию JAC.
        </p>
        <p class="font-medium mb-8 lg:mb-0">
          Располагая современейшим оборудованием, мы предлогаемВам провести следующие работы:
        </p>
      </div>
    </section>

    <section class="container">
      <h3 class="font-semibold mb-4">Полная диагностика и ремонт автомобиля:</h3>

      <ul class="flex flex-col gap-4 mb-6 pl-4 lg:mb-8">
        <li class="font-medium flex items-start gap-4">
          <span class="block min-w-[13px] w-4">
            <svg class="mt-1" width="18" height="14">
              <use xlink:href="#check" />
            </svg>
          </span>
          Диагностика ходовой части и рулевого управления
        </li>
        <li class="font-medium flex items-start gap-4">
          <span class="block min-w-[13px] w-4">
            <svg class="mt-1" width="18" height="14">
              <use xlink:href="#check" />
            </svg>
          </span>
          Диагностика блоков управления систем автомобиля, а также различные адаптации электронных писем
        </li>
        <li class="font-medium flex items-start gap-4">
          <span class="block min-w-[13px] w-4">
            <svg class="mt-1" width="18" height="14">
              <use xlink:href="#check" />
            </svg>
          </span>
          Все виды сервисных услуг
        </li>
        <li class="font-medium flex items-start gap-4">
          <span class="block min-w-[13px] w-4">
            <svg class="mt-1" width="18" height="14">
              <use xlink:href="#check" />
            </svg>
          </span>
          Проверка состояния аккумуляторной батерии, сисемы охлаждения двигателя
        </li>
        <li class="font-medium flex items-start gap-4">
          <span class="block min-w-[13px] w-4">
            <svg class="mt-1" width="18" height="14">
              <use xlink:href="#check" />
            </svg>
          </span>
          Заправка кондиционеров
        </li>
        <li class="font-medium flex items-start gap-4">
          <span class="block min-w-[13px] w-4">
            <svg class="mt-1" width="18" height="14">
              <use xlink:href="#check" />
            </svg>
          </span>
          Проверка состояния колец и поршневой группы двигателя
        </li>
      </ul>

      <section class="w-full min-h-[550px] flex flex-col text-white relative mb-10 py-10 px-8 justify-end lg:min-h-[400px] lg:mb-20">
        <h2 class="text-[36px] font-bold uppercase leading-[1.1] mb-6 lg:text-[80px]">
          Тест <br> драйв
        </h2>
        <a class="flex items-center gap-3 uppercase max-w-max" href="{{ route('page.test-drive') }}">
          <svg width="33" height="37">
            <use xlink:href="#sign-up" />
          </svg>
          Записаться на <br> тест-драйв
        </a>

        <img class="absolute top-0 left-0 object-cover w-full h-full -z-10" src="{{ asset('/images/service-3.png') }}" alt="Полная диагностика и ремонт автомобиля">
      </section>
    </section>
  </main>
@endsection
