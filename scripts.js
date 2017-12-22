$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
$(document).ready(function() {

    $('a[href="#"]').click(function(){
        $('html, body').animate({scrollTop:0}, 1000);
        return false;
    });

    $('.project-detail').css('display', 'none');
    $('.project-summary').append('<span>▼</span><span style="display:none">▲</span>');
    $('.project-summary').click(function(){
        $(this).children('span').toggle();
        $(this).next().slideToggle();
    });

});

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
/*function dropdownTaquin() {
    document.getElementById("dropdown-contentTaquin").classList.toggle("show");
}
*/
// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  /*if (!event.target.matches('.dropImg')) {
    var dropdowns = document.getElementsByClassName("dropdown-contentTaquin");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }*/

  if (!event.target.matches('.navButton')) {
    var dropdowns = document.getElementsByClassName("navDrop");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function navDrop() {
    document.getElementById("navDrop").classList.toggle("show");
}
