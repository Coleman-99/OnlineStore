@extends('layout')
@section('content')
    <!--Input container-->
    <div class="container input-container-size">
        <!--inut form-->
        <form action="user/user/authenticated/login" class="row">
            @csrf
            <h2 class="text-center">Login</h2>
            <div class="form-floating">
                <input type="text" class="form-control-2" id="name" name="name" value="{{ old('name') }}" />
                <label for="name">Name</label>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating">
                <input type="email" class="form-control-2" id="email" name="email" value="{{ old('email') }}" />
                <label for="email">Email</label>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" class="form-control-2" />
                <label for="contact">Password</label>
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="button mt-2 btn-linear font rounded-top rounded-end">
                login
            </button>
            <div class="text-center">
                <p>Or sign up with</p>
            </div>
            <ul class="nav justify-content-center">
                <li class="nav-item">Google</li>
                <li class="nav-item">Facebook</li>
                <li class="nav-item">Twitter</li>
            </ul>
            <div class="pt-1 text-center">
                <p>dont have an account? <a href="/user/create">Register</a></p>
            </div>
        </form>
        <!--inut form end-->
    </div>
    <!--input container end-->
@endsection
