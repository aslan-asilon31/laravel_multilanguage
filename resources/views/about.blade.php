@extends('layouts')

@section('title', 'About page')

@section('content')
<div class="row pt-5">
    <div class="text-center pb-3">
        <h1>About </h1>
    </div>
    @foreach ($data as $data)
    <div class="col-3">
        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">{{ $data->lang }}</div>
            <div class="card-body">
                <h5 class="card-title">{{ $data->title }}</h5>
                <p class="card-text">{{ Str::limit( strip_tags( $data->desc ), 100 ) }}</p>
            </div>
        </div>
    </div>
    @endforeach   
</div>
@endsection