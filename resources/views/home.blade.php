@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Control Panel</div>
                <div class="card-body">
                    <div style="white-space: nowrap; overflow-x: auto;">
                    <form action='{{ route('create') }}'>
                        @csrf
                        <button type="submit" class='btn'>Add new article</button>
                        <button formaction="{{ route('createcat') }}" class='btn'>Add new category</button>
                        <button formaction="{{ route('createtag') }}" class='btn'>Add new tag</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">News</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($news as $data)
                    {{ $data->title }}
                    {{ $data->description }}
                    {{ $data->short_description }}
                    {{ $data->image }}
                    {{ $data->upload_date }}
                    {{ $data->user_id }}
                    {{ $data->category_id }}

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
