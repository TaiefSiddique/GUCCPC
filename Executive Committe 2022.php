<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Green University Computer Club Permanent Campus</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}



.heh{
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-btn {
  background-color: #f1f1f1;
  color: #333;
  padding: 10px;
  border: none;
  cursor: pointer;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #fff;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

.dropdown-content a {
  color: #333;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      text-align: center;
      padding: 8px;
      border: 1px solid black;
    }

    th {
      background-color: #4CAF50;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
	}
  /* CSS for the search button */
#searchButton {
  background-color: #4CAF50; /* Green background color */
  color: white; /* Text color */
  border: none; /* Remove border */
  padding: 10px 20px; /* Add padding */
  cursor: pointer; /* Add cursor on hover */
  transition: background-color 0.3s ease; /* Add transition effect */
}

#searchButton:hover {
  background-color: #45a049; /* Darker green color on hover */
}

</style>

</head>
<body>
  <header>
  <h1>Executive Committee 2022</h1>
    <nav>
      <ul>
        <li class="heh"><a href="index.php">Home</a></li>
        <li class="heh"><a href="about.php">About Us</a></li>
        <li class="heh"><a href="events.php">Events</a></li>
        <li class="heh"><a href="blog.php">Blog</a></li>
        <li class="heh"><a href="submit.php">Contact</a></li>
        <li class="heh"><a href="admin.php">Admin</a></li>
        <div class="dropdown">
  <button class="dropdown-btn">ExecutiveCommittee</button>
  <div class="dropdown-content">
    <a href="Executive Committe 2022.php">ExecutiveCommittee2022</a>
    <a href="Executive Committe 2023.php">ExecutiveCommittee2023</a>
    
  </div>

        
      </ul>
    </nav>
  </header>
  
  <div style="text-align: center;">
   
  </div>

  <!-- Search functionality -->
  <div style="text-align: center;">
    <form>
      <input type="text" id="searchInput" placeholder="Search by ID, Name, Designation, or Email">
      <input type="button" id="searchButton" value="Search" onclick="searchTable()"> </br>
    </form>
  </div>
<section>
  <table id="committeeTable">
		<tr>
			<th>SL.</th>
			<th>Designation</th>
			<th>Name</th>
			<th>ID</th>
			<th>Cell Phone No.</th>
			<th>Email</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Moderator</td>
			<td>Md. Abu Rumman Refat</td>
			<td>-</td>
			<td>017XXXXXXXX</td>
			<td>refat@cse.green.edu.bd</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Deputy Moderator</td>
			<td>Md. Parvez Hussain</td>
			<td>-</td>
			<td>017XXXXXXXX</td>
			<td>parvez@cse.green.edu.bd</td>
		</tr>
		<tr>
			<td>3</td>
			<td>President</td>
			<td>Kazi Hasnayeen Emad</td>
			<td>191902025</td>
			<td>01954458244</td>
			<td>kaziemad10@gmail.com</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Vice President (Activity)</td>
			<td>Md. Ariful Islam</td>
			<td>191902056</td>
			<td>015213875743</td>
			<td>ariful.cse.gub@gmail.com</td>
		</tr>
		
		<tr>
			<td>5</td>
			<td>General Secretary</td>
			<td>Ahsanul Karim</td>
			<td>191902034</td>
			<td>01627744265</td>
			<td>owasibahsan@gmail.com</td>
		</tr>
		<tr>
			<td>6</td>
			<td>Joint General Secretary</td>
			<td>Nasir Uddin Faysal</td>
			<td>192902005</td>
			<td>01916299476</td>
			<td>nasirufaisal90@gmail.com</td>
		</tr>
		<tr>
			<td>7</td>
			<td>Joint General Secretary</td>
			<td>Shakhawath Hossain Nirob</td>
			<td>191902038</td>
			<td>01969092057</td>
			<td>Nerobntl@gmail.com</td>
		</tr>
		
		<tr>
			<td>8</td>
			<td>Treasurer</td>
			<td>Tanvir Haider</td>
			<td>191902065</td>
			<td>015215088586</td>
			<td>tanvirhaidar1999@gmail.com</td>
		</tr>
		
		<tr>
			<td>9</td>
			<td>Organizing Secretary</td>
			<td>Azmary Akter</td>
			<td>193902019</td>
			<td>01773433638</td>
			<td>azmarydresti321@gmail.com</td>
		</tr>
		<tr>
			<td>10</td>
			<td>Ass. Organizing Secretary</td>
			<td>Farjana Afrin Maria</td>
			<td>201902183</td>
			<td>01721675273</td>
			<td>farjana afrinmaria@gmail.com</td>
		</tr>
	
		<tr>
			<td>11</td>
			<td>Information Secretary</td>
			<td>Abdullah Al Mamun</td>
			<td>201902091</td>
			<td>01700891001</td>
			<td>abdullahalmamun.gub@gmail.com</td>
		</tr>
		<tr>
			<td>12</td>
			<td>Content writer</td>
			<td>Saad Adnan Durjoy</td>
			<td>201902122</td>
			<td>01911284245</td>
			<td>sadurjoy69@gmail.com</td>
		</tr>
		<tr>
			<td>13</td>
			<td>Graphics Designer</td>
			<td>MD.Neamot Ullah Okib</td>
			<td>201902174</td>
			<td>01304074540</td>
			<td>okibmdn@gmail.com</td>
		</tr>
	
		
		<tr>
			<td>14</td>
			<td>Executive Member - 1</td>
			<td>MD. Shihab Khan</td>
			<td>191902015</td>
			<td>01751642063</td>
			<td>k.rony7193@gmail.com</td>
		</tr>
		<tr>
			<td>15</td>
			<td>Executive Member-2</td>
			<td>Md Arif Hasan</td>
			<td>193902015</td>
			<td>01774001718</td>
			<td>arifhasan1595@gmail.com</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Executive Member-3</td>
			<td>Md. Kaoser</td>
			<td>192902012</td>
			<td>01758750805</td>
			<td>mdkaoser886@gmail.com</td>
		</tr>
		<tr>
			<td>17</td>
			<td>Executive Member-4</td>
			<td>Md. Nazmul Hosain</td>
			<td>201902090</td>
			<td>01851220500</td>
			<td>nazmul.gub.cse@gmail.com</td>
		</tr>
		<tr>
			<td>18</td>
			<td>Executive Member-5</td>
			<td>Nazmul Hasan Shohag</td>
			<td>193902031</td>
			<td>01553341338</td>
			<td>nazmul.gub.cse@gmail.com</td>
		</tr>
    </table>
	</section>
	<footer style="text-align: center;">
  <p>&copy; 2023 Green University Computer Club Permanent Campus. All rights reserved.</p>
</footer>
  <script>
    function searchTable() {
      // Declare variables for search
      var input, filter, table, tr, td, i, j, txtValue;
      input = document.getElementById("searchInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("committeeTable");
      tr = table.getElementsByTagName("tr");

      // Loop through all table rows and hide those that don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        for (j = 0; j < td.length; j++) {
          if (td[j]) {
            txtValue = td[j].textContent || td[j].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
              break;
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
    }
  </script>
</body>

</html>
