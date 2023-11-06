const CircleHover = document.querySelector(".container1");
CircleHover.addEventListener("mouseover", (event)=> {
    const x = (event.pageX - CircleHover.offsetLeft);
    const y = (event.pageY - CircleHover.offsetTop);

    CircleHover.style.setProperty("--xPos", x + "px");
    CircleHover.style.setProperty("--YPos", y + "px");
});

const CircleHover2 = document.querySelector(".container2");
CircleHover2.addEventListener("mouseover", (event)=> {
    const x = (event.pageX - CircleHover2.offsetLeft);
    const y = (event.pageY - CircleHover2.offsetTop);

    CircleHover2.style.setProperty("--xPos", x + "px");
    CircleHover2.style.setProperty("--YPos", y + "px");
});

const CircleHover3 = document.querySelector(".container3");
CircleHover3.addEventListener("mouseover", (event)=> {
    const x = (event.pageX - CircleHover3.offsetLeft);
    const y = (event.pageY - CircleHover3.offsetTop);

    CircleHover3.style.setProperty("--xPos", x + "px");
    CircleHover3.style.setProperty("--YPos", y + "px");
});