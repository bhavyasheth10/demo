<!DOCTYPE html>
<html>
<head>
   <style>
   a:hover {
   cursor: pointer;
   background-color: yellow;
}
</style>
   <title>Live Search using AJAX</title>
   <!-- Including jQuery is required. -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
   <!-- Including our scripting file. -->
   <script type="text/javascript" src="script.js"></script>
   <!-- Including CSS file. -->
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- Search box. -->
   <input type="text" id="search" placeholder="Search" />
  <!--  <br>
   <b>Ex: </b><i>David, Ricky, Ronaldo, Messi, Watson, Robot</i>
   <br /> -->
   <!-- Suggestions will be displayed in below div. -->
   <div id="display"></div>
</body>
</html>