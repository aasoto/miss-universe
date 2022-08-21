@csrf
<table>
    <tr>
        <td><b>Razón social</b></td>
        <td><input type="text" name="business_name" id="business_name" value="{{ old("business_name", $nationalcommittee->business_name) }}"></td>
    </tr>
    <tr>
        <td><b>Director nacional</b></td>
        <td><input type="text" name="national_director" id="national_director" value="{{ old("national_director", $nationalcommittee->national_director) }}"></td>
    </tr>
    <tr>
        <td><b>País</b></td>
        <td>
            <select name="country_id" id="country_id">
                @foreach ($countries as $name => $id)
                    <option {{ old("country_id", $nationalcommittee->country_id) == $id ? 'selected' : '' }} value="{{$id}}">{{$name}}</option>
                @endforeach
            </select>
        </td>
    </tr>
</table>
<br>
<button type="submit">Enviar</button>
