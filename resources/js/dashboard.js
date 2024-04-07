const navLinks = document.querySelectorAll(".click");
function handleClick(e) {
    navLinks.forEach((links) => links.classList.remove(".active"));
    e.target.classList.add("active");
}
navLinks.forEach((links) => {
    links.addEventListener("click", handleClick);
});
// document.querySelectorAll(".sidebar-dropdown-toggle").forEach(function (item) {
//     item.addEventListener("click", function (e) {
//         e.preventDefault();
//         const parent = item.closest(".group");
//         if (parent.classList.contains("selected")) {
//             parent.classList.remove("selected");
//         } else {
//             document
//                 .querySelectorAll(".sidebar-dropdown-toggle")
//                 .forEach(function (i) {
//                     i.closest(".group").classList.remove("selected");
//                 });
//             parent.classList.add("selected");
//         }
//     });
// });
// const popperInstance = {};
// document.querySelectorAll(".dropdown").forEach(function (item, index) {
//     const popperId = "popper-" + index;
//     const toggle = item.querySelector(".dropdown-toggle");
//     const menu = item.querySelector(".dropdown-menu");
//     popperInstance[popperId] = Popper.createPopper(toggle, menu, {
//         modifiers: [
//             {
//                 name: "offset",
//                 options: {
//                     offset: [0, 8],
//                 },
//             },
//         ],
//     });
// });
// document.addEventListener("click", function (e) {
//     const toggle = e.target.closest(".dropdown-toggle");
//     const menu = e.target.closest(".dropdown-menu");
//     if (toggle) {
//         const menuEl = toggle
//             .closest(".dropdown")
//             .querySelector(".dropdown-menu");
//         if (menuEl.closest.contains("hidden")) {
//             hideDropdown();
//             menuEl.classList.remove("hidden");
//         } else {
//             menuEl.classList.add("hidden");
//         }
//     }
// });
// function hideDropdown() {
//     document.querySelectorAll(".dropdown-menu").forEach(function (item) {
//         item.classList.remove(".hidden");
//     });
// }
