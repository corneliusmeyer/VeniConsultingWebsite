//Löscht den Scrollhint nachdem gescrollt wurde
document.addEventListener('scroll', function(e) {
       var element = document.getElementById("scrollHint");
       element.remove();
       console.log("removed");
});