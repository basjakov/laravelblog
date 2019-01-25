@foreach ($categories as $category)
    @if ($category->children->where('published',1)->count())
      <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="{{url("/blog/category/$category->slug")}}" >
            {{$category->title}}<span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
              @include('layouts.top_menu',['categories'=>$category->children])
          </ul>
      </li>
    @else
      <li>
        <a href="{{url("/blog/category/$category->slug")}}">{{$category->title}}</a>
    @endif
      </li>
@endforeach
