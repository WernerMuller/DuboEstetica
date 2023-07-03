<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Título del correo electrónico</title>
    <style>
      /* Estilos CSS */
      body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
      }
      .container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.2);
      }
      h1 {
        color: #2e4053;
        text-align: center;
      }
      p {
        color: #556677;
        line-height: 1.5;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Regitro Newslatter</h1>
      <p>{{ $nombre }}</p>
      <p>{{ $email }}</p>
    </div>
  </body>
</html>
