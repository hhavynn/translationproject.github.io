document.addEventListener("DOMContentLoaded", function() {
    var smoothScrollLinks = document.querySelectorAll('a[href^="#"]');
    
    smoothScrollLinks.forEach(function(link) {
      link.addEventListener("click", function(event) {
        event.preventDefault();
  
        var targetId = this.getAttribute("href").substring(1);
        var targetElement = document.getElementById(targetId);
  
        if (targetElement) {
          var yOffset = targetElement.getBoundingClientRect().top + window.pageYOffset;
          window.scrollTo({ top: yOffset, behavior: "smooth" });
        }
      });
    });
  });
  