<div class="form-group mt-3">
    <label for="{{$field}}">{{$label}}</label>
      @error($field)
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror 
    <textarea class="form-control mb-3" id="{{$field}}" rows="3" style="height: 240px;" name="{{$field}}">{{'' ? '' : $value}}</textarea>
</div>