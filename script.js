
$(document).ready(function(){
	setInterval(function(){
		$.ajax({
            type: "POST",
            url: "update_info.php",
            dataType: "json",
            success: function(json){ // this happen after we get result
                var steps = json.steps;
                var requiredactivity = json.required;
                if (steps <= requiredactivity){
		$('#text').text("Progress: " + steps + "/" + requiredactivity);
		$('#progress div').css({width: (steps/requiredactivity)*100+"%"});
		} else {
			window.location.href = "http://www.youtube.com/v/wE3fmFTtP9g";
		}
		if (steps == requiredactivity){
			$('#lock').attr("src","unlockicon.png");
		}
            }
        });
		//alert(steps/requiredactivity);
		
	},1000);
});

