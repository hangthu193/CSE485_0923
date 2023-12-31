<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"  href="{{asset('/css/bootstrap.min.css')}}">
    <title>@yield('title')</title>
</head>
<body>


@yield('main-content')

@yield('sub-content')


<script src="{{asset('/js/bootstrap.buddle.js')}}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var closeButton = document.querySelector('.btn-close');
        var toast = document.querySelector('.toast');

        closeButton.addEventListener('click', function () {
            toast.classList.add('d-none');
        });
    });
</script>
</body>
</html>