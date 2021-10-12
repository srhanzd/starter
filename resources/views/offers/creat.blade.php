@extends('layouts.master')

@section('content')
    Enter your offer
    <div class="card-body">
        @if(\Illuminate\Support\Facades\Session::has('successes'))
    <div class="alert alert-success"role="alert"> {{\Illuminate\Support\Facades\Session::get('successes')}} </div>
        @endif


        <form method="POST" action="{{route('store')}}" >{{--Url('offers/store')--}}{{--action="{{ route('login') }}"--}}
            @csrf
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">name</label>

                <div class="col-md-6">
                    <input id="name" type="text" name="name" value="{{ old('name') }}"  >
                    @error('name')
                        <small class="form-text text-danger">   {{$message}}     </small>
                    @enderror

                </div>

                {{--price--}}
                <label for="price" class="col-md-4 col-form-label text-md-right" >price</label>

                <div class="col-md-6">
                    <input id="price" type="text"  name="price" value="{{ old('price') }}"  >

                    @error('price')
                    <small class="form-text text-danger">   {{$message}}     </small>
                    @enderror
                </div>

                {{--detials--}}
                <label for="details" class="col-md-4 col-form-label text-md-right">details</label>

                <div class="col-md-6">
                    <input id="details" type="text"  name="details" value="{{ old('details') }}"  >

                    @error('details')
                    <small class="form-text text-danger">   {{$message}}     </small>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn-primary"> save offer</button>
              <form/>
@endsection
