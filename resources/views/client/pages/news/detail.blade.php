@extends('client.layouts.master')

@section('title')
  Website thông tin Trường Đại Học Sư Phạm Kỹ Thuật Hưng Yên
@endsection

@section('content')
<div class="blog w3layouts-agile">
	<div class="container">
	<div class="blog-top">
	
		<div class="col-md-8 ">
			<?php 
              $cate = App\Category::find($newletter->cate_id);
           ?>
			<div class=" blog_box">
				<img src="{{url('/')}}/client_assets/images/se.jpg" alt="image" class="img-responsive">
		     	<h3>{!!$newletter->name!!}</h3>

		     	<div class="links">
		  		   <p>Ngày:{{date_format($newletter->created_at,'d/m/Y')}} ||  <?php  echo $cate->name;?> </a></p>
		  		</div>
		     	<p>{!!$newletter->detail!!}</p>
			</div>
			<!--Comment-->
			<!-- <div class="comment-top">
				 <div class="top-comment">
					<label></label>
					<h1>Comment</h1>
				</div> 
		        <div class="media-left">
		          <a href="#">
		          	<img src="{{url('/')}}/client_assets/images/si.png" alt="">
		          </a>
		        </div>
		        <div class="media-body">
		          <h4 class="media-heading">Media heading</h4>
	              <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
	          
	          	<div class="media">
	            	<div class="media-left">
		              <a href="#">
		              	<img src="{{url('/')}}/client_assets/images/si.png" alt="">
		              </a>
	           	 </div>
	              <div class="media-body">
	              <h4 class="media-heading">Nested media heading</h4>
	              <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
	              
	              <div class="media">
	                <div class="media-left">
	                  <a href="#">
						<img src="{{url('/')}}/client_assets/images/si.png" alt="">                 
						 </a>
	                </div>
	                <div class="media-body">
	                  <h4 class="media-heading">Nested media heading</h4>
	              <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
	                </div>
	              </div> 
	             </div>
            	</div>
          <div class="media">
            <div class="media-left">
              <a href="#">
              	<img src="{{url('/')}}/client_assets/images/si.png" alt="">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Nested media heading</h4>
              <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
            </div>
          </div>
        </div>
       	</div> -->
     <div class="comment w3layouts-agile">
		<!-- <div class="top-com">
			<label></label>
			<h2>Leave a Comment</h2>
		</div> -->
				<!-- <div class=" comment-bottom">
				<form>				
					<input type="text" placeholder="Your Name" required="">								
					<input type="text" placeholder="Your Email" required="">							
					<input type="text" placeholder="Subject" required="">			
					<textarea placeholder="Your Message" required=""></textarea>	
					<input type="submit" value="Send">
				</form>
				</div> -->
			</div>
		</div>
		<div class="col-md-4 categories-grid">
			
				<div class="grid-categories">
					<h4>Tin cùng chuyên mục</h4>
					<ul class="popular">
						@foreach($list_newcate as $item)
						<li><a title="{{$item->name}}" href="/newletters/{{$item->alias}}">{{$item->name}}</a>
                          <span>({{date_format($item->created_at,'d/m/Y')}})</span></li>
						@endforeach
					</ul>
				</div>
				<!-- <div class="blog-bottom">
					<h4>Recent Posts</h4>
						<div class="product-go">
							<div class="fashion">
								<a href="single.html"><img class="img-responsive " src="{{url('/')}}/client_assets/images/bi.jpg" alt=""></a>
							</div>
							<div class="grid-product">
								<h5><a href="single.html">Consectetuer adipiscing</a></h5>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="product-go">
							<div class="fashion">
								<a href="single.html"><img class="img-responsive " src="{{url('/')}}/client_assets/images/bi1.jpg" alt=""></a>
							</div>
							<div class="grid-product">
								<h5><a href="single.html">Consectetuer adipiscing</a></h5>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="product-go">
							<div class="fashion">
								<a href="single.html"><img class="img-responsive " src="{{url('/')}}/client_assets/images/bi2.jpg" alt=""></a>
							</div>
							<div class="grid-product">
								<h5><a href="single.html">Consectetuer adipiscing</a></h5>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
			</div> -->
			<div class="clearfix"> </div>
		</div>
	 </div>
</div>
@endsection