﻿
<?php
include('header.php');
?>

<style type="text/css">
	
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
.avatar {
    width: 200px;
	height:200px;
    border-radius: 50%;
}

</style>

<?php
include('header_frontend.php');
?>


<!-- Header End====================================================================== -->
<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		  <div class="item active">
		  <div class="container">
			<a href="register.html"><img style="width:100%" src="<?php echo base_url() ?>assets/themes/images/carousel/1.png" alt="special offers"/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="register.html"><img style="width:100%" src="<?php echo base_url() ?>assets/themes/images/carousel/2.png" alt=""/></a>
				<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href="register.html"><img src="<?php echo base_url() ?>assets/themes/images/carousel/3.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
			
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.html"><img src="<?php echo base_url() ?>assets/themes/images/carousel/4.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		   
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.html"><img src="<?php echo base_url() ?>assets/themes/images/carousel/5.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			</div>
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href="register.html"><img src="<?php echo base_url() ?>assets/themes/images/carousel/6.png" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	  </div> 
</div>
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<?php
include('sidebar.php');
?>
<!-- Sidebar end=============================================== -->
		<div class="span9">		
			<div class="well well-small">
			<h4>Most Ordered Product</h4>
			<div class="row-fluid">
			<div id="featured" class="carousel slide">
			<div class="carousel-inner">
			  <div class="item active">
			  <ul class="thumbnails">
			  	<?php foreach ($mostProduct as $product): ?>
			  		
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="<?php echo site_url('frontend/product_details/'.$product->product_id) ?>"><img src="<?php echo base_url() ?>assets/user/imagepost/<?php echo $product->img_thumbnail?>" style="height: 120px"></a>
					<div class="caption">
					  <h5><?php echo $product->product_name ?></h5>
					  <h4><a class="btn" href="<?php echo site_url('frontend/product_details/'.$product->product_id) ?>"><i class="icon-zoom-in"></i>VIEW</a> <span class="pull-right"><a class="btn btn-info">$<?php echo $product->product_price ?></a></span></h4>
					</div>
				  </div>
				</li>
			  	<?php endforeach ?>
			  </ul>
			  </div>
			  </div>
			  </div>
			  </div>
		</div>

		<h4>Latest Products </h4>

			 <ul class="thumbnails">
		<?php $no=1; foreach($postuser as $rows => $value) : ?>

				<li class="span3">
					<form action="<?php echo site_url('cart/add') ?>" method="post">
				  <div class="thumbnail">

				  		<a href="<?=base_url()?>index.php/frontend/product_details/"><img src="<?php echo base_url() ?>assets/user/imagepost/<?php echo $value->img_thumbnail?>" style="max-height: 120px"/></a>
					<div class="caption">
					  <h5><?php echo $value->product_name?></h5>
					 
					  <h4 style="text-align:center"><a class="btn" href="<?php echo site_url('frontend/product_details/'.$value->product_id) ?>"><i class="icon-zoom-in"></i>View</a> 

					  <input type="hidden" name="product_id" value="<?php echo $value->product_id?>">
					  <input type="hidden" name="img_thumbnail" value="<?php echo $value->img_thumbnail?>">
					  <input type="hidden" name="product_name" value="<?php echo $value->product_name?>">
					  <input type="hidden" name="product_price" value="<?php echo $value->product_price?>">
					  <input type="hidden" name="product_quantity" value="1">
					  <input type="submit"  value="Add to Cart" class="btn btn-danger">

					  <br>
					  <a class="btn btn-info">$<?php echo $value->product_price?></a></h4>
				  	</form>
					
					</div>
				  </div>
				</li>
		<?php  $no++; endforeach; ?> 
			</ul>

		</div>
		</div>
	</div>
</div>
<!-- Footer ================================================================== -->
	
<?php
include('footer.php');
?>
