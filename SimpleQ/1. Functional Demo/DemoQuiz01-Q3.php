<?php
	//session_start();
    $question2 = "Answer2";
    $Q2 = $_POST['Q2'];
	setcookie($question2,$Q2,time()+60*60*24,"/");
?>
<html>
    <head>
    	<title>
        	Demo Quiz 01 | Question 3
        </title>
        <!--The following lines introduce the bootstrap-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    	<nav class="navbar navbar-inverse"><!--Navigation Bar, copy for each page-->
            <div class="navbar-header">
              <a class="navbar-brand" href="Home.php">Simple Q</a>
            </div>
            <ul class="nav navbar-nav">
              <li><a href="SimpleQList.php">Quiz List</a></li>
              <li><a href="SimpleQAbout.php">About</a></li>
            </ul>
        </nav>
        <div class="container" style = "text-align:left">
            <form method='post' enctype='multipart/form-data' action='DemoQuiz01-Q4.php'>
              <strong><p>Queston 3</p></strong>
              <img src='Images/Picture3.jpg' alt='Trachea Picture 3' style='width:500px;height:400px'><br/>
              <p>What type of epithelium does this tissue have?</p>
              <input type='radio' value='A' name='Q3' >A. Simple Squamous Epithelium<br/>
              <input type='radio' value='B' name='Q3' >B. Simple Columnar Epithelium<br/>
              <input type='radio' value='C' name='Q3' >C. Stratified Squamous Epithelium<br/>
              <input type='radio' value='D' name='Q3' >D. Psuedostratified Ciliated Columnar Epithelium<br/>
              <input type='submit' value='Next Question' name='submit'>
            </form>
		</div>
    </body>
</html>        