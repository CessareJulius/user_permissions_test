<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title', 'User Permissions | Test')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('admin_template/bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin_template/dist/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('admin_template/dist/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin_template/dist/css/AdminLTE.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('admin_template/dist/css/skins/_all-skins.min.css') }}">

  @stack('css')
</head>