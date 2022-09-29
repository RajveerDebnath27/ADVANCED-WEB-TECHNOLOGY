<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APWT_TASK_1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin: 20px;">
        @include('inc.header')
        <h2></h2>
        <div>
           @yield('content') 
        </div>
    </div>
</body>
</html>