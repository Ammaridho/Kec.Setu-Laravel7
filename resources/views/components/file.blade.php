<div class="input-group mb-3">
    <label for="{{$field}}">{{$label}}</label>
    <br><br>
    @if ($value)
        
        <img src="/img/gambar_bacaan/{{$value}}" alt="" style="margin-top: 40px; width:150px; margin-bottom: 20px">
    @else
        <p>Belum ada gambar</p>
    @endif

    <input class="form-control-file" type="file" name="{{$field}}" id="{{$field}}" value="{{$value}}">
 </div>