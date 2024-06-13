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
                                    <div class="col-xxl-12 col-md-6">
                                        <div class="info-card sales-card">
                                            <div class="card-body">
                                                <h5 class="card-title"> {{ $landingPage->title }}</h5>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input toggle-status" type="checkbox"
                                                        data-id="{{ $landingPage->id }}"
                                                        id="flexSwitchCheckChecked{{ $landingPage->id }}"
                                                        {{ $landingPage->status ? 'checked' : '' }}>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckChecked{{ $landingPage->id }}">Ẩn hiện các khối block</label>

                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <div class=" row">
                                                        <div class="col-lg-6">Ảnh mô tả</div>
                                                        <div class="col-lg-6">Chi tiết Block</div>
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
@endsection
