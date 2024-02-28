<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title><?= $name ?> view</title>
    <link rel="stylesheet" href="/resources/main.css">
    <link rel="stylesheet" href="/resources/general.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/Main/index">Landing Page</a></li>
            <li><a href="/Main/about_us">About Us</a></li>
            <li><a href="/Contact/index">Contact Us</a></li>
            <li><a href="/Contact/read">See the messages we get</a></li>
        </ul>
    </nav>

    <h1>About Us</h1>
    <p>See our incredible team of devs</p>
    <div id="devs-pictures">
        <div class="picture-group">
            <img src="/resources/male_devs_image.jpg" alt="Loading...">
            <p>Bob loves making money on the stock market floor.</p>
        </div>
        <div class="picture-group">
            <img src="/resources/female_devs_image.jpg" alt="Loading...">
            <p>Amy keeps Johnny in check</p>
        </div>
    </div>

    <p id="numOfPageVisits">0 page visits.</p>
    
</body>
</html>

