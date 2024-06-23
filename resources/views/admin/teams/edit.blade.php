@extends('admin.index')
@section('content')
    <section class="section">


        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Thêm mới thành viên</h5>
                <form method="POST" action="{{ route('team.update', $teamItem->id) }}" class="row" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <label for="name" class="form-label">Tên</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $teamItem->name }}">
                        @error('name')
                            <span style= "color:red" role="alert">
                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Số điện thoại</label>
                        <input type="number" min="0" class="form-control" id="phone" name="phone"
                            value="{{ $teamItem->phone }}">
                        @error('phone')
                            <span style= "color:red" role="alert">
                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Vai trò</label>
                                <textarea name="category" id="category" class="form-control" cols="30" rows="10">{{ $teamItem->category }}</textarea>
                                @error('category')
                                    <span style= "color:red" role="alert">
                                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Địa chỉ</label>
                                <textarea name="address" id="address" class="form-control" cols="30" rows="10">{{ $teamItem->address }}</textarea>
                                @error('address')
                                    <span style= "color:red" role="alert">
                                        <label class="error" id="name_error" for="name">{{ $message }}</label>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="file" class="form-label">Ảnh mô tả</label>
                        <!-- Demo image display -->
                       
                        <!-- File upload form -->
                        <div class="file-upload-form">
                            <label for="file" class="file-upload-label">
                                <!-- Use a span for the file upload design -->
                                <span class="file-upload-design">
                                    <!-- Initially display SVG icon -->
                                    <img src="{{ asset('uploads/' . $teamItem->images) }}" style="max-width: 112px; height: 70px; " id="upload-icon" alt="">
                                    <!-- Display demo image here after selection -->
                                    <img id="demo-image-preview" src="" alt="Demo Image Preview" style="max-width: 112px; height: 70px; display: none;">
                                    <p>Drag and Drop</p>
                                    <p>or</p>
                                    <span class="browse-button">Browse file</span>
                                </span>
                                <input id="file" type="file" name="images" onchange="displaySelectedImage(event)" />
                            </label>
                        </div>
                        <!-- Error message -->
                        @error('images')
                            <span style="color:red" role="alert">
                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                            </span>
                        @enderror
                    </div>
                    
                    
                    <div class="col-md-12 pt-2">
                        <label for="content" class="form-label">Mô tả</label>
                        <textarea class="tinymce-editor" name="content">{{ $teamItem->content }}</textarea><!-- End TinyMCE Editor -->
                        @error('contentsubcription')
                            <span style= "color:red" role="alert">
                                <label class="error" id="name_error" for="name">{{ $message }}</label>
                            </span>
                        @enderror
                    </div>
                    <div class="pt-2">
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                        <a href="{{ route('subcription.admin') }}" class="btn btn-secondary">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script>
     function displaySelectedImage(event) {
    var file = event.target.files[0];
    var reader = new FileReader();

    reader.onload = function(e) {
        var uploadIcon = document.getElementById('upload-icon');
        var demoImagePreview = document.getElementById('demo-image-preview');
        var demoImageContainer = document.getElementById('demo-image-container');

        // Hide the upload icon
        uploadIcon.style.display = 'none';

        // Show the demo image preview
        demoImagePreview.src = e.target.result;
        demoImagePreview.style.display = 'inline-block';

        // Show the demo image container
        demoImageContainer.style.display = 'block';
    }

    reader.readAsDataURL(file);
}

    </script>
@endsection
