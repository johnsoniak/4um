<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>{$engine->sitename} | {$engine->title}</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{$template}/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="{$template}/assets/modules/fontawesome/css/all.min.css">

  {if $user->admin}
  <!-- CSS Libraries For Logged Admin -->
  <link rel="stylesheet" href="{$template}/assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="{$template}/assets/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="{$template}/assets/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="{$template}/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="{$template}/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="{$template}/assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="{$template}/assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
  {/if}

  <!-- Template CSS -->
  <link rel="stylesheet" href="{$template}/assets/css/style.css">
  <link rel="stylesheet" href="{$template}/assets/css/components.css">
</head>

<body>