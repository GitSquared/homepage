(function (d, w) {
    d.addEventListener("scroll", function(e) {
        let p = Math.round(w.scrollY/w.innerHeight*10000)/10000;
        
        /*if (p <= 1.1) {
            document.querySelector("section#landing div.title").setAttribute("style", `transform: scale(${1-p});visibility: visible;opacity: ${1-(p*1.5)};`);}*/
    });
    
    function scroll(id) {
        d.getElementById(id).scrollIntoView({behavior:"smooth"});
    }
    
    scroll("landing");
    
    d.querySelectorAll("section").forEach(s => {
        s.addEventListener("wheel", e => {
            let down = (e.deltaY > 0) ? true : false;
            switch(e.target.id) {
                case "landing":
                    if (down) scroll("about");
                    break;
                case "about":
                    if (!down) scroll("landing");
                    if (down) scroll("contact");
                    break;
                case "contact":
                    if (!down) scroll("about");
                    break;
                default:
                    console.warn("scroller error");
            }
        });
    });
})(document, window);