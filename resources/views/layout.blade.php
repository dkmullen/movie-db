<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
  <link rel="stylesheet" href="/assets/styles.css">
  <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" /> -->
  <title>Document</title>
</head>
<body>
<div class="ui secondary pointing menu">
    <a class="{{ Request::path() === '/' ? 'item active' : 'item'}}" href="/">
      Home
    </a>
    <a class="{{ Request::path() === 'messages' ? 'item active' : 'item'}}" href="/messages">
      Messages
    </a>
    <a class="{{ Request::path() === 'friends' ? 'item active' : 'item'}}" href="/friends">
      Friends
    </a>
    <a class="{{ Request::path() === 'movies' ? 'item active' : 'item'}}" href="/movies">
      Movies
    </a>
    <div class="right menu">
      <a class="ui item">
        Logout
      </a>
    </div>
  </div>

  @yield ('content')
  
  <footer>
    <div class="footer-content">
      <a href="/">Home</a> | <a href="/messages">Messages</a> 
        | <a href="friends">Friends</a> | <a href="movies">Movies</a>
    </div>
  </footer>

</body>
</html>