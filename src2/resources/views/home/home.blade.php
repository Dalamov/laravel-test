<?php

use Illuminate\Support\Facades\Auth;
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gif's and memes</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,400" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./home.css">
</head>

<body class="antialiased">

    <header>
        <div class=" bg-dark card-header d-flex justify-content-center">
            <h1 class="text-center  text-white mt-1">GIF'S and memes</h1>
            <!-- <?php
                    if (isset($success['name'])) {
                        echo "holasihayuserxd";
                    } else
                        echo "nohay";
                    ?> -->
            <span class="btn text-secondary">
                <a class="nav-link text-secondary" href="/uploadMedia" id="logoutButton">
                    Upload content
                </a>
            </span>
            <span class="btn ">
                <a class="nav-link text-secondary" href="/registerPage" id="logoutButton">
                    Register
                </a>
            </span>
            <span class="btn ">
                <a class="nav-link text-secondary" href="/loginPage" id="logoutButton">
                    Login
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

    <div class="d-flex flex-wrap justify-content-center">
        @foreach($media as $meme)
        <div class="card bg-dark shadow p-3 m-3 rounded p-2" style="width: 18rem; height: 19rem;">
            <div class="justify-content-center p-0">
                <img style="width: 15rem; height: 10rem;" class="card-img-top" src="{{$meme['url']}}" alt="Card image cap">
            </div>
            <div class="card-body">
                <h5 class=" card-title text-white m-0">{{$meme['title']}}</h5>
                <p class="card-text text-secondary m-0">{{$meme['description']}}</p>
                <div class="d-flex flex-row">
                    <input type="text" value="{{$meme['url']}}" id="{{$meme['url']}}">
                    <button class="rounded-circle border-none bg-secondary" onclick="copyUrl()">url</button>
                </div>
            </div>
        </div>
        @endforeach
        <script>
            function copyUrl() {
                let copyText = document.getElementById("{{$meme['url']}}");
                navigator.clipboard.writeText(copyText.value);
                alert("Copied the text: " + copyText.value);
            }
        </script>

    </div>

</html>