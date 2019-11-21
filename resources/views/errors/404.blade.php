<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing - Free Bulma template</title>
    <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.8.x-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.8.0/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/landing.css') }}">
</head>

<body>
    <section class="hero is-info is-fullheight">
        <div class="hero-head">
            <nav class="navbar is-black">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="../">
                            <h2 class="title is-4">Pendekar.</h2>
                        </a>
                        <span class="navbar-burger burger" data-target="navbarMenu">
                            <span></span>
                        <span></span>
                        <span></span>
                        </span>
                    </div>

                </div>
            </nav>
        </div>

        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-6 is-offset-3">
                    <h1 class="title">
                        404 Not Found
                    </h1>
                    <h2 class="subtitle">
                        Jika Kalian tidak sanggup menahan lelahnya belajar maka kalian harus sanggup menahan perihnya kebodohan seumur hidup
                    </h2>
                    <div class="box">
                        <div class="field is-grouped">
                            <a class="button is-fullwidth is-link" href="{{ route('home') }}">Ke Halaman Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <script async type="text/javascript" src="{{ asset('js/bulma.js') }}"></script>
</body>

</html>
