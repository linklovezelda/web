window.onload = function() {
    var oUl = document.getElementById('menu');
    var aLi = oUl.getElementsByTagName('li');
    var aDiv = oUl.getElementsByTagName('div');
    var timer = null;
    for (var i = 0; i <
        aLi.length; i++) {
        var oA = aLi[i].getElementsByTagName(
            'a')[0];
        oA.index = i;
        clearTimeout(timer);
        oA.onmouseover = function() {
            this.className = 'hover';
            aDiv[this.index].style.display = 'block';
        }
        oA.onmouseout = function() {
            this.className = '';
            n = this.index;
            timer = setTimeout(function() {
                aDiv[n].style.display = 'none';
            }, 200);
        }
        aDiv[i].onmouseover = function() {
            clearTimeout(timer);
            this.style.display = 'block';
        }
        aDiv[i].onmouseout = function() {
            this.style.display = 'none';
        }
    }
}