
<!DOCTYPE html>
<html>
    <head>
        <title>APPLICANT INFORMATION</title>
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
<h4>WASHINGTON BHEBHE</h4>

<?php

      $db = new mysqli ("194.81.104.22", "s11406175", "11406175", "db11406175"); 
      //mysql_select_db ("db11406175");

      $APPLICANT_ID = $_GET['APPLICANT_ID'];
      $NAME = $_GET['NAME '];
      $SURNAME = $_GET['SURNAME'];
      $ADDRESS = $_GET['ADDRESS'];
      $DOB = $_GET['Date_OF_BIRTH'];
      $WORKEXPERIENCE = $_GET['WORK_EXPERIENCE'];
      
       $query = "SELECT * from APPLICANT WHERE NAME = 'washington'";
       $result = $db->query ($query);

      print "\n<table border='1'>\n";
      print "<tr>";
      print "<th>APPLICANT_ID</th><th>NAME</th><th>SURNAME</th><th>ADDRESS</th><th>Date_OF_BIRTH</th><th>WORK_EXPERIENCE</th>";
      print "</tr>";
      while($row = mysqli_fetch_object($result))
      {
        //$row = mysql_fetch_object ($result);
        print "<tr>\n";
        print "<td>$row->APPLICANT_ID</td>";
        print "<td>$row->NAME</td>";
        print "<td>$row->SURNAME</td>";
        print "<td>$row->ADDRESS</td>";
        print "<td>$row->Date_OF_BIRTH</td>";
        print "<td>$row->WORK_EXPERIENCE</td>";
        
        print "</tr>";
      }
      print "</table>";
      $db->close();
    ?>
	<article class="article">
  <h1>APPLICATIONS</h1>
  <p>The table above shows all the Vacancies available. </p>
  </article>
  
<br>






 <footer><CENTER>Copyright © Washington Bhebhe</CENTER></footer>
 
    </body>
</html>
