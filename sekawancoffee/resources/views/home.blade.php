@extends('layouts.template')
@section('content')
<hr>
    <section
        style="
          background-image: url('images/slide3.jpg');
          background-repeat: no-repeat;
          background-size: cover;
          height: 75vh;
        "
      >
        <div
          class="hero-content h-100 d-flex justify-content-center align-items-center flex-column"
        >
          <h1 class="text-center text-white display-4">Sekawan Coffee & Roastery</h1>
          <h6 class="text-center text-white">Coffee House dengan konsep rumahan yang menghadirkan 
            kehangatan kekerabatan antar sesama.</h6>
            <style type="text/css">
                h1 {
                    font-size: 40px;
                    font-family: Cambria,"Times New Roman",serif; }
                h6 {
                    font-size: 18px;
                    font-family: Cambria,"Times New Roman",serif; }
            </style>
          <hr width="100" class=" text-center" />
          <a class="btn btn-primary" href="{{ route('login') }}">Login</a><br>
          <a class="btn btn-info" href="{{ route('register') }}">Register</a>
        </div>

    </section>
    
@endsection