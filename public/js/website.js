$(document).ready(function(){
	$('.menu_wap ul li:last').css('background-image','none');
	$(function() {
		$('a.lightbox').lightBox();
	});
	/*
	$('.city').hover(function(){
		$('.city_hover').show();
	},function(){ $('.city_hover').hide(); });
	
	$('.span3').hover(function(){
		$(this).find('.meta').stop().animate({opacity:1, easing: 'easeOutQuad'});
	},function(){
		$(this).find('.meta').stop().animate({opacity:0, easing: 'easeInQuad'});
	}
	);
	$('.span3').hover(function(){
		$(this).find('.sp_01').stop().animate({opacity:1, easing: 'easeOutQuad'});
	},function(){
		$(this).find('.sp_01').stop().animate({opacity:0, easing: 'easeInQuad'});
	}
	);
	$('.for_sp').hover(function(){
	
		$(this).find('.meta').stop().animate({opacity:1, easing: 'easeOutQuad'});
	},function(){
		$(this).find('.meta').stop().animate({opacity:0, easing: 'easeInQuad'});
	}
	);
	$('.for_sp').hover(function(){
		$(this).find('.sp_01').stop().animate({opacity:1, easing: 'easeOutQuad'});
	},function(){
		$(this).find('.sp_01').stop().animate({opacity:0, easing: 'easeInQuad'});
	}
	);
	
	$('#loadsp').click(function(){
		idpage = $(this).attr('idpage');
		
		tinh = $(this).attr('idtinh');
		$.ajax({
		  type: "GET",
		  url: "loadsp.php",
		  data: "page="+idpage+"&tinh="+tinh,
			success: function(html){
				//alert(html);
				if(html== 1) { $('#loadsp').hide();}
				else {
					$('#div_content_deal').append(html);
					page2 = Number(idpage)+Number(8);
					//alert(page2);
					$('#loadsp').attr('idpage',page2)
					if(html== 1) { $('#loadsp').hide();}
				}
			}
		});
		
	});
	*/
	$('#searchDropdownBox').change(function(){
		id = $(this).val();
		obj = $("#searchDropdownBox option[value="+ id+"]") ;
		//alert(html);
		html = obj.html();
		$('#nav-search-in-content').html(html);
		w = $('#nav-search-in-content').innerWidth();
		$('#nav-iss-attach').css('padding-left',w);
		
	});
})