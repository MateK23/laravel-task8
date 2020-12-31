@extends('layouts.app')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@else
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Control Panel</div>
                <div class="card-body">
                    <form class='form' action="{{ route('store') }}">
                        @csrf
                        <input type="text" placeholder="Title">
                        <input type="textarea" placeholder="Description">
                        <input type="textarea" placeholder="Short description">
                        <input type="text" placeholder="Image Link">
                        <select name="categories">
                            @foreach($category as $value)
                                <option value="{{ $value }}">{{ $value }}</option>
                            @endforeach
                        </select>
                        <input type="submit" class='btn' value="Add new article">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@endsection
