<html>

<head>

    <head>

        <link href="style1.css" rel="stylesheet" type="text/css" />
        <script src="jquery-1.7.1.min.js"></script>
        <script src="registration_script.js"></script>
        <link rel="stylesheet" media="screen" href="login.css">
    </head>

<body>


    <table align="center" border="0" bgcolor="white" width="400" cellpadding="9" cellspacing="0" height="525">
        <tr>
            <td colspan="2" height="2"><img src="../banner.gif" width="860"></td>
        </tr>
        <tr>
            <td colspan="3" bgcolor="#FF0000" height="1" align="center">
                <font size="4">
                    <a href="adminpanel.php">HOME</a> |
                </font>
            </td>
        </tr>
        <tr>
            <td width="25%" bgcolor="#FFFFFF">&nbsp;&nbsp;
            <td width="50%" align="center" bgcolor="white">

                <div id="content" class="ctrdiv">
                    <form id="frmReg" method="POST" action="validateofficer.php">
                        <h2 id="hdr_title">Officer Registration Form </h2>
                        <div class="control_input">
                            <label for="id" class="label">Natioanal Id</label><input type="text" id="id" name="id" size=14 maxlength=8 class="reg_fields" placeholder="12345678" />
                        </div>
                        <div class="control_input">
                            <label for="fullname" class="label">Full Name</label>
                            <input type="text" id="fullname" name="fullname" class="reg_fields" placeholder="John otieno" />
                        </div>
                        <div class="control_input">
                            <label for="address" class="label">Address</label>
                            <input type="text" id="address" name="address" class="reg_fields" placeholder="langata" />
                        </div>


                        <div class="control_input">
                            <div style="display: inline-block;">
                                <table>
                                    <tr>
                                        <td>
                                            <label for="dateofbirth" class="label">Date of birth</label>
                                        </td>
                                        <td style="margin: 0; padding: 0;">
                                            <input type="date" />
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="control_input">
                            <div style="display: inline-block;">
                                <table>
                                    <td>
                                        <label for="gender" class="label">Gender</label>
                                    </td>
                                    <td style="margin: 0; padding: 0;">
                                        <select id="gender" name="gender" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;">
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </td>
                                </table>
                            </div class="control_input">

                            <div class="control_input">
                                <label for="uemail" class="label">Telephone No.</label>
                                <input type="text" id="telephone" name="telephone" size=11 maxlength=11 class="reg_fields" placeholder="074565558" class="reg_fields" />
                            </div>



                            <div class="control_input">
                                <div style="display: inline-block;">
                                    <table>
                                        <td>
                                            <label for="campus" class="label">Education Background</label>
                                        </td>
                                        <td style="margin: 0; padding: 0;">
                                            <select id="education" name="education" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;  display:block;">
                                                <option>KCSE</option>
                                                <option>Certificate</option>
                                                <option>Diploma</option>
                                                <option>Bsc/B.A</option>
                                                <option>Master</option>
                                                <option>PHD</option>
                                            </select>
                                        </td>
                                    </table>
                                </div class="control_input">

                                <div class="control_input">
                                    <div style="display: inline-block;">
                                        <table>
                                            <td>
                                                <label for="campus" class="label">Years of experience</label>
                                            </td>
                                            <td style="margin: 0; padding: 0;">
                                                <select id="exp" name="exp" class="reg_fields" style="margin: 0 0 0 -5px; height: 36px;">
                                                    <option>1-6 months</option>
                                                    <option>1-2years</option>
                                                    <option>3-4years</option>
                                                    <option>5-7years</option>
                                                    <option>7-above</option>
                                                </select>
                                            </td>
                                        </table>
                                    </div class="control_input">



                                    <div class="control_input">
                                        <input type="submit" name="signup" id="signup" value="Submit" title="" border="0">
                                    </div class="control_input">

                                    <div id="validation_msg">
                                    </div>
                    </form>
            </td>
        </tr>
        <tr>
            <?php
            include("Footer.php");
            ?>
        </tr>
    </table>
</body>

</html>