/* 2018-06-26 */
jQuery(document).ready(function() {
    var color_value = Math.floor(4 * Math.random()), $body = jQuery("body"), $main_container = jQuery("#main_container");
    $body.addClass([ "ultra_violet", "greenery", "rose_quartz", "serenity" ][color_value]), 
    jQuery("#toggler_for_sidebar").find(".btn_toggle").on("click", function(e) {
        btn_toggle = jQuery(this), (void 0).hasClass("closed") ? (console.log("Open menu"), 
        (void 0).removeClass("closed"), (void 0).addClass("opened"), $main_container.removeClass("closed"), 
        $main_container.addClass("opened")) : (void 0).hasClass("opened") && (console.log("Close menu"), 
        (void 0).removeClass("opened"), (void 0).addClass("closed"), $main_container.removeClass("opened"), 
        $main_container.addClass("closed"));
    });
}), jQuery(document).ready(function(e) {
    jQuery(window).outerWidth();
    var window_height = jQuery(window).outerHeight(), wrapper_offset = jQuery("#wrapper").offset(), wrapper_top = wrapper_offset.top, wrapper_height = window_height - wrapper_top;
    jQuery("header").outerHeight(), jQuery("footer").outerHeight();
    function set_layout() {
        jQuery(window).outerWidth(), window_height = jQuery(window).outerHeight(), wrapper_offset = jQuery("#wrapper").offset(), 
        wrapper_top = wrapper_offset.top, wrapper_height = window_height - wrapper_top, 
        jQuery("header").outerHeight(), jQuery("footer").outerHeight(), jQuery("#wrapper").css({
            height: wrapper_height
        });
    }
    jQuery(window).smartresize(function(e) {
        set_layout();
    }).resize(), jQuery("#toolbar-bar").find(".trigger").click(function() {
        set_layout();
    });
}), jQuery(document).ready(function() {
    jQuery(".grid").masonry({
        itemSelector: ".views-row",
        gutter: 20,
        horizontalOrder: !0
    });
});