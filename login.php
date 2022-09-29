<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Login Page </title>
        <link rel="stylesheet" href="loginstyle.css">
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
                *{
                    font-family: 'Poppins', sans-serif;
                    padding:0;
                    margin:0;
                }
                *::before, *::after {
	                box-sizing: border-box;
                }
                body video{
                    position:absolute;
                    top:0;
                    left:0;
                    width:100%;
                    height:100%;
                    object-fit:cover;
                    opacity: 0.8;
                
                    /* background-image:url('backgroundlogin.jpg'); 
                    background-repeat:no repeat;
                    background-size:cover;
                    margin:0;
                    padding:0; */
                }

                .container{
                    
                    background-color:#191970; 
		            border-radius:30px ; 
		            /* border-radius: 2px 20px; */
		            width:35%;
		            height:62%;
                    top:20%;
                    left:33%; 
                    position: absolute;
                    border-style:inline; 
                    border-color:2px black;
                    text-align:center;
                    -webkit-box-align: center;
                    border: 2px solid;
                    box-shadow: 6px 4px 8px 4px;


                }
                .container h1{
                    font-size:40px;
                    text-align:center;
                    margin:10px 0;
                }
                .container p{
                    color:white;
                    font-size:15px;
                    margin:5px 0;
                    /* padding-bottom:15px; */
                    padding-top:10px;
                }
                .container input{
                    font-size:15px;
                    width:60%;
                    padding:10px 5px ;
                    border:0;
                    outline:none;
                    border-radius:2px;
                    text-align:center;
                }
                .submit{
                    text-align:center;
                    width:40%   
                }
                
                .submit:hover{
                    color:darkblue;
                }
                .logo{
                    display: block;
                    margin-left: auto;
                    margin-right: auto;
                    width: 90px;
                    padding-top:10px;
                    padding-bottom:20px;
                }
                .submit{
                    display: block;
                    margin-left: auto;
                    margin-right: auto;
    
                }
            </style>
    </head>

    <body >
    <video src="video2.mp4" muted loop autoplay></video>
        <div class="container">
            <img src="logo.png" class="logo">
            <!-- <h1>Login Form</h1><br> -->
                <form method="post">
                    <p>Username : </p>
                    <input type="text" name="username" placeholder="Enter username"></input>
                    <p>Password : </p>
                    <input type="password" name="password" placeholder="Enter password"></input><br><br>
                    <div class="submit">
                        <input type="submit" name="login" value="Login" class="submit"></input>
                    </div>
                </form>
        </div>

        <?php
			session_start();
			include "config.php";
			
			if(!empty($_SESSION['has_login'])){
				header("Location: devmain.php");
			}
			if(isset($_POST["login"])){
				$username = $_POST["username"];
				$password = $_POST["password"];
				

				$query = "SELECT username,adminpass
						FROM admin
						WHERE username = '$username'
						AND adminpass = '$password'";
				
				$sendsql = mysqli_query($connect, $query);
				$data = mysqli_fetch_array($sendsql);
				
				if(mysqli_num_rows($sendsql) != 0){
					header("Location: devmain.php");	
                    $_SESSION["username"] = $username;
				    $_SESSION["password"] = $password;
				}
				else{
					echo 
					"This username or password is incorrect";
				}
				
				
			}
		?>
    </body>
</html>