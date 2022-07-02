@extends('main')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 col-12">
            <div class="card">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/{{ $video->id }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Card Title</h5>
                    <p class="text-muted mb-4">Published at 20-05-2020</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint suscipit doloribus fugiat architecto odit aliquid nulla qui libero nobis, ullam harum a commodi in minus facilis obcaecati possimus minima vero cupiditate, error eius consequuntur! Accusamus suscipit, at, consequuntur aperiam, recusandae sequi perferendis repellendus maxime assumenda voluptatem officia animi temporibus ratione!</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-6">
                        <img src="" alt="" class="img-fluid rounded-start">
                    </div>
                    <div class="col-6">
                        <div class="card-body">
                            <h5 class="card-title">Card Title</h5>
                            <p class="text-muted mb-3">Published at 20-05-2020</p>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
