<?php include('header.php'); ?>



<div id="load_con"></div>

<div class="container home_content">
	<div class="row">
		<div class="col-sm-6">
			<div class="santa">
				<img src="img/santa.gif" alt="Santa" />
			</div>
		</div>
		<div class="col-sm-6">
			<h1>Currencycloud xmas search</h1>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed erat massa. Aenean a est eget lorem hendrerit vehicula a quis nibh. Mauris finibus, tellus vel pulvinar pretium, elit elit condimentum risus, ut posuere lorem ipsum ac lectus. Cras in dolor consectetur, semper elit ut, hendrerit est. Nunc sit amet velit mi. Donec quis ipsum ligula. Curabitur lobortis leo ipsum, eu dignissim ante facilisis nec. Etiam molestie ullamcorper turpis, sit amet vestibulum mauris pretium bibendum. Nulla vel lectus quis velit vestibulum scelerisque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet tellus felis. Aenean ut imperdiet ante.
			</p>
			
			<div class="start_btn" id="start">
				Start
			</div>
			
		</div>
	</div>
</div>



<script>


	// PRELOAD	
	$(function() { 	
	 	$( document ).ready(function() {
			$('.loader').delay(500).fadeOut('slow',function(){}); 	
	 	})
	});
	
	// CLEAR THE LOAD IN CONTAINER
	$('.click').click(function() {
		$('.loader').fadeIn('slow',function(){});
		$('#load_con').html('');
		$('.loader').delay(500).fadeOut('slow',function(){});
	});
	
	// POPULATE LOAD IN CONTAINER
	$('#start').click(function() {
		$('.loader').fadeIn('slow',function(){});
		$('.loader').delay(500).fadeOut('slow',function(){});
		$('#load_con').load('vr.php', function() {
			
			var count = 45; 
			    (function(){
				    count--;
				    if (count >= 0){
						 $('#time_count').html(count);
						 setTimeout(arguments.callee, 1000); 
				    } else {
					     //alert('blah');
				    }
					  	 	
				})();

			
		});
	});	
	
</script>


<?php include('footer.php'); ?>