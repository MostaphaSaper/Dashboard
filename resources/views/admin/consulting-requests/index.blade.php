@extends('layouts.admin')
@section('content')
<div class="col-12 p-3">
	<div class="col-12 col-lg-12 p-0 main-box">

		<div class="col-12 px-0">
			<div class="col-12 p-0 row">
				<div class="col-12 col-lg-4 py-3 px-3">
					<span class="fas fa-requests"></span> طلبات الاستشارات
				</div>
				<div class="col-12 col-lg-4 p-0">
				</div>
			</div>
			<div class="col-12 divider" style="min-height: 2px;"></div>
		</div>

		<div class="col-12 py-2 px-2 row">
			<div class="col-12 col-lg-4 p-2">
				<form method="GET">
					<input type="text" name="q" class="form-control" placeholder="بحث ... " value="{{request()->get('q')}}">
				</form>
			</div>
		</div>
		<div class="col-12 p-3" style="overflow:auto">
			<div class="col-12 p-0" style="min-width:1100px;">


			<table class="table table-bordered  table-hover">
				<thead>
					<tr>
						<th style="width:25px;">#</th>
						<th style="width:250px;">الاسم الكامل</th>
						<th style="width:250px;">العنوان</th>
						<th style="width:250px;">مجال العمل</th>
						<th style="width:250px;">الجوال</th>
						<th style="width:250px;">البريد الالكتروني</th>
						<th style="width:250px;">موضوع الاستشارة</th>
						<th style="width:250px;">الشرح</th>
						<th style="width:170px;">تحكم</th>
					</tr>
				</thead>
				<tbody id="sortable-table">
					@foreach($requests as $request)
					<tr >
						<td >{{$request->id}}</td>
						<td >{{$request->name}}</td>
						<td >{{$request->address}}</td>
						<td >{{$request->work_field}}</td>
						<td >{{$request->phone}}</td>
						<td >{{$request->email}}</td>
						<td >{{$request->consulting_topic}}</td>
						<td >{{$request->Explanation}}</td>

						<td style="width: 170px;">



							@can('requests-update')
							<a href="{{route('admin.article-requests.edit',$request)}}">
								<span class="btn  btn-outline-success btn-sm font-1 mx-1">
									<span class="fas fa-wrench "></span> تحكم
								</span>
							</a>
							@endcan
							@can('requests-delete')
							<form method="POST" action="{{route('admin.article-requests.destroy',$request)}}" class="d-inline-block">@csrf @method("DELETE")
								<button class="btn  btn-outline-danger btn-sm font-1 mx-1" onclick="var result = confirm('هل أنت متأكد من عملية الحذف ؟');if(result){}else{event.preventDefault()}">
									<span class="fas fa-trash "></span> حذف
								</button>
							</form>
							@endcan
						</td>
					</tr>
					@endforeach
                    @if ($requests->count() <= 0)
                        <tr>
                            <td colspan="9 " style="text-align: center;vertical-align: middle;"> لا توجد نتائج للبحث </td>
                        </tr>
                    @endif
				</tbody>
			</table>
			</div>
		</div>
		<div class="col-12 p-3">
			{{$requests->appends(request()->query())->render()}}
		</div>
	</div>
</div>
@endsection
