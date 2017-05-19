module.exports =
  document.addEventListener('DOMContentLoaded', function() {
    if (window.location.href.indexOf('localhost')) {
      const links = [...document.getElementsByTagName('a')]

      links.forEach(link => {
        link.setAttribute('href', link.getAttribute("href").replace('wordpress:80', 'localhost:3000'))
      })
    }
  }, false);
