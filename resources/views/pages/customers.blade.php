@extends('layouts.app')
@push('scripts')
    <script src="{{ asset('/js/customer.js') }}"></script>
@endpush
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            <h5>Klanten</h5>
                        </div>
                        <div class="col-md-2">
                                <input type="text" name="search" id="search" class="form-control" placeholder="Zoek klant" />
                        </div>
                    </div>
                    </div>
                
                <div class="card-body">

                   
                    <table class="table table-striped">
                        @foreach ($customers as $customer)
                        <tr>
                            <td scope="col">{{$customer->id}}</td>
                            <td scope="col"><a href="{{ route('customer', ['id' => $customer->id])  }}">{{$customer->customer_name}}</a></td>
                            <td scope="col">{{$customer->website}}</td>
                        </tr>
                        @endforeach
                    </table>
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
