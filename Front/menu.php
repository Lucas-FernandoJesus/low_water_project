<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link rel="stylesheet" href="../Assets/styles/menu.css">
    <title>Low Water</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>

  <nav id="sidebar">
    <div id="sidebar_content">
      <div class="menu" id="open_btn">
        <i class='bx bx-menu open_btn_icon' style='color:#ffffff' alt="user"></i>
        <span id="text_title">Low Water</span>
      </div>
      <div id="logo">
        <i class='bx bx-tachometer' style='color:#ffffff' id="logo" alt="logo_details"></i>
      </div>
      <ul id="side_items">
        <li class="side_item">
          <a href="./dashboard.php">
            <i class='bx bxs-dashboard' style='color:#ffffff'></i>
            <span id="text_margin">Dashboard</span>
          </a>
        </li>
        <li class="side_item">
          <a href="./users.php">
            <i class='bx bxs-user' style='color:#ffffff'></i>
            <span id="text_margin">User</span>
          </a>
        </li>
        <li class="side_item">
          <a href="./unit.php">
            <i class='bx bx-buildings' style='color:#ffffff'></i>
            <span id="text_margin">Unit</span>
          </a>
        </li>
        <li class="side_item">
          <a href="./documents.php">
            <i class='bx bx-file' style='color:#ffffff'></i>
            <span id="text_margin">Documents</span>
          </a>
        </li>
      </ul>
    </div>
    <div id="logout">
      <button id="logout_btn">
        <a href="./logout.php">
          <i class='bx bx-power-off' style='color:#ffffff' ></i>
          <span class="item_description">
            Logout
          </span>
        </a>
      </button>
    </div>
  </nav>
<!-- script -->
</html>
