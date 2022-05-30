var newwindow;
function login_popup(url) {
    var screenX = typeof window.screenX != 'undefined' ? window.screenX : window.screenLeft,
            screenY = typeof window.screenY != 'undefined' ? window.screenY : window.screenTop,
            outerWidth = typeof window.outerWidth != 'undefined' ? window.outerWidth : document.body.clientWidth,
            outerHeight = typeof window.outerHeight != 'undefined' ? window.outerHeight : (document.body.clientHeight - 22),
            width = 580,
            height = 500,
            left = parseInt(screenX + ((outerWidth - width) / 2), 10),
            top = parseInt(screenY + ((outerHeight - height) / 2.5), 10),
            features = (
                    'width=' + width +
                    ',height=' + height +
                    ',left=' + left +
                    ',top=' + top +
                    ',scrollbars=yes'
                    );
    newwindow = window.open(urlForJs + 'login/' + url, '', features);
    if (window.focus) {
        newwindow.focus()
    }
    return false;
}

function isLogin(url) {
    login_popup(url)
    $.ajax({
        type: 'POST',
        url: urlForJs + 'ajax/check-login',
        success: function (e) {
            var result = $.parseJSON(e);
            if (result.code == 200) {
                message_show_hide('<p class="danger">Already logged in</p>');
                location.href = urlForJs + 'branddashboard';
                newwindow.close();
            } else {
            }
        }
    });
}

