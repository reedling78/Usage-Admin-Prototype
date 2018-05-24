<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <style>
        .header-space {
            margin-bottom: 30px;
        }

        .page-header {
            padding-left: 20px;
            padding-bottom: 10px;
        }
    </style>

</head>
<body>

    

    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark header-space">
        <a class="navbar-brand" href="#">Usage Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/default.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/reports.php">Report</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Admin
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="/lookuptable.php">Look up Tables</a>
                <a class="dropdown-item" href="/fontusage.php">Font Usage</a>
                <a class="dropdown-item" href="/fontnamed.php">Font Named</a>
                <a class="dropdown-item" href="/customercontract.php">Customer Contract</a>
                </div>
            </li>
            </ul>
        </div>
        </nav>