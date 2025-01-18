<html>
    <head>
        <title>Swiftly Unhinged</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Italianno&family=Special+Elite&display=swap" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>

        <link rel="stylesheet" href="styles.css">
        <?php
            switch ($_POST["domain"]) {
                case "Unwrapped":
                    echo "<link rel='stylesheet' href='styles-unwrapped.css'>";
                    break;
                case "Unraveled":
                    echo "<link rel='stylesheet' href='styles-unraveled.css'>";
                    break;
                case "Unhinged":
                    echo "<link rel='stylesheet' href='styles-unhinged.css'>";
                    break;
                default:
                    echo "<link rel='stylesheet' href='styles.css'>";
            }
        ?>
    </head>
<body>
    <header class="header">
        <form action="index.php" method="POST">
            <lable class="label-domain">Domain:</lable>
            <select onchange="this.form.submit();" name="domain" id="domain">
                <option value="None">Select</option>
                <option value="Unwrapped">Unwrapped</option>
                <option value="Unraveled">Unraveled</option>
                <option value="Unhinged">Unhinged</option>
            </select>
        </form>
    </header>
    <center>
        <p>
            <?php
                switch ($_POST["domain"]) {
                    case "":
                        echo "Select a domain";
                        break;
                    default:
                        echo '<div class="logo1">Swiftly</div><div class="logo2">[</div><div class="logo3"><a href="https://swiftly'.$_POST["domain"].'.com">'.$_POST["domain"].'</a></div><div class="logo2">]</div>';
                }
            ?>
        </p>
    </center>
</body>
<footer class="footer">
        <div>
            <div class="ChildDiv">
                <a class="footer-link" href="https://swiftlyunhinged.com">HTML Page</a>
                </div>
            </div>
        <div>
            <a href="https://swiftlyunwrapped.com">Swiftly Unwrapped</a>, <a href="https://swiftlyunraveled.com">Swiftly Unraveled,</a>, and <a href="https://swiftlyunhinged.com">Swiftly Unhinged</a>, Established 2025
            </div>
</footer>
</html>