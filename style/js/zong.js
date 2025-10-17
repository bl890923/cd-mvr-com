//1、banner轮播控制
$(function () {
	var bannerswiper = new Swiper('.banner .swiper-container', {
		speed: 500, //一个滑动的时间
		autoplay: 5000, //总体要多少时间滑完
		autoplayDisableOnInteraction: false,
		loop: true,
		pagination: '.banner .swiper-pagination', //这个说明要圆点
		paginationClickable: true, //这个说明要圆点
		prevButton: '.banner .swiper-button-prev', //这是说明有左箭头
		nextButton: '.banner .swiper-button-next', //这是说明有右箭头
	})

	$('.banner').mouseover(function () { //控制左右箭头
		bannerswiper.stopAutoplay()
	})
	$('.banner').mouseout(function () { //控制左右箭头
		bannerswiper.startAutoplay()
	})
})

// 2、PC端导航下拉缓冲效果
$(function () {
	$(".nav li").hover(function () {
		$(this).find(".nav-zi").stop().slideDown();
	}, function () {
		$(this).find(".nav-zi").stop().slideUp();
	})
})
// PC端导航下拉缓冲效果结束


//3、手机端导航展开关闭按钮
$(function () {

	$(".ydd_btn").click(function () {
		if ($(this).hasClass('click')) {
			$(this).removeClass("click");
		} else {
			$(this).addClass("click");
		}
	});
	$(".ydd_btn").hover(function () {
		$(this).addClass("hover");
	}, function () {
		$(this).removeClass("hover");
	});
	$(".ydd_btn").bind("click", function () {
		$(".sjdnav").slideToggle();
	});
});


//4、等比例缩放
$(function () {
	function imgs() {
		/*imgs3*/
		var imgbox3W = $(".video .imgbox .tu").width();
		$(".video .imgbox .tu").css("height", imgbox3W * 0.66 + "px");

		/*imgs4*/
		var imgs4W = $("").width();
		$("").css("height", imgs4W * 0.4867 + "px");

		/*imgs5*/
		var imgs5W = $("").width();
		$("").css("height", imgs5W * 0.7 + "px");
	}

	imgs();
	$(window).resize(function () {
		imgs();
	});
})


//5、选项卡js
$(function () {
	$(".anbox .an").hover(function () {
		var _this = $(".anbox .an").index(this);
		$(".anbox .an").removeClass("active");
		$(this).addClass("active");
		$(".contbox .cont").hide();
		$(".contbox .cont").eq(_this).show();
	});

	$(".anbox1 .an1").hover(function () {
		var _this = $(".anbox1 .an1").index(this);
		$(".anbox1 .an1").removeClass("active");
		$(this).addClass("active");
		$(".contbox1 .cont1").hide();
		$(".contbox1 .cont1").eq(_this).show();
	});

});



//6、网站底部热点js
$(function () {
	$('#tabBar .clickbtn').click(function () {
		if ($('#tabBar .navigation').hasClass('active')) {
			$('#tabBar').removeClass('active');
			$('#tabBar .clickbtn').removeClass('active').addClass('on');
			$('#tabBar .navigation').removeClass('active');
		} else {
			$('#tabBar').addClass('active');
			$('#tabBar .clickbtn').addClass('active').removeClass('on');
			$('#tabBar .navigation').addClass('active');
		}
	})
})


$(".hot .col-xs-6").eq(1).click(function () {
	if ($(".dbbox .dbs.ewm-box").is(':hidden')) {
		$(".dbbox .dbs.ewm-box").slideDown();
		$(".dbbox .dbs.fenxiang-box").slideUp();
	} else {
		$(".dbbox .dbs.ewm-box").slideUp();
	}
})
$(".hot .col-xs-6").eq(3).find("a").click(function () {
	if ($(".dbbox .dbs.fenxiang-box").is(':hidden')) {
		$(".dbbox .dbs.fenxiang-box").slideDown();
		$(".dbbox .dbs.ewm-box").slideUp();
	} else {
		$(".dbbox .dbs.fenxiang-box").slideUp();
	}
})




//数字滚动
//第一个数字滚
$(function () {
	var max = 20;

	function countdown() {
		var num = 0;
		$(".tiaodong1").text(num);
		var setInt = setInterval(function () {
			var e = parseInt(Math.random() * 3);
			num = num + e;
			$(".tiaodong1").text(num);
			if (num > max) {
				clearInterval(setInt);
				$(".tiaodong1").text(max);
			}
		}, 50);
	}
	countdown();
})

//第二个数字滚
$(function () {
	var max = 10;

	function countdown() {
		var num = 0;
		$(".tiaodong2").text(num);
		var setInt = setInterval(function () {
			var e = parseInt(Math.random() * 3);
			num = num + e;
			$(".tiaodong2").text(num);
			if (num > max) {
				clearInterval(setInt);
				$(".tiaodong2").text(max);
			}
		}, 50);
	}
	countdown();
})

//第三个数字滚
$(function () {
	var max = 14;

	function countdown() {
		var num = 0;
		$(".tiaodong3").text(num);
		var setInt = setInterval(function () {
			var e = parseInt(Math.random() * 3);
			num = num + e;
			$(".tiaodong3").text(num);
			if (num > max) {
				clearInterval(setInt);
				$(".tiaodong3").text(max);
			}
		}, 50);
	}
	countdown();
})

//第四个数字滚
$(function () {
	var max = 167;

	function countdown() {
		var num = 0;
		$(".tiaodong4").text(num);
		var setInt = setInterval(function () {
			var e = parseInt(Math.random() * 20);
			num = num + e;
			$(".tiaodong4").text(num);
			if (num > max) {
				clearInterval(setInt);
				$(".tiaodong4").text(max);
			}
		}, 50);
	}
	countdown();
})


// lazyload
$(function () {

	//swiper1

	if ($(".swiper1").length > 0) {
		var swiper1 = new Swiper('.swiper1 .swiper-container', {
			slidesPerView: 4, //产品的一排个数
			speed: 500,
			autoplay: 3000,
			spaceBetween: 20, //每个产品之前的间距
			autoplayDisableOnInteraction: false,
			observer: true, //修改swiper自己或子元素时，自动初始化swiper
			observeParents: true, //修改swiper的父元素时，自动初始化swiper
			prevButton: '.swiper1 .swiper-button-prev', //这是说明有左箭头
			nextButton: '.swiper1 .swiper-button-next', //这是说明有右箭头
			breakpoints: {
				991: {
					slidesPerView: 3
				},
				767: {
					slidesPerView: 2,
					spaceBetween: 20,
				},
				600: {
					slidesPerView: 2,
					spaceBetween: 10,
				},
			}
		})
	}
	//swiper2
	if ($(".swiper2").length > 0) {
		var swiper2 = new Swiper('.swiper2 .swiper-container', {
			slidesPerView: 6,
			slidesPerColumn : 2,
			slidesPerColumnFill : 'row',
			speed: 500,
			autoplay: 3000,
			spaceBetween: 0, //每个产品之前的间距
			autoplayDisableOnInteraction: false,
			observer: true, //修改swiper自己或子元素时，自动初始化swiper
			observeParents: true, //修改swiper的父元素时，自动初始化swiper
			breakpoints: {
				// 991: {
				// 	slidesPerView: 4
				// },
				767: {
					slidesPerView: 2,
					slidesPerColumn : 2,
					spaceBetween: 0,
				},
				// 600: {
				// 	slidesPerView: 2,
				// 	spaceBetween: 0,
				// },
			}
		})
	}

	var wow = new WOW({
		boxClass: 'wow',
		animateClass: 'animated',
		offset: 80,
		mobile: true,
		live: true
	});
	wow.init();

	$(".item22").lazyload({
		effect: "fadeIn",
		threshold: 200,
		failurelimit: 10
	});

	$("img.lazy").lazyload({
		effect: "fadeIn",
		threshold: 200,
		failurelimit: 10
	});
	$(".carousel-inner img").lazyload({
		placeholder: "images/banner.gif",
		event: "sporty",
		effect: "fadeIn",
		threshold: 200,
		failurelimit: 10
	});
	$(".item23").lazyload({
		event: "sporty",
		effect: "fadeIn",
		threshold: 200,
		failurelimit: 10
	});
});
$(window).on("load", function () {
	setTimeout(function () {
		$(".carousel-inner img").trigger("sporty");
		$(".item23").trigger("sporty");
	}, 1000);
});