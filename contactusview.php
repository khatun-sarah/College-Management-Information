<?php
require('template/header.php');
echo
"
<table align=\"center\">
<tr>
<td>
<div id=\"aboutus\"><br/>
<center><h2 style=\"font-family:Arial, Helvetica, sans-serif,bold; font-size:24px;color:#ffffff;\">Customer Data</h2></center><br/>
<table align=\"center\" style=\"border:3px solid #cde;\">
<tbody>
<tr style=\"background-color:RGB(79,91,99);color:#FF9900;font-family:Verdana,bold;\">
<th width=\"150\" height=\"30\">NAME</th>
<th width=\"150\" height=\"30\">MOBILE</th>
<th width=\"150\" height=\"30\">EMAIL</th>
<th width=\"250\" height=\"30\">MESSAGE</th>
<th width=\"150\" height=\"30\">ACTION</th>
</tr>
";
$conn=mysqli_connect("localhost","root","","mci");
$sql=mysqli_query($conn,"select * from `contactus`");
while(list($p,$a,$b,$c,$d)=mysqli_fetch_row($sql))
{
if(isset($_COOKIE['shib']))
{
echo 
"
<tr style=\"background-color:RGB(79,91,99);color:#FFFFFF;font-family:Verdana,bold;\">
<td align=\"center\" height=\"55\">$a</td>
<td align=\"center\" height=\"55\">$b</td>
<td align=\"center\" height=\"55\">$c</td>
<td align=\"center\" height=\"55\">$d</td>
<td align=\"center\" height=\"55\"><a href=\"delete1.php?de=$p\" style=\"text-decoration:none;color:#FFFFFF;\">Delete</a></td>
</tr>
";
}
}
echo
"
</tbody>
</table>
<br/>
<a href=\"profile.php\" style=\"margin-left:811px;\"><img src=\"template/images/back.png\"></a>
</div>
</td>
</tr>
</table>
";
require('template/footer.php');
?>