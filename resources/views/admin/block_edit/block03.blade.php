<div class="col-lg-6">
    <div class="form-group ">
        <label for="title">Tiêu đề</label>
        <input type="text" name="title" value="{{ $block->title }}" class="form-control">
    </div>
    <div class="form-group ">
        <label for="title1">Tiêu đề 2</label>
        <input type="text" name="title1" value="{{ $block->title1 }}" class="form-control">
    </div>
    <div class="form-group ">
        <label for="title1">Mô tả</label>
        <textarea name="description" id="description" cols="30" rows="10"  class="form-control">{{ $block->description }}</textarea>
        {{-- <input type="text" name="title1" value="{{ $block->title1 }}" class="form-control"> --}}
    </div>
    <div class="form-group col-lg-6">
        <label for="images">Đường dẫn ảnh</label>
        <input type="file" name="images" class="form-control">
    </div>
    <img style="width:20%;" src="{{ asset( $block->images) }}" alt="">
</div>
<div class="col-lg-6">
    <div class="col-lg-12 pt-3">
        <div id="fields-container">
            @foreach ($block->json as $index => $item)
                <div class="field-group mb-3">
                    <div class="row">
                     
                        <div class="col">
                            <input type="text" name="json[{{ $index }}][key]" class="form-control" placeholder="Key"
                                value="{{ $item['key'] }}" required>
                        </div>
                      
                        <div class="col-auto">
                            <button type="button" class="btn btn-danger remove-field">Xóa</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button type="button" id="add-field" class="btn btn-secondary mb-3">Thêm các lĩnh vực</button>
    </div>
    
</div>

<script>
    $(document).ready(function() {
        $('#add-field').click(function() {
            let fieldIndex = $('.field-group').length;
            let fieldHtml = `
                <div class="field-group mb-3">
                    <div class="row">
                       
                        <div class="col">
                            <input type="text" name="json[${fieldIndex}][key]" class="form-control" placeholder="Key" required>
                        </div>
                      
                        <div class="col-auto">
                            <button type="button" class="btn btn-danger remove-field">Xóa</button>
                        </div>
                    </div>
                </div>
            `;
            $('#fields-container').append(fieldHtml);
        });

        $(document).on('click', '.remove-field', function() {
            $(this).closest('.field-group').remove();
        });
    });
</script>