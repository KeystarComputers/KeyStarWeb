<!DOCTYPE HTML>
<HTML>

<HEAD>

	<link rel="stylesheet" type="text/css" href="style.css">
	<title>About | KeyStar</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="js.js"></script>
	<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />

</HEAD>

<BODY>

	<div style=" position: fixed; width:100%;">
		<nav>
			<ul id="first-list">
				<div style="position: relative;overflow:hidden;height: 6.6vh;">
					<li><img src="images\keystar.png" align="right"></li>
					<li><a href="index.php">HOME</a></li>
					<li><img src="images\productsicon.png" align="right"></li>
					<li><a href="Products.php">PRODUCTS</a></li>
					<li><img src="images\abouticon.png"  align="right"></li>
					<li><a class="active" href="About.php">ABOUT</a></li>
					<li><button id="b1" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button></li>	
				</div>
			</ul>
		</nav>
	</div>
	<div class="top"; style="position: relative; width:100%;">
	</div>
	
	<br>
	
<script>
	// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
	
	</body>

	</html>