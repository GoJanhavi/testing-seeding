@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contact</div>

                <div class="card-body">
                    <h2 class="mt-3">Thank you {{$name}}</h2>
                    <p>Our team will respond to your message as soon as possible.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
