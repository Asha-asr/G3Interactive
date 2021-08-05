<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
      // This index file is used only to redirect to the app
      window.location.href="{{ url('view-job') }}";
   </script>
    @include('layouts.header')
</head>
<body>
<div class="col-md-3">
    @include('layouts.sidenav')
</div>
<footer class="row">
        @include('layouts.footer')
   </footer>
</body>
</html>










