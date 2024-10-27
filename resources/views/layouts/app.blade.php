<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Enregistrez votre musique comme un pro dans notre studio d'enregistrement haut de gamme situé à Rabat. TigerProd offre une qualité sonore exceptionnelle et des services de production musicale pour tous vos projets." />
    <meta name="author" content="TigerProd" />
    <title>TigerProd - studio d'enregistrement à Rabat</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon"/>

    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/app.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body id="page-top">
    <main class="bg-gray-50">
        @yield('content')
    </main>

    <!-- Bootstrap core JS-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</body>

</html>

<script>
    $(document).ready(function() {
      setTimeout(function() {
        $('#videoModal').modal('show');
      }, 2000);
    });
  </script>
