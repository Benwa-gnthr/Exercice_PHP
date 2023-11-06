var circle = document.getElementById("circle");
document.body.addEventListener("mousemove", function(e) {
  circle.style.left = e.clientX + "px",
  circle.style.top = e.clientY + "px";
});