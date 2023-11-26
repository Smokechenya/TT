$(document).ready(function(){
  $('#myModal').modal('show');
});
$(document).ready(function(){
  var isPopupShownToday = localStorage.getItem('popupShownToday');
  if (!isPopupShownToday) {
    $('#myModal').modal('show');
  }
  $('#myModal').on('hidden.bs.modal', function () {
    localStorage.setItem('popupShownToday', 'true');
  });
  $('#acceptButton').on('click', function () {
    $('#myModal').modal('hide');
  });
});
$(document).ready(function() {
  $('#text').click(function() {
    var val = $('#input').val();
    if(val != '') {
      if(/[^[0-9]/.test(val)){
        var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
        if(pattern.test(val)){
          $('#valid').text('E-mail введен верно');
        } else {
          $('#valid').text('Не верно введен e-mail');
        }
      } else {
        if(val.length >= 10) {
          $('#valid').text('Телефон введен верно');
        } else {
          $('#valid').text('Не верно введен номер телефона');
        }
      }
    } else {
      $('#valid').text('Поле input не должно быть пустым');
    }
  });
});

  