@extends('admin.index')
@section('content')
    <div class="">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Sửa Block</h1>
                <form action="{{ route('blocks.update', $block->id) }}" method="POST" class="row"
                    enctype="multipart/form-data">
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
                    @elseif($block->block_type == 'block03')
                        @include('admin.block_edit.block03')
                        <!-- Các trường khác của type3 -->
                    @endif

                    <div class="text-end pt-5">
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
