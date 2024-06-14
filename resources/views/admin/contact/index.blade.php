@extends('admin.index')
@section('content')
    <section class="section">
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
                                    <th>
                                        Tiêu đề
                                    </th>
                                    <th>Số điện thoại</th>
                                    <th>Email</th>
                                    <th>Ngày tạo</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->title }}</td>
                                        
                                        <td>{{ $contact->phone }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->created_at }}</td>
                                        <td>
                                            {{-- <a href="{{ route('news.edit', $new->id) }}"
                                                class="btn btn-warning"><i class="ri-edit-2-fill"></i></a>
                                            <form action="{{ route('news.destroy', $new->id) }}" method="POST"
                                                style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Bạn có chắc chắn muốn xóa tin tức này?')"><i class="ri-delete-bin-2-fill"></i></button>
                                            </form> --}}
                                            <a href="javascript:void(0);" 
                                            class="btn btn-success" 
                                            onclick="showContactDetail('{{ $contact->title }}', '{{ $contact->phone }}', '{{ $contact->email }}', '{{ $contact->created_at }}', '{{$contact->content}}')">
                                            <i class="ri-eye-fill"></i>
                                         </a>
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
    <!-- Modal -->
<div class="modal fade" id="contactDetailModal" tabindex="-1" aria-labelledby="contactDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="contactDetailModalLabel">Chi tiết liên hệ</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p><strong>Tiêu đề:</strong> <span id="contactTitle"></span></p>
          <p><strong>Số điện thoại:</strong> <span id="contactPhone"></span></p>
          <p><strong>Email:</strong> <span id="contactEmail"></span></p>
          <p><strong>Ngày tạo:</strong> <span id="contactCreatedAt"></span></p>
          <p style="word-wrap: break-word"><strong>Nội dung:</strong> <span id="contactContent"></span></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div>
  <script>
    function showContactDetail(title, phone, email, createdAt, content) {
        document.getElementById('contactTitle').innerText = title;
        document.getElementById('contactPhone').innerText = phone;
        document.getElementById('contactEmail').innerText = email;
        document.getElementById('contactCreatedAt').innerText = createdAt;
        document.getElementById('contactContent').innerText = content;
        var myModal = new bootstrap.Modal(document.getElementById('contactDetailModal'));
        myModal.show();
    }
</script>

@endsection
