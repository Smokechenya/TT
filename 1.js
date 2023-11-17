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