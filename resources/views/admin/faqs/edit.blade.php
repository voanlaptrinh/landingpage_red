@extends('admin.index')

@section('content')

<div class="container">
    <h1>Sửa FAQ</h1>
    <form action="{{ route('faqs.update', $faq->id) }}" method="POST" id="edit-faq-form">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="question">Câu hỏi</label>
            <input type="text" name="question" id="question" class="form-control" value="{{ old('question', $faq->question) }}" required>
        </div>
        
        <div class="form-group" id="answers-container">
            <label for="answers">Answers</label>
            @foreach($faq->answers as $answer)
                <div class="input-group mb-2">
                    <input type="text" name="answers[]" class="form-control" value="{{ $answer->answer }}" required>
                    <div class="input-group-append">
                        <button type="button" class="btn btn-outline-danger remove-answer ms-3">Xóa</button>
                    </div>
                </div>
            @endforeach
        </div>
        
       <div class="text-center"> <button type="button" id="add-answer" class="btn btn-sm btn-secondary">Thêm câu trả lời</button></div>
        
        <div class="text-end">
            <button type="submit" class="btn btn-success mt-3">Sửa</button>
        <a href="{{ route('faqs.admin') }}" class="btn btn-secondary mt-3">Thoát</a>
        </div>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(function() {
        $('#add-answer').click(function() {
            $('#answers-container').append('<div class="input-group mb-2"><input type="text" name="answers[]" class="form-control" required><div class="input-group-append"><button type="button" class="btn btn-outline-danger remove-answer">Remove</button></div></div>');
        });

        $(document).on('click', '.remove-answer', function() {
            $(this).closest('.input-group').remove();
        });

        $('#edit-faq-form').submit(function() {
            // Remove empty answer fields before form submission
            $('#answers-container .input-group').each(function() {
                if ($(this).find('input[type="text"]').val().trim() === '') {
                    $(this).remove();
                }
            });
        });
    });
</script>

@endsection
