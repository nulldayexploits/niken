// Register Service Worker
PWA.ServiceWorker.register();

var menu_btn = document.querySelector("#menu-btn");
var sidebar = document.querySelector("#sidebar");
var container = document.querySelector(".my-container");
var toastLiveExample = document.getElementById('liveToast');

menu_btn.addEventListener("click", () => {
  sidebar.classList.toggle("active-nav");
  container.classList.toggle("active-cont");
});

$(document).ready(function() {
  $('#example').DataTable();
});

// Clear the browser app cache
// document
//   .getElementById('btn-clear-cache')
//   .addEventListener('click', () => {
//     PWA.Navigator.clearCache();
//     var toast = new bootstrap.Toast(toastLiveExample);

//     toast.show();
//   })
// ;
