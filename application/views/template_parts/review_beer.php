<div class="container">
   <?php
      if(isset($beer_id)) {
      	if(($beer_id) == 0) {
      	 echo "No Beer To Review";
      	 exit();
        } 
      }
      
   ?>
   <h1 class="text-center">Review Beer</h1>
    <div class="row">
     <p class="text-center">Beer Information</p>
      <div class="row well">
      	 <div class="col-xs-2">
      	 	
      	 </div>
      	 <div class="col-xs-8">
      	 	<div class="row">
		      	<div class="col-xs-4">
		      	 	<p>Beer Name: <?php echo $beer_info->beer_name; ?></p>
		      	</div>
		      	<div class="col-xs-4">
		      	 	<p>Beer Description: <?php echo $beer_info->beer_description; ?></p>
		      	 </div>
		      	 <div class="col-xs-4">
		      	 	<p>Calories: <?php echo $beer_info->beer_calories; ?></p>
		      	 </div>
		    </div>
		    <div class="row">
		      	 <div class="col-xs-4">
		      	 	<p>ABV: <?php echo $beer_info->beer_abv; ?></p>
		      	 </div>
		      	 <div class="col-xs-4">
		      	 	<p>IBU: <?php echo $beer_info->beer_ibu; ?></p>
		      	 </div>
		      	 <div class="col-xs-4">
		      	   <p>Style: <?php echo $beer_info->beer_style; ?></p>
		      	 </div>
		      </div>
		      <div class="row">
		      	 <div class="col-xs-4">
		      	 	<p>Brewery Location :<?php echo $beer_info->beer_brew_location; ?> </p>
		      	 </div>
		      </div>
      	 </div>
      	 <div class="col-xs-2">
      	 	
      	 </div>
      </div>
      
    </div>
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
    		<form class="" action="<?php echo base_url()?>review_beer/add" method="POST" >
	      	    <label for="beer_aroma">Aroma: </label>
	      	 	<select name="beer_aroma" id="beer_aroma" class="form-control">
	      	 		<option value="1">1</option>
	      	 		<option value="2">2</option>
	      	 		<option value="3">3</option>
	      	 		<option value="4">4</option>
	      	 		<option value="5">5</option>
	      	 	</select>

			    <br/>
			    <label for="beer_appearance">Appearance: </label>
	      	 	<select name="beer_appearance" id="beer_appearance" class="form-control">
	      	 		<option value="1">1</option>
	      	 		<option value="2">2</option>
	      	 		<option value="3">3</option>
	      	 		<option value="4">4</option>
	      	 		<option value="5">5</option>
	      	 	</select>
			    <br/>
			    <label for="beer_taste">Taste: </label>
	      	 	<select name="beer_taste" id="beer_taste" class="form-control">
	      	 		<option value="1">1</option>
	      	 		<option value="2">2</option>
	      	 		<option value="3">3</option>
	      	 		<option value="4">4</option>
	      	 		<option value="5">5</option>
	      	 		<option value="6">6</option>
	      	 		<option value="7">7</option>
	      	 		<option value="8">8</option>
	      	 		<option value="9">9</option>
	      	 		<option value="10">10</option>
	      	 	</select>

			    <br/>
			    <input type="hidden" name="beer_id" value="<?php if(isset($beer_id))  { echo $beer_id; }  ?>">
				
				<input style="width: 100%" type="submit" name="add_new_beer" class="btn btn-primary" value="Add Beer Rating">
			</form>
    	</div>
    	<div class="col-xs-4">
    		
    	</div>
    </div>
	
</div>