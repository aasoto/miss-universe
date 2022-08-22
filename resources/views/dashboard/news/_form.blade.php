@csrf
<div class="form-grid-div-1">
    <div class="form-grid-div-2">
        <label for="">Título</label>
        <input type="text" name="title" id="title" value="{{ old("title", $news->title) }}">
    </div>
    <div class="form-grid-div-2">
        <label for="">Slug</label>
        <input type="text" name="slug" id="slug" value="{{ old("slug", $news->slug) }}">
    </div>
</div>
<div class="form-grid-div-1">
    <div class="form-grid-div-lonely">
        <label for="">Subtitulo</label>
        <input type="text" name="subtitle" id="subtitle" value="{{ old("subtitle", $news->subtitle) }}">
    </div>
</div>
<div class="form-grid-div-1">
    <div class="form-grid-div-lonely">
        <label for="">Contenido</label>
        <textarea name="content" id="content" cols="30" rows="10">{{ old("content", $news->content) }}</textarea>
    </div>
</div>
