<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link rel="stylesheet" href="../Assets/styles/menu.css">
    <title>Low Water</title>
  </head>
  
  <aside class="sidebar">
    <header class="sidebar_header">
      <img class="logo_img" src="../Image/icon-logo.svg" alt="logo_system">
    </header>

    <nav>
      <button>
        <img src="../Image/icon-dashboard.svg" alt="icon_dashboard">
        <span>
          Dashboard
        </span>
      </button>

      <button>
        <img src="../Image/icon-unit.svg" alt="unit">
        <span>
          Unit
        </span>
      </button>

      <button>
        <img src="../Image/icon-documents.svg" alt="documents">
        <span>
          Documents
        </span>
      </button>

      <button>
        <img src="../Image/icon-user.svg" alt="user">
        <span>
          User
        </span>
      </button>

      <button>
        <img src="../Image/icon-logout.svg" alt="logout">
        <span>
          Logout
        </span>
      </button>
    </nav>
    </aside>
    <!-- MENU -->
    <button class="button_mobile" onclick="toogle_menu()">
      <img src="../Image/icon-menu.svg" alt="">
      <span>Menu</span>
    </button>

    <nav class="menu_mobile" id="menu_mobile">
      <button class="button_close" onclick="toggle_menu()">
        <img src="../Image/icon-close-menu.svg" alt="icon_close_menu">
      </button>

      <button>
        <img src="../Image/icon-dashboard.svg" alt="icon_dashboard">
        <span class="mobile_text">
          Dashboard
        </span>
      </button>

      <button>
        <img src="../Image/icon-unit.svg" alt="unit">
        <span class="mobile_text">
          Unit
        </span>
      </button>

      <button>
        <img src="../Image/icon-documents.svg" alt="documents">
        <span class="mobile_text">
          Documents
        </span>
      </button>

      <button>
        <img src="../Image/icon-user.svg" alt="user">
        <span class="mobile_text">
          User
        </span>
      </button>

      <button>
        <img src="../Image/icon-logout.svg" alt="logout">
        <span class="mobile_text">
          Logout
        </span>
      </button>
    </nav>
  
  <script src="../Assets/JS/menu.js" ></script>
</html>
