<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>    
<link rel="stylesheet" href="{{URL::to('')}}/public/admin/assets/css/bootstrap.css">
<link rel="stylesheet" href="{{URL::to('')}}/public/admin/assets/vendors/chartjs/Chart.min.css">
<link rel="stylesheet" href="{{URL::to('')}}/public/admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
<link rel="stylesheet" href="{{URL::to('')}}/public/admin/assets/css/app.css">
<link rel="shortcut icon" href="{{URL::to('')}}/public/admin/assets/images/favicon.svg" type="image/x-icon">
</head>
@include('user.header')

@yield('content')

@include('user.footer')

<script src="{{URL::to('')}}/public/admin/assets/js/feather-icons/feather.min.js"></script>
<script src="{{URL::to('')}}/public/admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="{{URL::to('')}}/public/admin/assets/js/app.js"></script>              
<script src="{{URL::to('')}}/public/admin/assets/vendors/chartjs/Chart.min.js"></script>
<script src="{{URL::to('')}}/public/admin/assets/vendors/apexcharts/apexcharts.min.js"></script>
<script src="{{URL::to('')}}/public/admin/assets/js/pages/dashboard.js"></script>          
<script src="{{URL::to('')}}/public/admin/assets/js/main.js"></script>
</body>
</html>