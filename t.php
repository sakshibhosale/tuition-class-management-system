 <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: "Lato", sans-serif}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}



.navbar a {
  float:right;
  font-size: 20px;
  color: white;
  text-align: center;
  padding: 24px 16px;
  text-decoration: none;
}

.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 20px;  
  border: none;
  outline: none;
  color: white;
  padding: 24px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: center;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.f{
font-size:20px;}

.id1{
  position: absolute;
  left:20px;
  top: 95px;
  align:center;
  

}
.header {
  padding: 0px;
  text-align: center;
  font-size: 20px;
}

</style>
</head>
<body>
<form method="post" action="http://localhost/t1.php">
<div class="navbar">
  <li style="float:left"><a class="active" href="http://localhost/t_registration.html">Sign In</a></li>
 <a href="http://localhost/conatctus.html">Contact us</a>
  <a href="http://localhost/faculty.html">Feedback</a>
  <a href="http://localhost/aboutus.html">About us</a>
  <a href="http://localhost/facilities.html">Facilities</a>
  <a href="http://localhost/feedback.html">Faculty</a>
  <div class="dropdown">
    <button class="dropbtn">Classes
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/class.html">8th grade</a>
      <a href="http://localhost/class.html">9th grade</a>
      <a href="http://localhost/class.html">10th grade</a>
    </div>
  </div>   
  
  <a href="http://localhost/main1.html">Home</a>
</div>
<br>
<div class="f">
<br><h1>
<div class="header">
  <h1> Siona Classes</h1>
 <img class="id1" src="http://localhost/logo.png"width="150" height="100">
 <hr color="teal">
</div>
</h1><hr>
Enter Your name: 
<input type=text name=t1>
<br><input type=radio name=a value=2>update <br>
Enter contact no.<input type=text name=t2>
<br><input type=radio name=a value=3>update<br>
 Enter class:<input type=text name=t3>
<br><input type=radio name=a value=4>update<br> 
Enter qualification<input type=text name=t4>
<br><input type=radio name=a value=5>update <br>
Enter board <input type=text name=t5>
<br><input type=radio name=a value=6>update  <br>
Enter shname<input type=text name=t6>
<br><input type=radio name=a value=7>update <br>
Enter email <input type=text name=t7>
<input type=submit name=submit value=submit>
</form>
</body>
</html>