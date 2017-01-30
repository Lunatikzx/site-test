var nav = 
    responsiveNav(".nav-collapsed", { // Selector
    animate: true, // Boolean: Use CSS3 transitions, true or false
    transition: 100, // Integer: Speed of the transition, in milliseconds
    label: "<i class='fa fa-bars fa-2x'></i>", // String: Label for the navigation toggle
    insert: "before", // String: Insert the toggle before or after the navigation
    customToggle: "", // Selector: Specify the ID of a custom toggle
    closeOnNavClick: true, // Boolean: Close the navigation when one of the links are clicked
    openPos: "relative", // String: Position of the opened nav, relative or static
    navClass: "nav-collapse", // String: Default CSS class. If changed, you need to edit the CSS too!
    navActiveClass: "js-nav-active", // String: Class that is added to  element when nav is active
    jsClass: "js", // String: 'JS enabled' class which is added to  element
});
    
$('ul.nav a').click(function(event) {
    event.preventDefault();
    var link = this;
    $.smoothScroll({scrollTarget: link.hash});
});