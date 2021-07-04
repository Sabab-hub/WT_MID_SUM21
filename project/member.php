<!DOCTYPE html>
<html>
<head>
	<title>homepage</title>
</head>
<body>
	<form action="checkdonor.php" method="POST">
	<table border ='1' border="2" width="60%" >
			 <tr>	
				<td>

                 <a href="homepage.php"><img src="CLOUDFUNDING.PNG" alt="Logo"></a>



            </td>
       
            <td colspan='2'align="right">
			
                 <a href = "homepage.php" name="username" > </a>
            
        </td>
		</tr>
		
		<tr>		
			<td>
			<b>Donator</b>
			<hr>
				<ul>
				<a href="homepage.php"><li>Home Page</li></a>
                    <a href="profile.php"><li>View Profile</li></a>
                    <a href="edit_profile.php"><li>Edit Profile</li></a>
					<a href="check_data.php"><li>Check data</li></a>
					<a href="donor.php"><li>Donor</li></a>
					 <a href="idea.php"><li>Comsumer request</li></a>
					 <a href="member.php"><li>Membership</li></a>
					<a href="comment.php"><li>Comment</li></a>
					<a href="help_center.php"><li>Help Center</li></a>
					 <a href="security_system.php"><li>Security System</li></a>
					 <a href="login.php"><li>Logout</li></a>
				</ul>
			</td>
			<td width=80%>
        <table border="1" width=80% align="center">

        <tr>
            <th colspan="3">
                <h3 align="center">Membership form</h3>
            </th>
        </tr>
        <tr>
            <td>
                <p>Name</p>
            </td>
            <td><input type="text" name="Name" required></td>
            <td width = 40px></td>
        </tr>
        <tr>

        <td>
                <p>Email</p>
            </td>
            <td><input type="email" name="email" required>
			
			
            <td width = 40px></td>
        </tr>
        <tr>
         <td>
                <p>Gender</p>
           </td>
           <td>
               <input type="radio" name="gender"> Male
                <input type="radio" name="gender"> Female
                <input type="radio" name="gender"> Other

            </td>
            <td width = 40px></td>
        </tr>
        <tr>
            <td>
                <p>Date of Birth</p>
            </td>
            <td>

                <input type="date" size="1">
        </td>
        
           
        <td width = 40px></td>
        </tr>        
     
	<tr height = 40px>    
	<td colspan="3" align="right">    
		<input type="submit" value="Submit">
	</td>
            
	</tr>

	</table>
			
			
			
			</table>
				
    </form>		
</body>
</html
