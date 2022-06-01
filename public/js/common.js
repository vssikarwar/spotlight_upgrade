$(function () {
    $('[title]').tooltip({trigger: "hover"})
    $('[title]').on('mouseleave click focus', function () {
        $('.tooltip').remove();
    })
})
$('#sidebar-menu').hover(function () {
    $(this).parents('.side-menu').addClass('hover-active');
}, function () {
    $(this).parents('.side-menu').removeClass('hover-active');
});
if (typeof (ids) == "undefined") {
    ids = [];
}
var btn_loader = '<i class="mini-loader"></i>';

$('form').find('input[type!="hidden"],select,textarea').not('.not-required').after('<small class="text text-danger" style="display:none;"></small>');

$(document).on('focusin', 'input,select,textarea', function (e) {
    $(this).siblings('.text-danger').slideUp();
    $(this).siblings('.error-message').slideUp(function (r) {
        $(this).remove();
    });
});
$(document).on('change', '.select2', function (e) {
    $(this).siblings('.text-danger').slideUp();
});

$('.keyword-type-message').focusin(function (e) {
    $(this).siblings('small').removeAttr('class').addClass('text-info').html('Insert different type keywords like: <b>+BROAD, "PHRASE", [EXACT]</b>.').slideDown();
});

$('.keyword-type-message').focusout(function (e) {
    $(this).siblings('small').removeAttr('class').addClass('text-danger').html('').slideUp();
});
$(document).on('change', '#addto', function (e) {
    var divId = $(this).val();
    $('#adgroup').val('');
    $('.form-div').hide();
    $('#div-' + divId).fadeIn();
});
$(document).ready(function (e) {
    $(document).on('change', 'input[type!="hidden"],select,textarea', function (e) {
        $('#edit-valid').val(1);
    });
    if (typeof (activeMenu) != 'undefined') {
        if (activeMenu != "") {
            $('#menu-'+activeMenu).addClass('activeOnLoad');
        }
        if (activeMenu2 != "") {
            $('#sub-menu-' + activeMenu2).addClass('active');
        }
    }
    if (typeof (urlForJs) != 'undefined') {
        var queryString = "url="+$(location).attr('href');
        jQuery.ajax({
            type: "POST",
            url: urlForJs+'ajax/save-browsing-logs',
            data: queryString,
            success: function(data){}
        });
    }
});

$(document).on('keyup', '.text-for-validation', function (e) {
    max_length = $(this).attr('maxlength');
    c_length = $(this).val().length;
    if (typeof (max_length) == 'undefined') {
        length_message = '';
        max_length = c_length + c_length;
    } else {
        length_message = ' out of ' + max_length;
    }
    if (c_length <= max_length) {
        sm_class = 'success';
        message = 'You have typed ' + c_length + length_message + ' characters.';
    } else {
        sm_class = 'danger';
        message = 'Maximum limit reached';
    }
    $(this).siblings('small').removeAttr('class').addClass('text text-' + sm_class).html(message).slideDown();
});

$(document).on('focusout', '.text-for-validation', function (e) {
    $(this).siblings('small').removeAttr('class').addClass('text-danger').html('').slideUp();
});

function please_wait_btn(btn_id) {
    $('#' + btn_id).html(btn_loader + ' Please Wait...').attr('disabled', 'disabled');
    return;
}

$(document).on('click', '.message p,.message-position-default p', function (e) {
    $(this).slideUp(function () {
        $(this).remove();
    });
});

function message_show_hide(message, btn_id = "", btn_text = "Apply") {
    if (btn_id != "") {
        $('#' + btn_id).html(btn_text).removeAttr('disabled');
    }
    $('.message').html('');
    $('.message').html(message).attr('style', 'display:none;').slideDown();
    if (message == '<p class="danger">You need to be signed in to perform this action</p>') {
        location.href = urlForJS + 'login';
    }
    message_hide();
}

function message_hide() {
    setTimeout(function () {
        $('.alert,.message').slideUp();
    }, 10000);
    return;
}

function reset_form(id) {
    $('#' + id).trigger('reset');
}

$(document).on('keydown', '.num-only', function (event) {
    if (event.shiftKey == true) {
        event.preventDefault();
    }
    if ((event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 96 && event.keyCode <= 105) || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 || event.keyCode == 39 || event.keyCode == 46 || event.keyCode == 190) {

    } else {
        event.preventDefault();
    }

    if ($(this).val().indexOf('.') !== -1 && event.keyCode == 190)
        event.preventDefault();
});

$(document).on('focusout', '.num-only', function (e) {
    var value = rtrim($(this).val(), '.');
    $(this).val(value);
});

function trim(str, chars) {
    return ltrim(rtrim(str, chars), chars);
}

function ltrim(str, chars) {
    chars = chars || "\s";
    return str.replace(new RegExp("^[" + chars + "]+", "g"), "");
}

function rtrim(str, chars) {
    chars = chars || "\s";
    return str.replace(new RegExp("[" + chars + "]+$", "g"), "");
}

$(document).on('keydown', ".numericOnly", function (e) {
    if (e.shiftKey || e.ctrlKey || e.altKey) { // if shift, ctrl or alt keys held down
        e.preventDefault(); // Prevent character input
    } else {
        var n = e.keyCode;
        if (!((n == 8) // backspace
                || (n == 9) // tab
                || (n == 13) // enter
                || (n == 46) // delete
                || (n >= 35 && n <= 40) // arrow keys/home/end
                || (n >= 48 && n <= 57) // numbers on keyboard
                || (n >= 96 && n <= 105)) // number on keypad
                ) {
            e.preventDefault(); // Prevent character input
        }
    }
});

$(document).on('keydown', ".numericDotOnly", function (e) {
    if (e.shiftKey || e.ctrlKey || e.altKey) { // if shift, ctrl or alt keys held down
        e.preventDefault(); // Prevent character input
    } else {
        var n = e.keyCode;
        if (!((n == 8) // backspace
                || (n == 9) // tab
                || (n == 13) // enter
                || (n == 46) // delete
                || (n >= 35 && n <= 40) // arrow keys/home/end
                || (n >= 48 && n <= 57) // numbers on keyboard
                || (n >= 96 && n <= 105)
                ) // number on keypad
                ) {
            if (n !== 190) {
                e.preventDefault(); // Prevent character input
            }

        }
    }
});


$('.not-editable').focusin(function (e) {
    $(this).after('<small class="text-info">You cannot edit this after submit</small>');
});

$('.not-editable').focusout(function (e) {
    $('.text-info').remove();
});

$('.business-name').focusout(function () {
    value = $(this).val();
    valueArr = value.split("");
    $('#business-name-error').val('');
    symbolCount = digitCount = 0;
    $.each(valueArr, function (k, v) {
        if (v.charCodeAt(0) > 47 && v.charCodeAt(0) < 58) {
            digitCount++;
        } else if ((v.charCodeAt(0) > 31 && v.charCodeAt(0) < 48) || (v.charCodeAt(0) > 57 && v.charCodeAt(0) < 65) || (v.charCodeAt(0) > 90 && v.charCodeAt(0) < 97) || (v.charCodeAt(0) > 122 && v.charCodeAt(0) < 126)) {
            symbolCount++;
        }
    });
    if (digitCount > 6) {
        errorMsg = 'You cannot have more than 6 digits in total.';
        $('#business-name-error').val(errorMsg);
        $('.business-name').siblings('.text-danger').html(errorMsg).slideDown();
    } else if (symbolCount > 6) {
        errorMsg = 'You cannot have more than 6 punctuation characters in total.';
        $('#business-name-error').val(errorMsg);
        $('.business-name').siblings('.text-danger').html(errorMsg).slideDown();
    }
});


$(document).ready(function (e) {
    message_hide();
    $('.submit-btn').removeAttr('disabled');
});

checkAll = {}; uncheckIds = [];
$(document).on('change', '.check-all', function (e) {
    uncheckIds = [];
    type = $(this).data('type');
    type = (typeof (type) != 'undefined') ? '-' + type : '';
    checkClass = 'check' + type;
    if ($(this).is(':checked')) {
        $('.' + checkClass).prop('checked', true);
        checkAll['select-all' + type] = 1;
        totalCount = parseInt($('#total-count' + type).html());
        $('.check-count' + type).html(totalCount);
    } else {
        $('.' + checkClass).prop('checked', false);
        checkAll['select-all' + type] = 0;
        $('.check-count' + type).html(0);
    }
    idsCount = setIds();
});

$(document).on('change', '.check', function (e) {
    type = $(this).data('type');
    type = (typeof (type) != 'undefined') ? '-' + type : '';
    checkClass = 'check' + type;
    id = $(this).parents('.get-id').data('id');
    selectCount = parseInt($('.check-count' + type).html());
    if (!$(this).is(':checked')) {
        uncheckIds.push(id);
        selectCount--;
    } else {
        uncheckIds = jQuery.grep(uncheckIds, function (value) {
            return value != id;
        });
        selectCount++;
    }
    $('.check-count' + type).html(selectCount);
    setIds(selectCount);
});
$('.check,.check-all').prop('checked', false);

function setIds(selectCount = 0) {
    ids = $('.' + checkClass).filter(':checked').map(function () {
        return parseInt($(this).parents('.get-id').data('id'));
    }).get();
    if (ids.length == 0) {
        $('.operation' + type).hide();
        $('.show-unchecked' + type).fadeIn();
        $('.plus-btn').fadeIn();
            console.log('true');
    } else {
        if ($('#see-live-locations').is(':checked')) {
            $('.operation' + type).fadeOut();
            $('.show-unchecked' + type).show();
        }else{
            $('.operation' + type).fadeIn();
            $('.show-unchecked' + type).hide();
        }
        $('.plus-btn').hide();
    }
    if (ids.length == $('.check' + type).length) {
        $('#check-all' + type).prop('checked', true);
        selectAll = 1;
        totalCount = parseInt($('#total-count' + type).html());
        $('.check-count' + type).html(totalCount);
    } else {
        $('#check-all' + type).prop('checked', false);
        selectAll = 0;
    }
//    if(ids.length>0){
//        $('#location-count').fadeIn();
//    }
//    else{
//        $('#location-count').fadeOut();
//    }
    return ids.length;
}
selectAll = 0;
function uncheckAll(type = '', totalCount = '') {
    if (type == '-0') {
        dtype = '-unsubscribed';
    } else if (type == '-1') {
        dtype = '-subscribed';
    } else {
        dtype = '';
    }
    $('#check-all' + dtype + ',.check' + dtype).prop('checked', false);
//    if (totalCount != '')
    $('#total-count' + dtype).html(totalCount);
    $('.operation' + dtype).fadeOut();
    $('.check-count' + dtype).html(0);
    $('#location-count').fadeOut();
    if(totalCount>0){
        $('.div-btn'+dtype).fadeIn();
    }
    else{
        $('.div-btn'+dtype).fadeOut();
    }
     checkAll = {};
}

$(document).on('click', '.change-status', function () {
    var statusids = [$(this).parent('td').siblings('.get-id').data('id')];
    if ($(this).hasClass('status-ENABLED')) {
        var status = 'PAUSED';
    } else {
        var status = 'ENABLED';
    }
    $(this).removeClass('change-status');
    changeStatus(statusids, status);
});

$('.btn-delete').click(function () {
    id = $(this).parents('tr').children('.get-id').data('id');
    swal({
        title: "Are you sure",
        text: "Click 'Yes' to confirm?",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-success",
        confirmButtonText: "Yes",
        closeOnConfirm: true
    },
    function () {
        changeStatus([id], 'DELETE');
    });
});

if (typeof (confirmClick) !== "undefined") {
    $(document).on('click', 'a', function (e) {

        redirectLink = $(this).attr('href');
        if (redirectLink != '#' && !(this).hasClass('download-link')) {
            e.preventDefault();
            swal({
                title: "Are you sure",
                text: "you want to close this page?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-success",
                confirmButtonText: "Yes",
                closeOnConfirm: true
            },
            function () {
                location.href = redirectLink;
            });
        }


    });
}

$('.menu-operation').click(function () {
    $('.e-cancel-btn').trigger('click');
    var status = $(this).data('operation');
    if (status == 'ENABLED' || status == 'PAUSED' || status == 'REMOVED' || status == 'EXCLUDE') {
        swal({
            title: "Are you sure",
            text: "you want to " + status.toLowerCase().replace('ed', 'e') + " selected item(s) ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-success",
            confirmButtonText: "Yes",
            closeOnConfirm: true
        },
        function () {
            changeStatus(ids, status);
        });
    } else {
        $('.campaign-manage-div,.head_tb').slideUp();
        $('#' + status + '-div').slideDown();
    }
});

$('.cancel-btn').click(function () {
    if ($(this).is('.refresh')) {
        location.reload();
    } else {
        show_title_tab();
        $('.text-danger').slideUp();
        if ($(".portfolio-div").length > 0) {
            $(".portfolio-div").css('display', 'none');
        }
    }

});

/**
 * changeStatus
 * @lastUpdatedBy: Gyandeep Sharma Feb 22, 2019
 * 
 * */

function changeStatus(ids, status) {
    $.ajax({
        type: 'POST',
        url: urlForJs + 'ajax/' + status_url,
        beforeSend: function () {$('.loader-div').fadeIn();},
        data: {'ids': ids, 'status': status},
        success: function (e) {
            $(".loader-div").fadeOut();
            var result = $.parseJSON(e)
            message_show_hide(result.message);
            $('.change-status').removeAttr('disabled');
            if (result.code == 200) {
                /*if (typeof (result.redirect) !== "undefined") {
                    if (result.redirect == 1) {
                        window.location.reload(true);
                    }
                }
                $(ids).each(function (key, value) {
                    if ((status == 'ENABLED' || status == 'PAUSED') && (statusFilter == '' || statusFilter == 'all')) {
                        $('#status-' + value).removeAttr('class').addClass('change-status act status-'+status);
                    } else {
                        $('#check-' + value).parents('tr').remove();
                    }
                });*/
//                if($('.geAdgroup-Table count doesn't update when we pause adgroup in all enabled filtert-id').length==0){
                    window.location.reload(true);
//                }
//                operation_btn_hide();
            }
            else{
                $('.status-span').addClass('change-status');
            }
        },
    });
}

function select_id_error() {
    swal('Please select atleast one row');
}

function operation_btn_hide() {
    $('.check-all,.check').prop('checked', false);
    $('#selected-count').slideUp();
    $('.operation').hide();
    $('.plus-btn').fadeIn();
    trlength = $('.tab-pane').find('tr').length;
    if (trlength == 1) {
        cUrl = location.href;
        new_url = cUrl.substring(0, cUrl.indexOf('?'));
        //location.href = new_url;
    }
}
function show_title_tab() {
    $('.campaign-manage-div').slideUp();
    $('.head_tb').slideDown();
    $('.submit-btn').removeAttr('disabled');
}

$('#clientadwordsid').change(function () {
    cid = $(this).val();
    changeCidSession(cid,'');
});

$(document).on('click','.change-cid',function(e){
    cid = $(this).data('cid');
    link = $(this).data('link');
    changeCidSession(cid,link);
});

$.urlParam = function (name) {
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    return results != null ? results[1] : null;
}


function changeCidSession(cid,link){
    $.ajax({
        url: urlForJs + 'ajax/change-session-cid',
        type: 'POST',
        data: {'clientId': cid},
        beforeSend: function () {$('.loader-div').fadeIn();},
        success: function (e) {
            result = JSON.parse(e);
            if (result.code == 200) {
                
                if(link==''){
                    if (pageURL.startsWith("campaign-structures")) {
                            pageURL = 'campaign-structures';
                    }
                }
                if(link!=''){
                    window.location = urlForJs + link;
                }
                else{
                    if (pageURL.startsWith("audiences") || pageURL.startsWith("adword-changes-history")) {
                        pageURL = 'campaigns';
                    }
                    newURL = pageURL.split('?');
                }
                window.location = urlForJs + newURL[0];
            }
            else{
                message_show_hide(result.message);
            }
        }
    });
}
var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
};

$(".loader").hide();