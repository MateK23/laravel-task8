@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Control Panel</div>
                <div class="card-body">
                    <form class='form' action="{{ route('storecat') }}">
                        @csrf
                        <input type="text" placeholder="Title" name="title">
                        <input type="submit" class='btn' value="Add new category">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
