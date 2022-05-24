<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Delete the case</title>
  <link rel="stylesheet" media="screen" href="login.css">
</head>


<body>
  <table align='center' border='1' bgcolor='green' width='0' cellpadding='8' cellspacing='0' height='200'>
    <tr>
      <td align="center"><a href="adminpanel.php" target="_parent">Panel Admin <b>|</b></a>
        <a href="viewcase.php" target="_parent">View Case<b>|</b></a>
        <a href="index.php" target="_parent">Log out</a>
      </td>

    </tr>
    <tr>
      <td colspan="3" bgcolor='grey' valign='center'>

        <?php
        ob_start();
        $link = mysqli_connect("localhost", "prison", "prison123.", "prison_system");
        $result = mysqli_query($link, "SELECT * from court");
        ?>


        <?php

        //To delete:
        if (isset($_POST["delete"])) {
          $id = $_POST["id"];
          $delete = mysqli_query($link, "DELETE from court where id='$_POST[id]'");
          if ($delete) {
            print "<script language=\"javascript\">
	alert(\"Successfully deleted!...\")
	location.href=\"deletecase.php\"
	</script>";
          } else {
            print "<script language=\"javascript\">
	alert(\"Not deleted!...\")
	location.href=\"deletecase.php\"
	</script>";
          }
        }
        ?>



        <?php

        print "<table width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><b>DELETE COURT RECORD</b></caption>
<tr bgcolor='green'>
<th width='3%'>National id</th>
<th width='5%'>File Number</th>
<th width='10%'>Date of Trial</th>
<th width='10%'>Sentence</th>
<th width='7%'>Location</th>



</tr>";
        $i = 1;
        while ($row = mysqli_fetch_array($result)) {
          print "<form method=POST>";
          print "<tr bgcolor='white'>
<td>$i<input type=\"hidden\" name=\"id\" value=\"$row[id]\"></td>
<td>$row[File_number]</td>
<td>$row[Dateoftrial]</td>
<td>$row[Sentence]</td>
<td>$row[Location]</td>
<td width='10%' align='center'><input type=submit name=delete value=delete></td>
</tr>";
          print "</form>";
          $i++;
        }
        print "</table>";
        ?>

        <br />

      </td>
    </tr>

    <tr>
      <td colspan='3' align='center' bgcolor='silver' height='1'><?php
                                                                  include("footer.php");
                                                                  ?>
      </td>
    </tr>
  </table>
</body>
</head>

</html>