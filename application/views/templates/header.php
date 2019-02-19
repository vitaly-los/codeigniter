<html lang="en">
<head>
    <title>CodeIgniter Tutorial</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="<?php echo base_url('/'); ?>">Blog</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarColor01" style="">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url('/'); ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('about'); ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('posts'); ?>">Blog</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">