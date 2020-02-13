

$(document).ready(function(){
    // Initialize Tooltip
  var e,p,n = 0;
  $('[data-toggle="tooltip"]').tooltip();
  $('#email').blur(function() {
      if($(this).val() != '') {
          var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
          if(pattern.test($(this).val())){
              $(this).css({'border' : '2px solid #569b44'});
              e=1;
          } else {
              $(this).css({'border' : '2px solid #ff0000'});
              e=0;
          }
      } else {
          $(this).css({'border' : '1px solid #ff0000'});
          e=0;
      }
  });
  $('#ordersend').on('click', function(){
  	var post_name = $('#name').val()
  	var post_email = $('#email').val()
  	var post_phone = $('#phone').val()
  	var post_comment = $('#comment').html()
  	$.post("/function.php", { email: post_email, name: post_name, phone: post_phone, comment: post_comment, sendmail: '1' })
		.done(function(data) {
		  $('#ordersend').append(data);
            setTimeout(function(){
              $('#ordersend').html(' Отправить');
            }, 1500)
		    });
  })
})

function showID(ID){
  $('"#'+ID+'"').css({'display': 'block'});
}
