@extends('components.layouts.app')

@section('styles')
  <style>
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
  <main class="container mt-8 mb-10">
    <section class="container mt-8 mb-10" data-models="0">
      <h1 class="title mb-6">Модельный ряд</h1>

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

      <div class="models">
        <div class="grid sm:grid-cols-2 gap-6 lg:grid-cols-3 lg:gap-x-[72px] lg:gap-y-24">
          @foreach ($data->models as $key => $model)
            <div class="relative z-0 text-white grid model-grid rounded-md overflow-hidden lg:min-h-[190px]" data-slide="{{ $model->category_id }}">
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
      </div>
    </section>
  </main>
@endsection

@section('scripts')
  <script>
    const modelsSection = document.querySelector('[data-models]');

    modelsSection.addEventListener('click', (evt) => {
      console.log(evt.target);

      if (evt.target.closest('[data-category]')) {
        modelsSection.dataset.models = evt.target.dataset.category;
      }
    })
  </script>
@endsection
