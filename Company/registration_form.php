<?php
/**
 * Created by PhpStorm.
 * User: Godfrey
 * Date: 5/21/17
 * Time: 6:33 PM
 */
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
<div style="width: 80;padding: 10%; background-color: purple">
    <form name="registration_form" method="post">
        <div><h2><b>Registration Form</b></h2></div>
        <table style="width: 100%">
            <tr>
                <td>First Name</td>
                <td><input name="first_name"></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input name="last_name"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input name="age"></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><input name="email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
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
                    <select>
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
                    <select>
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
                    <select>
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
                <td style="align-items: center">Submit Button <input type="submit" value="Submit"></td>
            </tr>
            <tr style="align-items: center">
                <td></td>
                <td style="align-items: center">Reset Button <input type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>