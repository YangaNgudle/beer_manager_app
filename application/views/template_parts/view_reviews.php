<div class="container">
	<div class="row">
		<div class="col-md-2">
			
		</div>
		<div class="col-md-8">
		    <div class="well">
		    	<a href="<?php echo base_url() ?>Review_Beer/index/<?php echo $beer_info->id?>"><h2 class="text-center"><?php echo $beer_info->beer_name; ?></h2></a>
				<p class="text-center"><?php echo $beer_info->beer_description ?></p>
                <?php // var_dump($beer_stats);?>
				<h3 class="text-center">Overall</h3>
				<p class="text-center">Overall Aroma: <?php echo $beer_stats['aroma']; ?></p>
				<p class="text-center">Overall Appearance: <?php echo $beer_stats['appearance']; ?> </p>
				<p class="text-center">Overall Taste: <?php echo $beer_stats['taste']; ?></p>
		    </div>
			<div class="well">
			    
				<?php  

                  foreach($all_beer_reviews as $review) {
				?>
				<div class="review">
	                <div class="row">
	                	<div class="col-md-4">
	                		<p >Aroma: <?php echo $review->aroma; ?></p>
	                	</div>
	                	<div class="col-md-4">
	                		<p>Appearance: <?php echo $review->appearance; ?></p>
	                	</div>
	                	<div class="col-md-4">
	                		<p>Taste: <?php echo $review->taste; ?></p>
	                	</div>
	                </div>
	                <hr/>
	                <small class="pull-left"><?php echo $review->time_stamp; ?></small>
	                <p class="pull-right">By Anonomyous User</p>
                    <div style="clear: both">
                    </div>
                    <hr/>
	            </div>
	            <?php 
                  }

                  if(empty($all_beer_reviews)) {
                  	?>
                    <p class="text-center">No Reviews To Show Yet...</p>
                  	<?php
                  }
	            ?>
	             
			</div>
		</div>
		<div class="col-md-2">
			
		</div>
	</div>


</div>