$(document).ready(function(){

$(".news_type_select").change(function(){



if($(this).val() === "image"){
	$(".video_url_container").hide();
	$(".image_upload_container").fadeIn();

}else if($(this).val() === "video"){

	$(".image_upload_container").hide();
	$(".video_url_container").fadeIn();

}


})


$(".detail_type_select").change(function(){



if($(this).val() === "auto"){
	$(".manual_container").hide();
	$(".overwrite_container").hide();
	$(".auto_container").fadeIn();

}else if($(this).val() === "manual"){

	$(".auto_container").hide();
	$(".overwrite_container").hide();
	$(".manual_container").fadeIn();

} else if($(this).val() === "overwrite"){

	$(".auto_container").hide();
	$(".manual_container").hide();
	$(".overwrite_container").fadeIn();

}


})



$(".tour_type").change(function(){



if($(this).val() === "new"){
	$(".newtype").fadeIn();

}else if($(this).val() === "select"){


	$(".newtype").hide();
	
} 

})










})