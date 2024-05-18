<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animations.css">  
    <link rel="stylesheet" href="css/main.css">  
    <link rel="stylesheet" href="css/signup.css">
        
    <title>Create Account</title>
    <style>
        .container{
            animation: transitionIn-X 0.5s;
        }
    </style>
</head>
<body>



    <center>
    <div class="container">
        <table border="0" style="width: 58%;">
            <tr>
                <td colspan="2">
                    <p class="header-text">Create New Account</p>
                </td>
            </tr>
            <tr>
            <form id="create-account" action="" method="POST" onsubmit="return validateForm()">

                <td class="label-td" colspan="2">
                    <label for="newemail" class="form-label">Email </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="email" name="newemail" id="newemail"  class="input-text"  placeholder="Email Address" required>
                </td>
                
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for="tele" class="form-label">Mobile Number </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="tel" name="tele"  id="tele" class="input-text"  placeholder="ex: 0712345678" pattern="[0]{1}[0-9]{9}" >
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for="newpassword" class="form-label">Create New Password</label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="password" name="newpassword" id="newpassword" class="input-text" placeholder="New Password" required>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for="cpassword" class="form-label">Conform Password </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="password" name="cpassword" id="cpassword"  class="input-text" placeholder="Conform Password" required>
                </td>
            </tr>
     
            <tr>
              
            </tr>
            
            <tr>
                <td>
                    <input type="reset" value="Reset" class="login-btn btn-primary-soft btn" >
                </td>
                <td>
                    <input type="submit" value="Sign Up" class="login-btn btn-primary btn">
                </td>

            </tr>
            <tr>
                <td colspan="2">
                    <br>
                    <label for="" class="sub-text" style="font-weight: 280;">Already have an account&#63; </label>
                    <a href="login.php" class="hover-link1 non-style-link">Login</a>
                    <br><br><br>
                </td>
            </tr>

                    </form>
            </tr>
        </table>

    </div>
</center>
<script src="sweetalert.js"></script>
<script src="./createac_script.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>