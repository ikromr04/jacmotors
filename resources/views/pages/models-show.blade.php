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

        <ul class="font-medium grid grid-cols-2 text-center gap-2 p-4 md:grid-cols-4 lg:absolute lg:bottom-full lg:right-0 lg:text-white lg:w-1/2">
          <li class="flex flex-col items-center p-4 max-w-24">
            <svg width="40" height="40">
              <use xlink:href="#transmission" />
            </svg>
            {{ $data->model->transmission }}
          </li>
          <li class="flex flex-col items-center p-4 max-w-24">
            <svg width="40" height="40">
              <use xlink:href="#acceleration" />
            </svg>
            {{ $data->model->acceleration }}
          </li>
          <li class="flex flex-col items-center p-4 max-w-24">
            <svg width="40" height="40">
              <use xlink:href="#max_speed" />
            </svg>
            {{ $data->model->max_speed }}
          </li>
          <li class="flex flex-col items-center p-4 max-w-24">
            <svg width="40" height="40">
              <use xlink:href="#power" />
            </svg>
            {{ $data->model->power }}
          </li>
        </ul>
      </div>
    </div>
  </main>
@endsection
