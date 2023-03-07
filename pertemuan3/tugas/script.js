window.onload = function () {
  current_page = window.location.pathname;
  current_page = current_page.split("/").pop().replace('.php', '');
  const body = document.getElementsByTagName('body')[0];

  console.log(current_page);

  let nav_links = document.querySelectorAll(".nav-link");
  nav_links.forEach(element => {
    if (element.classList.contains('data-nilai')) {
      console.log(sdsd);
      element.classList.add("active");
    }
  });
}