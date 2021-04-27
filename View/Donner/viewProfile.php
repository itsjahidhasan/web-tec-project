<?php
    
    require_once('../../Model/Donner/donnerModel.php');
    session_start();
    $userName = $_SESSION['username'];
    $user = getUserByUsername($userName); 


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FundBD | Profile</title>
  <link rel="shortcut icon" href="../../assets/icon.png">
</head>
<body>
  <!-- ...............................Header Start....................... -->
  
    <fieldset>
      <table align="center">
        <tr>
          <td>
            <img src="../../assets/imgpsh_fullsize.png" alt="" srcset=""width="200" height="80">
          </td>
          
        </tr>
      </table>
      <table align="center">
        <tr>
          <td>
            <a href="./donnerDashboard.html">Dashboard</a>&nbsp;
           
            <a href="./donnerNotification.html">Notification</a>&nbsp;
            
          </td>
        </tr>
      </table>
      <table align="right">
        <tr>
            <td>
              <a href="../../controller/logout.php">Logout</a>
            </td>
        </tr>

    </table>

    </fieldset>
    <!-- .................................Header Close..................... -->


    

    <!-- .................................Main Content..................... -->
    <fieldset>
      <table align="center" width="1000">
        <tr>
          <td>
            <h3>Account</h3>
            <hr>
            <ul>
            <li><a href="./donnerDashboard.html">Dashboard</a></li>
              <li><a href="./viewProfile.php">View profile</a></li>
              <li><a href="./donnerUpdateProfile.html">Update Profile</a></li>
              <li><a href="./donnerChangeProfilePic.html">Change Profile Picture</a></li>
              <li><a href="./donnerChangePassword.html">Change Password</a></li>
              <li><a href="./donnerDonateMoney.html">Donate Money</a></li>
              <li><a href="./searchApplicantList.html">Search Applicant List</a></li>
              <li><a href="./searchForDonnationList.html">Search Donnation List</a></li>
              <li><a href="./donnerDeleteAccount.html">Delete Account</a></li>
              <li><a href="./rechargeMoneyFromBankAccount.html">Recharge money from bank account</a></li>
              <li><a href="./donnerNoticeBoard.php">See Notice</a></li>
              <li><a href="./sendMessageToAdmin.">Send message to ADMIN</a></li>
            </ul>
          </td>
          <td>
            <fieldset>
              <legend>Profile</legend>
              <img src="../../assets/user.png" alt="" width="100" height="100"><br>
              <a href="donnerChangeProfilePic.html">Change Profile pic</a>
              <table>
                <tr>
                <td>Name &nbsp;&nbsp;</td>
                  <td>:<?php echo $user[0]['name'];?></td>
                </tr>
              </table>
              <hr>
              <table>
                <tr>
                <td>Email &nbsp;&nbsp;</td>
                  <td>:<?php echo $user[0]['email'];?></td>
                </tr>
              </table>
              <hr>
              <table>
                <tr>
                <td>Gender &nbsp;&nbsp;</td>
                  <td>:<?php echo $user[0]['gender'];?></td>
                </tr>
              </table>
              <hr>
              <table>
                <tr>
                <td>Date of Birth &nbsp;&nbsp;</td>
                  <td>:<?php echo $user[0]['dateOfBirth'];?></td>
                </tr>
              </table>
              <hr>
              <a href="./donnerUpdateProfile.html">Edit Profile</a><br><br>
            </fieldset>
          </td>
        </tr>
      </table>
    </fieldset>
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">copyright	&#169;2021</p>
    </fieldset>

    <!-- .................................Footer Close..................... -->
</body>
</html>

