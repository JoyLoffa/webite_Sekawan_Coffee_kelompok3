@extends('layouts.template')
@section('content')
<div class="container">
    <div class="col">
        <h1><u>Login Admin</u></h1>
    </div>
    <style type="text/css">
            h1 {
                font-size: 30px;
                font-family: Cambria,"Times New Roman",serif; }
    </style>
    <div class="col-md-6">
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('login.action') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Email</label>
                <input class="form-control" type="email" name="email" value="{{ old('email') }}" />
            </div>
            <div class="mb-3">
                <label>Password </label>
                <input class="form-control" type="password" name="password" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Login</button>
                <a class="btn btn-danger" href="/laman">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection