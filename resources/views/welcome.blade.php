@extends('layouts.viicheck')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            {{ dd(Auth::user()) }}
        </div>
    </div>
@endsection