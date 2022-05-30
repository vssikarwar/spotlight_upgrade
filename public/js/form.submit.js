$(document).on("submit", "form", function (e) {
    var form = $(this);
    pageLink = form.data("link");
    if (typeof pageLink !== "undefined") {
        e.preventDefault();
        //        if(typeof (confirmClick) !== "undefined"){
        //            swal({
        //                title: "Are you sure",
        //                text: "Click 'Yes' to confirm?",
        //                type: "warning",
        //                showCancelButton: true,
        //                confirmButtonClass: "btn-success",
        //                confirmButtonText: "Yes",
        //                closeOnConfirm: true
        //            },
        //            function () {
        //                submit_form(form);
        //            });
        //        }
        //        else{
        submit_form(form);
        //        }
    }
});
function submit_form(form) {
    var formData = new FormData(form[0]);
    if (typeof ids !== "undefined" && ids != "") {
        formData.append("ids", ids);
    } /*else if( ids != '') {
        formData.append('ids', ids);
    }*/
    if (typeof campaign_id !== "undefined" && ids == "") {
        formData.append("ids", campaign_id);
    }
    if (typeof checkAll !== "undefined") {
        formData.append("checkAll", JSON.stringify(checkAll));
    }
    if (typeof uncheckIds !== "undefined") {
        formData.append("uncheckIds", uncheckIds);
    }
    submitBtn = form.find('button[type="submit"]').attr("id");
    btnText = $("#" + submitBtn).html();
    form_id = form.attr("id");
    $.ajax({
        url: urlForJs + pageLink,
        // headers : {
        //     'X-CSRF-Token': $('[name="_csrfToken"]').val()
        // },
        type: "POST",
        data: formData,
        beforeSend: function (XHR) {
            please_wait_btn(submitBtn);
            form.find("small.text-danger").slideUp();
            $(".close-btn").hide();
        },
        contentType: false,
        processData: false,
        success: function (e) {
            var result = $.parseJSON(e);
            message_show_hide(result.message, submitBtn, btnText);
            $('#' + submitBtn).children('.waves-ripple').remove();
            $('.close-btn').show();
            if(typeof (result.noTopScroll) == "undefined"){
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
            if (result.code == 200) {
                $("#" + submitBtn).attr("disabled", "disabled");
                $(".close-btn").trigger("click");
                if (typeof show_title_tab !== "undefined") {
                    show_title_tab();
                    operation_btn_hide();
                }
                if (typeof result.redirect !== "undefined") {
                    reset_form(form_id);
                    if (result.redirect == 1) {
                        location.href = urlForJs + pageURL;
                    }
                }
                if (typeof result.reload !== "undefined") {
                    if (result.reload == 1) {
                        location.reload();
                    }
                }

                if (typeof result.redirectPage !== "undefined") {
                    reset_form(form_id);
                    if (result.redirectPage != "") {
                        window.location.href = urlForJs + result.redirectPage;
                    }
                }

                if (typeof result.value !== "undefined") {
                    form.parents(".setting-div")
                        .find(".value")
                        .html(result.value);
                    form.parents(".setting-div")
                        .find(".updated-input")
                        .attr("placeholder", result.value);
                    form.parents(".close-div").slideUp();
                    form.parents(".setting-div").find(".open-div").slideDown();
                }

                if (typeof result.outStr !== "undefined") {
                    $.each(result.outStr, function (outK, outV) {
                        var nameKey = outV.k;
                        var nameVal = outV.v;
                        var inputType = form
                            .find("input[name=" + nameKey + "]")
                            .not(":button,:hidden")
                            .attr("type");

                        if (inputType == "text") {
                            form.find("input[name=" + nameKey + "]").val("");
                            form.find("input[name=" + nameKey + "]").val(
                                nameVal
                            );
                        } else if (inputType == "radio") {
                            form.find("input[name=" + nameKey + "]")
                                .not(":button,:hidden")
                                .removeAttr("checked");
                            form.find(
                                "input[name=" +
                                    nameKey +
                                    "][value=" +
                                    nameVal +
                                    "]"
                            )
                                .not(":button,:hidden")
                                .attr("checked", "checked");
                            form.find(
                                "input[name=" +
                                    nameKey +
                                    "][value=" +
                                    nameVal +
                                    "]"
                            )
                                .not(":button,:hidden")
                                .prop("checked", true);
                        } else {
                            form.find("input[name=" + nameKey + "]").val(
                                nameVal
                            );
                        }
                    });
                }
            } else {
                if (result.code == 300) {
                    $.each(result.error, function (k, value) {
                        $("#" + k)
                            .siblings(".text-danger")
                            .html(value)
                            .slideDown();
                        $("#" + k)
                            .parent(".minicolors")
                            .siblings(".text-danger")
                            .html(value)
                            .slideDown();
                    });
                    if (typeof result.openNewWindow !== "undefined") {
                        if (result.openNewWindow != "") {
                            window.open(
                                urlForJs + result.openNewWindow,
                                "_blank" // <- This is what makes it open in a new window.
                            );
                        }
                    }
                } else if (result.code == 1) {
                    location.href = urlForJs + "branddashboard";
                } else if (result.error == 1) {
                    location.href = urlForJs + "login";
                } else if (result.code == 399) {
                    $.each(result.error, function (k, value) {
                        $(".message").show();
                        $(".message").html(
                            '<p class="danger">' + value + "</p>"
                        );
                    });
                }
                if (result.code == 0) {
                    $("#gmbgroups-file").val("");
                }
            }
        },
        error: function (e, a, t) {
            $("button,input,textarea,select").removeAttr("disabled");
            message_show_hide("", submitBtn, btnText);
        },
    });
}

$(".custom-control").click(function (e) {
    $(this).siblings(".text-danger").slideUp();
});

$(".text-for-validation").keyup(function (e) {
    max_length = parseInt($(this).attr("maxlength"));
    c_length = $(this).val().length;
    if (c_length < max_length) {
        sm_class = "success";
        message =
            "You have typed " +
            c_length +
            " out of " +
            max_length +
            " characters";
    } else {
        sm_class = "danger";
        message = "Maximum limit reached";
    }
    $(this)
        .siblings("small")
        .removeAttr("class")
        .addClass("text text-" + sm_class)
        .html(message)
        .slideDown();
});

$(".text-for-validation").focusout(function (e) {
    $(this)
        .siblings("small")
        .removeAttr("class")
        .addClass("text-danger")
        .html("")
        .slideUp();
});