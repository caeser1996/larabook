@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{Auth::user()->name}}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="col-md-4">
                            Welcome To Your Profile
                            <img src="{{asset('avatar/'.Auth::user()->avatar)}}" alt="" height="80px" width="80px">
                            <br>
                            <a href="{{route('change.avatar')}}">Change  Image</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
