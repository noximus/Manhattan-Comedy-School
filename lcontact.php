<HTML>
<HEAD>
<TITLE>Manhattan Comedy School </TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	scrollbar-arrow-color: #1e6084;
	scrollbar-3dlight-color: #686868;
	scrollbar-highlight-color: #EDEDED;
	scrollbar-face-color: #868686;
	scrollbar-shadow-color: #2F2E2E;
	scrollbar-darkshadow-color: #000000;
	scrollbar-track-color: #D4D4D4;
}
td {
	text-align: left;
	vertical-align: top;
	font-family:Tahoma;
	font-size:11px;
	color:3D3D3D;
}

60C6E4
a {
	text-decoration: none;
}
a.1 {
	text-decoration: none;

}
a.2 {
	text-decoration: none;
	color:60C6E4;
}

.t11 {
	font-family: Tahoma;
	font-size: 11px;
	font-style: normal;
}
.t10 {
	font-family: Tahoma;
	font-size: 10px;
	font-style: normal;
}
.v10 {
	font-family: Verdana;
	font-size: 10px;
	font-style: normal;
}

-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</HEAD>
<BODY   bgcolor="#000000" LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 style="overflow-x:hidden">
<center>
<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0 background="images/r1.jpg" >
	<TR>
	<td width="260" rowspan="100"></td>
		<TD width="20" ROWSPAN=11>
			<IMG SRC="images/1.jpg" WIDTH=20 HEIGHT=700 ALT=""></TD>
		
      <TD width="196" height="392" ROWSPAN=3><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="196" height="393">
          <param name="movie" value="Flash/0786.swf">
          <param name="quality" value="high">
      <embed src="Flash/0786.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="196" height="393"></embed></object></TD>
		
      <TD width="274" height="61" background="images/3.jpg">&nbsp;</TD>
      <TD COLSPAN=2 background="images/4.jpg" style="background-repeat:no-repeat;" ALT="">
		<div style="padding-top:2pt;padding-left:70pt">
		  
&nbsp; </div>
		<div style="padding-top:22pt;padding-left:47pt"><strong> <a href="register.html" class="1"><font color="60C6E4">Register</font></a> 
          <font color="60C6E4"> |</font> <a href="#" class="1"><font color="60C6E4">Get 
          Brochure</font></a> <font color="60C6E4">|</font> <a href="links.html" class="1"><font color="60C6E4">Links</font></a> </strong>
        </div>
	  </TD>
		<TD width="1">
			<IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=1 ALT=""></TD>
			<td background="images/r1.jpg" width="100%" rowspan="100">&nbsp; </td>
	</TR>
	<TR>
		
      <TD COLSPAN=3 rowspan="8" background="images/main.jpg" style=" background-repeat:no-repeat;" ALT=""><div style="margin:0px; padding-top:50px; padding-left:15px; padding-right:60px;">
       Do you love stand-up comedy and would like to save money when you go?

Simply give us your name and e-mail and we will alert you to shows where you can save money to see comics from HBO - Comedy Central, David Letterman.
We will never sell your information to anyone.
 
           <h3>Contact Form: </h3>
               
			   
			   <?php if(isset($_POST['submit'])) {
/* PRECONDITION:  the fields [name,  email]
 * from the corresponding contact.html form are passed into this script.
 * POSTCONDITION:  the fields are submitted via the SMTP server to the recipient.
 */
$recipient = "info@manhattancomedyschool.com";


$client = "From: " . $HTTP_POST_VARS['name'] . "<" . $HTTP_POST_VARS['eMail'] . ">";

// Concatenate all the fields from the corresponding contact.html form.
$message = "Name: " . $HTTP_POST_VARS['name'] . "\nPhone Number: " . $HTTP_POST_VARS['phone'] . "\nE-mail: " . $HTTP_POST_VARS['eMail'] . "\nGender: " . $HTTP_POST_VARS['gen'] . "\nAge: " . $HTTP_POST_VARS['age'];

// PHP mail function using the SMTP server 
// first parameter is the recipient, second parameter is the subject, followed by the body message, followed by who the mail is FROM (sender/client email).
mail("$recipient", "Manhattan Comedy School Contact: " . $HTTP_POST_VARS['name'], "$message", "$client") or die("Error sending e-mail!  Please try again."); 

echo "<div align=\"center\">
  <p><strong>Thank you for contacting us. You will recieve a reply soon.</strong></p>
  <p><strong><a href=\"contact.php\">Send Another Message</a></strong></p></div>";

} else {
?>
       
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="contact" onSubmit="MM_validateForm('name','','R','eMail','','RisEmail','phone','','NisNum');return document.MM_returnValue">
               <table width="410" border="0" cellpadding="2">
               <tr>
                 <td nowrap>
                   <div align="RIGHT">Name :&nbsp;</div></td>
                 <td nowrap><input name="name" type="TEXT" class="v10" style="width:150px; height:18px; background-color:#FFFFFF">
                 </td>
               </tr>
               <tr>
                 <td nowrap>
                   <div align="RIGHT">Email :&nbsp;</div></td>
                 <td nowrap><input name="eMail" type="TEXT" class="v10" style="width:150px; height:18px; background-color:#FFFFFF">
                 </td>
               </tr>
               <tr>
                 <td nowrap>
                   <div align="RIGHT">Gender :&nbsp;</div></td>
                 <td nowrap><input name="gen" type="RADIO" class="v10" value="m" checked>
                   Male&nbsp;&nbsp;&nbsp;
                   <input name="gen" type="RADIO" class="v10" value="f">
                   Female</td>
               </tr>
               <tr>
                 <td nowrap>
                   <div align="RIGHT">Age :&nbsp;</div></td>
                 <td nowrap><select name="age" class="v10">
                     <option selected value=""> (Select One) </option>
                     <option value="13 - 17"> 13 - 17 years old 
                     <option value="18 - 25"> 18 - 25 years old 
                     <option value="26 - 35"> 26 - 35 years old 
                     <option value="36 - 45"> 36 - 45 years old 
                     <option value="46 - 55"> 46 - 55 years old 
                     <option value="56 - 65"> 56 - 65 years old 
                     <option value="Over 65"> Over 65 years old 
                   </select>
                 </td>
               </tr>
               <tr>
                 <td nowrap>
                   <div align="RIGHT">Phone :&nbsp;</div></td>
                 <td nowrap><input name="phone" type="TEXT" class="v10" id="phone" style="width:150px; height:18px; background-color:#FFFFFF">
                 </td>
               </tr>
               <tr>
                 <td nowrap>&nbsp;</td>
                 <td nowrap>
                   <div align="LEFT">
                     <input name="submit" type="submit" id="submit" value="Submit">
                 </div></td>
               </tr>
             </table>
          </form>
        
          <?php
}
?><p>&nbsp;
          </p>
          <table width="410" border="0" cellspacing="0" cellpadding="5">
            <tr>
              <td>For More Information Call:</td>
              <td><p><font size="2">212-462-3200</font></p>
                <p><font size="2">212-774-4277</font></p>
              <p>or e-mail: <a href="mailto:info@manhattancomedyschool.com">info@manhattancomedyschool.com</a></p></td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </div></TD>
      <TD height="167">&nbsp;</TD>
	</TR>
	<TR>
		<TD height="165">&nbsp;</TD>
	</TR>
	<TR>
		<TD>
			<IMG SRC="images/16.jpg" WIDTH=196 HEIGHT=42 ALT=""></TD>
        <TD>
			<IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=1 ALT=""></TD>
	</TR>
	<TR>
		
      <TD WIDTH=196 HEIGHT=48 background="images/17.jpg" class="t11" ALT=""> 
	  <div style="padding-top:3pt;padding-left:20pt">
	  <strong><font color="000000">Enter 
        your friends email</font></strong></div> 
		<div style="padding-top:3pt;padding-left:25pt">
		<input type="text" style="width:100px;height:18px;	background-color: ffffff;">
          &nbsp;<a href="#"><img src="images/go.jpg" border="0" align="absmiddle"></a> 
		</div>
		
	  </TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=1 ALT=""></TD>
	</TR>
	<TR>
		<TD>
			<IMG SRC="images/18.jpg" WIDTH=196 HEIGHT=35 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=35 ALT=""></TD>
	</TR>
	<TR>
		
      <TD background="images/19.jpg" WIDTH=196 HEIGHT=37 ALT="">
	  <div style="padding-top:3pt;padding-left:20pt">
	   <strong><font color="000000">Logos and Press kits
        </font></strong></div>
      </TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=37 ALT=""></TD>
	</TR>
	<TR>
		<TD>
			<IMG SRC="images/20.jpg" WIDTH=196 HEIGHT=34 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=34 ALT=""></TD>
	</TR>
	<TR>
		
      <TD ROWSPAN=3 background="images/21.jpg" WIDTH=196 HEIGHT=111 ALT=""> <div style="padding-top:3pt;padding-left:10pt"> 
        <strong><font color="000000">Is there a class you would like to take that we don't offer?</font></strong> 
		  <div style="padding-top:3pt"> <a href="#"><font color="000000">Subscribe 
            now >></font></a> <a href="#"><br>
            <font color="000000">Register</font><font color="000000">>></font></a> 
          </div>
	  </div></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=60 ALT=""></TD>
	</TR>
	<TR>
		
      <TD COLSPAN=3 background="images/14.jpg" style=" background-repeat:no-repeat;" HEIGHT=34 ALT=""> <div style="padding-top:5pt;padding-left:20pt"> <strong><font color="60C6E4"><a href="index.html" class="2">Home</a> &nbsp; | &nbsp;<a href="testim.html" class="2">Testimonials</a>&nbsp; | &nbsp;<a href="faq.html" class="2">FAQ</a>&nbsp; | &nbsp;<a href="faculty.html" class="2">Faculty</a>&nbsp; |&nbsp; <a href="schedule.html" class="2">Schedule</a>&nbsp; | &nbsp;<a href="register.html" class="2">Register</a>&nbsp; | &nbsp;<a href="press.html" class="2">Press</a>&nbsp; | &nbsp;<a href="contact.php" class="2">Contact</a></font></strong></div></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=34 ALT=""></TD>
	</TR>
	<TR>
		
      <TD COLSPAN=3 background="images/15.jpg" HEIGHT=17 ALT="">
	  <div style="padding-top:1pt;padding-left:30pt">
	   <font color="286576">Copyright &nbsp;
        &copy; 2003 &nbsp;Manhattan Comedy School &nbsp; All rights reserved</font> 
		</div>
	  </TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=17 ALT=""></TD>
	</TR>
	<TR>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=20 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=196 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=271 HEIGHT=1 ALT=""></TD>
		<TD width="95">
			<IMG SRC="images/spacer.gif" WIDTH=92 HEIGHT=1 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=221 HEIGHT=1 ALT=""></TD>
		<TD>&nbsp;</TD>
	</TR>
</TABLE>
</center>
<map name="Map2">
  <area shape="rect" coords="21,37,135,53" href="#">
  <area shape="rect" coords="24,57,138,72" href="#">
  <area shape="rect" coords="24,75,140,87" href="#">
  <area shape="rect" coords="21,93,145,105" href="#">
  <area shape="rect" coords="25,112,151,123" href="#">
  <area shape="rect" coords="27,129,155,143" href="#">
  <area shape="rect" coords="28,149,157,159" href="#">
</map>
<map name="Map3">
  <area shape="rect" coords="24,34,158,47" href="#">
  <area shape="rect" coords="23,54,162,67" href="#">
  <area shape="rect" coords="26,71,164,84" href="#">
  <area shape="rect" coords="25,90,168,100" href="#">
  <area shape="rect" coords="25,107,168,120" href="#">
  <area shape="rect" coords="28,124,167,138" href="#">
</map>
</BODY>
</HTML>