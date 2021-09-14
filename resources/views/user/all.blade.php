@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->created_at->diffForHumans()}}</td>
                                    <td>
                                        <div class="p-10">

                                            <div class="dropdown inline-block relative">
                                                <button class="bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
                                                    <span class="mr-1">Dropdown</span>
                                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                                                </button>
                                                <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                                                    <li class=""><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="{{route('user.edit',$item->id)}}">Edit</a></li>
                                                    <li class=""><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="{{route('user.delete',$item->id)}}">Delete</a></li>
                                                    <li class=""><a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="{{route('user.view',$item->id)}}">View</a></li>
                                                </ul>
                                            </div>
                                        </div
                                        >
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
