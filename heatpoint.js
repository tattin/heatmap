;(function(){
    window.onmousedown = function(e){
        request = new XMLHttpRequest();
        request.open("GET", "http://192.168.33.10/share/heatmap/total.php?x=" + e.pageX + "&y=" + e.pageY + "&s=" + document.body.scrollTop + "&url=" + location.href);
        request.send(null);
    }
})();