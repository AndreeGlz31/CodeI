<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="/assets/bootstrap.min.js"></script>
    <script src="/assets/bootstrap-table.js"></script>
    <link href="/assets/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/assets/bootstrap-table.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" 
    integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" 
    crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" 
    integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" 
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>BlazeDemo</title>
    </style>
</head>
<body>
    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn navbar" 
                data-toggle="collapse"
                data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a href="index.php" class="navbar-brand">Travel The World</a>
            <a href="login.php" class="navbar-brand">Home</a>
            </div>
        </div>
    </div> 
    <h1>Welcome to the Simple Travel Agency</h1>
    <h3>The is a Sample site you can test with BlazeMeter!</h3>
    <h3>Check out our destination <a href="Vacaciones.php"> destination of the week! The Beach!</a></h3>
    <h1></h1>
	
    <h1> Choose your depature city:</h1>
    <select name="depature" id="">
        <option value="Paris">Paris</option>
        <option value="Philadelphia">Philadelphia</option>
        <option value="Boston">Boston</option>
        <option value="portland">Portland</option>
        <option value="San Diego">San Diego</option>
        <option value="Mexico City">Mexico Citi</option>
        <option value="Sao Paolo">Sao Paolo</option>
    </select>
    <h1>Choose your destination city:</h1>
    <select name="Dest" id="">
        <option value="Buenos Aires">Buenos Aires</option>
        <option value="Rome">Rome</option>
        <option value="London">London</option>
        <option value="Berlin">Berlin</option>
        <option value="New York">New York</option>
        <option value="Dublin">Dublin</option>
        <option value="Cairo">Cairo</option>
    </select>
	<p></p>
   
            <input type="submit" class="btn btn-primary" value="Find Flights"/>
        
</body>
</html>