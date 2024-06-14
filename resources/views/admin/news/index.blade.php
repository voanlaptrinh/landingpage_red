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
                    <a href="{{route('news.create')}}" class="btn btn-primary" >
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
                    <td>{{$new->title}}</td>
                    <td><img src="{{ asset('image/' . $new->images) }}" alt=""></td>
                    <td>{{$new->created_at}}</td>
                    <td>{{$new->updated_at}}</td>
                    <td>
                        <a href="" class="btn btn-success">Sửa</a>
                        <button class="btn btn-primary">xóa</button>
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