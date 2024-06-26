@extends('admin.index')
@section('content')
    <section class="section">


        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Sửa tin tức: {{ $newsItem->title }}</h5>

                <form method="POST" action="{{route('news.update', $newsItem->id)}}" class="row" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-12">
                        <label for="title" class="form-label">Tiêu đề</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ $newsItem->title }}">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                            </span>
                        @enderror
                    </div>
                    <div class="row pt-2">
                        <div class="col-md-8">
                            <label for="description" class="form-label">Mô tả ngắn</label>
                            <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{ $newsItem->description }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <label class="error" id="name_error" for="name">{{ $message }}</label>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="file" class="form-label">Ảnh đại diện</label>
                            <div class="file-upload-form">

                                <label for="file" class="file-upload-label">
                                    <div class="file-upload-design">
                                        @if ($newsItem->images)
                                            <div class="mb-3">
                                                <img width="137px" src="{{ asset('images/' . $newsItem->images) }}"
                                                    alt="Current Image" style="max-width: 100%;">
                                            </div>
                                        @else
                                            <svg viewBox="0 0 640 512" height="1em">
                                                <path
                                                    d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z">
                                                </path>
                                            </svg>
                                            <p>Drag and Drop</p>
                                            <p>or</p>
                                            <span class="browse-button">Browse file</span>
                                        @endif
                                    </div>
                                    <input id="file" type="file" name="images">
                                </label>


                            </div>

                            @error('images')
                                <span class="invalid-feedback" role="alert">
                                    <label class="error" id="name_error" for="name">{{ $message }}</label>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 pt-2">
                        <label for="content" class="form-label">Mô tả</label>
                        <textarea class="tinymce-editor" name="content">{{ $newsItem->content }}</textarea><!-- End TinyMCE Editor -->
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                            </span>
                        @enderror
                    </div>
                    <div class="pt-2">
                        <button type="submit" class="btn btn-primary">Sửa</button>
                        <a href="{{ route('news.admin') }}" class="btn btn-secondary">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
