<style type="text/css">
* {
  margin: 0;
  padding: 0;
  border: 0;
  font-family: sans-serif;
}

main {
  min-height: 100vh;
  padding: 50px 0px;
}

.main-header {
  height: 100px;
  width: 100%;
  background-color: #e0d9cd;
  display: inline-block;
}

.top-header h1, .main-header h1 {
    padding-left: 25px;
    border: 0;
    width: 30%;
    display: inline-block;
}

header nav, .main-header nav {
    display: inline-block;
    width: 60%;
}

header ul, .main-header ul {
  margin: 0;
  padding: 0;
  text-align: right;
}

header nav li {
  font-family: 'Noto Sans JP', sans-serif;
  display: inline;
  list-style: none;
}

header nav li a {
  display: inline;
  padding: 10px;
  text-decoration: none;
  color: black;
  letter-spacing: 2px;
}

header nav li a:hover {
  background-color: #aac991;
  color: white;
}

header nav li a:visited {
  color: black;
}

h1, h2, h3 {
  font-family: 'Homemade Apple', cursive;
}

p {
  font-family: 'Noto Sans JP', sans-serif;
  line-height: 16pt;
  font-size: 12pt;
}
</style>

<header>
    <nav>
      <ul>
        <li><a href="index.html">home</a></li>
        <li><a href="contact.html">contact</a></li>
        <li><a href="about.html">about me</a></li>
      </ul>
    </nav>
</header>

<div class="container">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>
</div>


<footer>
  <p>This page was designed by Kaitlin Shumake, 2021.</p>
</footer>
