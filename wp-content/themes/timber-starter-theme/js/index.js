
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
// Wrapper
const $8973aab45c5aa6ba$var$cards = document.querySelectorAll(".card");
const $8973aab45c5aa6ba$var$filters = document.querySelectorAll("input[name='type']");
$8973aab45c5aa6ba$var$filters.forEach((filter)=>{
    filter.addEventListener("click", function() {
        const value = filter.value;
        $8973aab45c5aa6ba$var$cards.forEach((card)=>{
            const type = card.getAttribute("data-type");
            if (value === "") card.classList.remove("hide");
            else if (type === value) card.classList.remove("hide");
            else card.classList.add("hide");
        });
    });
});


//# sourceMappingURL=index.js.map
