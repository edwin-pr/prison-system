<html>

<head>
  <title>PRISONNER CASE </title>
  <link rel="stylesheet" media="screen" href="login.css">
</head>

<body>
  <table align='center' border='1' bgcolor='green' width='800' cellpadding='8' cellspacing='0' height='200'>
    <tr>
      <td align="center"><a href="adminpanel.php" target="_parent">Panel Admin <b>|</b></a>
        <a href="witness.php">Witnesses <b>|</b></a>
        <a href="../index.php" target="_parent">Log out</a>
      </td>

    </tr>
    <tr>
      <td bgcolor='#999999' valign='center'>

        <?php

        $host = "localhost";
        $username = "prison";
        $password = "prison123.";
        $db_name = "prison_system";
        $tbl_name = "court";

        $con = mysqli_connect($host, $username, $password, $db_name);
        mysqli_select_db($con, "$db_name") or die("cannot connect");

        $sel = mysqli_query($con, "SELECT * from $tbl_name ORDER BY Dateoftrial DESC ");
        $records = mySQLi_num_rows($sel);

        echo "<table align='center' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='green'>
<caption><h3>COURT INFORMATION</h3>
<i>$records records</i>
</caption>
<tr bgcolor='green'>
<th width='3%'>National id</th>
<th width='10%'>Fie Number</th>
<th width='10%'>Judge</th>
<th width='10%'>Date of trial</th>
<th width='15%'>Sentence</th>
<th width='10%'>Location</th>
</tr>";

        while ($row = mysqli_fetch_array($sel)) {
          echo "<tr bgcolor='grey'>";

          echo  "<td width='3%'>" . $row['id'] . "</td>";
          echo  "<td width='7%'>" . $row['File_number'] . "</td>";
          echo  "<td width='7%'>" . $row['judge'] . "</td>";
          echo  "<td width='10%'>" . $row['Dateoftrial'] . "</td>";
          echo  "<td width='10%'>" . $row['Sentence'] . "</td>";
          echo  "<td width='10%'>" . $row['Location'] . "</td>";

          echo '<td width="3%"><b><a href="deletecase.php?id=' . $row['id'] . '">Delete</a></font></b></td>';


          echo "</tr>";
        }
        echo "</table>";

        ?>

        <br />
      </td>

    </tr>

    <tr>
      <td align='center' bgcolor='white' height='1'><?php
                                                    include("footer.php");
                                                    ?>
      </td>
    </tr>
  </table>
</body>

</html>