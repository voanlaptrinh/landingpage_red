@extends('admin.index')
@section('content')
    <section class="section">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title pb-5">Chỉnh sửa thứ tự của các Block:</h5>
                <ul id="sortable" class="list-unstyled">
                    @foreach ($landingpages as $landingPage)
                        <li class="ui-state-default m-3 rounded" data-id="{{ $landingPage->id }}">
                            <div class="col-lg-12">
                                <div class="row">
                                    <!-- Sales Card -->
                                    <div class="col-xxl-12">
                                        <div class="info-card sales-card">
                                            <div class="card-body">
                                                <h5 class="card-title"> {{ $landingPage->title }}</h5>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input toggle-status" type="checkbox"
                                                        data-id="{{ $landingPage->id }}"
                                                        id="flexSwitchCheckChecked{{ $landingPage->id }}"
                                                        {{ $landingPage->status ? 'checked' : '' }}>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckChecked{{ $landingPage->id }}">Ẩn hiện các khối
                                                        block</label>

                                                </div>
                                                <div class="d-flex justify-content-end">
                                                   
                                                        <div class="">
                                                            <button class="btn btn-success text-white"
                                                                data-bs-toggle="modal" data-bs-target="#editImageModal"
                                                                data-id="{{ $landingPage->id }}"
                                                                data-title="{{ $landingPage->title }}" data-image-url="{{ asset('image/' . $landingPage->images) }}">Ảnh</button>
                                                        </div>
                                                        <div class=" ps-2">
                                                            <a href="{{ route('block.admin', ['id' => $landingPage->id]) }}" class="btn btn-success text-white">Chi
                                                                tiết</a>
                                                        </div>
                                                   
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Sales Card -->


                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </section>


    <div class="modal fade" id="editImageModal" tabindex="-1" aria-labelledby="editImageModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editImageModalLabel">Edit Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editImageForm" action="{{ route('landingpages.updateImage') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" id="imageLandingPageId">

                        <div class="mb-3">
                            <label for="imageFile" class="form-label">Chọn ảnh mẫu</label>
                           <div class="d-flex justify-content-center pb-1">
                            <img src="" id="image-preview" alt="Image preview"
                            style="display: none; max-width: 100%; height: auto;" />
                      
                           </div>
                                
                         
                            <input type="file" class="form-control" id="imageFile" name="image">
                        </div>
                        <button type="submit" class="btn btn-primary">Lưu ảnh</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    var editImageModal = document.getElementById('editImageModal');

    editImageModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var id = button.getAttribute('data-id');
        var title = button.getAttribute('data-title');

        var modalTitle = editImageModal.querySelector('.modal-title');
        var modalBodyInput = editImageModal.querySelector('#imageTitle');
        var modalHiddenInput = editImageModal.querySelector('#imageLandingPageId');
        var imagePreview = editImageModal.querySelector('#image-preview');

        modalTitle.textContent = 'Edit Image for ' + title;

        modalHiddenInput.value = id;

        // Clear previous image preview
        imagePreview.src = '';
        imagePreview.style.display = 'none';

        // Optionally, load the existing image if available
        var existingImageUrl = button.getAttribute('data-image-url');
        if (existingImageUrl) {
            imagePreview.src = existingImageUrl;
            imagePreview.style.display = 'block';
        }
    });

    document.getElementById('imageFile').addEventListener('change', function(event) {
        var input = event.target;
        var reader = new FileReader();
        var imagePreview = document.getElementById('image-preview');

        reader.onload = function() {
            var dataURL = reader.result;
            imagePreview.src = dataURL;
            imagePreview.style.display = 'block';
        };

        if (input.files && input.files[0]) {
            reader.readAsDataURL(input.files[0]);
        }
    });
});

    </script>
@endsection
