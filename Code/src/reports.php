#!/usr/local/bin/php5
<?php
include("Connection.php");
$username=$_COOKIE["username"];
$usertype=$_COOKIE["usertype"];
if ($username==null || $usertype !='analyst')
{echo "<script language=javascript>window.location = 'index.php';</script>";exit;}
$query="SELECT * FROM Collection_Period c, Person p, Evaluation e, Subject s WHERE c.evalutationID = e.evaluationID AND p.personID = s.personID AND p.uname = '". $username ."' ORDER BY c.start DESC";
//$result = executeQuery($query);
?>

<html>
<head>
<script>
function change(i) {
	if(i == "...Select...") {
document.getElementById("comments").disabled="enabled";
		document.getElementById("comments").value='Please select subject.';
document.getElementById("comments").disabled="disabled";
		return;
	}
	sid = i.split("-");
       show(sid[1]);
}


function show(str)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }

xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
document.getElementById("comments").disabled="enable";
    document.getElementById("comments").value=xmlhttp.responseText;
document.getElementById("comments").disabled="disable";
    }
  }
xmlhttp.open("GET","ajaxpatrecord.php?subid="+str,true);
xmlhttp.send();
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>DBMS Spring 2011 Project</title>
<meta name="description" content="Medical website">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
<tr>
<td height="1" background="images/bg_1.jpg"><table height="60"  border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="15"><img src="images/spacer.gif" width="15" height="1"></td>
<td width="37"><img src="images/logo.jpg" width="37" height="59"></td>
<td width="6"><img src="images/spacer.gif" width="6" height="1"></td>
<td class="logo">DBMS Spring 2011 Project</td>
<td class="logo"><img src="images/spacer.gif" width="30" height="1"></td>
<td><img src="images/im_3.jpg" width="256" height="59"></td>
</tr>
<tr bgcolor="#FFFFFF">
<td height="1" colspan="6"><img src="images/spacer.gif" width="1" height="1"></td>
</tr>
</table></td>
</tr>
<tr>
<td height="100%" valign="top"><table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="207" height="100%" valign="top"><table width="100%"  border="0" cellpadding="0" cellspacing="0">
<tr>
<td height="143"><img src="images/im_1.jpg" width="207" height="143">
</td>
</tr>
<tr>
<td height="1"></td>
</tr>
<tr>
<td height="84" background="images/bg_2.jpg"><img src="images/spacer.gif" width="1" height="84"></td>
</tr>
<tr>
<td height="195" align="right"><img src="images/im_2.jpg" width="185" height="195"></td>
</tr>
</table></td>
<td height="100%" valign="top"><table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
<tr>
<td height="2" bgcolor="#A9ABB1"><img src="images/spacer.gif" width="1" height="2"></td>
</tr>
<tr>
<td height="43" background="images/bg_4.jpg"><table height="43"  border="0" cellpadding="0" cellspacing="0">
<tr>
<td height="6" colspan="20"><img src="images/spacer.gif" width="1" height="6"></td>
</tr>
<tr>
<td width="9"><img src="images/spacer.gif" width="9" height="1"></td>
<td width="17"><img src="images/btn_l.jpg" width="17" height="31"></td>
<td align="center" valign="middle" background="images/btn_bg.jpg"><a href="index.php" class="menu">HOME</a></td>
<td width="17"><img src="images/btn_r.jpg" width="17" height="31"></td>
<td width="1"><img src="images/spacer.gif" width="1" height="1"></td>
<td width="17"><img src="images/btn_l.jpg" width="17" height="31"></td>
<td align="center" valign="middle" background="images/btn_bg.jpg"><a href="documents.html" class="menu">DOCUMENTS</a></td>
<td width="17"><img src="images/btn_r.jpg" width="17" height="31"></td>
<td width="1"><img src="images/spacer.gif" width="1" height="1"></td>
<td width="17"><img src="images/btn_l.jpg" width="17" height="31"></td>
<td align="center" valign="middle" background="images/btn_bg.jpg"><a href="developers.php" class="menu">DEVELOPERS</a></td>
<td width="17"><img src="images/btn_r.jpg" width="17" height="31"></td>
<td width="1"><img src="images/spacer.gif" width="1" height="1"></td>
<td width="17"><img src="images/btn_l.jpg" width="17" height="31"></td>
<td align="center" valign="middle" background="images/btn_bg.jpg"><a href="cisepage.php" class="menu">UFL CISE</a></td>
<td width="17"><img src="images/btn_r.jpg" width="17" height="31"></td>

</tr>
<tr>
<td height="6" colspan="20"><img src="images/spacer.gif" width="1" height="6"></td>
</tr>
</table></td>
</tr>
<tr>
<td height="2" bgcolor="#BFC0C4"><img src="images/spacer.gif" width="1" height="2"></td>
</tr>
<tr>
<td height="44" background="images/bg_5.jpg"><table width="100%" height="44"  border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="18"><img src="images/spacer.gif" width="18" height="1"></td>
<td>
      <p></p></td>
</tr>
</table><div align="right"><a href="./logout.php">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
</td>
</tr>
<tr>
<td height="1" background="images/bg_dotted.jpg"><img src="images/spacer.gif" width="1" height="1"></td>
</tr>
<tr>
<td valign="top" bgcolor="#D5D6D9"><table class="tdbgx" width="100%" height="181"  border="0" cellpadding="0" cellspacing="0" background="images/bg_6.jpg">
<tr>
<td height="16" colspan="3"><img src="images/spacer.gif" width="1" height="16"></td>
</tr>
<tr>
<td width="21"><img src="images/spacer.gif" width="21" height="1"></td>
<td valign="top">
<h1 style="color: #0479B0"><p>Subject: <b><?php echo $username; ?></b>
</p>
<p>Reports:</h1><p><p>
<div >
<ul>
<li><a href="report1a.php">Report - Behavior for a subject per Collection Period</a>
<li><a href="report2a.php">Report - Average duration of behaviors per Collection Period</a>
</ul>
</div>
<br>
<INPUT type="button" value="Back" name="btnBack" style="font-size: 10px;background: #D5D6D9" onClick="window.location='analyst.php'">
</td>
<td width="42"><img src="images/spacer.gif" width="42" height="1"></td>
</tr>
<tr>
<td height="5" colspan="3"><img src="images/spacer.gif" width="1" height="5"></td>
</tr>
</table></td>
</tr>
<tr>
<td height="1"><img src="images/spacer.gif" width="1" height="1"></td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
<tr>
<td height="1" background="images/bg_3.jpg"><table width="100%" height="74"  border="0" cellpadding="0" cellspacing="0">
<tr>
</tr>
</table></td>
</tr>
</table>

</body>
</html>
</html>
