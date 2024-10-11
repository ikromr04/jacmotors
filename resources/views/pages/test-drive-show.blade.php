@extends('components.layouts.app')

@section('content')
  <main class="container min-h-screen py-12 lg:py-16 relative">
    <h1 class="title mb-6">Запись на тест-драйв</h1>

    <ul class="flex flex-wrap gap-y-2 justify-center mb-10">
      @foreach ($data->models as $model)
        <li>
          <a class="text-sm font-medium flex justify-center items-center p-4 transition duration-300 hover:text-[#BA2031] border-[#BA2031]" style="{{ $data->model->name == $model->name ? 'border-bottom: 2px solid #AE2C27; pointer-events: none;' : '' }}" href="{{ route('page.test-drive.show', $model->name) }}">
            {{ $model->name }}
          </a>
        </li>
      @endforeach
    </ul>

    <p class="font-medium text-center mb-10">Выберите модель машины</p>

    <section class="mb-10 flex flex-col justify-center">
      <img class="object-contain mx-auto h-auto mb-8" src="{{ asset($data->model->test_drive_image) }}" width="427" height="290" alt="{{ $data->model->name }}">
      <h2 class="text-lg font-medium flex flex-col items-center leading-none gap-2">
        {{ $data->model->name }}
        <small class="block text-[#9F9F9F] text-sm">{{ $data->model->category->name }}</small>
      </h2>
    </section>

    <style>
      .has-danger input {
        border-color: #dc2626;
      }

      .has-danger div {
        color: #dc2626;
        margin-top: 4px;
        font-size: 14px
      }

      [type="submit"] span:last-child {
        display: none;
      }

      .submitting [type="submit"] span:last-child {
        display: flex;
      }

      .submitting [type="submit"] span:first-child {
        display: none;
      }
    </style>

    <form class="flex flex-col gap-6 max-w-[500px] mx-auto" action="/test-drive" method="POST">
      @csrf
      <input type="hidden" name="model" value="{{ $data->model->name }}">
      <div class="form-group">
        <input class="flex min-h-10 border border-black items-center px-4 w-full" type="text" placeholder="ФИО" name="name" required="required" data-pristine-required-message="Обязательное поле">
      </div>
      <div class="form-group">
        <input class="flex min-h-10 border border-black items-center px-4 w-full" type="number" placeholder="Телефон" name="phone" required="required" data-pristine-required-message="Обязательное поле">
      </div>
      <div class="form-group">
        <input class="flex min-h-10 border border-black items-center px-4 w-full" type="email" placeholder="Электронная почта" name="email" required="required" data-pristine-required-message="Обязательное поле" data-pristine-email-message="Недействительный адрес электронной почты">
      </div>

      <button class="text-sm uppercase font-semibold mx-auto mt-6 transition duration-300 hover:text-[#BA2031]" type="submit">
        <span class="flex items-center gap-2">
          Продолжить
          <svg width="19" height="15">
            <use xlink:href="#arrow" />
          </svg>
        </span>
        <span class="flex items-center justify-center" role="status">
          <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-200 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
          </svg>
        </span>
      </button>
    </form>
  </main>
@endsection

@section('scripts')
  <script src="https://cdn.jsdelivr.net/npm/pristinejs@1.1.0/dist/pristine.min.js"></script>
  <script type="module">
    const form = document.querySelector('form');

    const pristine = new Pristine(form);

    form.addEventListener('submit', function(evt) {
      evt.preventDefault();

      const valid = pristine.validate();

      if (valid) {
        evt.target.classList.add('submitting');

        fetch('/test-drive', {
          method: 'POST',
          body: new FormData(evt.target),
        }).then((res) => {
          evt.target.classList.remove('submitting');
          evt.target.reset();
          document.querySelector('main').scrollIntoView();
          document.querySelector('main').insertAdjacentHTML('beforeend', `
              <div class="modal absolute top-0 left-0 w-full h-full bg-white text-center py-14 lg:py-24">
                <div class="container font-medium flex flex-col">
                  <p class="text-xl mb-6 lg:text-5xl">Поздравляем!</p>
                  <p class="mb-10 lg:mb-16">Вы успешно записались <br> на Тест- Драйв</p>

                  <span class="flex justify-center">
                    <svg class="transform lg:scale-150" width="52" height="52">
                      <use xlink:href="#success" />
                    </svg>
                  </span>
                </div>
              </div>
            `);

          setTimeout(() => {
            document.querySelector('.modal').remove();
          }, 3000);
        }).catch((err) => console.error(err));
      }
    });
  </script>
@show
