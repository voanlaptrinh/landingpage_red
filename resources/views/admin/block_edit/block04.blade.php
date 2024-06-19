<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-12">
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
    
            </div>
        </div>
      
    </div>
   
</div>