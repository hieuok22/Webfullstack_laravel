@extends('backend.master')
@section('title','Danh sách sản phẩm')
@section('main')
<link rel="icon" href="{{asset('public/backend/img/Logo1.png')}}" type="img/x-icon">

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Đơn hàng</h1>
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
                                            <th>Status</th>
                                            <th>Tổng tiền</th>
                                            <th>Email</th>
											<th>Tên</th>
											<th>SĐT</th>
											<th>Địa chỉ</th>
											<th>Chi tiết</th>													
											<!-- <th>Tùy chọn</th> -->
										</tr>
									</thead>
									<tbody>
									@foreach($orderlist as $order)
										<tr>
											<td>{{$order->order_id}}</td>
											<td><select name="status" class="form-control select-status">                           
												<option value="1" @if($order->order_status==1) selected @endif> Thành Công</option>
												<option value="0" @if($order->order_status==0) selected @endif> Đang Vận Chuyển</option>
												<option value="2" @if($order->order_status==2) selected @endif> Hủy Đơn</option>						
                                            </select></td>
											<td>{{$order->order_tongtien}}</td>
											<td>{{$order->order_email}}</td>
											<td>{{$order->order_name}}</td>
											<td>{{$order->order_sdt}}</td>
											<td>{{$order->order_add}}</td>	
											<td>
												<a href="{{asset('admin/order/edit/'.$order->order_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Chi tiết</a>
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
