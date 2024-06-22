@extends('admin.index')
@section('content')
    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-12 d-sm-flex justify-content-between align-items-center">
                            <h5 class="card-title">Email liên hệ</h5>

                        </div>
                    </div>
                    <!-- Table with stripped rows -->
                    <table class="table">
                        <thead>
                            <tr>

                                <th>
                                    Tiêu đề
                                </th>
                                <th>Ngày tạo</th>
                                <th>Ngày sửa</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mailContacts as $mailContact)
                                <tr>
                                    <td>{{ $mailContact->email }}</td>
                                    <td>{{ $mailContact->created_at }}</td>
                                    <td>{{ $mailContact->updated_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
