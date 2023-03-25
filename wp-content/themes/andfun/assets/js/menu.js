jQuery(document).ready(function($){
    // Control Navigation menu
    $('#mobile-menu-trigger').on('click',function(){
        $(this).toggleClass('open');
        $('.right-responsive-menu').toggleClass('show');
        $('#mobile-menu-trigger').toggleClass('on');
    })

    $('.mobile-menu a').on('click',function(){
        $('.right-responsive-menu').removeClass('show')
        $('#mobile-menu-trigger').removeClass('open')
    })

    const sections = $("section");
    const links = $("nav a");

    function handleActiveLink() {
      sections.each(function() {
        const bounding = this.getBoundingClientRect();
        console.log(window.innerHeight);
        console.log(bounding.top);
        if (bounding.top < window.innerHeight) {
          links.removeClass("active-link");
          const id = $(this).attr("id");
          const activeLink = $(`nav a[href="#${id}"]`);
          activeLink.addClass("active-link");
        }
      });
    }

    $(window).on("scroll", handleActiveLink);
});