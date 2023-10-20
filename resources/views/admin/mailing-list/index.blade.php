@extends('layouts.admin')
@section('content')
<style type="text/css">
	.ticket-resolved{
		background: #effff0!important;
	}
</style>
<div class="col-12 p-3">
	<div class="col-12 col-lg-12 p-0 main-box">
	 
		<div class="col-12 px-0">
			<div class="col-12 p-0 row">
				<div class="col-12 col-lg-4 py-3 px-3">
					<span class="fas fa-contacts"></span> القائمة البريدية
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
						<th>#</th>
						<th>المستخدم</th>
						<th>البريد الالكتروني</th>
					</tr>
				</thead>  
				<tbody>
					@foreach($mailing_lists as $mailing_list)
					<tr>
						<td>{{$mailing_list->id}}</td>
						<td>{{$mailing_list->user->name}}</td>
						<td>{{$mailing_list->email}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		</div>
		<div class="col-12 p-3">
			{{$mailing_lists->appends(request()->query())->render()}}
		</div>
	</div>
</div>
@endsection
