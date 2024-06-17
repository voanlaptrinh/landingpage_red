@extends('admin.index')
@section('content')
    <div class="container">
        <h1>Edit Block</h1>
        <form action="{{ route('blocks.update', $block->id) }}" method="POST" class="row" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="number" hidden name="landingpage_id" value="{{ $block->landingpage_id }}">
            <!-- Hiển thị các trường tùy thuộc vào block_type -->
            @if ($block->block_type == 'block01')
                @include('admin.block_edit.block01')
                <!-- Các trường khác của type1 -->
            @elseif($block->block_type == 'block02')
            @include('admin.block_edit.block02')
                <!-- Các trường khác của type2 -->
            @endif

            <div class="text-end pt-5">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
        </form>
    </div>
@endsection
