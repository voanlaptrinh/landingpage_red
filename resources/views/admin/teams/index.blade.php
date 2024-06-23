@extends('admin.index')
@section('content')

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-12 d-sm-flex justify-content-between align-items-center">
                            <h5 class="card-title">Thành viên</h5>
                            <a href="{{ route('team.create') }}" class="btn btn-primary">
                                Thêm mới thành viên
                            </a>

                        </div>
                    </div>


                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>
                                    Tên
                                </th>
                                <th>Ảnh</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th >Vai trò</th>
                                <th data-type="date" data-format="YYYY/DD/MM">Ngày tạo</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            @foreach ($teams as $team)
                            <tr>
                                <td>{{ $team->name }}</td>
                                <td><img width="40px" height="40px" src="{{ asset('uploads/' . $team->images) }}"
                                    alt=""></td>
                                <td>{{ $team->phone }}</td>
                                <td>{{ $team->address }}</td>
                               <td>{{ $team->category }}</td>
                                <td>{{ $team->created_at }}</td>
                               
                                <td>
                                    <a href="{{ route('team.edit', $team->id) }}"
                                        class="btn btn-warning"><i class="ri-edit-2-fill"></i></a>
                                    <form action="{{ route('teams.destroy', $team->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Bạn có chắc chắn muốn xóa thành viên này?')"><i class="ri-delete-bin-2-fill"></i></button>
                                    </form>
                                    {{-- <a href="{{ route('teams.detail', $team->id) }}"
                                      class="btn btn-success"><i class="ri-eye-fill"></i></a> --}}
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