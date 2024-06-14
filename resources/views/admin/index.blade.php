<!DOCTYPE html>
<html lang="en">
<head>@php
    $webConfig = \App\Models\WebConfig::find(1);
@endphp
    <title>{{$webConfig->title}}</title>
    @include('admin.common.meta')
    
</head>
<body>
  
    @include('admin.common.header')
    @include('admin.common.sidebar')


    <main id="main" class="main">
        @yield('content')
    </main>


    @include('admin.common.footer')





 <!-- Vendor JS Files -->
 <script src="{{asset('/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
 <script src="{{asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
 <script src="{{asset('/assets/vendor/chart.js/chart.umd.js')}}"></script>
 <script src="{{asset('/assets/vendor/echarts/echarts.min.js')}}"></script>
 <script src="{{asset('/assets/vendor/quill/quill.js')}}"></script>
 <script src="{{asset('/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
 <script src="{{asset('/assets/vendor/tinymce/tinymce.min.js')}}"></script>
 <script src="{{asset('/assets/vendor/php-email-form/validate.js')}}"></script>

 <!-- Template Main JS File -->
 <script src="{{asset('/assets/js/main.js')}}"></script>

<script src="{{ asset('/js/toastr.min.js') }}"></script>
<script>
    @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
    @endif

    @if (Session::has('error'))
        toastr.error("{{ Session::get('error') }}");
    @endif

    @if (Session::has('info'))
        toastr.info("{{ Session::get('info') }}");
    @endif

    @if (Session::has('warning'))
        toastr.warning("{{ Session::get('warning') }}");
    @endif
</script>

<script>

    $(function() {
        $('#sortable').sortable({
            update: function(event, ui) {
                var sortedIds = $('#sortable').sortable('toArray', { attribute: 'data-id' });
                $.ajax({
                    url: '{{ route('landingpages.sort') }}',
                    method: 'POST',
                    data: {
                        sortedIds: sortedIds,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                            if (response.status === 'success') {
                                toastr.success('Thay đổi vị trí thành công!');
                            }
                        },
                        error: function(xhr, status, error) {
                            toastr.error('Đã xảy ra lỗi khi thay đổi vị trí');
                        }
                });
            }
        });
    });

    $(document).ready(function() {
            $('.toggle-status').change(function() {
                var id = $(this).data('id');
                var status = $(this).is(':checked') ? 1 : 0;

                $.ajax({
                    url: '{{ route('landingpages.toggleStatus') }}',
                    method: 'POST',
                    data: {
                        id: id,
                        status: status,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            toastr.success(response.message);
                        } else {
                            toastr.error(response.message);
                        }
                    },
                    error: function() {
                        toastr.error('Đã xảy ra lỗi khi cập nhật trạng thái.');
                    }
                });
            });
        });
</script>
</body>
</html>