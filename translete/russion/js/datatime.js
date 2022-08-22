$(function(){
    /* выбор города */
    $('.delivery_list').click(function(){
        $(".cities_list").slideToggle('fast');
    });
    $('ul.cities_list li').click(function(){
        var tx = $(this).html();
        var tv = $(this).attr('alt');
        $(".cities_list").slideUp('fast');
        $(".delivery_list span").html(tx);
        $(".delivery_text").html(tv);


        var IMG = document.querySelectorAll('#video12 img'),
    IFRAME = document.querySelector('#video12 iframe');
        for (var i = 0; i < IMG.length; i++) {
            IMG[i].onclick = function () {
                var idIMG = this.src.replace(/http...img.youtube.com.vi.([\s\S]*?).1.jpg/g, '$1');
                IFRAME.src = 'http://www.youtube.com/embed/' + idIMG + '?rel=0&autoplay=1';
                if (this.dataset.end) IFRAME.src = IFRAME.src.replace(/([\s\S]*)/g, '$1&end=' + this.dataset.end);
                if (this.dataset.start) IFRAME.src = IFRAME.src.replace(/([\s\S]*)/g, '$1&start=' + this.dataset.start);
                this.style.backgroundColor = '#555';
            }
        }


    });
})
