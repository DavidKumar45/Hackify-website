(function () {
  // 'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  const $btn = $('.contact-btn')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        
    $btn.prop('disabled', true).html('<div class="spinner-border text-light spinner-border-sm" role="status"><span class="sr-only"></span></div>')
        if (!form.checkValidity()){
          event.preventDefault(),
          event.stopPropagation(),
          $btn.prop('disabled', false).text('Submit')
        }else{
          event.preventDefault()
          const data ={
            name:$('#validationCustom01').val(),
            email:$('#validationCustom02').val(),
            address:$('#validationCustom03').val(),
            phone:$('#validationCustom04').val(),
            country:$('#validationCustom05').val(),
            gender:$('#validationCustom06').val(),
            category:$('#validationCustom07').val()
          }
        $.ajax({
          url: './backend/join-mail.php',
          type: 'POST',
          data: data,
          dataType: "JSON",
          success: function (me) {
            if (me.res == "success") {
              console.log(me.res);
              if(data.category == 'Social Engineering'){
              $('.reg-cover1 div').append(`<a href="https://paystack.com/pay/join-social"><button  class='pay'>PAY NOW</button></a>`)
            }else if(data.category == 'Web Penetration Testing'){
              $('.reg-cover1 div').append(`<a href="https://paystack.com/pay/join-web"><button  class='pay'>PAY NOW</button></a>`)
            }else if (data.category == 'Networking Analysis') {
              $('.reg-cover1 div').append(`<a href="https://paystack.com/pay/join-net"><button  class='pay'>PAY NOW</button></a>`)
            }else if(data.category == 'Mobile Penetration Testing'){
              $('.reg-cover1 div').append(`<a href="https://paystack.com/pay/join-mobile"><button  class='pay'>PAY NOW</button></a>`)
            }else{
              alert('hello')
            }
              $btn.prop('disabled', true).text('Sent!').css({
                'background':'green'
              })
              $('.reg-cover1').fadeIn('slow').css("display" , "flex");
            }else{
              console.log(me.res);
              $btn.prop('disabled', false).text('Try again').css({
                'background':'#D60000'
              })
            }
          }
        })
        }

      form.classList.add('was-validated')
      }, false)
    })
})() 


$(function() {
$.getJSON('./scripts/countries.json',function(result){
    result.map((country)=>{
        $('#validationCustom05').append(`
        <option value="${country.name}" >${country.name}</option>
        `)
    })
})
})






$(window).on('load', function () {
  $('.loader').fadeOut('slow');
})




$(document).ready(function () {

  $('.btn-close').click(function () {
      $('video').trigger('pause');
  })

  $('.menu-icon').click(function () {
      $('.menu-bar-cont').slideToggle('show');
  })

  $('.owl-carousel').owlCarousel({
      loop:true,
      margin:30,
      nav:false,
      autoplay:true,
      autoplayTimeout:1500,
      autoplayHoverPause:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:3
          },
          1000:{
              items:3
          }
      }
  })

 
})