@if($errors->any())
  </div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
    </ul>
  </div>
@endif

<label for="">Վերնագիր</label>
<input type="text" class="form-control" name="name" placeholder="Անուն" required>
<label for="">Email</label>
<input class="form-control" type="email" name="email" placeholder="email" >
<label for="">Գաղտնաբառ</label>
<input class="form-control" type="password" name="password" placeholder="Գաղտնաբառ">
<label for="">Կրկնեք գաղտնաբառը</label>
<input class="form-control" type="password" name="password_confirmation" placeholder="Գաղտնաբառ">
<hr/>
<input class="btn btn-primary" type="submit" value="Save">
