
<!DOCTYPE html>
<html>
    <head>
        <title>ROLES APPLIED FOR</title>
        <style>
		.flex-container {
    display: -webkit-flex;
    display: flex;
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    text-align: center;
}

.flex-container > * {
    padding: 15px;
    -webkit-flex: 1 100%;
    flex: 1 100%;
}

.article {
    text-align: left;
}

header {background: black;color:white;}
footer {background: #aaa;color:white;}
.nav {background:#eee;}

.nav ul {
    list-style-type: none;
 padding: 0;
}
   
.nav ul a {
 text-decoration: none;
}

@media all and (min-width: 768px) {
    .nav {text-align:left;-webkit-flex: 1 auto;flex:1 auto;-webkit-order:1;order:1;}
    .article {-webkit-flex:5 0px;flex:5 0px;-webkit-order:2;order:2;}
    footer {-webkit-order:3;order:3;}
}
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <div class="flex-container">
<header>
  <h1>RECRUITMENT PORTAL</h1>
</header>

</div>

<br>
<h4>VACANCIES</h4>





<?php
//connect to the database
      $db = new mysqli ("194.81.104.22", "s11406175", "11406175", "db11406175"); 
      
      $ROLE_ID = $_GET['ROLE_ID'];
      $TITLE= $_GET['TITLE '];
      $MINIMUMSALARY = $_GET['MINIMUM_SALARY'];
      $MAXIMUMSALARY = $_GET['MAXIMUM_SALARY'];
      $OUTCOME = $_GET['OUTCOME'];
      $APPLICANT_ID = $_GET['APPLICANT_ID'];
      
	  //mysql query to select all.
       $query = "SELECT * from ROLE";
       $result = $db->query ($query);
// create the table.
      print "\n<table border='1'>\n";
      print "<tr>";
      print "<th>ROLE_ID</th><th>TITLE</th><th>MINIMUM_SALARY</th><th>MAXIMUM_SALARY</th>";
      print "</tr>";
      while($row = mysqli_fetch_object($result))
      {
        //$row = mysql_fetch_object ($result);
        print "<tr>\n";
        print "<td>$row->ROLE_ID</td>";
        print "<td>$row->TITLE</td>";
        print "<td>$row->MINIMUM_SALARY</td>";
        print "<td>$row->MAXIMUM_SALARY</td>";
        
        
        print "</tr>";
      }
      print "</table>";
      $db->close();
    ?>
	
	<article class="article">
  <h1>APPLICATIONS</h1>
  <p>The table above shows all the Vacancies available. </p>
  
</article>



<footer><CENTER>Copyright © Washington Bhebhe</CENTER></footer>
 
    </body>
</html>