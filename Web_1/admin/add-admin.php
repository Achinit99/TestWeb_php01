<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1><br><br>

        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td>
                        <input type="text" name="full_name" placeholder="Enter Your Name">
                    </td>
                </tr>

                <tr>
                    <td>Username:</td>
                    <td>
                        <input type="text" name="username" placeholder="Enter Your User Name">
                    </td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" name="password" placeholder="Enter Your Password">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>

            </table>
        </form>

    </div>
</div>

<?php include('partials/footer.php'); ?>

<?php
//$connection =mysqli_connect('localhost','root','','food_order');

//if(mysqli_connect_errno())
//{
 //   die ('Database connection fail');
//}else
//{
 //    echo "Connection success";
//}



// Process the Value from Form and Save it in Database

// Check whether the submit button is clicked or not

if(isset($_POST['submit']))
{
        // 1.Get the Data from form
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']); //Password Encryption with MD5


        // 2.SQL Query to Save the data into database
        $sql = "INSERT INTO tbl_admin SET
            full_name = '$full_name',
            username = '$username',
            password = '$password'
            ";


        // 3.Execute Query and Save Data in Database
        $connection =mysqli_connect('localhost','root','','food_order'); //Database connection

        // $res = mysqli_query($conn, $sql) or die(mysqli_error());
}


?>