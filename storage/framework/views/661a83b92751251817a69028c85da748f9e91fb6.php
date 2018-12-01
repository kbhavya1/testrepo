<!--<html>
<head>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/home.js')); ?>"></script>
    <style>
        body{
            margin: 0;
            padding: 0;
        }

        th{
            font-weight:bold;
            padding:10px 10px;
            background:#555;
            color:#fff;
            text-align:left;
        }
        element.style{
            vertical-align:middle;
        }
        td,th{
            display:table-cell;

        }
        table{
            margin:0 0 1.5em;
            border:1px solid #ddd;
            border-right:None;
            background:#fff;
            border-collapse:separate;
            border-spacing:0;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand text-white" href="#"><img src="<?php echo e(asset('images/logo.jpg')); ?>" alt="ieee" style="height: 5vh;width: 15vh;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <div style="width: 10vh;background-color: cornflowerblue; margin: 0;">
                    <a class="nav-link text-white" href="#">Home<span class="sr-only">(current)</span></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Authors
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo e(asset('/cfp')); ?>">Call for papers</a>
                        <a class="dropdown-item" href="<?php echo e(asset('/papersub')); ?>">Paper Submission guideline</a>
                        <a class="dropdown-item" href="<?php echo e(asset('/finalpaper')); ?>">Final paper guideline</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="<?php echo e(asset('/orgcomm')); ?>" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Comittee
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo e(asset('/orgcomm')); ?>">Organising Committe</a>
                        <a class="dropdown-item" href="<?php echo e(asset('/techcomm')); ?>">Technical Program Committee</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo e(asset('/ses')); ?>">Special Sessions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Speakers</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo e(asset('/symp')); ?>">Symposiums</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo e(asset('/venue')); ?>">Venue</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Registrations</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Contact</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>


<div class="container-fluid">
    <div class="row">
        <img src="<?php echo e(asset('images/cmrimage.jpg')); ?>" alt="cmrImage" class="img-fluid col-md-12">
    </div>
</div>


<footer class="py-5 bg-dark">
<div class="container">
    <p>Enter your Content here</p>
</div>
</footer>
</body>
</html> -->

<html>
<head>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/home.js')); ?>"></script>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        #tojustify{
            text-align: justify;
            text-justify: inter-word;
        }




    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand text-white" href="#"><img src="<?php echo e(asset('images/logo.jpg')); ?>" alt="ieee" style="height: 5vh;width: 15vh;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">

                        <a class="nav-link text-white" href="<?php echo e(asset('/home')); ?>">Home<span class="sr-only">(current)</span></a>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Authors
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo e(asset('/cfp')); ?>">Call for papers</a>
                        <a class="dropdown-item" href="<?php echo e(asset('/papersub')); ?>">Paper Submission guideline</a>
                        <a class="dropdown-item" href="<?php echo e(asset('/finalpaper')); ?>">Final paper guideline</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Comittee
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo e(asset('/orgcomm')); ?>">Organising Committe</a>
                        <a class="dropdown-item" href="<?php echo e(asset('/techcomm')); ?>">Technical Program Committee</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo e(asset('/ses')); ?>">Special Sessions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo e(asset('/speaker')); ?>">Speakers</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo e(asset('/symp')); ?>">Symposiums</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo e(asset('/venue')); ?>">Venue</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo e(asset('/regdetail')); ?>">Registrations</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container-fluid">
    <div class="row">
        <img src="<?php echo e(asset('images/cmrimage.jpg')); ?>" alt="cmrImage" class="img-fluid col-md-12">
    </div>
</div>
</div>

<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->yieldContent('formreg'); ?>
<?php echo $__env->yieldContent('final'); ?>
<?php echo $__env->yieldContent('callforpaper'); ?>
<?php echo $__env->yieldContent('sessions'); ?>
<?php echo $__env->yieldContent('symposiums'); ?>
<?php echo $__env->yieldContent('venue'); ?>
<?php echo $__env->yieldContent('orgcommitee'); ?>
<?php echo $__env->yieldContent('techcommitee'); ?>
<?php echo $__env->yieldContent('papersubmission'); ?>
<?php echo $__env->yieldContent('finalpaperguide'); ?>
<?php echo $__env->yieldContent('regdetails'); ?>

<footer class="py-5 bg-dark">
    <div class="container">
        <p style="float: left;" class="text-white">


            Copyright © 2017, CMR Jnanadhara Trust. All Rights Reserved.
        </p>
    </div>
</footer>
</body>
</html>