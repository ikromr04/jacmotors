@extends('components.layouts.app')

@section('content')
  <main>
    <div>
      <img class="h-[558px] w-full object-cover" src="{{ asset($data->model->main_image) }}" width="1440" height="558" alt="{{ $data->model->name }}">

      <div class="relative container">
        <div class="absolute bottom-full left-0 w-full flex flex-col z-10 text-white pb-8 md:h-[558px] md:justify-between md:pt-14 lg:w-1/2">
          <h1 class="text-5xl font-bold mb-6 md:text-[64px]">{{ $data->model->name }}</h1>

          <ul class="text-sm flex flex-col">
            @if ($data->model->warranty)
              <li>Гарантия ({{ $data->model->warranty }})</li>
            @endif
            <li>Официальный сервис</li>
            <li>Официальный дистрибьютор</li>
            <li>Прост в обслуживании</li>
          </ul>
        </div>

        <ul class="font-medium grid grid-cols-2 text-center gap-2 p-4 md:grid-cols-4 lg:absolute lg:bottom-full lg:right-0 lg:text-white lg:w-1/2 [text-shadow:_0_1px_0_rgb(0_0_0_/_60%)]">
          <li class="flex flex-col items-center p-4 gap-y-2 lg:max-w-28">
            <svg width="40" height="40">
              <use xlink:href="#transmission" />
            </svg>
            {{ $data->model->transmission }}
          </li>
          <li class="flex flex-col items-center p-4 gap-y-2 lg:max-w-28">
            <svg width="40" height="40">
              <use xlink:href="#acceleration" />
            </svg>
            {{ $data->model->acceleration }}
          </li>
          <li class="flex flex-col items-center p-4 gap-y-2 lg:max-w-28">
            <svg width="40" height="40">
              <use xlink:href="#max_speed" />
            </svg>
            {{ $data->model->max_speed }}
          </li>
          <li class="flex flex-col items-center p-4 gap-y-2 lg:max-w-28">
            <svg width="40" height="40">
              <use xlink:href="#power" />
            </svg>
            {{ $data->model->power }}
          </li>
        </ul>
      </div>

      <ul class="container flex justify-center text-sm font-semibold pt-6 pb-8">
        <li>
          <a class="flex p-4 border-b-[2px] border-b-black" href="#exterior">Экстерьер</a>
        </li>
        <li>
          <a class="flex p-4 border-b-[2px]" href="#interior">Интерьер</a>
        </li>
        <li>
          <a class="flex p-4 border-b-[2px]" href="#technology">Технологии</a>
        </li>
      </ul>

      <section class="bg-gradient-to-t from-black to-transparent min-h-[558px] relative pt-6 pb-16 text-white font-medium" id="exterior">
        <img class="absolute top-0 left-0 h-full w-full object-cover -z-10" src="{{ asset($data->model->exterior_image) }}" width="1440" height="558" alt="{{ $data->model->name }}">

        <div class="container">
          <div>
            <h2 class="font-semibold text-[32px] mb-8 lg:text-[80px]">Экстерьер</h2>

            <div class="model-info">
              {!! $data->model->exterior_info !!}
            </div>
          </div>
        </div>
      </section>

      <ul class="container py-4 text-[#909090] font-medium flex flex-col gap-y-2 lg:py-14">
        <li class="flex items-center gap-x-3">
          <svg width="24" height="24">
            <use xlink:href="#wheels" />
          </svg>
          {{ $data->model->wheels_tires }}
        </li>
        @if ($data->model->load_capacity)
          <li class="flex items-center gap-x-3">
            <svg width="22" height="22">
              <use xlink:href="#capacity" />
            </svg>
            {{ $data->model->load_capacity }}
          </li>
        @endif
      </ul>

      <section class="bg-gradient-to-t from-black to-transparent min-h-[558px] relative pt-6 pb-16 text-white font-medium" id="interior">
        <img class="absolute top-0 left-0 h-full w-full object-cover -z-10" src="{{ asset($data->model->interior_image) }}" width="1440" height="558" alt="{{ $data->model->name }}">

        <div class="container">
          <div>
            <h2 class="font-semibold text-[32px] mb-8 lg:text-[80px]">Интерьер</h2>

            <div class="model-info">
              {!! $data->model->interior_info !!}
            </div>
          </div>
        </div>
      </section>

      <ul class="container py-4 text-[#909090] font-medium flex flex-col gap-y-2 lg:py-14">
        @if ($data->model->rating)
          <li class="flex items-center gap-x-3">
            <svg width="24" height="24">
              <use xlink:href="#wheels" />
            </svg>
            {{ $data->model->rating }}
          </li>
        @endif
        <li class="flex items-center gap-x-3">
          <svg width="24" height="24">
            <use xlink:href="#airbag" />
          </svg>
          {{ $data->model->air_bag }}
        </li>
      </ul>

      <section class="bg-gradient-to-t from-black to-transparent min-h-[558px] relative pt-6 pb-16 text-white font-medium" id="technology">
        <img class="absolute top-0 left-0 h-full w-full object-cover -z-10" src="{{ asset($data->model->technology_image) }}" width="1440" height="558" alt="{{ $data->model->name }}">

        <div class="container">
          <div>
            <h2 class="font-semibold text-[32px] mb-8 lg:text-[80px]">Технологии</h2>

            <div class="model-info">
              {!! $data->model->technology_info !!}
            </div>
          </div>
        </div>
      </section>

      <div class="container flex justify-start">
        <a class="flex items-center gap-x-4 transition duration-300 hover:text-[#BA2031] py-10 lg:py-16 uppercase font-semibold" href="{{ route('page.test-drive.show', $data->model->name) }}">
          <svg width="33" height="37">
            <use xlink:href="#sign-up" />
          </svg>
          Записаться на тест-драйв
        </a>
      </div>
    </div>
  </main>
@endsection
