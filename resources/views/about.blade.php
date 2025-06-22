<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

     <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link href={{ asset('css/style.css') }} rel="stylesheet">
</head>
<body>
@include('layouts.header')


<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">
 <div class="flex">
<div class="image">
            <img src={{ asset('images/img01.jpg') }} alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>We bring your dream wedding to life with personalized services, expert planning, and unparalleled attention to detail.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>
</div>


    <div class="flex">
     <div class="content">
            <h3>what we provide?</h3>
            <p>From venue selection to decor, photography, and entertainment, we handle every aspect of your special day to make it unforgettable.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image" >
            <img src={{ asset('images/img02.jpg') }} alt="" >
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src={{ asset('images/img03.jpg') }} alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>We are a dedicated team of wedding planners with years of experience in creating magical and memorable events tailored to your vision.</p>
            <a href="gallery.php" class="btn">gallery</a>
        </div>

    </div>

</section>
@include('layouts.footer')
</body>
</html>