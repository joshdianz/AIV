<?php
   class AppLogic{ //blue print of your program
    function serverCon(){
        global $link;
        $lhost = "localhost";
        $user = "root";
        $pass = "";
        $dbase = "customer_login";
        
        //Declare a connection string
        $link = mysqli_connect($lhost, $user, $pass) or die("Failed to connect to server");
        
        //Select our dbase
        mysqli_select_db($link, $dbase) or die("Dbase not found");   
    }
    function AddUser($username, $password, $email, $dob, $email){
        $obj = new AppLogic();
        $obj->serverCon();
        global $link;
        
        //Declaring a query statement to insert a record 
        $queryAddUser = "insert into userinfo(Email, Username, Surname, Password, Email) values('".$username."', '".$password."', '".$email."', '".$dob."', '".$surname."')";
        
        //Execute our query
        mysqli_query($link, $queryAddUser);
    }
    
    function DeleteUser($email){
        $obj = new AppLogic();
        $obj->serverCon();
        global $link;
        
        $queryDelete = "delete from userinfo where Email = '".$email."'";
        mysqli_query($link, $queryDelete);
        ?>
            <script>
                alert("Record has been successfully deleted");
            </script>
        <?php
    }
}

?>