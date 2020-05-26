@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header"><h5>Recente Online Gebruikers</h5></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($users as $user)
                    <div class="contrainer-fluid">
                        <div class="row">
                            {{-- {{$user}} --}}
                            <div class="col">{{$user->id}}</div>
                            <div class="col">{{$user->name}}</div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header"><h5>Laatst toegevoegde klanten</h5></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($users as $user)
                    <div class="contrainer-fluid">
                        <div class="row">
                            {{-- {{$user}} --}}
                            <div class="col">{{$user->id}}</div>
                            <div class="col">{{$user->name}}</div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
