<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title><?= $name ?> view</title>
    <link rel="stylesheet" href="/resources/contact.css">
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

    <h1>Contact us</h1>
    <p>Wanna reach us? Write your email information and message in the following form and then submit.</p>

    <form action="/Contact/submit" method="POST">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="myMessage">Message:</label>
            <textarea name="myMessage" id="myMessage" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <button id="send_Btn" type="submit">Send!</button>
        </div>
    </form>

    <script src="/resources/count.js">
        <div id="numOfPageVisits">0 page visits.</div>
    </script>
    
</body>
</html>

