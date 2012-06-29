var $navigator = navigator.userAgent.toLowerCase();
var $browser = {
	IE: /msie/.test($navigator),
	OPERA: /opera/.test($navigator),
	MOZ: /gecko/.test($navigator),
	IE6: /msie 6/.test($navigator),
	IE7: /msie 7/.test($navigator),
	SAFARI: /safari/.test($navigator)
	};
//判断浏览器

//计算元素宽度
var $countElements = function(){
	$docWidth = $(window).width();
	$section = $("section.content").width();//$section为文档的展示区宽度
	
	$minWidth = 1200;
	$cheWidth = ($docWidth - $section) / 2 - 15;
	
	//获得展示区的最小宽度
	//$postMinWidth = parseFloat($("section.content").css("min-width"),10) - parseFloat($("section.main").css("padding-left"),10);

	//如果文档高度小于窗口高度时把窗口高度设置成文档高度
	// $sectionHeight = parseFloat($("section.content").css("height"));//$section为文档的展示区宽度，用css获取到的是原始高度
	// $docHeight = window.screen.availHeight;
	// console.log($sectionHeight,$docHeight)
	// if ($sectionHeight < $docHeight){
	// 	$("section.content").height($docHeight)
	// };

	//在对文章图片进行缩放(非IE6下)
	if(!$browser.IE6){
		$("che").width($cheWidth + 12);
		$("che section").css("padding-left",$cheWidth - 220);
		//当可视面积大于minWidth时调用
		if ($docWidth > $minWidth){
			//对图片进行处理
			$(".post-list img").each(function(){
				var $newImg = new Image();
				$newImg.src = this.src;
				//console.log($newImg.width,$newImg.height);//这样输出的长和宽是原始的
				if ($newImg.width > $section){
					$(this).css({
						width : $section,
						height : "auto"
					});
				};
			});
		} else {
			//这里是当可视面积宽度小于minWidth的时候调用的方法
			//$("che").width("auto");
			$(".post-list img").each(function(){
				var $newImg = new Image();
				$newImg.src = this.src;
				//当图片大于最小宽度时
				if ($newImg.width > $section){
					//当图片宽度大于展示区宽度
					$(this).css({
						width : $section,
						height : "auto"
					});
				};
			});
		};
	};
};
//页面完全就绪之后运行，解决chrome下获取图片尺寸不正确的问题
$(window).load(function(){
	$countElements();
	window.onresize = $countElements;
});
	
$(function(){
	//搜索
	var $searchATitle = $("che nav li.search a").attr("title");
	var $hideSearch = function(){
		$t = 600;
		$form = $("che nav li.search form");
		if (!$("che nav li.search a").is(":animated")){
			$("che nav li.search a").animate({
				left : 0
			},$t);
			$form.animate({
				opacity : 0,
				left : 30
			},$t,function(){
				$form.hide();
			});
		};
		$form.attr("title",$searchATitle);
	};
	$("che nav li.search a").toggle(function(){
		$t = 600;
		$form = $("che nav li.search form");
		if (!$(this).is(":animated")){
			$(this).animate({
				left : -88
			},$t);
		};
		$form.css("display","block").animate({
			opacity : 1,
			left : -58
		},$t);
		$(this).attr("title","点击关闭搜索");
	},function(){
		$hideSearch();
	});
	$("body").bind("keydown",function(){
		if (event.keyCode == 27){
			$hideSearch();
		};
	});
	$("che nav li.search form input").focus(function(){
		$i = this.defaultValue;
		$v = $(this).val();
		if ( $v == $i){
			$(this).val("").addClass("focus");
		};
	}).blur(function(){
		$i = this.defaultValue;
		$v = $(this).val();
		if ( $v == ""){
			$(this).val($i).removeClass("focus");
		};
	});
	//comments设置默认属性
	$(".comments .reply-form form input.text").each(function(){
		$i = $(this).attr("default");
		$c = "#CFCFCF";
		if ($(this).val() == ""){
			$(this).val($i);
			$(this).css("color",$c);
		};
		$(this).focus(function(){
			var $v = $(this).val();
			var $i = $(this).attr("default");
			if ($v == $i){
				$(this).val("").css("color","inherit")
			};
		}).blur(function(){
			var $v = $(this).val();
			var $i = $(this).attr("default");
			if ($v == ""){
				$(this).val($i).css("color",$c);
			};
		});
	});
	
	//测试，阻塞提交按钮动作
	//$('form').submit(function() {
//		return false;
//	});
	
	//绑定快捷键提交
	//document.getElementById('commentform').onkeydown = function (moz_ev) {
//		var ev = null;
//		if (window.event) ev = window.event;
//			else ev = moz_ev;
//		if (ev.ctrlKey && ev.keyCode == 13) {
//			document.getElementById('submit_comment').click();
//		}
//	}
});
//评论提交时检查文本框
function checkField() {
	$(".comments .reply-form form input.text").each(function(){
		var $v = $(this).val();
		var $i = $(this).attr("default");
		if ($v == $i){
			$(this).val("");
		};
	});
};
$(function(){
	//此部分的代码只在ie6下调用
	if ($browser.IE6){
		try {document.execCommand('BackgroundImageCache', false, true);} catch(e) {};
		//计算图片尺寸
		$("article.post img").each(function(){
			var $img = $(this);
			var $maxWidth = 580;
			$w = $img.width();
			$h = $img.height();
			if ($w >= $maxWidth){
				$newH = Math.round($h /($w / $maxWidth));
				$img.css({
					width : $maxWidth,
					height : $newH
				});
			};
		});
		var $countChe = function(){
			//在ie6下计算左边栏的位置
			$a = $(window).height() / 2 - 100 + "px";
			$s = $(document).scrollTop();
			$("che header").css({
				"top":$s,
				"margin-top":$a
			});
		};
		$countChe();
		window.onscroll = $countChe;
	};
});
