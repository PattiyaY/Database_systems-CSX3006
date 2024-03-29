<?php session_start(); 
require './DB_connect.php';

//Show data from Account table and Customer table
$email = $_SESSION['email'];
$sql_customer_data = "SELECT * FROM `account` AS a, `customer` AS c WHERE a.email = ? AND a.email=c.email";
$stmt_customer_data = $conn->prepare($sql_customer_data);
$stmt_customer_data->bind_param("s", $email);
$stmt_customer_data->execute();
$result_customer_data = $stmt_customer_data->get_result();
$row_customer_data = mysqli_fetch_array($result_customer_data);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Personal Infomation</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="navbar">
      <nav class="navbar-container">
        <a href="./c_personal_info.php"
          ><img src="./logo/Assumption_University(logo).png" alt="logo"
        /></a>
        <ul class="navbar-left">
          <li>
            <a href="./c_personal_info.php">
              <h1>online hotel management system</h1>
            </a
            >
          </li>
        </ul>

        <ul class="navbar-right">
          <li>
            <a href="./c_personal_info.php" style="color: #d73938;">personal information</a>
          </li>
          <li>
            <a href="./c_RoomandHotel.php">room & hotel info</a>
          </li>
          <li>
            <a href="./c_db_logout.php">Logout</a>
          </li>
        </ul>
      </nav>
    </div>

    <form action="./c_db_edit_personal.php" method="POST" class="table-customer-info">
      <h1 class="title_customer">personal information</h1>
      <div class="account-info">
        <table class="table-customer-info">
          <tr>
            <th class="head">customer name</th>
            <th class="head">address</th>
          </tr>

          <tr>
            <td class="sub-head">
              <label for="name">Name</label>
              <p class="body">
              <input type="text"
              id="name"
              name="name"
              value="<?php echo $row_customer_data['firstname']; ?>"
              >
            </p>
          </td>
          
            <td class="sub-head">
            <label for="address">Address (City / State / Country)</label>
            <p class="body">
              <input
                style="width: 400px; height: 50px;"
                type="text"
                id="address"
                name="address"
                value="<?php echo $row_customer_data['address']; ?>"
              />
            </p>
            </td>
          </tr>

          <tr>
            <td class="sub-head">
                <label for="surname">surname</label>
                <p class="body">
                <input type="text"
                id="surname"
                name="surname"
                value="<?php echo $row_customer_data['lastname']; ?>"
                >
                </p>
            </td>
            <th class="head">emergency contact</th>
          </tr>

          <tr>
            <th class="head">date of birth</th>
            <td class="sub-head">
              <label for="name">name</label>
              <p class="body">
              <input type="text"
                id="name"
                name="rel-name"
                value="<?php echo $row_customer_data['emergency_name'];?>"
                >
              </p>
            </td>
          </tr>

          <tr>
            <td class="sub-head">
              <label for="birthday">DD/MM/YYYY</label>
              <p class="body">
              <input type="date" id="birthday" name="birthday" value="<?php echo $row_customer_data['birthdate']; ?>">
              </p>
            </td>

            <td class="sub-head">
              <label for="phone">telephone</label>
              <p class="body">
              <input type="tel" id="phone" name="rel-phone" value="<?php echo $row_customer_data['emergency_phone'];?>">
              </p>
          </tr>

          <tr>
            <th class="head">Phone number</th>
            <td class="sub-head">
              <label for="relationship">relationship</label>
              <p class="body">
                <select id="relationships" name="relationships" style="font-size: 15px; ">
                <option value="parent">Parent</option>
                <option value="sibling">Sibling</option>
                <option value="sibling">Significant Other</option>
                <option value="sibling">Daughter/Son</option>
                <option value="relative">Relative</option>
                <option value="friend">Friend</option>
                <option value="other">Other</option>
                </select>
              </p>
            </td>
          </tr>

          <tr>
            <td class="sub-head">
              <label for="telephone">TEL.XXX-XXX-XXXX</label>
              <p class="body">
              <input type="tel" id="phone" name="cus-phone" value="<?php echo $row_customer_data['phone'];?>">
              </p>
            </td>

          </tr>
        </table>

          <div class="edit-personal-info">
            <button type="submit" name="submit" class="button">Done</button>
          </div>
        </div>
      </div>
    </form>
</body>
</html>

