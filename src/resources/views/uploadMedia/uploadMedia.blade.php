<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,400" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

</head>

</html>

<body>
  <header>
    <div class=" bg-dark card-header d-flex justify-content-center">
      <h1 class="text-center  text-white mt-1">GIF'S and memes</h1>
      <!-- <?php
            if (isset($success['name'])) {
              echo "holasihayuserxd";
            } else
              echo "nohay";
            ?> -->

      <span class="btn ">
        <a class="nav-link text-secondary" href="/home" id="logoutButton">
          Home
        </a>
      </span>
      <span class="btn">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-secondary">Logout</button>
        </form>
      </span>
    </div>
  </header>
  <main class="container d-flex align-items-center mt-4 p-5 justify-content-around">
    <div class="mb-2 shadow p-3 mb-5 bg-white rounded p-4">
      <h3 class="mb-4">Upload media</h3>
      <form action="/api/media" method="POST">
        <div>
          <input name="url" class="form-control m-1" type="text" id="url" placeholder="Media Url..." required></input>
        </div>
        <div>
          <input name="title" class="form-control m-1" type="text" id="title" placeholder="Title" required></input>
        </div>
        <div>
          <input name="description" class="form-control m-1" type="text" id="description" placeholder="description" required></input>
        </div>
        <div class="d-flex justify-content-center">
          <button type="submit" class="btn btn-secondary">Submit</button>
        </div>
      </form>
    </div>
  </main>
  <div>
  </div>
</body>

</html>

<?php
