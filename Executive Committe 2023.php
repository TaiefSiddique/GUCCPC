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
</style>

</head>
<body>
  <header>
  <h1>Executive Committee 2023</h1>
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
<body>
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
			<td>Shamim Ahmed</td>
			<td>20100234</td>
			<td>017XXXXXXXX</td>
			<td>shamim@gmail.com</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Vice President (Activity)</td>
			<td>Md. Nazmul Hosain</td>
			<td>201902090</td>
			<td>017XXXXXXXX</td>
			<td>mynajmul@gmail.com</td>
		</tr>
		<tr>
			<td>5</td>
			<td>Vice President (Technical)</td>
			<td>Shakib Imtiaz</td>
			<td>202902008</td>
			<td>017XXXXXXXX</td>
			<td>shakibimtiazjishan1111@gmail.com</td>
		</tr>
		<tr>
			<td>6</td>
			<td>General Secretary</td>
			<td>Abdullah al kafi</td>
			<td>201902145</td>
			<td>017XXXXXXXX</td>
			<td>shoaibkafi2002@gmail.com</td>
		</tr>
		<tr>
			<td>7</td>
			<td>Joint General Secretary</td>
			<td>Tarqul Alam Opi</td>
			<td>201902074</td>
			<td>017XXXXXXXX</td>
			<td>tarqulopi77@gmail.com</td>
		</tr>
		<tr>
			<td>8</td>
			<td>Treasurer</td>
			<td>Abdullah Al Mamun</td>
			<td>201902091</td>
			<td>017XXXXXXXX</td>
			<td>abdullahalmamun.gub@gmail.c</td>
		</tr>
		<tr>
			<td>9</td>
			<td>Joint Treasurer</td>
			<td>Obaydur Rahman</td>
			<td>213902018</td>
			<td>017XXXXXXXX</td>
			<td>hello@opu.rocks</td>
		</tr>
		<tr>
			<td>10</td>
			<td>Organizing Secretary</td>
			<td>Ibrahim Tanvir</td>
			<td>211902055</td>
			<td>017XXXXXXXX</td>
			<td>ibrahimtanvir680@gmail.com</td>
		</tr>
		<tr>
			<td>11</td>
			<td>Joint Organizing Secretary</td>
			<td>Samim Reza</td>
			<td>221902245</td>
			<td>017XXXXXXXX</td>
			<td>samimreza2111@gmail.com</td>
		</tr>
		<tr>
			<td>12</td>
			<td>Publication Secretary</td>
			<td>Md. Hasibur Rahman</td>
			<td>212902018</td>
			<td>017XXXXXXXX</td>
			<td>hasibur01631753881@gmail.com</td>
		</tr>
		
		<tr>
			<td>13</td>
			<td>Joint Publication Secretary</td>
			<td>Nazmul Hasan</td>
			<td>213902003</td>
			<td>017XXXXXXXX</td>
			<td>nazmulhasan478900@gmail.co</td>
		</tr>
		<tr>
			<td>14</td>
			<td>Programming Secretary</td>
			<td>Md. Manzurul Alam</td>
			<td>202902003</td>
			<td>017XXXXXXXX</td>
			<td>manzurul104@gmail.com</td>
		</tr>
		<tr>
			<td>15</td>
			<td>Joint Programming Secretary</td>
			<td>Md. Abu Taief Siddique</td>
			<td>211902037</td>
			<td>017XXXXXXXX</td>
			<td>taiefsiddik2@gmail.com</td>
		</tr>
		<tr>
			<td>16</td>
			<td>Information Secretary</td>
			<td>Md. Rahul Islam Joy</td>
			<td>212902070</td>
			<td>017XXXXXXXX</td>
			<td>md.rahulislam9216@gmail.com</td>
		</tr>
		<tr>
			<td>17</td>
			<td>Joint Information Secretary</td>
			<td>Md Fahim Sarker Mridul</td>
			<td>221902369 </td>
			<td>017XXXXXXXX</td>
			<td>fahimsarker0805@gmail.com</td>
		</tr>
		<tr>
			<td>18</td>
			<td>Graphics Designer</td>
			<td>Md. Mahmudul Hasan</td>
			<td>212902028</td>
			<td>017XXXXXXXX</td>
			<td>mmdhasan150@gmail.com</td>
		</tr>
		<tr>
			<td>19</td>
			<td>Assistant Graphics Designer</td>
			<td>Md. Zobayer Chowdhury</td>
			<td>221902038</td>
			<td>017XXXXXXXX</td>
			<td>mdzobaverchowdhury3077@gmail.com</td>
		</tr>
		<tr>
			<td>20</td>
			<td>Cultural Secretary</td>
			<td>Riya Hasan</td>
			<td>221902188</td>
			<td>017XXXXXXXX</td>
			<td>riyahasan6754@gmail.com</td>
		</tr>
		<tr>
			<td>21</td>
			<td>Executive Member - 1</td>
			<td>Rufaida Jaman Rayta</td>
			<td>221902020</td>
			<td>017XXXXXXXX</td>
			<td>rufaidajaman15@gmail.com</td>
		</tr>
		<tr>
			<td>22</td>
			<td>Executive Member-2</td>
			<td>Md. Showaib Rahman Tanveer</td>
			<td>221902084</td>
			<td>017XXXXXXXX</td>
			<td>tanveer.cse69@gmail.com</td>
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