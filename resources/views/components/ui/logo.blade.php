@props(['horizontal' => false])

@if ($routeName === 'page.index')
  <div>
    @if ($horizontal)
      <img src="{{ asset('images/logo-horizontal.svg') }}" width="160" height="16" alt="{{ __('logo') }}">
    @else
      <img src="{{ asset('images/logo.svg') }}" width="64" height="32" alt="{{ __('logo') }}">
    @endif
  </div>
@else
  <a href="{{ route('page.index') }}">
    @if ($horizontal)
      <img src="{{ asset('images/logo-horizontal.svg') }}" width="160" height="16" alt="{{ __('toTheMain') }}">
    @else
      <img src="{{ asset('images/logo.svg') }}" width="64" height="32" alt="{{ __('toTheMain') }}">
    @endif
  </a>
@endif
