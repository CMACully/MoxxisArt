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
    @include('layout.images')
    <div style="margin: auto; text-align: center; max-width: 30%; color:white">  
      <h3>Who Am I</h3>
      <p> I am Chauntel, who is a passionate person who loves to create wonderful custom pieces of art from my favorite video games, anime and movies. Since I was a child I've wanted to provide others joy with art. Art is my life and I'm very thankful for the requests I receive. <br> It is my goal to strive for greatness and bring happiness to those who love art, and by sharing through Social Media!</p>
    </div>
    <div style="margin-top: 6rem">
      @include('layout.footer')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script async src="//www.instagram.com/embed.js"></script>
</body>
</html>