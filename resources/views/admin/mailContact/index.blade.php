@extends('admin.index')
@section('content')
<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-12 d-sm-flex justify-content-between align-items-center">
                        <h5 class="card-title">Liên hệ</h5>
    
                    </div>
                </div>
    
    
                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                        <tr>
                           
                            <th>Email</th>
                            <th>Ngày tạo</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mailContacts as $mailContact)
                            <tr>
                               
                                <td>{{ $mailContact->email }}</td>
                             <td>{{$mailContact->created_at}}</td>
    
                            </tr>
                        @endforeach
    
    
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->
    
            </div>
        </div>
    </div>
</div>

@endsection