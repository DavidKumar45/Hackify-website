(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  const $btn = $('.contact-btn2')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        
    $btn.prop('disabled', true).html('<div class="spinner-border text-light spinner-border-sm" role="status"><span class="sr-only"></span></div>')
        if (!form.checkValidity()){
          event.preventDefault(),
          event.stopPropagation(),
          $btn.prop('disabled', false).text('Contact')
        }else{
          event.preventDefault()
          const data = {
            name:$('#validationCustom01').val(),
            subject:$('#validationCustom02').val(),
            email:$('#validationCustom03').val(),
            phone:$('#validationCustom04').val(),
            message:$('#validationCustom05').val()
          }
        $.ajax({
          url: './backend/contact-mail.php',
          type: 'POST',
          data: data,
          dataType: "JSON",
          success: function (me) {
            if (me.res == "success") {
              console.log(me.res);
              $btn.prop('disabled', true).text('Sent!').css({
                'background':'green'
              })
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






$(window).on('load', function () {
$('.loader').fadeOut('slow');
})

$(document).ready(function () {
  $('.menu-icon').click(function () {
      $('.menu-bar-cont').slideToggle('show');
  });
})