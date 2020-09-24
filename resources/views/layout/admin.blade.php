<html style="height: auto;" lang="en">
    <head>
        <title>Sistema admin</title>
        <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('adminlte/plugins/sweetalert2/sweetalert2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('adminlte/plugins/toastr/toastr.min.css') }}">
        <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="sidebar-mini layout-navbar-fixed" data-gr-c-s-loaded="true" style="height: auto;">

    <div class="wrapper">
        @include('layout._navAdmin')        
        @include('layout._asideAdmin')

        <!-- TODO: adicionar msg erro -->

        <div class="content-wrapper" style="min-height: 120.5px;">    
            @yield('conteudo')
        </div>
        
    </div>
    <!-- wrapper -->

    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js') }}"></script>
    <script type="text/javascript">var jarray =<?php echo json_encode($dados); ?>;</script>
    <script src="{{ asset('js/myChart.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
    </body>
</html>