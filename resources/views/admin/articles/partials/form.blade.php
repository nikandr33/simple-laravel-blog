<label for="">Status</label>
<select name="published" class="form-control">
    @if(isset($article->id))
        <option value="0" @if($article->published == 0) selected="" @endif>Not published</option>
        <option value="1" @if($article->published == 1) selected="" @endif>Published</option>
    @else
        <option value="0">Not published</option>
        <option value="1">Published</option>
    @endif
</select>

<label for="">Title</label>
<input type="text" class="form-control" name="title" placeholder="Article title" value="{{$article->title or ""}}" required>

<label for="">Slug (Unique value)</label>
<input type="text" class="form-control" name="slug" placeholder="Automatic generation" value="{{$article->slug or "" }}" readonly="">

<label for="">Parent category</label>
<select name="parent_id" class="form-control" name="categories[]" multiple="">
    @include('admin.articles.partials.categories', ['categories' => $categories])
</select>

<label for="">Short description</label>
<textarea name="description_short" id="description_short" class="form-control">{{$article->description_short or ""}}</textarea>

<label for="">Full description</label>
<textarea name="description" id="description" class="form-control">{{$article->description or ""}}</textarea>

<hr />

<label for="">Meta title</label>
<input type="text" class="form-control" name="meta_title" placeholder="Meta title" value="{{$article->meta_title or ""}}">

<label for="">Meta description</label>
<input type="text" class="form-control" name="meta_description" placeholder="Meta description" value="{{$article->meta_description or ""}}">

<label for="">Meta keywords</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Meta keywords" value="{{$article->meta_keyword or ""}}">

<hr />

<input type="submit" class="btn btn-primary" value="Save">
