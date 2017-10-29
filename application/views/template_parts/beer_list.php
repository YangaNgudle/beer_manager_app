<div class="container">
    <?php
      if(empty($all_beers)) {
      	?>
        <div class="alert alert-success alert-dismissable">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<p>There Are Currently No Beers Saved, Maybe You Should Add Some.</p>
		</div>
      	<?php
      }
    ?>
    <?php 

     foreach($all_beers as $beer) {
     	?>
		<div class="row">
		    <div class="col-md-2">
		    	
		    </div>
		    <div class="col-md-8">
		    	<div class="well">
				  <div class="row">
				  	 <div class="col-md-6">
				  	 	<h2><?php echo $beer->beer_name?></h2>
				  	 	<p><?php echo $beer->beer_description?></p>
				  	 </div>
				  	 
				  	 <div class="col-md-6">
				  	 	<a href="<?php echo base_url();?>review_beer/index/<?php echo $beer->id ?>" class="btn btn-success">Rate This Beer</a>
				  	 	<a href="<?php echo base_url();?>view_reviews/index/<?php echo $beer->id ?>" class="btn btn-primary">View All Ratings</a>
				  	 </div>
				  </div>
			    </div>
		    </div>
		    <div class="col-md-2">
		    	
		    </div>
			
		</div>
		<?php
      }
	?>
	
	
</div>