@extends('layouts.app')
@section('title')
    | About Page
@endsection

@section('css')
    <style>
        body {
            background: #ffffff;
        }

        h1 {
            color: #00f00f;
            text-align: center;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <h1 class="text-center text-white">About Page</h1>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#home').addClass('active');
        });
    </script>
@endsection
