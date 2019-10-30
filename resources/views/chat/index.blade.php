@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <chat-component></chat-component>
        </div>

        <div class="col-md-4">
            <chat-users-component></chat-users-component>
        </div>
    </div>
</div>
@endsection
