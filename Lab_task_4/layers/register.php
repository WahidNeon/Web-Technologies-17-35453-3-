<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <section style="border: 1px solid black">
        <table width="100%">
            <thead>
                <tr>
                    <th><h1 style="text-align: left;">X-Company</h1></th>
                    <th >
                        <ul style="display: flex; list-style: none; text-align: right; justify-content: flex-end;">
                            <li><a style="text-align: right;" href="home.php">Home</a></li>
                            <li style="border-left: 2px solid green; height: 20px; margin: 0px 5px;"></li>
                            <li><a style="text-align: right;" href="login.php">Login</a></li>
                            <li style="border-left: 2px solid green; height: 20px; margin: 0px 5px;"></li>
                            <li><a style="text-align: right;" href="register.php">Register</a></li>
                        </ul>
                    </th>
                </tr>
            </thead>
        </table>
    </section>

    <section style="border: 1px solid black">
        <fieldset>
            <legend><h1>Registration Form</h1></legend>
            <form action="../control/regValidation.php" method="post">
                <table>
                    <tr>
                        <td> Full Name : </td>
                        <td><input type="text" name="name">
                    </tr>

                    <tr>
                        <td> Username : </td>
                        <td><input  type="text" name="username">
                    </tr>

                    <tr>
                    <td> Email :  </td>
                    <td><input type="text" name="email"> 
                    </tr>

                    <tr>
                        <td>Password :  </td>
                        <td><input type="password" name="password">
                    </tr>

                    <tr>
                        <td> Retype Password :  </td>
                        <td><input type="password" name="retype">
                    </tr>

                    <tr>
                        <td> Gender : </td>
                        <td>
                        <input type="radio" name="gender" value="Male"> Male
                        <input type="radio" name="gender" value="Female"> Female
                        <input type="radio"  name="gender" value="Other"> Other <br>
                        </td>
                    </tr>

                    <tr>
                        <td>Date Of Birth</td>
                        <td>
                            <input type="text" name="day" placeholder="dd">/
                            <input type="text" name="month" placeholder="mm">/
                            <input type="text" name="year" placeholder="year">
                        </td>
                    </tr>

                    <tr>
                        <td> 
                            <input type="submit" name="submit" value="Submit"> 
                            <input type="reset" name="Reset">
                        </td>
                        <td>
                            <a href="index.php">HOME</a>
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </section>

    <section style="border: 1px solid black">
        <table width="100%">
            <tr>
                <p style="text-align: center;">Copy right</p>
            </tr>
        </table>
    </section>
</body>
</html>