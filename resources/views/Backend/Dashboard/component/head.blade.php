<base href="{{ env('APP_URL')}}">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{csrf_token()}}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Trang Quản Trị</title>
<link href="backend/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="backend/font-awesome/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<!-- Toastr style -->
<link href="backend/css/plugins/toastr/toastr.min.css" rel="stylesheet">
<!-- Gritter -->
<link href="backend/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
<link href="backend/css/animate.css" rel="stylesheet">

@if(isset($config['css']) && is_array($config['css']))
@foreach ($config['css'] as $key => $val)
    {!! '<link rel="stylesheet" href="'.$val.'"></link>'!!}
@endforeach
@endif
<link href="backend/css/style.css" rel="stylesheet">
<link href="backend/customize.css" rel="stylesheet">
<script src="backend/js/jquery-3.1.1.min.js"></script>


