@csrf
<br>
<label for="">País</label>
<select name="country_id" id="country_id">
    @foreach ($countries as $name => $id)
        <option {{ old("country_id", $candidate->country_id) == $id ? 'selected' : '' }} value="{{$id}}">{{$name}}</option>
    @endforeach
</select>
<br>
<label for="">Primer nombre</label>
<input type="text" name="first_name" id="first_name" value="{{ old("first_name", $candidate->first_name) }}">
<br>
<label for="">Segundo nombre</label>
<input type="text" name="second_name" id="second_name" value="{{ old("second_name", $candidate->second_name) }}">
<br>
<label for="">Primer apellido</label>
<input type="text" name="first_last_name" id="first_last_name" value="{{ old("first_last_name", $candidate->first_last_name) }}">
<br>
<label for="">Segundo apellido</label>
<input type="text" name="second_last_name" id="second_last_name" value="{{ old("second_last_name", $candidate->second_last_name) }}">
<br>
<label for="">Genero</label>
<select name="gender" id="gender">
    <option {{ old("gender", $candidate->gender) == "f" ? 'selected' : '' }} value="f">Femenino</option>
    <option {{ old("gender", $candidate->gender) == "m" ? 'selected' : '' }} value="m">Masculino</option>
</select>
<br>
<label for="">Fecha de nacimiento</label>
<input type="date" name="birthdate" id="birthdate" value="{{ old("birthdate", $candidate->birthdate) }}">
<br>
<label for="">Comité national</label>
<select name="national_committee_id" id="national_committee_id">
    @foreach ($national_committees as $business_name => $id)
        <option {{ old("national_committee_id", "") == $id ? 'selected' : $candidate->national_committee_id }} value="{{$id}}">{{$business_name}}</option>
    @endforeach
</select>
<br>
<label for="">Foto oficial</label>
<input type="file" name="official_picture" id="official_picture">
<br>
<button type="submit">Enviar</button>
