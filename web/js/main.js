$(document).ready(function () {
    var route = $('input[name = route]').val();
    $('.submit-btn').on('click', function (e) {
        e.preventDefault();
        var thisObj = $(this);
        var data = $($(this).parent('div').find('input'));
        $.ajax({
            url: route,
            method: 'POST',
            data: data,
            success: function (data) {
                thisObj.parent('div').find('.text-success').html(data);
            }
        })
    })
});