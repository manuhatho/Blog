<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="connexion.css">
    <title>Crossing Rivers Blog - Connexion</title>
</head>
<body>

    <main>
        <div class="main-content">

            

            <div class="left-box">
                <div class="logo">
                    <img src="logo.png" alt="">
                </div>
                <div class="content">
                    <div class="text">
                        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente perspiciatis possimus ex assumenda accusamus voluptates labore recusandae corporis officiis eius.</h2>
                    </div>
                    <div class="author">
                        <p>Dominique T.Outouen</p>
                    </div>
                </div>

            </div>
            <div class="right-box">

                <div class="logo">
                    <img src="logo.png" alt="">
                </div>

                <form class="register" action="register.php" method="POST">
                    <h2>Create an account</h2>
                    <div class="input-field">
                        <input class="add-focus" id="username" name="username" type="text" required>
                        <label for="username">Name</label>
                    </div>
                    <div class="input-field">
                        <input class="add-focus" id="email" name="email" type="email" required>
                        <label for="username">Email</label>
                    </div>
                    <div class="input-field">
                        <input class="add-focus" id="password" name="password" type="password" required>
                        <label for="username">Password</label>
                    </div>
                    <div class="input-field2">
                        <input class="add-focus" id="privacy" name="privacy" type="checkbox" required>
                        <label for="">I accept the <a href="">Privacy Policy</a></label>
                    </div>

                    <button>Create an Account</button>

                    <div class="login">
                        <p>Already have an account?
                            <a id="register_login" >
                                <img src="enter.png" alt=""> log In 
                            </a>
                        </p>
                    </div>
                    

                </form>
                <form class="register connexion" action="login.php" method="POST" >
                    <h2>Log In</h2>
        
                    <div class="input-field">
                        <input class="add-focus" id="email" name="email" type="email" required>
                        <label for="username">Email</label>
                    </div>
                    <div class="input-field">
                        <input class="add-focus" id="password" name="password" type="password" required>
                        <label for="username">Password</label>
                    </div>
                    <div class="input-field2">
                        <a style="text-decoration: underline;" href="">Forgot password</a>
                    </div>

                    <button>Log In</button>

                    <div class="login">
                        <p>Don't have an account?
                            <a id="register_login">
                                <img src="enter.png" alt=""> Register
                            </a>
                        </p>
                    </div>
                    

                </form>
              
            </div>
          
        </div>
    </main>
    <script src="connexion_page.js"></script>
</body>
</html>