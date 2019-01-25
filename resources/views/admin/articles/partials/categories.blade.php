@foreach ($categories as $category)

    <option value="{{$category->id or ""}}"

        @isset($article->id)
          @foreach($article->categories as $category_article)
            @if ($category->id == $category_article->id)
              selected="selected"
            @endif
          @endforeach
        @endisset
        >
        ----{{ $delimiter}}{{$category->title }}
      </option>
      @if (count($category->children)> 0)
        @include("admin.articles.partials.categories",[
          'categories'=> $categoryt->children,
          'delimiter'=> '-'.$delimiter
        ])
      @endif
@endforeach
