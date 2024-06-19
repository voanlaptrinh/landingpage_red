<div class="col-lg-12 pt-3">
    <div id="fields-container6">
        @foreach ($block->json as $index => $item)
            <div class="field-group3 mb-3">
                <div class="row">
                   
                    <div class="col">
                        <input type="text" name="json[{{ $index }}][number]" class="form-control" placeholder="number"
                            value="{{ $item['number'] }}" required>
                    </div>
                    <div class="col">
                        <input type="text" name="json[{{ $index }}][key]" class="form-control" placeholder="Key"
                            value="{{ $item['key'] }}" required>
                    </div>
                    <div class="col">
                        <input type="text" name="json[{{ $index }}][value]" class="form-control"
                            placeholder="Value" value="{{ $item['value'] }}" required>
                    </div>
                  
                    <div class="col-auto">
                        <button type="button" class="btn btn-danger firemove-field6">Xóa</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="text-center">

        <button type="button" id="add-field6" class="btn btn-secondary mb-3">Thêm các lĩnh vực</button>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#add-field6').click(function() {
            let fieldIndex = $('.field-group3').length;
            let fieldHtml = `
                <div class="field-group3 mb-3">
                    <div class="row">
                      
                        <div class="col">
                            <input type="text" name="json[${fieldIndex}][number]" class="form-control" placeholder="number" required>
                        </div>
                        <div class="col">
                            <input type="text" name="json[${fieldIndex}][key]" class="form-control" placeholder="Key" required>
                        </div>
                        <div class="col">
                            <input type="text" name="json[${fieldIndex}][value]" class="form-control" placeholder="Value" required>
                        </div>
                       
                        <div class="col-auto">
                            <button type="button" class="btn btn-danger firemove-field6">Xóa</button>
                        </div>
                    </div>
                </div>
            `;
            $('#fields-container6').append(fieldHtml);
        });

        $(document).on('click', '.firemove-field6', function() {
            $(this).closest('.field-group3').remove();
        });
    });
</script>