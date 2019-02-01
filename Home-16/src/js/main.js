$(document).ready(function () {
  $('#password, #password_repeat').on('keyup', function () {
    if ($('#password').val() == $('#password_repeat').val()) {
      $('#message').html('Matching').css('color', 'green');
    } else
      $('#message').html('Not Matching').css('color', 'red');
  });
})