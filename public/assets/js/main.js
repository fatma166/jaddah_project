var arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e) => {
    var arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
    arrowParent.classList.toggle("showMenu");
  });
}

var sidebar = document.querySelector(".sidebar");
var sidebarBtn = document.querySelector(".bx-menu");
console.log(sidebarBtn);
sidebarBtn.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});

// window.onclick = function (event) {
//   if (!event.target.matches(".bx-menu") && event.target.matches(".home-section")) {
//     if (!sidebar.classList.contains("close")) {
//       sidebar.classList.add("close");
//     }
//   }
// };

document.addEventListener('DOMContentLoaded', function() {
    const menuIcon = document.querySelector('.menu_icon');
    const sidebar = document.querySelector('.sidebar');
    menuIcon.addEventListener('click', function() {
        sidebar.classList.toggle('open');
        sidebar.classList.toogle("close");

    });
});
document.addEventListener('DOMContentLoaded', function() {
    const menuIcon = document.querySelector('.close_sidebar');
    const sidebar = document.querySelector('.sidebar');

    menuIcon.addEventListener('click', function() {
        sidebar.classList.toggle('open');
        sidebar.classList.remove("close");
    });
});


document.addEventListener('DOMContentLoaded', function () {
  var dropdownToggle = document.getElementById('dropdownMenuButton1');
  var dropdownMenu = document.querySelector('.notification-menu');

  dropdownToggle.addEventListener('click', function (event) {
    event.preventDefault();
    event.stopPropagation();
    dropdownMenu.classList.toggle('show');
  });

  document.addEventListener('click', function (event) {
    if (!dropdownToggle.contains(event.target)) {
      dropdownMenu.classList.remove('show');
    }
  });

  dropdownMenu.addEventListener('click', function (event) {
    event.stopPropagation();
  });
});