$(document).ready(function() {

if($.browser.safari){
			$(".photos").css("marginTop","37px");
		}
if($.browser.mozilla){
	if (navigator.appVersion.indexOf("Win")!=-1){
			$(".photos").css("marginTop","34px");
	}}
	$(".nav_home").click(function(){
		$("#words").animate({ top: "0px"}, 1500 );
		$(".pics").animate({ top: "0px"}, 800 );
		

		$(".nav_workshops").removeClass("active");
		$(".nav_sponsors").removeClass("active");
		$(".nav_about").removeClass("active");
		$(".nav_competition").removeClass("active");
		$(".nav_contact").removeClass("active");
		
		$(this).addClass("active");
	
		return false;
	});
		
		
	$(".nav_about").click(function(){
		
		
		if($.browser.msie){
			$("#words").animate({ top: "-712px"}, 1500 );
			$(".pics").animate({ top: "-712px"}, 800 );
		}else if($.browser.safari){
			$("#words").animate({ top: "-709px"}, 1500 );
			$(".pics").animate({ top: "-709px"}, 800 );
		
		}else{
			$("#words").animate({ top: "-709px"}, 1500 );
			$(".pics").animate({ top: "-709px"}, 800 );
		}

		$(".nav_home").removeClass("active");
		$(".nav_contact").removeClass("active");
		$(".nav_sponsors").removeClass("active");
		$(".nav_competition").removeClass("active");
		$(".nav_workshops").removeClass("active");
	
		$(this).addClass("active");
		return false;
	});
	$(".nav_workshops").click(function(){
		if($.browser.msie){
			$("#words").animate({ top: "-1422px"}, 1500 );
			$(".pics").animate({ top: "-1422px"}, 800 );
		}else {
		$("#words").animate({ top: "-1418px"}, 1500 );
		$(".pics").animate({ top: "-1418px"}, 800 );
		}

		$(".nav_home").removeClass("active");
		$(".nav_sponsors").removeClass("active");
		$(".nav_about").removeClass("active");
		$(".nav_competition").removeClass("active");
		$(".nav_contact").removeClass("active");
		//$("#overlay_workshops").slideUp("slow");
		$(this).addClass("active");
		return false;
	});
	$(".nav_competition").click(function(){
		if($.browser.msie){
			$("#words").animate({ top: "-2130px"}, 1500 );
			$(".pics").animate({ top: "-2130px"}, 800 );

		}else {


		$("#words").animate({ top: "-2127px"}, 1500 );
		$(".pics").animate({ top: "-2127px"}, 800 );
	}
	
		$(".nav_home").removeClass("active");
		$(".nav_sponsors").removeClass("active");
		$(".nav_about").removeClass("active");
		$(".nav_contact").removeClass("active");
		$(".nav_workshops").removeClass("active");
		$(this).addClass("active");
		return false;
	});

	
	$(".nav_sponsors").click(function(){
		if($.browser.msie){
			$("#words").animate({ top: "-2839px"}, 1500 );
		$(".pics").animate({ top: "-2839px"}, 800 );
		}else{	
		
		$("#words").animate({ top: "-2836px"}, 1500 );
		$(".pics").animate({ top: "-2836px"}, 800 );
}

		$(".nav_home").removeClass("active");
		$(".nav_contact").removeClass("active");
		$(".nav_about").removeClass("active");
		$(".nav_competition").removeClass("active");
		$(".nav_workshops").removeClass("active");
	
		$(this).addClass("active");
		return false;
	});
	
	
	
	
	$(".nav_contact").click(function(){
		if($.browser.msie){
			$("#words").animate({ top: "-3549px"}, 1500 );
		$(".pics").animate({ top: "-3549px"}, 800 );
		}else{	
		$("#words").animate({ top: "-3545px"}, 1500 );
		$(".pics").animate({ top: "-3545px"}, 800 );
	}
		$(".nav_home").removeClass("active");
		$(".nav_about").removeClass("active");
		$(".nav_sponsors").removeClass("active");
		$(".nav_competition").removeClass("active");
		$(".nav_workshops").removeClass("active");
	
		$(this).addClass("active");
	
		return false;
	});
	
	
	
});