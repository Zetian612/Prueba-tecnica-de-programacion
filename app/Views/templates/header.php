<!doctype html>
<html lang="en">

<head>
  <title>App</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <nav class="nav justify-content-center  ">
      <a class="nav-link" href="/" aria-current="page">Home</a>
      <?php if (session()->get('isLoggedIn')) : ?>
        <a class="nav-link" href="/dashboard">Dashboard</a>
        <a class="nav-link" href="/logout">Logout</a>
        <?php else : ?>
            <a class="nav-link" href="/login">Login</a>
            <a class="nav-link" href="/register">Register</a>
        <?php endif; ?>
    </nav>
  </header>
  