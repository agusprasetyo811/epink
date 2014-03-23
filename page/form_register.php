<script language="javascript">
function cekpassword(){
	if (document.reg.password1.value != document.reg.password2.value){
		alert("password yang anda masukan tidak sama");
	} else if(document.reg.id.value=="" || document.reg.password1.value==""||document.reg.password2.value=="" ){
		alert("Field Masih kosong");
	} else {
		window.location.href="proses/register.php";
	}
}
</script>
<form action="proses/register.php" method="post" name="reg">
<div id="form-Pf">
<h1>Form Register</h1><hr />
<table border="0">
<tr>
<td width="250">ID User :</td><td> <input type="text" name="id" class="text"/></td>
</tr>
<tr>
<td>Full Name :</td><td> <input type="text" name="nama" class="text"/></td>
</tr>
<tr>
<td>Password :</td><td> <input type="password" name="password1" class="text"/></td>
</tr>
<tr>
<td>Confirm Password :</td><td> <input type="password" name="password2" class="text"/></td>
</tr>
<tr height="50">
<td align="right" colspan="2"><input type="submit" value="Register"> <input type="reset" value="Reset"/> </td>
</tr>
</table>
</div>
</form>