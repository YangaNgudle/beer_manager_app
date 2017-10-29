<div class="container">
   <h1 class="text-center">Add A New Beer</h1>
    <div class="row">
    	<div class="col-xs-4">
    		
    	</div>

    	<div class="col-xs-4">
    	    <?php if(isset($message)) { ?>
    	    <div class="alert alert-success alert-dismissable">
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  <?php echo $message; ?>
			</div>
			<?php } ?>
    		<form class="" action="<?php echo base_url()?>add_beer/add" method="POST" >
				<input type="text" class="form-control" name="beer_name" placeholder="Beer Name" required="true">
				<br/>
				<input type="text" class="form-control" name="beer_description" placeholder="Beer Description" required="true">
				<br/>
				<input type="number" class="form-control" name="beer_ibu" placeholder="Beer IBU" required="true">
				<br/>
				<input type="number" class="form-control" name="beer_abv" placeholder="Beer ABV" required="true">
				<br/>
				<input type="number" class="form-control" name="beer_calories" placeholder="Beer Calories" required="true">
				<br/>
				<input type="text" class="form-control" name="beer_style" placeholder="Beer Style" required="true">
				<br/>
				<input type="text" class="form-control" name="beer_brew_location" placeholder="Brewery Location" required="true">
				<br/>

				<input style="width: 100%" type="submit" name="add_new_beer" class="btn btn-primary" value="Add Beer" required="true">
			</form>
    	</div>
    	<div class="col-xs-4">
    		
    	</div>
    </div>
	
</div>