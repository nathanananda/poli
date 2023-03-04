$(document).ready(function(){
    $(".submenu-sidebar").hide();
    $(".menu-sidebar").click(function(){
        $(".submenu-sidebar").slideToggle();
    });

    $(".submenu-sidebar-draft").hide();
    $(".menu-sidebar-draft").click(function(){
        $(".submenu-sidebar-draft").slideToggle();
    });

    $(".submenu-sidebar-riwayat").hide();
    $(".menu-sidebar-riwayat").click(function(){
        $(".submenu-sidebar-riwayat").slideToggle();
    });

    $(".submenu-sidebar-logout").hide();
    $(".menu-sidebar-logout").click(function(){
        $(".submenu-sidebar-logout").slideToggle();
    });

});