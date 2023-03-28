@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3>
                    Nome del mio Store: {{ $store->store_name }}
                </h3>
                <h4>
                    Address del mio store: {{ $store->address }}
                </h4>
            </div>
        </div>
    </div>
@endsection
