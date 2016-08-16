<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `APPLICANT` WHERE CONCAT(`APPLICANT_ID`, `NAME`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
	 // select query
    $query = "SELECT * FROM `APPLICANT`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
	// connect to the database
    $connect = mysqli_connect("194.81.104.22", "s11406175", "11406175", "db11406175");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
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


<article class="article">
  <h1>APPLICANTS</h1>
  <p>The table above shows all the applicants in the database. Please use the search tool above to search for applicants either
  by Applicant ID or by their first names.</p>
  
</article>
<title>PHP HTML TABLE DATA SEARCH</title>
<!--creating a search form -->
        <form action="search.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Search For an Applicant"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            <h4>APPLICANTS</h4>
			<!--creating a table -->
            <table>
                <tr>
                    <th>APPLICANT_ID</th>
                    <th>NAME</th>
                    <th>SURNAME</th>
                    <th>ADDRESS</th>
					<th>Date_OF_BIRTH</th>
                    <th>WORK_EXPERIENCE</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['APPLICANT_ID'];?></td>
                    <td><?php echo $row['NAME'];?></td>
                    <td><?php echo $row['SURNAME'];?></td>
                    <td><?php echo $row['ADDRESS'];?></td>
					<td><?php echo $row['Date_OF_BIRTH'];?></td>
                    <td><?php echo $row['WORK_EXPERIENCE'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
		
		
		
		
       <footer>Copyright © Washington Bhebhe</footer>
 
    </body>
</html>


