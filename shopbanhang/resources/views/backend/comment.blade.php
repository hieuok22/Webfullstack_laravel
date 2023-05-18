@extends('backend.master')
@section('title','Danh sách sản phẩm')
@section('main')
<link rel="icon" href="{{asset('public/backend/img/Logo1.png')}}" type="img/x-icon">

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Bình Luận</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách đơn hàng</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
							<form method="get" enctype="multipart/form-data">
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
                                            <th>Email</th>
                                            <th>Tên</th>
                                            <th>Nội Dung</th>
											<th>ID_PRODUCT</th>
											<th>Xóa</th>													
											<!-- <th>Tùy chọn</th> -->
										</tr>
									</thead>
									<tbody>
									@foreach($commentlist as $comment)
										<tr>
											<td>{{$comment->com_id}}</td>
											<td>{{$comment->com_email}}</td>
											<td>{{$comment->com_name}}</td>
											<td>{{$comment->com_content}}</td>
											<td>{{$comment->com_product}}</td>
											<td>
                                            <a onclick="return confirm('Bạn có chắc chắn muốn xóa')"
                                             href="{{asset('admin/comment/delete/'.$comment->com_id)}}" 
                                             class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>										
										</tr>
									@endforeach
									</tbody>		
								</table>	
								{{csrf_field()}}
								</form>						
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
