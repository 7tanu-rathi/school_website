<!DOCTYPE html>
 <html lang="en" class="no-js"> 
    <head>
    <title>Login</title>
        <meta charset="UTF-8" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />

    </head>
    <body>
    
        <div class="container">
            <!-- Codrops top bar -->
            
            <header>
				<nav class="codrops-demos">
				</nav>
            </header>

            <section>				
                <div id="container_demo" >
                    
                    <div id="wrapper">

                        <div id="login" class="animate form">
                           <form  action="user.php" method="post" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <?php if($_GET['msg']=="1"){ ?>
                                <p> <label for="username" class="uname" style="color:red">Username or Password not match</label></p>
                                <?php }?>
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>