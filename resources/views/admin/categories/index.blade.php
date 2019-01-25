@extends('admin.layouts.app_admin')

@section('content')
	<div class="container">
		@component('admin.components.breadcrumb')
			@slot('title') Կատեգորիաների ցուցակ @endslot
			@slot('parent')Գլխավոր @endslot
			@slot('active')Կատեգորիաներ @endslot
		@endcomponent

		<hr>

		<a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i>Ստեղծել կատեգորիա</a>
		<table class="table table-striped">
			<thead>
				<th>անունը</th>
				<th>ում կողմից է </th>
				<th class="text-right">փոխել</th>

			</thead>
			<tbody>
				@forelse($categories as $category)
						<tr>
							<td>{{$category->title}}</td>
							<td>{{$category->published}}</td>
							<td class="text-right">
								<form onsubmit="if(confirm('Ջնջել՞')){return true;} else{ return false}" action="{{route('admin.category.destroy',$category)}}" method="post">
									<input type="hidden" name="_method" value="DELETE">
									{{csrf_field()}}
									<a href="{{route('admin.category.edit',$category)}}"><i class="fa fa-edit"></i></a>
									<button type="submit" class="btn"><i class="fa fa-trash-o">X</i></button>
								</form>
							</td>
						</tr>
						@empty
							<tr>
								<td colspan="3" class="text-center"><h2>Տվյալները բացակայում են</h2></td>
							</tr>
						<tfoot>
							<tr>
								<td colspan="3">
									<ul class="pegination pull-right">
										{{$categories->links()}}
									</ul>
								</td>
							</tr>
						</tfoot>
				@endforelse
			</tbody>
			<tfoot>
						<tr>
								<td colspan="3">
									<ul class="pagination pull-right">
										{{$categories->links()}}
									</ul>
								</td>
						</tr>
			</tfoot>
		</table>
	</div>
@endsection
