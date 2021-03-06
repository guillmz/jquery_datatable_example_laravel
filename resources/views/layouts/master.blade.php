<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel DataTables Tutorial</title>

        <!-- Bootstrap CSS -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            body {
                padding-top: 40px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>



        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <script>
            $(function() {
                $('#users-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('getusers') !!}',
                    columns: [
                        { data: 'id', name: 'id' },
                        { data: 'name', name: 'name' },
                        { data: 'email', name: 'email' },
                        { data: 'created_at', name: 'created_at' },
                        { data: 'updated_at', name: 'updated_at' },
                        { data: 'action', name: 'action', orderable: false, searchable: false}
                    ]
                });
            });
        </script>
        <script>
            $(function() {
                $('#example').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('gettable') !!}',
                    columns: [
                        { data: 'id', name: 'id' },
                        { data: 'name', name: 'name' },
                        { data: 'position', name: 'position' },
                        { data: 'office', name: 'office' },
                        { data: 'age', name: 'age' },
                        { data: 'start_date', name: 'start_date' },
                        { data: 'salary', name: 'salary' },
                    ]
                });
            });
        </script>

    </body>
</html>