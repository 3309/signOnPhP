

<!DOCTYPE html>
<html>
<head>
<style>
body {
font-family: cursive;
}
.container {
position: relative;
top: 10px;
width: 500px;
height: 300px;
}
input {
border-radius: 0px;
border: 2px solid gray;
width: 450px;
height: 45px;
font-size: 28px;
transition: 0.2s;
border-top-left-radius: 0px;
border-bottom: 2px solid gray;
text-background: solid black;
font-family: cursive;
}
input:focus {
border: 2px solid #4986E8;
transition: 0.2s;
border-left: 12px solid #4986E8;
width: 440px;
}
.help1 {
width: 300px;
height: 130px;
background: white;
color: grey;
font-size: 20px;
border: 2px solid #4986E8;
position: absolute;
right: 60px;
top: 90px;
}
.help2 {
width: 300px;
height: 130px;
background: white;
color: grey;
font-size: 20px;
border: 2px solid #4986E8;
position: absolute;
right: 60px;
top: 90px;
}
button {
border: 2px solid grey;
width: 150px;
height: 45px;
background: white;
cursor: pointer;
color: grey;
font-size: 30px;
}
button:hover {
color: #4986E8;
border: 2px solid #4986E8;
}
</style>
<!--end of style-->

</head>


<body>

<center>
<div id="h1" class="help1" style="display: none;"><h3><u>Username</u></h3>Type your username here.</div>
<div id="h2" class="help2" style="display: none;"><h3><u>Password</u></h3>Type your password here.</div>
<div class="container">
<form>
<h1 style="color: grey">LOGIN</h1>
<input name="username" placeholder="Username" onfocus="getElementById('h1').style.display='block'" onblur="getElementById('h1').style.display='none'">
<br></br>
<input name="password" placeholder="Password" onfocus="getElementById('h2').style.display='block'" onblur="getElementById('h2').style.display='none'" type="password" passchar="fff">
<br></br>
<button type="submit">Login</button>
</form>
</div>
</center>
</body>
</html>
