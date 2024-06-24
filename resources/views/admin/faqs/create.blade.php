@extends('admin.index')

@section('content')

<div class="container">
    <h1>Thêm mới FAQ</h1>
    <form action="{{  route('faqs.store') }}" method="POST">
        @csrf
     
        <div class="form-group">
            <label for="question">Câu hỏi</label>
            <input type="text" name="question" id="question" class="form-control" value="{{ old('question', $faq->question ?? '') }}" required>
        </div>
        <div class="form-group">
            <label for="answers">Câu trả lời</label>
            <div id="answers-container">
                @if(isset($faq))
                    @foreach($faq->answers as $answer)
                        <input type="text" name="answers[{{ $answer->id }}]" class="form-control mb-2" value="{{ $answer->answer }}" required>
                    @endforeach
                @else
                    <input type="text" name="answers[]" class="form-control mb-2" required>
                @endif
            </div>
            <div class="text-center">
                <button type="button" id="add-answer" class="btn btn-sm btn-secondary">Thêm câu trả lời</button>
            </div>
        </div>
       <div class="text-end">
        <button type="submit" class="btn btn-success ">Thêm mới</button>
       </div>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(function() {
        $('#add-answer').click(function() {
            $('#answers-container').append('<input type="text" name="answers[]" class="form-control mb-2" required>');
        });
    });
</script>

@endsection