<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In and Registration</title>
</head>
<body>
    <?php
    $con = mysqli_connect("localhost","your_localhost_database_user","your_localhost_database_password","your_localhost_database_db");

    // if (isset($_POST["submit"])) {
    //     $name = $_POST["name"];
    //     $surname = $_POST["surname"];
    //     $username = $_POST["username"];
    //     $password = $_POST["password"];
    //     $repeat_password = $_POST["repeat_password"];
    //     $birthdate = $_POST["birthdate"];
    //     $address = $_POST["address"];
    //     $contact_number = $_POST["contact_number"];

    //     $errors = array();
    //     if (empty($name) OR empty($surname) OR empty($username) or
    //     empty($password) or empty($repeat_password) or empty($birthdate) 
    //     or empty($address) or empty($contact_number)) {
    //         array_push($errors, "All fields are required");
    //     }
    // }
    ?>
    <form action="index.php" method="post">
        <label>First Name</label><br>
        <input type="text" name="firstname" placeholder="First Name"><br>

        <label>Surname</label><br>
        <input type="text" name="surname" placeholder="Surname"><br>

        <label>Username</label><br>
        <input type="text" name="username" placeholder="Username"><br>

        <label>Contact Number</label><br>
        <input type="text" name="contact_number" placeholder="Contact Number"><br>

        <label>Email</label><br>
        <input type="text" name="email" placeholder="Email"><br>

        <label>Password</label><br>
        <input type="password" name="password" placeholder="Passworn"><br>

        <label>Repeat Password</label><br>
        <input type="password" name="repeat_password" placeholder="Repeat Password"><br>

        <label>Birthdate</label><br>
        <input type="date" name="birthday"><br>

        <label>Address</label><br>
        <input type="text" name="address"><br>

        <input type="submit" value="Register">
    </form>
    
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>


    <!-- $username = $_POST["username"];
    $password = $_POST["password"];

    echo $_GET["username"] . "<br>";
    echo $_GET["password"] . "<br>"; -->
