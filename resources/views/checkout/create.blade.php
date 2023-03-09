@extends('layouts.app')

@section('content')
    <section class="checkout">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        YOUR FUTURE CAREER
                    </p>
                    <h2 class="primary-header">
                        Start Invest Today
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12">
                    <div class="row">
                        <div class="col-lg-5 col-12">
                            <div class="item-bootcamp">
                                <img src="{{asset('images/item_bootcamp.png')}}" alt="" class="cover">
                                <h1 class="package text-uppercase">
                                    {{ $camp->title }}
                                </h1>
                                <p class="description">
                                    Bootcamp ini akan mengajak Anda untuk belajar penuh mulai dari pengenalan dasar sampai membangun sebuah projek asli
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-1 col-12"></div>
                        <div class="col-lg-6 col-12">
                            <form action="{{ route('checkout.store', $camp->id) }}" class="basic-form" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input 
                                        name="name" 
                                        type="text" 
                                        class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" 
                                        id="name" 
                                        value="{{ Auth::user()->name }}"
                                        required
                                    >
                                    @if ($errors->has('name'))
                                        <p class="text-danger">{{$errors->first('name')}}</p>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input 
                                        name="email" 
                                        type="email" 
                                        class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" 
                                        id="email"
                                        value="{{Auth::user()->email}}"
                                        required
                                    >
                                    @if ($errors->has('email'))
                                        <p class="text-danger">{{$errors->first('email')}}</p>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label for="occupation" class="form-label">Occupation</label>
                                    <input 
                                        name="occupation" 
                                        type="text" 
                                        class="form-control {{ $errors->has('occupation') ? 'is-invalid' : ''}}" 
                                        id="occupation"
                                        value="{{ old('occupation') ?: Auth::user()->occupation }}"
                                        required
                                    >
                                    @if ($errors->has('occupation'))
                                        <p class="text-danger">{{$errors->first('occupation')}}</p>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input 
                                        name="phone" 
                                        type="text" 
                                        class="form-control {{ $errors->has('phone') ? 'is-invalid' : ''}}" 
                                        id="phone"
                                        value="{{ old('phone') ?: Auth::user()->phone }}"
                                        required
                                    >
                                    @if ($errors->has('phone'))
                                        <p class="text-danger">{{$errors->first('phone')}}</p>
                                    @endif
                                </div> 
                                <div class="mb-4">
                                    <label for="address" class="form-label">Address</label>
                                    <input 
                                        name="address" 
                                        type="text" 
                                        class="form-control {{ $errors->has('address') ? 'is-invalid' : ''}}" 
                                        id="address"
                                        value="{{ old('address') ?: Auth::user()->address }}"
                                        required
                                    >
                                    @if ($errors->has('address'))
                                        <p class="text-danger">{{$errors->first('address')}}</p>
                                    @endif
                                </div>                              
                                <button type="submit" class="w-100 btn btn-primary">Pay Now</button>
                                <p class="text-center subheader mt-4">
                                    <img src="{{asset('images/ic_secure.svg')}}" alt=""> Your payment is secure and encrypted.
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection