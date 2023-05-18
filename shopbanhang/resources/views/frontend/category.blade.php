@extends('frontend.master')
@section('title','Danh mục sản phẩm')
@section('main')
	<!-- <link rel="stylesheet" href="css/category.css"> -->
	
					<div id="wrap-inner">
						<div class="products">
							<h3>{{$cateName->cate_name}}</h3>
							@foreach($items as $item)
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img style="height: 200px; width: 150px;" src="{{asset('storage/app/avatar/'.$item->prod_img)}}" class="img-thumbnail"></a>
									<p><a href="#">{{$item->prod_name}}</a></p>
									<p class="price">{{number_format($item->prod_price,0,',','.')}} VNĐ</p>	  
									<div class="marsk">
										<a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}">Xem chi tiết</a>
									</div>                                    
								</div>
								@endforeach
							</div>                	                	
						</div>
						<div class="row text-center ">
							<div class="col-md-12">
							{{ $items->links('vendor.pagination.default') }}
							<!-- Bootstrap CSS framework. -->
						</div>
					</div>
</div>
@stop
					
					<!-- end main -->
	<!-- footer -->