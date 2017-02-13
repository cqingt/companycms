// JavaScript Document

$(document).ready(function() {
//初始化搜索
	var setx = $(".indexl"); //获取文本框对象   
	setx.click(function() {
		setx.val("");
		setx.css({
			color: "#4B4B4B"
		});
	});
	//搜索end
//三级下啦菜单
		$(".on_clickm").click(function() {
		$(this).next("ul").slideToggle("slow").siblings(".show_box:visible").slideUp("slow");
		$(this).toggleClass("activeTitle");
		$(this).siblings(".activeTitle").removeClass("activeTitle");
	});
	
	//三级下啦菜单 end	
})

$(document).ready(function() {
    var flbox = $('.flbox');
    nav = $('.nav');
    box = $('.mainbox');
    flbox.click(function() {
            box.animate({right:'40%'},'500');
			nav.animate({right:'0px'},'500');
			$('.nav').css("display", "block");
			$('.mainboxbg').css("display", "block");
			 return; 

    });
	$('.mainboxbg').click(function()
								   {
									 box.animate({right:'0'},'500');
									 nav.animate({right:'-40%'},'500');
									 $(this).hide();
              return; 
									   
									   }
								   
								   )
	
});