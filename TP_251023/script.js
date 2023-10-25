var circle = document.getElementById("circle1");
document.body.addEventListener("mousemove", function(e) {
  circle.style.left = e.clientX + "px",
  circle.style.top = e.clientY + "px";
});

var DottedCircle = document.getElementById("circle2");
document.body.addEventListener("mousemove", function(e) {
  DottedCircle.style.left = e.clientX + "px",
  DottedCircle.style.top = e.clientY + "px";
});