@if ($routeName === 'page.index')
  <div>
    <img src="{{ asset('images/logo.svg') }}" width="64" height="32" alt="{{ __('logo') }}">
  </div>
@else
  <a href="{{ route('page.index') }}">
    <img src="{{ asset('images/logo.svg') }}" width="64" height="32" alt="{{ __('toTheMain') }}">
  </a>
@endif
