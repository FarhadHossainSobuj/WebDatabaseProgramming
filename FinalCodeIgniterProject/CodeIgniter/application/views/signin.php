    <center>
        
        <h1>Sign Up</h1> 
    </center>
     
  
    <?php  
  
//    echo form_open('Main/signin_validation');  
//  
//    echo validation_errors();  
//  
//    echo "<center>";
//    echo "<table width='50%'>";
//    echo "<tr>";
//    echo "<th>";
//    echo "<p>Username: ";  
//    echo "</th>";
//    echo "<td>";
//    echo form_input('username', $this->input->post('username'));  
//    echo "<td>";
//    echo "</tr>";
//  
//    echo "<tr>";
//    echo "<th>";
//    echo "<p>Password: "; 
//    echo "</th>"; 
//    echo "<td>";
//    echo form_password('password'); 
//    echo "</td>";
//    echo "</tr>";
//
//    echo "<tr>";
//    echo "<th>";
//    echo "<p>Confirm Password: "; 
//    echo "</th>"; 
//    echo "<td>";
//    echo form_password('cpassword'); 
//    echo "</td>";
//    echo "</tr>";
//
//    echo "<tr>";
//    echo "<td>";
//    echo "</td>";
//    echo "<td>";
//    echo form_submit('login_submit', 'Sign Up');  
//    echo "</td>"; 
//  
//  
//    echo form_close(); 
//    echo "</tr>";
//    
//    echo "</table>";
//    echo "</center>";
  
    ?> 
    
   <form action="<?php echo base_url()."index.php/Main/signup"; ?>" method="post" name="regForm">
      <div class="form-group">
        <label for="username">Name:</label>
        <input type="text" class="form-control" name="name" required>
      </div>
      <div class="form-group">
        <label for="username">Email:</label>
        <input type="email" class="form-control" name="email"  required>
      </div>
      <div class="form-group">
        <label for="username">Role:</label>
        <select class="form-control"  name="role" id="role">
            <option value="admin">Admin</option>
            <option value="student">Student</option>
            <option value="user">User</option>
        </select>
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" name="password" required>
      </div>
      <input type="submit" class="btn btn-default" value="Signup"/>
    </form>