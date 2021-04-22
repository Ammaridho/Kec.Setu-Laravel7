<div class="form-group mb-4">
    <label for="{{$field}}">{{$label}}</label>
      @error($field)
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror 
    <input type="{{$type}}" class="form-control" id="{{$field}}" placeholder="" name="{{$field}}" value="{{ '' ? '' : $value}}">
</div>