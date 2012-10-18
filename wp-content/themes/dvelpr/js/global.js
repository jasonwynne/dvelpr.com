$(document).ready(function(){


	

});//// end doc ready



function homePageActions(){

	$(".block").click(function() {
		var overWidth = $('.holder-blocks').width();
		var overheight = $('.holder-blocks').height();
		var myCalWidth = overWidth-125;
		var myCalHeight = overheight-125;
		var p = $(this);
		var position = p.position();
		var myPosLeft = position.left;
		var myPosTop = position.top;
		
		$(this).children('.block-extended').css('margin','-25px 0 0 -90px');	
	
		
		if(myPosLeft<100){
			$(this).children('.block-extended').css('margin-left','-10px');	
		}
		if(myPosTop<100){
			$(this).children('.block-extended').css('margin-top','-10px');	
		}
		if(myPosLeft>myCalWidth){
			$(this).children('.block-extended').css('margin-left','-170px');	
		}
		if(myPosTop>myCalHeight){
			$(this).children('.block-extended').css('margin-top','-40px');
		}
	
		$(this).children('.block-extended').show(200);
		$(".block").addClass('block-covered');
		
	});
	
	
	$('.block-extended').hover(
	  function () {
		//do nothing
	  },
	  function () {
		$(".block").removeClass('block-covered');
		$(this).hide(150);
	  }
	);
	
	$(".block-extended").click(function() {
		var mySpot = $(this).children('p').children('a.project-title-link');
		var myLink = mySpot.attr('href');
		//console.debug('mylinkk is = '+myLink);
		window.open(myLink,'_self');
	});
	
	
	$('.title-link').hover(
	  function () {
		$('.project-title-link').css('display', 'none');
		$('.project-title-hover').css('display', 'block');
	  },
	  function () {
		$('.project-title-link').css('display', 'block');
		$('.project-title-hover').css('display', 'none');
	  }
	);





}//// projectPageActions

function projectPageActions(){

	var count = $(".slide").length;
	var totalCount = count-1;
	var currSlide = 0;
	var nextSlide ;
	var slideintervalTime = 10000;
	var slideSpeed = 1000;
	var fadeSpeed = 1200;
	var isAnimating = 0;
	var topZ = 100;
	var bottomZ = 0;

	$(".slide").each(function(i) {
		$(this).addClass('slide'+i);
		$(this).css('display','none');
	});
	
	$(".thumb").each(function(i) {
		$(this).addClass('thumb'+i);
		$(this).css('opacity','.5');
	});
	
	$(".slide0").css('display','block');
	$(".thumb0").css('opacity','1');
	$(".thumb0").addClass('current-thumb');
	
	 $(".thumb").click(function() {
	 	clearThumbs();
	 	$(this).addClass('current-thumb');
	 	$(this).css('opacity','1');
	 	var p = $(this);
		var position = p.position();
		var myPosLeft = position.left;
		var myPosTop = position.top;
		var thumbNum = $(this).attr('class');
		var parsed = parseInt(thumbNum.substring(11));
		//console.debug(parsed);
		moveSlide(parsed);
		moveCover(myPosLeft,myPosTop);
	});
	
	$('.thumb').hover(
	  function () {
		$(this).css('opacity','1');
	  },
	  function () {
		  if (!$(this).hasClass("current-thumb")) {
			$(this).css('opacity','.5');
			}	
	  }
	);
	
	function moveCover(left,top){
		$('.thumb-cover').animate({'left': left, 'top': top}, 300, 'easeOutCubic');	
	}
	
	$(document).keydown(function(e) {
 		//console.debug(e.type + ': ' +  e.which)
 		if(e.which==39){
 			if(currSlide != totalCount){
 				i=currSlide+1;
 			}else{
 				i=0;
 			}
 			var p = $(".thumb"+i);
			var position = p.position();
			var myPosLeft = position.left;
			var myPosTop = position.top;
			moveCover(myPosLeft,myPosTop);
 			moveSlide(i);
 		}
 		
 		if(e.which==37){
 			if(currSlide < count){
 				i=currSlide-1;
 			}
 			if(currSlide==0){
 				i=totalCount;
 			}
 			var p = $(".thumb"+i);
			var position = p.position();
			var myPosLeft = position.left;
			var myPosTop = position.top;
			moveCover(myPosLeft,myPosTop);
 			moveSlide(i);
 		}
	});
	
	
	function moveSlide(i){
		if (i != currSlide && isAnimating==0){
			isAnimating = 1;
			nextSlide = i;
			$(".slide"+nextSlide).fadeIn(300);
			$(".slide"+currSlide).fadeOut(300, function(){
				slideComplete();
			});
		}
	}
	
	function slideComplete(){
		currSlide = nextSlide;
		isAnimating = 0;
	}
	
	function clearThumbs(){
		$(".thumb").each(function() {
			$(this).removeClass("current-thumb");
			$(this).css('opacity','.5');
		});
	}
	
	
	// event listener onResize to keep thumb-cover on current thumb	
	
	var addEvent = function(elem, type, eventHandle) {
	if (elem == null || elem == undefined) return;
	if ( elem.addEventListener ) {
			elem.addEventListener( type, eventHandle, false );
		} else if ( elem.attachEvent ) {
			elem.attachEvent( "on" + type, eventHandle );
		}
	};
	
	
	addEvent(window, "resize", function() { onResize(); } );
 
 	function onResize(){
	
		var p = $('.current-thumb');
		var position = p.position();
		var myPosLeft = position.left;
		var myPosTop = position.top;
		
		$('.thumb-cover').css({'left': myPosLeft, 'top': myPosTop});	

	}
	
	
	
}//// projectPageActions





