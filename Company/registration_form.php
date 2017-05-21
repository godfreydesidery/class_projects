<?php
/**
 * Created by PhpStorm.
 * User: Godfrey
 * Date: 5/21/17
 * Time: 6:33 PM
 */
$first_name="";
$last_name="";
$age="";
$email="";
$password="";
$gender="";
$birth_day="";
$birth_month="";
$birth_year="";
$first_name_error="";
$last_name_error="";
$age_error="";
$email_error="";
$password_error="";
$gender_error="";
$birth_day_error="";
$birth_month_error="";
$birth_year_error="";
$records_complete=true;
if(isset($_POST["submit"])){


    if($_POST['submit']){
        $records_complete=true;
        if(empty($_POST["first_name"])){
            $first_name_error="First name required";
            $records_complete=false;
        }else{
            $first_name=$_POST["first_name"];
        }
        if(empty($_POST["last_name"])){
            $last_name_error="Last name required";
            $records_complete=false;
        }else{
            $last_name=$_POST["last_name"];
        }
        if(empty($_POST["age"])){
            $age_error="Age required";
            $records_complete=false;
        }else{
            $age=$_POST["age"];
        }
        if(empty($_POST["email"])){
            $email_error="Email required";
            $records_complete=false;
        }else{
            $email=$_POST["email"];
        }
        if(empty($_POST["password"])){
            $password_error="Password required";
            $records_complete=false;
        }else{
            $password=$_POST["password"];
        }
        if(empty($_POST["gender"])){
            $gender_error="Select gender";
            //$records_complete=false;
        }else{
            $gender=$_POST["gender"];
        }
        if(empty($_POST["birth_day"])){
            $birth_day_error="Birth day required";
            //$records_complete=false;
        }else{
            $birth_day=$_POST["birth_day"];
        }
        if(empty($_POST["birth_month"])){
            $birth_month_error="Birth month required";
            //$records_complete=false;
        }else{
            $birth_month=$_POST["birth_month"];
        }
        if(empty($_POST["birth_year"])){
            $birth_year_error="Birth year required";
            //$records_complete=false;
        }else{
            $birth_year=$_POST["birth_year"];
        }

    }
}
if(isset($_POST['submit'])&&$records_complete==true){
    header("Location:registered.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
<div style="width: 80;padding: 10%; background-color: purple">
    <form name="registration_form" method="post" action="">
        <div><h2><b>Registration Form</b></h2></div>
        <table style="width: 100%">
            <tr>
                <td>First Name</td>
                <td><input name="first_name" value="<?php if($first_name_error==""){echo($first_name);}?>" placeholder="<?php echo($first_name_error);?>"></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input name="last_name" value="<?php if($last_name_error==""){echo($last_name);}?>" placeholder="<?php echo($last_name_error);?>"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input name="age" value="<?php if($age_error==""){echo($age);}?>" placeholder="<?php echo($age_error);?>"></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><input name="email" value="<?php if($email_error==""){echo($email);}?>" placeholder="<?php echo($email_error);?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value="<?php if($password_error==""){echo($password);}?>" placeholder="<?php echo($password_error);?>"></td>
            </tr>
            <tr>
                <td>SEX::</td>
                <td><input type="radio" name="gender" value="Male">Male<input type="radio" name="gender" value="Female">Female</td>

                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>
Birthday:
                </td>
            </tr>
            <tr>
                <td>Day
                    <select name="day">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                    </select>
                </td>
                <td>Month
                    <select name="month">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>
                </td>
                <td>Year
                    <select name="year">
                        <option>1990</option>
                        <option>1991</option>
                        <option>1992</option>
                        <option>1993</option>
                        <option>1994</option>
                        <option>1995</option>
                        <option>1996</option>
                        <option>1997</option>
                        <option>1998</option>
                        <option>1999</option>
                        <option>2000</option>

                    </select>
                </td>
            </tr>
            <tr style="align-items: center">
                <td></td>
                <td style="align-items: center">Submit Button <input name="submit" type="submit" value="Submit"></td>
            </tr>
            <tr style="align-items: center">
                <td></td>
                <td style="align-items: center">Reset Button <input name="reset" type="reset" value="Reset"></td>
            </tr>
            <tr style="align-items: center">
                <td></td>
                <td style="align-items: center">
                    <?php
                    if($records_complete==false){
                        echo("Some fields are missing");
                    }
                    ?>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>