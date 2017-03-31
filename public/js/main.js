

$(document).ready(function(){

  	$('#go-top').click(function(){
    	$('html, body').animate({scrollTop: 0},600);
    });

  	$(window).scroll(function(){
  		if($(window).scrollTop() >= 50){
  			$('#go-top').addClass('g-t-block');
  		}else{
  			$('#go-top').removeClass('g-t-block');
  		}
  	});

    $("a.scrollto").click(function() {
    var elementClick = $(this).attr("href")
    var destination = $(elementClick).offset().top;
    jQuery("html:not(:animated),body:not(:animated)").animate({
      scrollTop: destination
    }, 800);
    //return false;
  });



    $('.booking-btn').click(function() {
      $('.modal-form').animate({
        marginLeft: '0px'
      }, 500, "swing");
    });
    $('.fa-times').click(function() {
      $('.modal-form').animate({
        marginLeft: '-2000px'
      }, 500, "swing");
    });


    $.ajax({
      url: "/book",
      success: function(data) {
        for (var i = 0; i <= data.length - 1; i++) {
          $('#hotel_number').append('<option value="' + data[i].id +'">' + data[i].name + '</option>')
        };
      },
      dataType: "json"
    });



    $('.submit-btn').click(function(e) {
      e.preventDefault(e);
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        type: "POST",
        url: "/bookCreate",
        data: {
          'name': $('#name').val(),
          'last_name': $('#last_name').val(),
          'phone_number': $('#phone_number').val(),
          'coming_day': $('#coming_day').val(),
          'coming_month': $('#coming_month').val(),
          'coming_year': $('#coming_year').val(),
          'leaving_day': $('#leaving_day').val(),
          'leaving_month': $('#leaving_month').val(),
          'leaving_year': $('#leaving_year').val(),
          'hotel_number': $('#hotel_number').val()
        },
        dataType: 'json',
        success: function(data) {
          $('.modal-success').fadeIn(300).delay(3000).fadeOut(300);
        }
      });
    });
    

});