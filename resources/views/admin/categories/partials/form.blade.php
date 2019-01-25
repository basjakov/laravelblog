<!--published@ granchel bazaum-->
<label for="">Status</label>
<select class="form-control" name="published">
     @if(isset($category->id))
       <option value="0" @if ($category->published == 0) selected="" @endif>Չի հրապարակայնացվել</option>
       <option value="1" @if ($category->published == 1) selected="" @endif>հրապարակայնացվել</option>
    @else
       <option value="0">Չի հրապարակայնացվել</option>
       <option value="1"> հրապարակայնացվել</option>
    @endif
</select>

<label for=""></label>
<input type="text" class="form-control" name="title" placeholder="Կատոգորիայի zagalovok կատեգորիայի" required>
<label for="">Slug</label>
<input class="form-control" type="text" name="slug" placeholder="Ավտոմատ գեներացիա"   readonly="">

<label for="">parrent category</label>
<select class="form-control" name="parrent_id">
    <option value="0">Wihout parrent category</option>
    @include('admin.categories.partials.categories',['categories'=> $categories])
</select>




<hr/>
<input class="btn btn-primary" type="submit" value="Save">
