
	<script src="js/aframe.min.js"></script>
	<script src="js/k-frame.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/nunjucks/2.3.0/nunjucks.min.js"></script>
	<script src="js/components/record-find.js"></script>
    
 	
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
			<div id="logo_count">0/10</div>
		</div>
	</div>
	  	
    <a-scene >
	  	<a-camera>
	 		<a-cursor></a-cursor>
		</a-camera>
		
		<a-assets>
	  		<img id="sky1" src="img/office.jpg">
			<img id="logoVW" src="img/test-logo-vw-200.png"/>
			<img id="logoEA" src="img/test_logo_ea_200.png"/>
			<img id="logoMC" src="img/test_logo_mc_200w.png"/>
	  	</a-assets>
	  
		  	<a-sky class="sky" src="#sky1"></a-sky>
			<a-plane class="logoPlane" material="opacity: 1; src: #logoVW"
				height="1" width="1" position="-8 0 0" rotation="0 90 0"
				event-set__1="_event: mousedown; scale: 1 1 1"
				event-set__2="_event: mouseup; scale: 1.2 1.2 1"
				record-find="on:click; logo: vw"></a-plane>
			<a-plane class="logoPlane" material="opacity: 1; src: #logoEA"
				height="1" width="1" position="0 0 -8" rotation="0 0 0"
				event-set__1="_event: mousedown; scale: 1 1 1"
				event-set__2="_event: mouseup; scale: 1.2 1.2 1"
				record-find="on:click; logo: ea"></a-plane>
			<a-plane class="logoPlane" material="opacity: 1; src: #logoMC"
				height="1" width="1" position="0 0 8" rotation="0 180 0"
				event-set__1="_event: mousedown; scale: 1 1 1"
				event-set__2="_event: mouseup; scale: 1.2 1.2 1"
				record-find="on:click; logo: mc"></a-plane>
			
    </a-scene>
    
 <script>
	 
</script>
		  	  	