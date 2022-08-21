@csrf
<table>
    <tr>
        <td><b>Título</b></td>
        <td><input type="text" name="title" id="title" value="{{ old("title", $news->title) }}"></td>
    </tr>
    <tr>
        <td><b>Slug</b></td>
        <td><input type="text" name="slug" id="slug" value="{{ old("slug", $news->slug) }}"></td>
    </tr>
    <tr>
        <td><b>Subtitulo</b></td>
        <td><input type="text" name="subtitle" id="subtitle" value="{{ old("subtitle", $news->subtitle) }}"></td>
    </tr>
    <tr>
        <td><b>Contenido</b></td>
        <td><textarea name="content" id="content" cols="30" rows="10">{{ old("content", $news->content) }}</textarea></td>
    </tr>
</table>
<br>
<button type="submit">Enviar</button>
