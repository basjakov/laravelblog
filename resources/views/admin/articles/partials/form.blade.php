<!--published@ granchel bazaum-->
<label for="">Status</label>
<select class="form-control" name="published">
     @if(isset($article->id))
       <option value="0" @if ($article->published == 0) selected="" @endif>Չի հրապարակայնացվել</option>
       <option value="1" @if ($article->published == 1) selected="" @endif>հրապարակայնացվել</option>
    @else
       <option value="0">Չի հրապարակայնացվել</option>
       <option value="1"> հրապարակայնացվել</option>
    @endif
</select>

<label for="">Վերնագիր</label>
<input type="text" class="form-control" name="title" placeholder="Նյութի անվանում" required>
<label for="">Slug</label>
<input class="form-control" type="text" name="slug" placeholder="Ավտոմատ գեներացիա"   readonly="">

<label for="">parrent category</label>
<select class="form-control" name="categories[]" multiple="">
    <option value="0">Wihout parrent category</option>
    @include('admin.articles.partials.categories',['categories'=> $categories])

</select>
<label for="">Կարճ նկարագրություն</lebel>
<textarea class="form-control" id="description_short" name="description_short"></textarea>

<label for="">նկարագրություն</label>
<textarea class="form-control" id="description" name="description"></textarea>
<hr/>
<label for="">Մետա վերնագիր (Meta Title)</label>
<input type="text" class="form-control" name="meta_title" placeholder="meta title" >
<label for="">Մետա նկարագրություն (Meta description)</label>
<input type="text" class="form-control" name="meta_description" placeholder="meta description" >
<label for="">Մետա բանալի (Meta keyword)</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="meta keyword">

<hr/>
<input class="btn btn-primary" type="submit" value="Save">
