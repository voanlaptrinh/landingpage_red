@extends('admin.index')
@section('content')
    <style>
        .content-detail-newssubcription img {
            max-width: 100%;
        }
    </style>
    <section class="section">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img style="width: 100px; height: 100px;" src="{{ asset('images/' . $newsItem->images) }}"
                            style="" alt="Profile" class="rounded-circle">
                        <h6 class="text-center">{{ $newsItem->title }}</h6>
                        <p>Danh mục: {{$newsItem->category}}</p>
                        <h6>{{ $newsItem->created_at }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview"
                                    aria-selected="true" role="tab">Mô tả ngắn</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit"
                                    aria-selected="false" tabindex="-1" role="tab">Nội dung</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show active profile-overview" id="profile-overview" role="tabpanel">
                                <h5 class="card-title">Mô tả ngắn</h5>
                                <p class="small fst-italic">{{ $newsItem->description }}</p>
                            </div>
                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit" role="tabpanel">
                                <div class="container content-detail-newssubcription">
                                    {!! $newsItem->content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
