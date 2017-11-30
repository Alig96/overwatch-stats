<!DOCTYPE html>
<html lang="en">
<head>

    <style>
        body {
            background-color: #696969;
        }
    </style>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">

    <title>Overwatch Stats</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"><!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-light bg-light static-top">
    <div class="container">
        <a class="navbar-brand" href="#">Overwatch Stats</a>
    </div>
</nav><!-- Masthead -->
<header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h1 class="mb-5">Search For Your Overwatch Stats</h1>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <form id="search-form" onsubmit="return false;">
                    <div class="form-row">
                        <div class="col-12 col-md-6 mb-2 mb-md-0">
                            <input class="form-control form-control-lg" placeholder="Enter Your Battle Tag (#)" required type="username">
                        </div>
                        <div class="col-12 col-md-2">
                            <select id="leadType" class="custom-select" name="region" required>
                                <option value="eu">Europe</option>
                                <option value="na">North America</option>
                                <option value="kr">Korea</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-4">
                            <button class="btn btn-block btn-lg btn-primary" type="submit" onclick="createOverwatchURL()">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function createOverwatchURL() {
            var x = document.getElementById("search-form");
            var username = x.elements[0].value;
            var region = x.elements[1].value;

            //If the Username Contains a hash change it to a dash
            username = username.replace("#", "-");

            window.location.href = '/user/' + region + '/' + username + '/';
        }
    </script>
</header>
</body>
</html>