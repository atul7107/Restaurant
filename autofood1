 <?php
	   $icount = 1;
		 while($food=mysql_fetch_assoc($records)){
			 
		 
		 ?>
      <div class="properties">
        <div class="image-holder"><?php echo '<img src="'. $food['image']. '" width="100px" height="100px">'; ?>
          
        </div>
        <h4><a href="<?php echo $food['link'];?>"><?php echo $food['foodname'];?></a></h4>
        <p class="price"><?php echo $food['foodprice'];?></p>
        <div class="listing-detail"><span data-toggle="tooltip"></span> </div>
        <a class="btn btn-primary" href="<?php echo $food['link'];?>">View Details</a>
      </div>
	  <?php
	  $icount++;
		 }
		 ?>