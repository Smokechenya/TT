<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<?php

$jsonUrl = 'https://cdn.jsdelivr.net/gh/andr-04/inputmask-multi@master/data/phone-codes.json';
$jsonData = file_get_contents($jsonUrl);
$phoneCodes = json_decode($jsonData, true);

if (isset($_POST['phone_number'])) {
    $inputPhoneNumber = $_POST['phone_number'];
    $cleanedPhoneNumber = preg_replace('/[^0-9+]/', '', $inputPhoneNumber);
    foreach ($phoneCodes as $phoneCode) {
        $pattern = '/' . str_replace('#', '\d', preg_quote($phoneCode['mask'], '/')) . '/';

        if (preg_match($pattern, $cleanedPhoneNumber)) {
            echo 'Номер телефона принадлежит к стране: ' . $phoneCode['name_ru'];
            break;
        }
    }
}
?>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Добро пожаловать!</h5>
        <button type="button" class="btn-close" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Спасибо за посещение нашего сайта.</p>
        <p>На нашем сайте мы используем cookie файлы</p>
        <button class="btn btn-primary" id="acceptButton">Принять</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-5 col-8 col-lg-5">
            <div class="content-block">
            <h1>
                <b>Fulfill dla Twojego e-Commerce</b>
            </h1>
            <ol class="pt-3">
                <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
</svg>Przyjecie i magazynowanie produktow</li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
</svg>Kompletacja i pakovanie</li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
</svg>Obstuga zwrotow i reklamacji</li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
</svg></i>Wspotpraca ze wszyskimi dostepmnymi przewoznikami</li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
</svg>Integracja z Twoja platforma e-Commerce</li>
                
            </ol>
            <div class="container">
    <form method="post">
        <label for="phone_number">Введите номер телефона:</label>
        <input type="text" id="phone_number" name="phone_number" required>
        <button type="submit" class="btn btn-primary">Проверить</button>
    </form>

            <div class="pt-3">
                <button class="btn btn-primary">Wiecej</button>
            </div>
            </div>
        </div>
    </div>
</div>

<script src="1.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</div>
</body>
</html>


