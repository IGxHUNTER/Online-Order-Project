<?php include('partials/menu.php')?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add admin</h1>

        <br></br>

        <form action=""method="POST">

            <table class="tbl-30">

                <tr>
                    <td>Full Name: </td>
                    <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
                </tr>

                <tr>
                    <td>Username: </td>
                    <td><input type="text" name="username" placeholder="Your Username"></td>
                </tr>
                
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="password" placeholder="Your Password"></td>
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

<?php include('partials/footer.php')?>


<?php
    //Process the value from Form and Save it in Database

    //Check whether the submit button is clicked or not

    if(isset($_POST['submit']))
    {
        // Button Clicked
        //echo "Button Clicked";

        //1.Get the Data from form 
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);//Passsword Encryption with MD5

        //2.SQL Query to Save the data into database
        $sql = "INSERT INTO tbl_admin SET
            full_name = '$full_name';
            username = '$username';
            password = '$password'; 
        ";
        
        //3. Execting Query and Saving Data into Database
        $res = mysqli_query($conn,$sql);


        //4. Check whether the (Query is Executed) data is inserted or not and display appropriate message
        if($res==false)
        {
            echo "Failed to Insert Data :" . mysqli_error($conn);
        }
        else
        {
            if(stripos(trim($sql),"SELECT") === 0)
            {
                echo "Select query executed successfully.";
            }
            else
            {
                echo "Data Inserted/Updated/Deleted Successfully.";
            }
        }
    }
    
?>