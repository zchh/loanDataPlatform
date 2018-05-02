$(function(){

	var hHeight=$(window).height();

	var m_h=(hHeight-$(".fc>div").height())/2;

	$(".fc>div").css({"margin-top":m_h});

	$(".fc").hide();

	$(".fc>div:eq(0)").hide();

	$(".fc>div:eq(1)").hide();

	$(".fc>div form>span").click(function(){

		$(".fc").hide();

	})

	var m_h2=(hHeight-512-84)/2;

	$(".login_fo>div").css({"margin-top":m_h2});

	$(".guize_tit li").click(function(){

		$(this).addClass("active").siblings().removeClass("active");

		var q=$(this).index();

		$(".gz_txt>div").eq(q).show().siblings(".gz_txt>div").hide();

	})

	$(".login_fo input[type='checkbox']").click(function(){

		if($(this).is(":checked")){

			$(this).addClass("active");

		}else{

			$(this).removeClass("active");

		}

	})

	

	

	

	//修改所在城市

	// $(".y_cs a").click(function(){

	// 	$(this).siblings("input").removeAttr("disabled");

	// 	$(this).siblings("input").removeAttr("placeholder");

	// 	$(this).siblings("input").focus();

	// 	$(this).siblings("input").css({"border":"solid 1px #dddddd"});

	// })

	// $(".y_cs input").blur(function(){

	// 	$(this).attr({"disabled":"disabled"});

	// 	$(this).css({"border":"0"});

	// 	if($(this).val()==""){

	// 		$(this).attr({"placeholder":"未设置"});

	// 	}

	// })

	

	//修改紧急联系人



	$(".y_jjLx a").click(function(){

		$(this).siblings("input").removeAttr("disabled");

		$(this).siblings("input").removeAttr("placeholder");

		$(this).siblings("input").focus();

		$(this).siblings("input").css({"border":"solid 1px #dddddd"});

	})

	$(".y_jjLx input").blur(function(){

		$(this).attr({"disabled":"disabled"});

		$(this).css({"border":"0"});

		if($(this).val()==""){

			$(this).attr({"placeholder":"未设置"});

		}

	})

	$(".gengduo").click(function(){
		if($(this).hasClass("active")){
			$(this).removeClass("active");
			$(this).parents("li").css({"height":"45px"});
		}else{
			$(this).addClass("active");
			$(this).parents("li").css({"height":"auto"});
		}
	})

})

function passWo(){

	$(".fc").show();

	$(".fc").css({"opacity":"1"});

	$(".fc>div:eq(0)").show();

}

function passWo2(){

	$(".fc").show();

	$(".fc").css({"opacity":"1"});

	$(".fc>div:eq(1)").show();

}