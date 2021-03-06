<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">

        <title>Home | Regi</title>
        <link rel="stylesheet" href="css/screen.css">

        <!-- Google WebFonts -->
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
    </head>
    <body class="magic-container">
        <header>
            <nav>
                <a class="home" href="/">Home</a>
                <a class="signup" href="signup.php">Signup</a>
                <div class="search">
                    <form action="" method="GET">
                        <input type="text" name="searchq" placeholder="User name">
                        <input type="submit" value="Search">
                    </form>
                </div>
            </nav>
            <h1><span>GAPLabs</span>WebCamp Registration</h1>
            <h2>Welcome to WebCamp</h2>
        </header>
        <div class="main"  role="main">
            <ul class="user-list">
                <?php foreach ($users as $user) :?>
                <li>
                    <div class="user-photo">
                        <img width="150" height="150" src="/images/<?php echo $user['photo'];?>" alt="No Photo">
                    </div>
                    <div class="user-details">
                        <p class="name">
                            <?php echo $user['real_name']; ?>
                            <em><?php echo $user['display_name']; ?></em>
                        </p>
                        <p class="email">
                            <strong>Email:</strong> <?php echo $user['email']; ?>
                        </p>
                        <p class="location">
                            <strong>Location:</strong> <?php echo $user['location']; ?>
                        </p>
                        <p class="birthdate">
                            <strong>Age:</strong> <?php echo !empty ($user['date_of_birth'])? $dts->computeAge(new DateTime($user['date_of_birth'])): ''; ?>
                        </p>
                        <p class="bio">
                            <strong>Bio:</strong> <?php echo $user['bio']; ?>
                        </p>
                    </div>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
    </body>
</html>