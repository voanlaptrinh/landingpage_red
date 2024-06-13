{{-- 
    @foreach ($landingpages as $item)

        @include('user.content.block01')
        @include('user.content.block02')
       
    @endforeach --}}

<!-- resources/views/landingpages/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Sortable Landing Pages</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>
<body>
    <h1>Sortable Landing Pagesádasd</h1>
    <ul id="sortable">
        @foreach ($landingpages as $landingPage)
            <li class="ui-state-default" data-id="{{ $landingPage->id }}">
               <h4>ádd</h4> {{ $landingPage->title }}
            </li>
        @endforeach
    </ul>

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
                                alert('Order updated successfully!');
                            }
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
