let menuHeight = document.querySelector('#menu-main-menu');
let navMenu = document.querySelector('#navItems');
$('#navToggle').click(function(event) {
$('#navItems').toggleClass('activate');
if(navMenu.classList.contains('activate')){
navMenu.style.height = menuHeight.offsetHeight+"px";
} else {
navMenu.style.height = "0px";
}
});

// let menuItemHasChildren = document.querySelectorAll('.menu-item-has-children');
// for (let i = 0; i < menuItemHasChildren.length; ++i){

// // `element` is the element you want to wrap
// let subMenu = document.querySelectorAll('.sub-menu');
// for (let i = 0; i < subMenu.length; ++i){
// var parent = subMenu[i].parentNode;
// var wrapper = document.createElement('div');
// wrapper.className += "sub-menu-parent";

// // set the wrapper as child (instead of the element)
// parent.replaceChild(wrapper, subMenu[i]);
// // set element as child of wrapper
// wrapper.appendChild(subMenu[i]);

// // submenu is in position absolute on load so it doesnt show when website loads but then changes to position relative for dropdown navigation to function properly
// subMenu[i].style.position="relative";

// menuItemHasChildren[i].addEventListener("mouseover", function(){
// this.classList.add('open');
// // this.querySelector('.sub-menu-parent .sub-menu-parent').style.background = "red";
// let subMenuHeight = this.querySelector('.sub-menu-parent .sub-menu-parent .sub-menu');
// this.querySelector('.sub-menu-parent .sub-menu-parent').style.height = subMenuHeight.offsetHeight+"px";
// });
// menuItemHasChildren[i].addEventListener("mouseout", function(){
// this.classList.remove('open');
// this.querySelector('.sub-menu-parent .sub-menu-parent').style.height = "0px";
// });

// }
// }