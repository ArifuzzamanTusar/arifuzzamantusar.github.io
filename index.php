<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="row">

    <?php
    for ($i = 0; $i < 4; $i++) {

    ?>
      <div class="col-xl-6  mb-3">
        <div class="widget">
          <div class="overlay p-2 ">
            <div class="front_content">
              <span class="cat_name">category name</span><span class="cat_popular">Popular</span>
              <h4>Lorem eligendi consectetur ullam perspiciatis officia quos.</h4>
              <span class="top_meta"><img src="uploads/authors/avater.png" alt=""> Author Name &nbsp;&nbsp;</span> <span class="top_meta"> <i class="fa fa-calendar"></i> 29th May </span>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae quibusdam ducimus quaerat magnam optio laboriosam fuga. Eius, provident? Fugit, voluptatibus!</p>
              <a class="read_more" href="">Read More <i class="fas fa-arrow-right"></i></a>

            </div>
          </div>
          <img class="post_image" src="uploads/post_images/green.jpg" alt="">

        </div>

      </div>

    <?php
    }
    ?>

  </div>

  <h1>Im Tusar</h1>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>