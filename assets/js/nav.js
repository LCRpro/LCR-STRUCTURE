const navLinks = document.querySelectorAll('nav ul a');

navLinks.forEach(link => {
  const currentPageURL = window.location.href;
  const linkURL = link.href;

  const isMaintenance = window.location.pathname.includes('maintenance');
  if (!isMaintenance) {
    if (currentPageURL === linkURL) {
      link.classList.add('nav-active');
    } else {
      link.classList.remove('nav-active');
    }
  }
});
