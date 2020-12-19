<style type="text/css">
* {
  padding: 0;
  margin: 0;
  border: 0;
  font-family: 'Lato', sans-serif;
  box-sizing: border-box;
}

header {
    background: white;
    padding: 20px 0;
    text-align: center;
    position: fixed;
    width: 100%;
    z-index: 9999;
}

header a {
  font-weight: 300;
  text-transform: capitalize;
  text-decoration: none;
  font-size: 16px;
  color: navy;
}

header a:hover {
  color: #639894;
}

header nav ul li {
    display: inline;
    padding: 50px;
}
</style>

<header>
      <nav>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#">Photography</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
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
