@extends('main')

@section('content')

<div class="container mt-5">
    <div class="row">
        @foreach ($lists->items as $item)
        <div class="col-md-4 col-12">
            <div class="card">
                <img src="{{ $item->snippet->thumbnails->medium->url }}" alt="" class="img-card-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->snippet->title }}</h5>
                    <p class="card-text">
                        <small class="text-muted">
                            {{ Str::limit($item->snippet->description, 50, '...') }}
                        </small>
                    </p>
                    <a href="{{ route('watch', ['id' => $item->id->videoId]) }}" class="card-link stretched-link">View</a>
                </div>
                <div class="card-footer text-muted">
                    Published at {{ date('d M Y', strtotime($item->snippet->publishTime)) }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
