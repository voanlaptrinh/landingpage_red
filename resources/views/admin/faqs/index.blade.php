@extends('admin.index')

@section('content')

<div class="container">
    <h1>FAQs</h1>
    <a href="{{ route('faqs.create') }}" class="btn btn-primary mb-3">Add New FAQ</a>
    <ul id="question-list" class="list-group">
        @forelse ($questions as $question)
            <li class="list-group-item" data-id="{{ $question->id }}">
                <strong>{{ $question->question }}</strong>
                <ul class="list-group mt-2">
                    @forelse ($question->answers as $answer)
                        <li class="list-group-item" data-id="{{ $answer->id }}">
                            {{ $answer->answer }}
                        </li>
                    @empty
                        <li class="list-group-item text-muted">No answers found</li>
                    @endforelse
                </ul>
                <div class="float-right mt-2">
                    <a href="{{ route('faqs.edit', $question->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('faqs.destroy', $question->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </li>
        @empty
            <li class="list-group-item">No FAQs found</li>
        @endforelse
    </ul>
</div>
    
   



@endsection
