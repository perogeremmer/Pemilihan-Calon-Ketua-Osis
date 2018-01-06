<!DOCTYPE html>
<html lang="en">
<head>
@include('kaleya/layouts/head')

</head>
<body class="hold-transition- skin-black sidebar-mini ">
<div class="wrapper">
@include('kaleya.includes.messages')
@include('kaleya/layouts/header')
    @section('main-content')
        @show
@include('kaleya/layouts/sidebar')
@include('kaleya/layouts/footer')
</div>
</body>
</html>