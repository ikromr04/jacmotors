@extends('components.layouts.app')

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
      <div class="swiper-pagination banners-pagination"></div>
    </div>
  </main>
@endsection

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
  </style>
@endsection

@section('scripts')
  <script>
    new Swiper('.banners', {
      loop: true,
      autoplay: {
        delay: 3000,
      },
      pagination: {
        el: '.banners-pagination',
      },
    });
  </script>
@endsection
