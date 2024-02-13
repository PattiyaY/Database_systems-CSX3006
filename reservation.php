<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Personal information Page</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>

    <!-- Rservation Navbar -->
    <div class="navbar">
      <nav class="navbar-container">
        <a href="#" class="logo">
          <img src="./logo/Assumption_University(logo).png" alt="logo"/>
        </a>
        <ul class="navbar-left">
          <li>
            <a href="#"><h1>online hotel management system</h1></a>
          </li>
        </ul>

        <ul class="navbar-right">
          <li>
            <a href="#">new reservation</a>
          </li>
        </ul>
      </nav>
    </div>

    <!-- Rservation-->
    <section class="reservation">
      <div class="reservation-title">
        <h1>RESERVATION</h1>
      </div>

      <div class="reservation-top">
        <div class="radio-days">
          <input class="radio__input" type="radio" value="day1" name="days" id="day1">
          <label class="radio__label" for="day1"> 4 NOVEMBER 2023 </label>
          <input class="radio__input" type="radio" value="day2" name="days" id="day2">
          <label class="radio__label" for="day2"> 5 NOVEMBER 2023 </label>
          <input class="radio__input" type="radio" value="day3" name="days" id="day3">
          <label class="radio__label" for="day3"> 6 NOVEMBER 2023 </label>
        </div>
        
        <a href="#popup-add" class="reservation-button">Add</a>
      </div>
      

      <div class="card-body">
        <table>
          <tr bgcolor="white" align="left">
            <th width="244"> Reservation No. </th>
            <th width="240"> Customer Name </th>
            <th width="151" align="center"> Agent </th>
            <th width="121"> Arrive </th>
            <th width="129"> Depart </th>
            <th width="55"> Edit </th>
          </tr>
          <tr bgcolor="white" align="left">
            <td> 000001 </td>
            <td> Chayapat Pangpon </td>
            <td align="center"> Agoda </td>
            <td> 04/11/23 </td>
            <td> 05/11/23 </td>
            <td> 
              <a href="#" class="button_edit">
                <i class="fa-regular fa-pen-to-square"></i>
              </a>
            </td>
            
          </tr>
        </table>
      </div>


    <!-- Rservation Add -->
    <div class="overlay" id="popup-add">
      <div class="wrapper">
        <h2>Add Reservation</h2>
        <div class="content">
          <div class="container">
            <form>
              <label>Customer Name</label>
              <input type="text" placeholder="Customer Name">
              <label>Agent</label>
              <input type="text" placeholder="Agent">
              <label>Arriving Date</label>
              <input type="text" placeholder="00/00/00">
              <label>Departure Date</label>
              <input type="text" placeholder="00/00/00">
              <input type="submit" value="Submit">
            </form>
          </div>
        </div>
        <a href="#" class="reservation-button">&times;Close</a>
        <a href="add.php" class="reservation-button"> Add </a>

      </div>
    </div>


  </body>
</html>