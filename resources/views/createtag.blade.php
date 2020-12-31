@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Control Panel</div>
                <div class="card-body">
                    <form class='form' action="{{ route('storetag') }}">
                        @csrf
                        <input type="text" placeholder="Title">
                        <input type="submit" class='btn' value="Add new article">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
