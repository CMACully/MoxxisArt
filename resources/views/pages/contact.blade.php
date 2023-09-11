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
    
    <div class="card mb-3 navbar-dark bg-dark cardbody">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="/images/profile.png" class="img-fluid" style="border-radius: 50%;" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body" style="margin: 4rem auto 0 auto; text-align: center;">
            <h5 class="card-title" style="font-size: 30px">Chauntel Atchley Cully</h5>
            <p class="card-text" style="font-size: 20px">Email: <a href="mailto:">moxxisart@gmail.com</a></p>
            <p class="card-text" style="font-size: 20px">Phone: 417-771-0579</p>
            <div class="col g-3">
              <a href="https://www.facebook.com/CMAtchley1/" class="nav-link fa fa-facebook-f fa-2x"></a>
              <a href="https://www.instagram.com/moxxisart/" class="nav-link fa fa-instagram fa-2x" style="padding: 0 1rem 0 1rem;"></a>
              <a href="https://github.com/CMACully" class="nav-link fa fa-github fa-2x"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    @include('layout.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>