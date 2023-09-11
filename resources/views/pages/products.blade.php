<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/styles.css">
    <title>Document</title>
</head>
<body class="bckgnd">
    @include('layout.navbar')
    
    <div class="row card-group products">
      <div class="col card text-bg-dark mb-3" style="padding: 10px">
        <img src="/images/canvasboard.png" class="img-fluid" style="border-radius: 50%;" alt="canvasboard">
        <div class="card-body">
          <h5 class="card-title">Canvas Board</h5>
          <p class="card-text">Most of my canvas boards are 8"x10", otherwise based on request.</p>
        </div>
      </div>
      <div class="col card text-bg-dark mb-3" style="padding: 10px">
        <img src="/images/canvas.png" class="img-fluid" style="border-radius: 55%;" alt="canvas">
        <div class="card-body">
          <h5 class="card-title">Canvas</h5>
          <p class="card-text">Most of my cancases are 16"x20", otherwise based on request.</p>
        </div>
      </div>
      <div class="col card text-bg-dark mb-3" style="padding: 10px">
        <img src="/images/glasssheets.png" class="img-fluid" style="border-radius: 60%;" alt="glasssheets">
        <div class="card-body">
          <h5 class="card-title">Picture Frame Glass Sheets</h5>
          <p class="card-text">Most of my picture frame glass sheets are 8"x10", otherwise based on request.</p>
        </div>
      </div> 
      <div class="col card text-bg-dark mb-3" style="padding: 10px">
        <img src="/images/watercolor.png" class="img-fluid" style="border-radius: 60%;" alt="watercolor">
        <div class="card-body">
          <h5 class="card-title">Watercolor Sheets</h5>
          <p class="card-text">Most of my watercolor sheets are 8"x10", otherwise based on request.</p>
        </div>
      </div>  
    </div>
    <div class="row card-group products">
      <div class="col card text-bg-dark mb-3" style="padding: 10px">
          <p class="card-text">The canvas boards and picture frame glass sheets do come with their own frames.</p>
        </div>
      </div> 
    </div>
    

    @include('layout.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>