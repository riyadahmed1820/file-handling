
<html>

<head>
    <title> Registertion-form</title>
</head>

<body>
 <?php
if(isset($_POST["set"]))
{
    $Firstname=$_POST["firstname"];
    $Lastname=$_POST["lastname"];
    $Gender=$_POST["gen"];
    $Username=$_POST["uname"];
    $Password=$_POST["pwd"];
    $Email=$_POST["email"];
    $RecoveryEmailAddress=$_POST["rmail"];

    if(empty($Firstname) or empty($Lastname) or empty($Gender) or
    empty($Username) or empty($Password) or empty($Email) or empty($RecoveryEmailAddress) )
    {
       echo "Please empty details <br>";
    }
   
    
}
?>
    <form action="file handling.php" method ="POST">
        <h1 style="text-align: center;">Registertion-form</h1>

        <fieldset>
            <legend>Basic Information:</legend>
            <table>
                <tr>
                    <td>
                        Firstname
                    </td>
                    <td>
                        <input type="text" name="firstname">
                    </td>
                </tr>
                <tr>
                    <td>
                        Lastname
                    </td>
                    <td>
                        <input type="text" name="lastname">
                    </td>
                </tr>

                <tr>
                    <td>
                        Gender
                    </td>
                    <td>
                        <input type="radio" name="gen">Male
                        <input type="radio" name="gen">Female
                    </td>
                </tr>

            

            </table>
        </fieldset>

        <fieldset>
            <legend>User Account Information:</legend>
            <table>
                    <td>
                        Username 
                    </td>
                    <td>
                        <input type="text" name="uname">
                    </td>
                </tr>

                <tr>
                    <td>
                        Password :
                    </td>
                    <td>
                        <input type="password " name="pwd">
                    </td>
                </tr>

                <tr>
                    <td>
                        Email
                    </td>
                    <td>
                        <input type="email " name="email">
                    </td>
                </tr>

                <tr>
                    <td>
                        RecoveryEmailAddress
                    </td>
                    <td>
                        <input type="email " name="rmail">
                    </td>
                </tr>

                
            </table>
        </fieldset>
        </table>
        </fieldset>

        <input  type="submit" name="set" value="submit">
        

    </form>
</body>

</html>