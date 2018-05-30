<!DOCTYPE html>
<html>
  <head>
    <title>Scuffed Twitter</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <nav class='navbar navbar-expand-lg navbar-light bg-light'>
        <a class='navbar-brand' href='index.php'>Scuffed Twitter</a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
          <ul class='navbar-nav mr-auto'>
            <li class='nav-item'>
              <a class='nav-link' href='/'>Home</a>
            </li>
          </ul>
          <ul class='navbar-nav'>
            <li class='nav-item'>
              <?php renderLogButton(); ?>
            </li>
          </ul>
          <form action='profile' method='GET' class='form-inline my-2 my-lg-0'>
            <input class='form-control mr-sm-2' type='search' name='username' placeholder='Search' aria-label='Search'>
            <button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Search</button>
          </form>
        </div>
      </nav>
    </header>
    <main role="main" class="container">
      <?php renderContent() ?>
    </main>
    <footer class="footer">
      <div class="container">
        <span class="text-muted">Scuffed Twitter by Jeremy Bobbin.</span>
      </div>
    </footer>
  </body>
</html>
