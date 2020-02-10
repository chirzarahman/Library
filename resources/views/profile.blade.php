@extends('layouts.main')

@section('title', 'Library - Profile')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Profile</div>
                <div class="card-body text-center">
                    <img src="{{ Auth::user()->avatar }}" class="rounded-circle m-2" width="100" height="100">
                    <p>Name: {{ Auth::user()->name }}</p>
                    <p>Email: {{ Auth::user()->email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection