<div class="form-group col-lg-6">
    <label for="title">Tiêu đề</label>
    <input type="text" name="title" value="{{ $block->title }}" class="form-control">
</div>
<div class="form-group col-lg-6">
    <label for="title1">Tiêu Đề 1</label>
    <input type="text" name="title1" value="{{ $block->title1 }}" class="form-control">
</div>
<div class="form-group col-lg-12">
    <label for="title1">Mô tả</label>
    <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{ $block->title1 }}</textarea>
</div>
<div class="form-group col-lg-6">
    <label for="link">Đường dẫn nút button</label>
    <input type="text" name="link" value="{{ $block->link }}" class="form-control">
</div>
<div class="form-group col-lg-6">
    <label for="link1">Đường dẫn video</label>
    <input type="text" name="link1" value="{{ $block->link1 }}" class="form-control">
</div>
<div class="form-group col-lg-6">
    <label for="images">Đường dẫn video</label>
    <input type="file" name="images" value="{{ $block->images }}" class="form-control">
</div>
<img src="{{ asset( $block->images) }}" alt="">