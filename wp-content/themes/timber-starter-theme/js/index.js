
// BURGER MENU___________________________________________--
var $8973aab45c5aa6ba$var$burger = document.querySelector(".menu-burger");
var $8973aab45c5aa6ba$var$menu = document.querySelector(".menu-mobile");
var $8973aab45c5aa6ba$var$menuItems = document.querySelectorAll(".menu-mobile .menu-item");
function $8973aab45c5aa6ba$var$toggleMenu() {
    $8973aab45c5aa6ba$var$menu.classList.toggle("is-active");
    $8973aab45c5aa6ba$var$burger.classList.toggle("is-active");
}
$8973aab45c5aa6ba$var$burger.addEventListener("click", $8973aab45c5aa6ba$var$toggleMenu);
$8973aab45c5aa6ba$var$menuItems.forEach(function(menuItem) {
    menuItem.addEventListener("click", $8973aab45c5aa6ba$var$toggleMenu);
});
// ACCORDION___________________________________________--
var $8973aab45c5aa6ba$var$accordionHeaders = document.querySelectorAll(".accordion h2");
$8973aab45c5aa6ba$var$accordionHeaders.forEach(function(header) {
    header.addEventListener("click", function(event) {
        event.stopPropagation();
        var accordionItem = this.closest(".accordion").querySelector(".accordion-item");
        if (accordionItem.classList.contains("accordion-item-open")) accordionItem.classList.remove("accordion-item-open");
        else {
            document.querySelectorAll(".accordion-item").forEach(function(item) {
                item.classList.remove("accordion-item-open");
            });
            accordionItem.classList.add("accordion-item-open");
        }
    });
});


//# sourceMappingURL=index.js.map
