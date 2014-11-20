<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Date and Time</title>
    <style>
      body {
        text-align: center;
        margin: 25px auto;
        width: 400px;
      }
      h1, h4 {
        border-radius: 10px;
        padding: 10px;
        width: 200px;
        margin: 25px auto;
      }
      h1 {
        padding: 10px 50px;
        background-color: black;
        color: white;
        width: 300px;
      }
      .border {
        border: 2px solid black;
        max-width: 500px;
      }
    </style>
  </head>
  <body>
    <h4 class="border">The current time and date:</h4>
    <h1 class="border"><?=$date;?><br><?=$time;?></h1>
  </body>
</html>