	var server = "http://localhost/rooster-punk/aframe/cc-xmas/";    
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
		$('.loader').fadeIn('slow',function(){
            $('home_content').html("");
            $('#load_con').load('vr.php', function() {
                $skyImg = $('#sky1');
                if(!$skyImg[0].complete){
                    console.log("image not yet complete");
                    $skyImg.load(function(){fadeOutAndStartCounter()});
                }
                else{
                    fadeOutAndStartCounter();
                }
                                
            });
        });
	});	

function fadeOutAndStartCounter(){
    console.log("fading out");
    $('.loader').fadeOut('slow',function(){
            logoFindCount = 0;
            countDown(10);

    });
 
}

function countDown(count){
    count--;
    if (count >= 0){
        $('#time_count').html(count);
        setTimeout(function(){countDown(count)}, 1000); 
    } else {
        endGame();
    }
}

var logoFindCount; 
var logoFound = {
    vw: false,
    ea: false,
    mc: false,
}

function recordFind(logo){
    if(!logoFound[logo]){
        console.log("logo found for the first time: "+logo);
        logoFindCount++;
        logoFound[logo] = true;
        $('#logo_count').html(logoFindCount+"/10");
    }
    else{
        console.log("logo already found");
    }
}

function endGame(){
    console.log("time's up, score: "+logoFindCount);
    $('.loader').fadeIn('slow',function(){
            console.log("loader faded in");
            window.location.href= server+"results.php?logoFindCount="+logoFindCount;
    });
}

