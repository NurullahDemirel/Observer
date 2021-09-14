@extends('layouts.app')

@section('content')
    <div class="bg-gray-400 h-auto p-5 w-3/4 justify-center m-auto  ">
        <div class="bg-white p-4">
            <form action="{{route('user.store')}}" class="flex flex-col space-y-4" method="post">
                @csrf
                <div class="form-item flex flex-col space-y-4">
                    <label for="name">Name</label>
                    <input type="text" class="border border-gray-600 rounded-lg @error('name') border-red-700 @enderror " name="name" value="{{old('name')}}">
                    <span class="text-red-800">@error('name'){{$message}}@enderror</span>
                </div>
                <div class="form-item flex flex-col space-y-4">
                    <label for="email">Email</label>
                    <input type="text" class="border border-gray-600 rounded-lg @error('email') border-red-700 @enderror " name="email" value="{{old('email')}}">
                    <span class="text-red-800">@error('email'){{$message}}@enderror</span>
                </div>
                <div class="form-item flex flex-col space-y-4">
                    <label for="password">Password</label>
                    <input type="password" class="border border-gray-600 rounded-lg @error('password') border-red-700 @enderror " name="password" value="{{old('password')}}">
                    <span class="text-red-800">@error('password'){{$message}}@enderror</span>
                </div>
                <div class="form-item flex flex-col space-y-4">
                    <label for="cpassword">Password Confirmation</label>
                    <input type="password" class="border border-gray-600 rounded-lg @error('cpassword') border-red-700 @enderror " name="cpassword" value="{{old('cpassword')}}">
                    <span class="text-red-800">@error('cpassword'){{$message}}@enderror</span>
                </div>
                <div class="form-item space-y-4">
                    <button type="submit" class="bg-blue-600 p-2 rounded-lg text-white">Register</button>
                    <a href="{{route('login')}}" class="text-blue-600">I have already account</a>
                </div>
            </form>
        </div>
    </div>
@endsection
