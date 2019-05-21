$(document).ready(function () {
    asideToCont();
});

/** aside를 클릭하면 해당 cont로 이동한다. **/
function asideToCont() {
    $('#aside-left a').on('click', function (e) {
        e.preventDefault();
        var cateText = $(this).text();
        $('#main li').each(function () {
            if ($(this).text().match(cateText)) {
                var v = $(this).text();
                $('html, body').animate({scrollTop: $(this).position().top});
                return false;
            }
        });
        return false;
    });
}