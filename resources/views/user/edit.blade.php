@extends('layouts.app')

@section('content')
    <div class="bg-gray-400 h-auto p-5 w-3/4 justify-center m-auto  ">
        <div class="bg-white p-4">
            <form action="{{route('user.update',$user)}}" class="flex flex-col space-y-4" method="post">
                @csrf
                <div class="form-item flex flex-col space-y-4">
                    <label for="name">Name</label>
                    <input type="text" class="border border-gray-600 rounded-lg @error('name') border-red-700 @enderror " name="name" value="{{$user->name}}">
                    <span class="text-red-800">@error('name'){{$message}}@enderror</span>
                </div>
                <div class="form-item flex flex-col space-y-4">
                    <label for="email">Email</label>
                    <input type="text" class="border border-gray-600 rounded-lg @error('email') border-red-700 @enderror " name="email" value="{{$user->email}}">
                    <span class="text-red-800">@error('email'){{$message}}@enderror</span>
                </div>
                <div class="form-item space-y-4">
                    <button type="submit" class="bg-blue-600 p-2 rounded-lg text-white">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
