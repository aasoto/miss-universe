@csrf
<div class="form-grid-div-1">
    <div class="form-grid-div-2">
        <label for="">Razón social</label>
        <input type="text" name="business_name" id="business_name" value="{{ old("business_name", $nationalcommittee->business_name) }}"></td>
    </div>
    <div class="form-grid-div-2">
        <label for="">Director nacional</label>
        <input type="text" name="national_director" id="national_director" value="{{ old("national_director", $nationalcommittee->national_director) }}">
    </div>
</div>
<div class="form-grid-div-1">
    <div class="form-grid-div-lonely">
        <label for="">País</label>
        <select name="country_id" id="country_id">
            @foreach ($countries as $name => $id)
                <option {{ old("country_id", $nationalcommittee->country_id) == $id ? 'selected' : '' }} value="{{$id}}">{{$name}}</option>
            @endforeach
        </select>
    </div>
</div>
