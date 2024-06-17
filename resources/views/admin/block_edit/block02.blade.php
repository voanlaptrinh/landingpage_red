<div id="fields-container">
    <div class="field-group mb-3">
        <div class="row">
            <div class="col">
                <input type="file" name="json[0][image]" class="form-control" placeholder="Key" required>
            </div>
            <div class="col">
                <input type="text" name="json[0][key]" class="form-control" placeholder="Key" required>
            </div>
            <div class="col">
                <input type="text" name="json[0][value]" class="form-control" placeholder="Value" required>
            </div>
        </div>
    </div>
</div>
<button type="button" id="add-field" class="btn btn-secondary mb-3">Add Field</button>

<script>
    $(document).ready(function() {
        $('#add-field').click(function() {
            let fieldIndex = $('.field-group').length;
            let fieldHtml = `
                <div class="field-group mb-3">
                    <div class="row">
                        <div class="col">
                            <input type="file" name="json[${fieldIndex}][key]" class="form-control" placeholder="image" required>
                        </div>
                        <div class="col">
                            <input type="text" name="json[${fieldIndex}][key]" class="form-control" placeholder="Key" required>
                        </div>
                        <div class="col">
                            <input type="text" name="json[${fieldIndex}][value]" class="form-control" placeholder="Value" required>
                        </div>
                        <div class="col-auto">
                            <button type="button" class="btn btn-danger remove-field">Remove</button>
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