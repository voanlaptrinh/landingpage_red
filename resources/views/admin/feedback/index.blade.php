@extends('admin.index')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                                <h5 class="card-title">Feedback</h5>


                            </div>
                        </div>


                        <!-- Table with stripped rows -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        Email
                                    </th>
                                    <th>Trạng thái</th>
                                    <th data-type="date" data-format="YYYY/DD/MM">Ngày tạo</th>
                                    <th data-type="date" data-format="YYYY/DD/MM">Ngày sửa</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($feedbacks as $feedback)
                                    <tr>
                                        <td>{{ $feedback->email }}</td>
                                        <td>
                                            <button id="toggle-status-{{ $feedback->id }}"
                                                class="btn {{ $feedback->status ? 'btn-success' : 'btn-danger' }}"
                                                onclick="toggleStatus({{ $feedback->id }}, '{{ route('feedback.toggleStatus', $feedback->id) }}')">
                                                {{ $feedback->status ? 'Open' : 'Closed' }}
                                            </button>
                                        </td>

                                        <td>{{ $feedback->created_at }}</td>
                                        <td>{{ $feedback->updated_at }}</td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-success"
                                                onclick="showFeedbackDetail('{{ $feedback->email }}', '{{ $feedback->created_at }}', '{{$feedback->content}}')">
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
    <div class="modal fade" id="contactDetailModal" tabindex="-1" aria-labelledby="contactDetailModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactDetailModalLabel">Chi tiết đánh giá</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  
                    <p><strong>Email:</strong> <span id="feedbackEmail"></span></p>
                    <p><strong>Ngày tạo:</strong> <span id="feedbackCreatedAt"></span></p>
                    <p style="word-wrap: break-word"><strong>Nội dung:</strong> <span id="feedbackContent"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showFeedbackDetail(email, createdAt, content) {
           
            document.getElementById('feedbackEmail').innerText = email;
            document.getElementById('feedbackCreatedAt').innerText = createdAt;
            document.getElementById('feedbackContent').innerText = content;
            var myModal = new bootstrap.Modal(document.getElementById('contactDetailModal'));
            myModal.show();
        }
    </script>
    <script>
        function toggleStatus(feedbackId, toggleUrl) {
            $.ajax({
                url: toggleUrl,
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.success) {
                        const button = $('#toggle-status-' + feedbackId);
                        button.toggleClass('btn-success btn-danger');
                        button.text(response.status ? 'Open' : 'Closed');
                        toastr.success('Status updated successfully');
                    } else {
                        toastr.error('Failed to toggle status');
                    }
                },
                error: function() {
                    toastr.error('Error occurred while toggling status');
                }
            });
        }
    </script>
@endsection
