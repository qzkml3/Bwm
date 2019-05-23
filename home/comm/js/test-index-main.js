$(document).ready(function () {
    catetoryClickToCont();
    highHtml();
});

/** catetory를 클릭하면 해당 cont로 이동한다. **/
function catetoryClickToCont() {
    $('#aside-left a').on('click', function (e) {
        e.preventDefault();
        var cateText = $(this).text();
        $('#main li').each(function () {
            if ($(this).text().match(cateText)) {
                var v = $(this).text();
                v = v.substring(0, v.indexOf('/'));

                history.pushState(null, '#' + v, '#' + v);

                $('html, body').animate({scrollTop: $(this).offset().top - 5});
                return false;
            }
        });
        return false;
    });
}

//html 파일에는 하이라트 한다.
function highHtml() {
    $('#main ul a').each(function () {
        var $a = $(this);
        if (!$a.text().match('.html')) {
            $a.css({
                'background': '#ccc'
            });
        }
    });

}