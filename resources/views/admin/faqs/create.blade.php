@extends('admin.index')

@section('content')

<div class="container">
    <h1>{{ isset($faq) ? 'Edit FAQ' : 'Add New FAQ' }}</h1>
    <form action="{{  route('faqs.store') }}" method="POST">
        @csrf
     
        <div class="form-group">
            <label for="question">Question</label>
            <input type="text" name="question" id="question" class="form-control" value="{{ old('question', $faq->question ?? '') }}" required>
        </div>
        <div class="form-group">
            <label for="answers">Answers</label>
            <div id="answers-container">
                @if(isset($faq))
                    @foreach($faq->answers as $answer)
                        <input type="text" name="answers[{{ $answer->id }}]" class="form-control mb-2" value="{{ $answer->answer }}" required>
                    @endforeach
                @else
                    <input type="text" name="answers[]" class="form-control mb-2" required>
                @endif
            </div>
            <button type="button" id="add-answer" class="btn btn-sm btn-secondary">Add Answer</button>
        </div>
        <button type="submit" class="btn btn-success">ADd</button>
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