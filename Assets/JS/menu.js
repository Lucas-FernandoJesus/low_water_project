function toggle_menu(){
  const menuMobile = document.getElementById("menu_mobile")

  if(menuMobile.className === "menu_mobile_active"){
    menuMobile.className = "menu_mobile"
  }
  else{
    menuMobile.className = "menu_mobile_active"
  }
}