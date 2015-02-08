(function($) {
$(document).ready(function() {

/*create hover fade effect on home page middle components*/
$('.home-pic-3', this).hover(function(){
    $(this).find(".btn-block").stop().animate({"opacity": "0"}, "slow");
    },function(){
    $(this).find(".btn-block").stop().animate({"opacity": "1"}, "fast");
  });

/*create hover effect for products in product feed*/
$('.feed-img').css("opacity", "0");

$('.feed-img').hover(function(){
    $(this).stop().animate({"opacity": "0.80"}, "slow");
    },function(){
    $(this).stop().animate({"opacity": "0"}, "slow");
  });


/*get value of moonbox option dropdown menu*/
var moonOption1 = $('#moonbox-dropdown1').val();
var moonLink1 = $('#moonbox-dropdown1').children(":selected").attr('id');

$( ".mb-lv1" ).after( "<h2>$<span id='monthlyVal1'>"+moonOption1+"</span>/month</h2>" );

  $('#moonbox-dropdown1').change(function(){
	moonOption1 = $('#moonbox-dropdown1').val();
      moonLink1 = $('#moonbox-dropdown1').children(":selected").attr('id');
	$( "#monthlyVal1" ).replaceWith( "<span id='monthlyVal1'>"+moonOption1+"</span></h2>" );
  });

var moonOption2 = $('#moonbox-dropdown2').val();
var moonLink2 = $('#moonbox-dropdown2').children(":selected").attr('id');

  $( ".mb-lv2" ).after( "<h2>$<span id='monthlyVal2'>"+moonOption2+"</span>/month</h2>" );

  $('#moonbox-dropdown2').change(function(){
  moonOption2 = $('#moonbox-dropdown2').val();
   moonLink2 = $('#moonbox-dropdown2').children(":selected").attr('id');
  $( "#monthlyVal2" ).replaceWith( "<span id='monthlyVal2'>"+moonOption2+"</span></h2>" );
  });

  var moonOption3 = $('#moonbox-dropdown3').val();
  var moonLink3 = $('#moonbox-dropdown3').children(":selected").attr('id');
  $( ".mb-lv3" ).after( "<h2>$<span id='monthlyVal3'>"+moonOption3+"</span>/month</h2>" );

  $('#moonbox-dropdown3').change(function(){
  moonOption3 = $('#moonbox-dropdown3').val();
   moonLink3 = $('#moonbox-dropdown3').children(":selected").attr('id');
  $( "#monthlyVal3" ).replaceWith( "<span id='monthlyVal3'>"+moonOption3+"</span></h2>" );
  });

  /*moonbox button redirect*/

  $('#moonbox-submit1').click(function(){
    var link1 = "../product/mb-1-" + moonLink1;
     window.location.href= link1;
  });

    $('#moonbox-submit2').click(function(){
    var link2 = "../product/mb-2-" + moonLink2;
     window.location.href= link2;
  });

    $('#moonbox-submit3').click(function(){
    var link3 = "../product/mb-3-" + moonLink3;
     window.location.href= link3;
  });




});
})(jQuery);