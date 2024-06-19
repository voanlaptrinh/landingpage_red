@extends('admin.index')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Web Setting</h5>

            <!-- Multi Columns Form -->
            <form method="POST" action="{{ route('webconfig.update') }}" class="row g-3" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-lg-4">
                    <label class="custum-file-upload" for="file">
                        <div class="icon">
                            @if (!empty($webConfig->logo))
                                <img width="150px" src="{{ asset( $webConfig->logo) }}" alt="">
                            @else
                            <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24">
                                <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill=""
                                        d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z"
                                        clip-rule="evenodd" fill-rule="evenodd"></path>
                                </g>
                            </svg>
                            @endif
                          
                        </div>
                        <div class="text">
                            <span>Đưa ảnh LOGO vào</span>
                        </div>
                        <input type="file" id="file" name="logo" >
                    </label>
                </div>
                <div class="col-lg-8 row">
                    <div class="col-md-12">
                        <label for="inputName5" class="form-label">Tên website</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ $webConfig->title }}">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ $webConfig->email }}">
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Số điện thoại</label>
                        <input type="number" class="form-control" id="phone" name="phone"
                            value="{{ $webConfig->phone }}">
                    </div>
                    <div class="col-12">
                        <label for="address" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" id="address" placeholder="Địa chỉ"
                            value="{{ $webConfig->address }}">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Mô tả</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{ $webConfig->description }}</textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="facebook" class="form-label">Facebook</label>
                        <input type="text" class="form-control" id="facebook" value="{{ $webConfig->facebook }}">
                    </div>
                    <div class="col-md-6">
                        <label for="youtube" class="form-label">Youtube</label>
                        <input type="text" class="form-control" id="youtube" value="{{ $webConfig->youtube }}">
                    </div>
                    <div class="col-md-4">
                        <label for="twitter" class="form-label">Twitter</label>
                        <input type="text" class="form-control" id="twitter" value="{{ $webConfig->twitter }}">
                    </div>
                    <div class="col-md-4">
                        <label for="telegram" class="form-label">Telegram</label>
                        <input type="text" class="form-control" id="telegram" value="{{ $webConfig->telegram }}">
                    </div>
                    <div class="col-md-4">
                        <label for="instagram" class="form-label">Instagram</label>
                        <input type="text" class="form-control" id="instagram" value="{{ $webConfig->instagram }}">
                    </div>
                    <div class="text-end pt-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
            </form><!-- End Multi Columns Form -->

        </div>
    </div>
@endsection
