
<?php
echo "<fieldset>
        <legend>Please complete your information</legend>";
echo "<p><label for='in_Name'>Name:</label>"."<input type='text' id='in_Name' name='f_Name' value='$name' /></p>";
echo "<p><label for='in_Email'>Email:</label>"."<input type='email' id='in_Email' name='f_Email' value='$email'/></p>";
echo "<p><label for='in_Password'>Password:</label>"."<input type='password' id='in_Password' name='f_Password' value='$password' /></p>";
echo "<p><label for='in_Password'>Re-enter Password:</label>"."<input type='password' id='in_Password' name='f_Password2' value='$password' /></p>";
echo display_gender($gender);
echo "<p><label for='in_Name'>Phone:</label>"."<input type='tel' id='in_Phone' name='f_Phone' value='$phone' /></p>";
echo "<p><label for='in_Dob'>Date of birth:</label>"."<input type='date' id='in_Dob' name='f_Dob' value='$dob' /></p>";
echo "<p><label for='in_Prov'>Province:</label>"."<select id='in_Prov' name='f_Prov' >";
echo display_options($provinces);
echo "</select></p>";
echo "<p><input type='checkbox' id='in_Auth' name='f_Auth' value='Yes'/>"."<label for='in_Auth'>I agree to accept emails from company:</label></p>";
echo "</fieldset>";
echo "<p><input type='submit' value='Sign Up' name='f_Submit' /></p>";
echo "</form>";
?>