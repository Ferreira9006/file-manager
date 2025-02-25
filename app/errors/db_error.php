<?php
$message = $_GET['error_message'];
$code = $_GET['error_code'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database error</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row vh-100 align-items-center justify-content-center">
        <div class="col-12">
          <div class="card shadow border-white px-5 py-4 custom-card">
            <div class="card-body">
              <h1>Error code: <?= $code ?></h1>
              <p>Error message: <?= $message ?></p>
              <hr class="mb-5">   
              <a href="./index">Go back.</a>
            </div>
            <small class="text-center">
              Made with 
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
              </svg> 
              by <a href="https://github.com/Ferreira9006">Gabriel Ferreira</a>
            </small>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>