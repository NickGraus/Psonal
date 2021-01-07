
var titlebarheight = parseInt(window.getComputedStyle(document.getElementById("titlebar"), null).getPropertyValue("height"));
var titlenameheight = parseInt(window.getComputedStyle(document.getElementById("titlename"), null).getPropertyValue("height"));
console.log(titlebarheight, titlenameheight);

while((titlenameheight + 25) > titlebarheight) {
    titlebarheight = titlebarheight + 1;
    console.log(titlebarheight, titlenameheight);

}

console.log(document.getElementById("titlebar").style.height = titlebarheight + "px");





