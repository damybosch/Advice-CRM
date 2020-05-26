@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Gebruikers</div>

                <div class="card-body">
                   {{-- {{dd($users)}}  --}}
                    @foreach ($users as $user)
                        <div class="contrainer-fluid">
                            <div class="row">
                                {{-- {{$user}} --}}
                                <div class="col">{{$user->id}}</div>
                                <div class="col"><a href="">{{$user->name}}</a></div>
                                <div class="col">{{$user->email}}</div>
                                <div class="col">{{$user->id}}</div>
                            </div>
                        </div>
                   
                        
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
