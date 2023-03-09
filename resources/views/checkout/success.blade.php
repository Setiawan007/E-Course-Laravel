@extends('layouts.app')

@section('content')
    <section class="checkout">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 col-12">
                    <img src="{{asset('images/ill_register.png')}}" height="400" class="mb-5" alt=" ">
                </div>
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">
                        WHAT A DAY!
                    </p>
                    <h2 class="primary-header ">
                        Berhasil Checkout
                    </h2>
                    {{-- <p>
                        @if ($checkout->payment_status == 'waiting')
                            Silahkan Menuju Halaman Dashboard dan Lakukan Pembayaran   
                        @endif
                        @if ($checkout->payment_status == 'paid')
                            terima kasih telah melakukan pembayaran  
                        @endif
                    </p> --}}
                    <a href="{{ route('dashboard') }}" class="btn btn-primary mt-3">
                        My Dashboard
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection 