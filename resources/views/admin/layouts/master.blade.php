<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <link rel="stylesheet" type="text/css" href="../styles/style.css"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('styles/D-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/fixed.css') }}">
    <style>
        .message {
            position: absolute;
            right: 5;
            bottom: 5;
            z-index: 4;
            width: fit-content;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,600;1,700&display=swap" rel="stylesheet">

    <title>Dashboard</title>

    <link rel="stylesheet" type="text/css" href="{{asset('slick/slick.css')}}" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
</head>

<body>
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        @include('admin.layouts.sidebar')
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            @include('admin.layouts.navbar')
            <div class="container-fluid">

                <div class="container">
                    @yield('content')

                </div>
            </div>



        </div>
        <!-- /#page-content-wrapper -->
        @if ($errors->any())
        <div class="message alert-danger">
            <ul>
                @yield('error')
            </ul>
        </div>
        @endif
    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->

    <script src="bootstrap/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });



        // $(document).ready(function(){
        //   $("#toggle-eventsHead").click(function(){
        //     $("#toggle-events").show();
        //   });
        //   $("#toggle-eventsHead").click(function(){
        //     $("#toggle-events").hide();
        //   });
        // });

        $('#toggle-eventsHead').hover(function() {
            $('#toggle-events').stop(true, true).delay(100).fadeIn(500);
        }, function() {
            $('#toggle-events').stop(true, true).delay(100).fadeOut(500);
        });

        $('#toggle-formHead').hover(function() {
            $('#toggle-form').stop(true, true).delay(100).fadeIn(500);
        }, function() {
            $('#toggle-form').stop(true, true).delay(100).fadeOut(500);
        });

        $('#toggle-teammembersHead').hover(function() {
            $('#toggle-teammembers').stop(true, true).delay(100).fadeIn(500);
        }, function() {
            $('#toggle-teammembers').stop(true, true).delay(100).fadeOut(500);
        });
    </script>

</body>

</html>