<link rel="icon" href="{{asset('public/backend/img/Logo1.png')}}" type="img/x-icon">
@extends('backend.master')
@section('title', 'Sửa đơn hàng');
@section('main');
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Đơn hàng</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Sửa đơn hàng</div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
                                <div class="form-group" >
								<input type="submit" name="submit" value="Chi tiết" class="btn btn-primary">
									<a href="{{asset('admin/order')}}" class="btn btn-danger">Hủy bỏ</a> <br> <br>
                                <select name="status" class="form-control select-status">                               
                                    <option value="1" @if($order->order_status==1) selected @endif> Thành Công</option>
									<option value="0" @if($order->order_status==0) selected @endif> Đang Vận Chuyển</option>
                                    <option value="2" @if($order->order_status==2) selected @endif> Hủy Đơn</option>						
                                </select>
									</div>
									
									<div class="form-group" >
										<label>ID sản phẩm</label>
										<input required type="text" name="soluong" class="form-control"
										value="{{$order->prod_id}}">
									</div>
									<div class="form-group" >
										<label>Tên Sản phẩm</label>
										<input required type="text" name="soluong" class="form-control"
										value="{{$order->order_tensanpham}}">
									</div>
									<div class="form-group" >
										<label>Số lượng</label>
										<input required type="text" name="soluong" class="form-control"
										value="{{$order->order_soluong}}">
									</div>
									<div class="form-group" >
										<label>Tổng tiền</label>
										<input required type="text" name="name" class="form-control"
										value="{{$order->order_tongtien}}">
									</div>
									<div class="form-group" >
										<label>Email</label>
										<input required type="email" name="price" 
										class="form-control" value="{{$order->order_email}}">
									</div>		
									<div class="form-group" >
										<label>Tên</label>
										<input required type="text" name="numbers" class="form-control"
										value="{{$order->order_name}}">
									</div>
									<div class="form-group" >
										<label>SĐT</label>
										<input required type="text" name="accessories" 
										class="form-control" value="{{$order->order_sdt}}">
									</div>
									
									<div class="form-group" >
										<label>Địa chỉ</label>
										<input required type="text" name="promotion" class="form-control"
										value="{{$order->order_add}}">
									</div>	
																								
									
									
							</div>
							{{csrf_field()}}
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->