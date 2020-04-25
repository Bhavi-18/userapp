<head>
    <link rel="icon" type="image/png"  href="/images/fevicon2.png" >
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TEST USER APP</title>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    
    <link href="{{URL::asset('/dashstyle/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('/dashstyle/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{URL::asset('/dashstyle/css/animate.css')}}" rel="stylesheet">
    <link href="{{URL::asset('/dashstyle/css/style.css')}}" rel="stylesheet">

</head>

