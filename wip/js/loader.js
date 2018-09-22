((d, w) => {
    w.loadingAnimationDone = false;
    
    function exitLoader() {
        d.getElementById("loader").setAttribute("style", "animation-play-state: running;");
        d.body.setAttribute("class", "");
        d.getElementById("landing").scrollIntoView({behavior:"smooth"});
        
        setTimeout(() => {
            d.getElementById("loader").remove();
        }, 1500);
        
        w.init();
    }
    
    d.addEventListener("readystatechange", e => {
        if (d.readyState === "interactive") {
            setTimeout(() => {
                w.loadingAnimationDone = true;
                if (d.readyState === "complete") {
                    exitLoader();
                }
            }, 2500);
        }
        if (d.readyState === "complete" && w.loadingAnimationDone === true) {
            exitLoader();
        }
    });
})(document, window);