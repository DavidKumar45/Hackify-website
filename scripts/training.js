// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var orgs = document.querySelectorAll('.org-form')
  var devs = document.querySelectorAll('.dev-form')

  const $btn1 = $('.contact-btn')

  // Loop over them and prevent submission
  Array.prototype.slice.call(orgs)
    .forEach(function (org) {
    org.addEventListener('submit', function (event) {
        
    $btn1.prop('disabled', true).html('<div class="spinner-border text-light spinner-border-sm" role="status"><span class="sr-only"></span></div>')
    // console.log("YES");
        if (!org.checkValidity()){
          event.preventDefault(),
          event.stopPropagation(),
          $btn1.prop('disabled', false).text('Register')
        }
        else{
          event.preventDefault()
          const organisation = {
            type: 'org',
            comName : $('#validationCustom01').val(),
            email : $('#validationCustom02').val(),
            phone : $('#validationCustom03').val(),
            part : $('#validationCustom04').val(),
          }
          console.log(organisation.type)
          $.ajax({
            url: './backend/training-mail.php',
            type: 'POST',
            data: organisation,
            dataType: "JSON",
            success: function (me) {
              if (me.res == "success") {
                console.log(me.res);
                $btn1.prop('disabled', true).text('Sent!').css({
                  'background':'green'
                })
                $('.reg-cover1').fadeIn('slow').css("display" , "flex");
                $('.reg-cover2').fadeOut('fast').css("display" , "none");
                $('.reg-cover22').fadeOut('fast').css("display" , "none");
              }else{
                console.log(me.res);
                $btn1.prop('disabled', false).text('Try again').css({
                  'background':'#D60000'
                })
              }
            }
          })
        }

      org.classList.add('was-validated')
    }, false)
  })

  const $btn2 = $('.contact-btn2')
  Array.prototype.slice.call(devs)
  .forEach(function (dev) {
    dev.addEventListener('submit', function (event) {
        
    $btn2.prop('disabled', true).html('<div class="spinner-border text-light spinner-border-sm" role="status"><span class="sr-only"></span></div>')
    // console.log("YES");
        if (!dev.checkValidity()){
          event.preventDefault(),
          event.stopPropagation(),
          $btn2.prop('disabled', false).text('Register')
        }
        else{
          event.preventDefault()
          const developer = {
            type:"dev",
            name : $('#validationCustom05').val(),
            email : $('#validationCustom06').val(),
            phone : $('#validationCustom07').val(),
            pack : $('#validationCustom08').val(),
          }
          $.ajax({
            url: './backend/training-mail.php',
            type: 'POST',
            data: developer,
            dataType: "JSON",
            success: function (me) {
              if (me.res == "success") {
                  if(developer.pack == 'Basic'){
                  $('.reg-cover2 div').append(`<a href="https://paystack.com/pay/dev-train1"><button class='pay'>PAY NOW</button></a>`)
                }else if(developer.pack == 'Intermediate'){
                  $('.reg-cover2 div').append(`<a href="https://paystack.com/pay/dev-train2"><button class='pay'>PAY NOW</button></a>`)
                }else if (developer.pack == 'Advance') {
                  $('.reg-cover2 div').append(`<a href="https://paystack.com/pay/dev-train3"><button class='pay'>PAY NOW</button></a>`)
                }
                console.log(me.res);
                $btn2.prop('disabled', true).text('Sent!').css({
                  'background':'green'
                })
                $('.reg-cover1').fadeOut('fast').css("display" , "none");
                $('.reg-cover2').fadeIn('fast').css("display" , "none");
                $('.reg-cover22').fadeIn('slow').css("display" , "flex");
              }else{
                console.log(me.res);
                $btn2.prop('disabled', false).text('Try again').css({
                  'background':'#D60000'
                })
              }
            }
          })
          console.log(developer.type)
        }

      dev.classList.add('was-validated')
    }, false)
  })
  
})()



  $(window).on('load', function () {
    $('.loader').fadeOut('slow');
  })




$(document).ready(()=>{

  $('.menu-icon').click(function () {
    $('.menu-bar-cont').slideToggle('show');
  });

  $('.close').click(function(){
    $('.reg-cover22').fadeOut('slow')
  })

  $('.org-button').click(function () {

    // BUTTON DISPLAY
    $('.org-button').css({
      backgroundColor : '#d60000',
      color : '#fff',
      fontSize : '17px',
      padding : '10px 7% 12px 7%',
      margin : '0 20px 0 0',
      border : 'none',
      borderRadius : '10px',
      transition : '.5 ease'
    })
  
    $('.dev-button').css({
      backgroundColor : 'transparent',
      color : '#d60000',
      fontSize : '17px',
      padding : '10px 7% 12px 7%',
      border : '1px solid #d60000',
      borderRadius : '10px',
      transition : '.5 ease'
    })

    // BUTTON DISPLAY END

    // FORM START

    $('.org-form').css("display", "block")
    $('.dev-form').css("display", "none")

      // FORM END
  })


  $('.org').click(function () {

    // BUTTON DISPLAY
    $('.org-button').css({
      backgroundColor : '#d60000',
      color : '#fff',
      fontSize : '17px',
      padding : '10px 7% 12px 7%',
      margin : '0 20px 0 0',
      border : 'none',
      borderRadius : '10px',
      transition : '.5 ease'
    })

    $('.dev-button').css({
      backgroundColor : 'transparent',
      color : '#d60000',
      fontSize : '17px',
      padding : '10px 7% 12px 7%',
      border : '1px solid #d60000',
      borderRadius : '10px',
      transition : '.5 ease'
    })
    
        // BUTTON DISPLAY END
    
        // FORM START
    
        $('.org-form').css("display", "block")
        $('.dev-form').css("display", "none")

    
          // FORM END
      })
    
      $('.dev-button').click(function () {
    
        // BUTTON DISPLAY
        $('.dev-button').css({
          backgroundColor : '#d60000',
          color : '#fff',
          fontSize : '17px',
          padding : '10px 7 12px 7%',
          border : 'none',
          borderRadius : '10px',
          transition : '.5s ease'
        })
    
        $('.org-button').css({
          backgroundColor : 'transparent',
          color : '#d60000',
          fontSize : '17px',
          padding : '10px 7% 12px 7%',
          border : '1px solid #d60000',
          borderRadius : '10px',
          transition : '.5s ease'
        })
    
        // BUTTON DISPLAY END
    
          // FORM START
          $('.org-form').css("display", "none")
          $('.dev-form').css("display", "block")
          // FORM END
          
      })
      
      $('.dev').click(function () {
    
      // BUTTON DISPLAY
      $('.dev-button').css({
        backgroundColor : '#d60000',
        color : '#fff',
        fontSize : '17px',
        padding : '10px 7 12px 7%',
        border : 'none',
        borderRadius : '10px',
        transition : '.5s ease'
      })
  
      $('.org-button').css({
        backgroundColor : 'transparent',
        color : '#d60000',
        fontSize : '17px',
        padding : '10px 7% 12px 7%',
        border : '1px solid #d60000',
        borderRadius : '10px',
        transition : '.5s ease'
      })
  
      // BUTTON DISPLAY END
  
        // FORM START
        $('.org-form').css("display", "none")
        $('.dev-form').css("display", "block")
        // FORM END
    })

    // count down

    CountDownTimer('07/22/2021 10:1 PM');
    CountDownTimer('10/16/2021 10:1 PM');

    function CountDownTimer(dt) {
        var end = new Date(dt);

        var _second = 1000;
        var _minute = _second * 60;
        var _hour = _minute * 60;
        var _day = _hour * 24;
        var timer;

        function showRemaining() {
            var now = new Date();
            var distance = end - now;
            if (distance < 0) {

                clearInterval(timer);
                $('.warning').text('Register to be among the next set')

                return;
            } 
            var days = Math.floor(distance / _day);
          

           

            if (days < 11) {
              $('.warning').css("color","#d60000")
            }

            $('.warning').text(`${days}days remaining till training starts`)

        }

        timer = setInterval(showRemaining, 0);
    }
})