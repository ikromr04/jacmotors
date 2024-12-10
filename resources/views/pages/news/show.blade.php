@extends('components.layouts.app')

@section('content')
  <main>
    <img class="w-full h-auto" src="{{ asset('/images/jacday.png') }}" alt="Jac Day 2024">

    <div class="container flex flex-col py-10 gap-6 md:gap-20 !max-w-screen-lg lg:pb-28">
      <div class="flex flex-col gap-6 md:flex-row">
        <h1 class="text-[20px] font-semibold min-w-[320px]">{{ $data->news->title }}</h1>
        <p>{{ $data->news->description }}</p>
      </div>

      <div class="flex flex-col gap-6 md:grid md:grid-cols-2 md:items-center gap-x-20">
        <img class="w-full h-auto" src="{{ asset('/images/news1.jpg') }}" alt="Jac Day 2024">
        <p class="flex">Lorem ipsum dolor sit amet consectetur. Elit enim odio vulputate sed. Amet augue sed placerat sagittis amet. Semper id nunc nam varius. Scelerisque viverra tellus nec porta nam sed.</p>
      </div>

      <div class="flex flex-col gap-6 md:grid md:grid-cols-2 md:items-center gap-x-20">
        <img class="w-full h-auto md:order-2" src="{{ asset('/images/news2.jpg') }}" alt="Jac Day 2024">
        <p class="flex">Lorem ipsum dolor sit amet consectetur. Elit enim odio vulputate sed. Amet augue sed placerat sagittis amet. Semper id nunc nam varius. Scelerisque viverra tellus nec porta nam sed. Lorem ipsum dolor sit amet consectetur. Elit enim odio vulputate sed. Amet augue sed placerat sagittis amet. Semper id nunc nam varius. Scelerisque viverra tellus nec porta nam sed.</p>
      </div>
    </div>
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
