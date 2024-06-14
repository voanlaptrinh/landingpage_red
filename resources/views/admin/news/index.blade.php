@extends('admin.index')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                                <h5 class="card-title">Tin tức</h5>
                                <a href="{{ route('news.create') }}" class="btn btn-primary">
                                    Thêm mới Tin Tức
                                </a>

                            </div>
                        </div>


                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>
                                        Tiêu đề
                                    </th>
                                    <th>Ảnh</th>
                                    <th data-type="date" data-format="YYYY/DD/MM">Ngày tạo</th>
                                    <th data-type="date" data-format="YYYY/DD/MM">Ngày sửa</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($news as $new)
                                    <tr>
                                        <td>{{ $new->title }}</td>
                                        <td><img width="40px" height="40px" src="{{ asset('images/' . $new->images) }}"
                                                alt=""></td>
                                        <td>{{ $new->created_at }}</td>
                                        <td>{{ $new->updated_at }}</td>
                                        <td>
                                            <a href="{{ route('news.edit', $new->id) }}"
                                                class="btn btn-warning"><i class="ri-edit-2-fill"></i></a>
                                            <form action="{{ route('news.destroy', $new->id) }}" method="POST"
                                                style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Bạn có chắc chắn muốn xóa tin tức này?')"><i class="ri-delete-bin-2-fill"></i></button>
                                            </form>
                                            <a href="{{ route('news.detail', $new->id) }}"
                                              class="btn btn-success"><i class="ri-eye-fill"></i></a>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
