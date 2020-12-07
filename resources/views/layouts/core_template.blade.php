<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                @yield('body_contents')
            </div>
        </div>
        <footer class="fixed-bottom text-center bg-light py-2">
            <span>Student Management System</span>
            <a href="https://github.com/ratish/com_student_mgmt"><i class="fab fa-github fa-lg"></i></a>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://kit.fontawesome.com/4eac349b56.js" crossorigin="anonymous"></script>
    <script src="{{ url('js/app.js') }}"></script>
</body>

</html>