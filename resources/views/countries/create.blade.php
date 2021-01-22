@extends('layouts.app')

@section('content')
  <div class="container pt-4">
    <div class="row justify-content-center">
      <div class="col-md-4"></div>
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Countries') }}</div>

          <div class="card-body">
            <x-country-form/>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
