<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Voo | Home</title>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
     
    <link href="Content/style.css" rel="stylesheet" type="text/css" />
    <link href="Content/plugins/jQueryUI/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" type="text/css" />
    <link href="Content/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="Content/animate.css" rel="stylesheet" type="text/css" />
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="Content/plugins/dataTables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="Content/plugins/jqGrid/ui.jqgrid.css" rel="stylesheet" type="text/css" />
    <link href="Content/plugins/footable/footable.core.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="wrapper" class="_Layout" style="background-color: #2f4050;">

        <!-- Navigation -->
        @include("Home/_Navigation")

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Top Navbar -->
            @include("Home/_TopNavbar")

            <!-- Main view  -->
            @@conteudo

            <!-- Footer -->
            @include("Home/_Footer")

        </div>
        <!-- Right Sidebar -->
        @include("Home/_RightSidebar")
    </div>
    
    <script src="Scripts/jquery-2.1.1.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
    <script src="Scripts/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="Scripts/plugins/metisMenu/metisMenu.min.js"></script>
    <script src="Scripts/plugins/pace/pace.min.js"></script>
    <script src="Scripts/app/inspinia.js"></script>

    <script src="Scripts/plugins/footable/footable.all.min.js"></script>

    <script>
        $(document).ready(function () {

            $('.footable').footable();
        });
    </script>
</body>
</html>
