@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('nav')
    <ul class="nav">
    <li class="nav-item">
        <a class="nav-link" href="/notes">Notes</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/contact">Contacts</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Products</a>
    </li>
    </ul>
@endsection()