
	<script src="js/aframe.min.js"></script>
    
 	
	<style>
		
	.sky {
		display: none;
	}	
		
	.active_sky {
		display: block;
	}
	
	</style>
	
	<div class="time_count_con">
		<div class="time_inner_con">
			<div id="time_count"></div>
			<div id="logo_count">6/10</div>
		</div>
	</div>
	  	
    <a-scene >
	  	<a-camera>
	 		<a-cursor></a-cursor>
		</a-camera>
		
		<a-assets>
	  		<img id="sky1" src="img/office.jpg">
	  	</a-assets>


	  	<a-entity geometry="primitive: sphere" material="color: black" position="0 -5 0"></a-entity>
	  
		  	<a-sky class="sky" src="#sky1"></a-sky>

    </a-scene>
    
 <script>
	 
</script>