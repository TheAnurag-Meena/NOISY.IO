
setInterval(() => {
    if (document.getElementById("border1").checked) {
      document.getElementById("checkbox").checked = false;
    } else {
      window.location.href = '../Pages/application.php';
    }
  
  }, 1000);
  setInterval(() => {
    if (document.getElementById("border2").checked) {
      document.getElementById("checkbox").checked = false;
    } else {
      
      window.location.href = '../Pages/app1.php';
  
    }
  }, 100);
  