@extends('layout.home')
@section('title', 'Tate commment')

@section('content')
<div class="container col-5 mx-auto">
    <h2>You have used forbidden words</h2>

    <a href="{{back()}}" class="mt-auto">go Back</a>
</div>

@endsection
