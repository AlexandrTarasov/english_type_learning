<label for="">Статус</label>
<select class="form-control" name="published">
  @if (isset($article->id))
    <option value="0" @if ($article->published == 0) selected="" @endif>Не опубликовано</option>
    <option value="1" @if ($article->published == 1) selected="" @endif>Опубликовано</option>
  @else
    <option value="0">Не опубликовано</option>
    <option value="1">Опубликовано</option>
  @endif
</select>

<label for="">Title</label>
<input type="text" class="form-control" name="title" placeholder="Article title" value="{{$article->title or ""}}" required>

<label for="">Slug (unique value)</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{$article->slug or ""}}" readonly="">

<label for="">Родительская категория</label>
<select class="form-control" name="categories[]" multiple="">
  @include('admin.articles.partials.categories', ['categories' => $categories])
</select>

<label for="">short descr</label>
<textarea class="form-control" id="description_short" name="description_short">{{$article->description_short or ""}}</textarea>

<label for="">Full descr</label>
<textarea class="form-control" id="description" name="description">{{$article->description or ""}}</textarea>


<label for="">Meta Title</label>
<input type="text" class="form-control" name="meta_title" placeholder="Meta Title" value="{{$article->meta_title or ""}}" required>

<label for="">Meta descr</label>
<input type="text" class="form-control" name="meta_descr" placeholder="Meta descr" value="{{$article->meta_description or ""}}" required>

<label for="">Meta keyword</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Meta keyword" value="{{$article->meta_keyword or ""}}" required>


<hr />

<input class="btn btn-primary" type="submit" value="Сохранить">
