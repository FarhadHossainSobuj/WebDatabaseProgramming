<?php
    include("config.php");
    $userList = "SELECT * FROM users";
    $res = mysqli_query($myconn, $userList);
    if(mysqli_num_rows($res) > 0){
        while($row = mysqli_fetch_array($res)){
            $id = $row["id"];
            $name = $row["name"];
            $email = $row["email"];
            $role = $row["role"];
             echo "<tr>
                        <td>
                            $id
                        </td>
                        <td>
                            $name
                        </td>
                        <td>
                            $email
                        </td>
                        <td>
                            $role
                        </td>
                        </tr>";
        }
        echo "</table>";
        
        
        
        
    }  
                
                        

?>
