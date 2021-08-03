<style type="text/css">
* {
  margin: 0;
  padding: 0;
  border: 0;
  font-family: sans-serif;
}

main {
    padding: 25px 150px;
    background-color: antiquewhite;
    min-height: 100vh;
}

header {
  background-color: #555;
  padding: 10px;
  text-align: center;
  margin: 0 auto;
}

nav {
  padding: 25px;
}

header nav li {
  display: inline;
  text-decoration: none;
  padding: 10px;
  padding-bottom: 0;
  font-color: white;
  font-size: 20px;
  letter-spacing: 3px;
}

header nav li a:link, nav li a:visited {
  text-decoration: none;
  color: white;
  border-bottom: 2pt solid white;
}

h3 {
    font-size: 20;
    font-family: 'Georgia', serif;
    text-align: center;
}

footer {
  position: relative;
  padding: 25px 0;
  background-color: #555;
  text-align: center;
  width: 100%;
  color: white;
}

.container {
  max-width: 900px;
  margin: 50px auto 180px;
  padding: 20px 0;
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
