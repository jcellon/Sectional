<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <script>
            function ConfirmDelete()
            {
                var x = confirm("Are you sure you want to delete?");
                if (x)
                return true;
                else
                return false;
            }          
        </script>

        <title>{{config('app.name', 'INTERIOR')}}</title>

    </head>
    <body>
        
        <div class="container">                  

            <div class="jumbotron">      
                @include ('include.navbar')           
                <br/>  
                @include ('include.messages') 
                @yield('content')
            </div>
            <hr>
            <h6 style="text-align: right;" class="display-6 fst-italic">Developed by: <span style="color: teal">Joseph Castellon</span></h6>
        </div>
    </body>
</html>
