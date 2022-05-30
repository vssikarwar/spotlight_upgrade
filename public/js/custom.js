

$(document).ready(function(){
    $('.form-control').attr('autocomplete','new-password');
    // rule Setting
    
    $('.mobile-cid-icon,.overlay_12').on('click', function(){ 
        $('.overlay_12').fadeToggle(function(){
    
            $('.cid-dropdow-wr').slideToggle({
                 start: function () {
        $(this).css({
          display: "flex"
        })
      }
            })
            // $('.cid-drop-down').toggleClass('open');
            $('.mobile-cid-icon .sl-icn').toggleClass('list cross');
            $('.cid-drop-down .select1-selection').trigger('click');
    
        })
    })
    
    function startEndValueMgm(obj){
        if($(obj).val()=="between"){
        $(obj).parents('.input-field-wr').find('input.end-value').show();
        $(obj).parents('.input-field-wr').find('input.start-value').attr('placeholder','min')
        }
        else{
         $(obj).parents('.input-field-wr').find('input.end-value').hide();
         $(obj).parents('.input-field-wr').find('input.start-value').attr('placeholder','')
        }
    }
    
    $('.new-design-rule .input-field-wr select').each(function(){
        startEndValueMgm(this)
    })
    
    $(document).on('change','.new-design-rule .input-field-wr select', function(){
       startEndValueMgm(this)
    })
    
    $('#setting-list li').on('click', function() {
        var currentObj = $(this); 
        $(this).addClass('active').siblings().removeClass('active');
        $('.setting-values-wr .setting-value-form').slideUp();
         $('.setting-values-wr .setting-value-form[id="' + currentObj.attr("id") + '-setting"]').slideDown();
          $('.selected-value-wr .selected-value-item').slideUp();
          $('.selected-value-wr .selected-value-item[id="' + currentObj.attr("id") + '-selected"]').slideDown();
        // $('.setting-values-wr .setting-value-form[id="' + currentObj.attr("id") + '-setting"]').slideDown().siblings().slideUp();
        // $('.selected-value-wr .selected-value-item[id="' + currentObj.attr("id") + '-selected"]').slideDown().siblings().slideUp();
    })
    
    
    $('.sufix-unit input').each(function() {
        var fsinput = $(this);
        updateSuffix(fsinput, fonts);
    })
    
    $(document).on('keyup', '.sufix-unit input', function() {
        var fsinput = $(this);
        updateSuffix(fsinput, fonts);
    
    })
    
    
    // rule Setting
    
    
    
    $('.left-side-menu > ul > li.has-child.activeOnLoad').find('ul').slideDown('slow');
    $('.left-side-menu > ul > li.has-child > a').click(function(){
        if($(this).closest('li').hasClass('active')){
           $(this).closest('li').removeClass('active');
            $(this).closest('li').find('ul').slideUp('slow');
            return false;
        }else{
        $('.left-side-menu > ul > li.has-child.active').removeClass('active').find('ul').slideUp('slow')
        $(this).closest('li').addClass('active').find('ul').slideDown('slow');
    }
    })  
    })
    
    var fonts = "13px Roboto";
    var enhancer = 25;
    
    
    function updateSuffix(fsinput, fonts) {
        const width = getTextWidth(fsinput.val(), fonts) + enhancer;
        fsinput.siblings('._unit').css('left', width + 'px');
    }
    
    function getTextWidth(inputVal, fpnts) {
        var canvas = getTextWidth.canvas || (getTextWidth.canvas = document.createElement("canvas"));
        var context = canvas.getContext("2d");
        context.font = fpnts;
        var metrics = context.measureText(inputVal);
        return metrics.width;
    }
    
    
    $('.field-level:has(.form-control[disabled="disabled"])').addClass('fieldDisabled')
    
    $('.overview-pg-inner').on('click', '.keyword-type', function () {
        var type_keyword = $(this).data('keywordtype');
        var obj1 = $(this);
        $(this).parents('.search-keyword').find('.keyword-type-div').hide(function () {
            obj1.removeClass('active');
        })
        $(this).parents('.search-keyword').find('.keyword-type-div').each(function () {
            console.log($(this).attr('id'))
            if ($(this).attr('id') == type_keyword) {
                var obj = $(this);
                $(this).show(function () {
                    obj.addClass('active');
                })
            }
        })
    }).on('click', '.keyword-type-cancel', function () {
        var obj3 = $(this);
        $(this).parents('.keyword-type-div').removeClass('active');
        setTimeout(function () {
            obj3.parents('.keyword-type-div').hide();
        }, 500)
    })
    
    $('ul.key-words-tag li a').click(function () {
        $(this).parents('.search-keyword').find('.keyword-detail').fadeIn();
    })
    $('.keyword-detail .cross').click(function () {
        $(this).parents('.search-keyword').find('.keyword-detail').fadeOut();
    })
    
    $(".select-dropdown .dropdown-menu li a:not(.not-selectable)").click(function () {
        $(this).parents(".dropdown").find('.dropdown-toggle').html($(this).text());
        $(this).parents(".dropdown").find('.dropdown-toggle').val($(this).data('value'));
    });
    
    $(".filter-wr").on("keyup", '.filter-search', function () {
        var value = $(this).val().toLowerCase();
        $(this).parents('.filter-wr').find('.dropdown-menu ul li').filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    
    
    }).on('click', '.close', function () {
        $(this).closest('.removeable').remove()
    }).on('click', '.closeable-div .close', function () {
        $(this).closest('.closeable-div').hide().removeClass('show');
    
    }).on('click', '._filer-listing li a', function (e) {
    
        $('._filer-listing-wr').removeClass('show');
        $('.additional-filter-attr').show();
    
    }).on('click', '.filter-icon .filter', function () {
        $('._filer-listing-wr').addClass('show');
    });
    
    
    
    if ($('.budget-btn').length > 0) {
        var bdget_btn = $('.budget-btn');
        var btn_pos = bdget_btn.position();
        var window_pos;
        $(window).scroll(function () {
            window_pos = $(window).scrollTop();
            if (window_pos > btn_pos.top + 40) {
                bdget_btn.addClass('fixed-sticky');
                setTimeout(function () {
                    $('.budget-btn').addClass('anim');
                }, 700)
            } else {
                bdget_btn.removeClass('fixed-sticky anim')
            }
        })
    }
    if ($('.customerLeadSettings').length > 0) {
        var counterNode = $('.selected-item-count');
        var count = parseInt(counterNode.html());
        var selectedList = $('.selected-lead-list');
        $('.customerLeadSettings').on('change', '.sec-col input[type="checkbox"]', function() {
            var idvalue = $(this).attr('id');
            if ($(this).is(':checked')) {
                var labelName = $(this).siblings('.custom-control-label').text(); 
                counterNode.html(++count)
                var selectedHtml = $('<li style="display:none"><span>' + labelName + '</span><label class="sl-icn cross" for="' + idvalue + '"></label></li>');
                selectedList.append(selectedHtml).ready(function() {
                    selectedHtml.slideDown()
                });
            } else {
                var removable = selectedList.find('label[for="' + idvalue + '"]').closest('li');
                removable.slideUp(function() {
                    removable.remove()
                });
                counterNode.html(--count);
            }
        })
    }
    if($('.budget-btn').length > 0){
        var bdget_btn = $('.budget-btn');
        var btn_pos = bdget_btn.position();
        var window_pos;
        $(window).scroll(function(){
            window_pos =  $(window).scrollTop();
            if (window_pos > btn_pos.top + 40) {
                bdget_btn.addClass('fixed-sticky');
                setTimeout(function(){
                    $('.budget-btn').addClass('anim');
                },700)
            }
            else{
                bdget_btn.removeClass('fixed-sticky anim')
            }
        })
    }
    
    if ($('.account-top-tab').length > 0) {
        var top_tab = $('.account-top-tab');
        var top_tab_pos = top_tab.position();
        var window_pos;
        $(window).scroll(function () {
            window_pos = $(window).scrollTop();
            if (window_pos > top_tab_pos.top) {
                top_tab.addClass('fixed-sticky');
                setTimeout(function () {
                    $('.account-top-tab').addClass('anim');
                }, 700)
            } else {
                top_tab.removeClass('fixed-sticky anim')
            }
        })
    }
    
    $(document).on('click', '.copy-text-click', function (event) {
        var copytext = $(this).text();
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val(copytext).select();
        document.execCommand("copy");
        $temp.remove();
    })
    if ($('.visual-filter').length > 0) {
        var top_tab = $('.visual-filter');
        var top_tab_pos = top_tab.position();
        var window_pos;
        $(window).scroll(function () {
            window_pos = $(window).scrollTop();
            if (window_pos > top_tab_pos.top) {
                top_tab.addClass('fixed-sticky');
                setTimeout(function () {
                    $('.visual-filter').addClass('anim');
                }, 400)
            } else {
                top_tab.removeClass('fixed-sticky anim')
            }
        })
    }
    
    $(document).on('click', '.copy-text-click', function (event) {
        var copytext = $(this).text();
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val(copytext).select();
        document.execCommand("copy");
        $temp.remove();
    })
    
    
    
    
    $('.import-div input[type="file"]').change(function (e) {
        var fileName = e.target.files[0].name;
        console.log(fileName)
        //alert('The file "' + fileName +  '" has been selected.');
        $(this).parents('.import-div').next('.file-name-label').addClass('text-success').html(fileName);
    });
    
    $(document).on('click', '.scroll-fix-close,.overlay-1', function () {
    
        $('.view-fullscreen').removeClass('fullscreen-css');
        $('.overlay-1').fadeOut();
    
    })
    
    
    if ($('.bottom-box').length > 0) {
        $('.content-page .content').css('margin-bottom', 59)
    }
    
    
    $('.audiences-inner ul .has-child').prepend('<i class="arrow"></i>');
    
    
    // custom parameter repeater
    $('.account-setting').on('click', '.add-form, .remove-form', function (e) {
        if (e.target.classList.contains('add-form')) {
            $('.campaign-setting-form .custom-parameter-repeater').addRepeatedHtml();
        }
        if (e.target.classList.contains('remove-form') && $('.custom-parameter-repeater').length > 1) {
            $(this).parents('.custom-parameter-repeater').remove();
        }
    })
    
    $('.write-ad-page').on('click', '.add-form, .remove-form', function (e) {
        if (e.target.classList.contains('add-form')) {
            $('.write-ad-page .repeate-write-ad').addRepeatedHtml();
        }
        if (e.target.classList.contains('remove-form') && $('.repeate-write-ad').length > 1) {
            $(this).parents('.repeate-write-ad').remove();
        }
    })
    
    // nested nav 
    $('.audiences-wr').on('click', '.arrow', function (e) {
        //alert();
        if ($(this).closest('li').hasClass('active')) {
            $(this).closest('li').find('ul:first').slideUp();
            $(this).closest('li').removeClass('active');
            return false;
        } else {
            //   $('nav.nav ul li').removeClass('active').children('ul').slideUp();
            $(this).closest('li').siblings().removeClass('active').find('ul:first').slideUp();
            $(this).closest('li').addClass('active').find('ul:first').slideDown();
        }
    })
    
    //plugin 
    $.fn.addRepeatedHtml = function () {
        var htmlToRepeat = $(this[0]).clone();
        var idgenrate, i = 0;
        htmlToRepeat.find('.form-control,.custom-control-input').each(function () {
            idgenrate = "newID" + i++;
            if ($(this).hasClass('field-focused')) {
                $(this).removeClass('field-focused');
            }
            $(this).attr('id', idgenrate).next().attr('for', idgenrate);
            if ($(this).is('input')) {
                $(this).val('');
            }
            if ($(this).is('input:checkbox') || $(this).is('input:radio')) {
                $(this).prop('checked', false);
            }
        })
        htmlToRepeat.insertAfter(this.last());
    }
    
    
    
    
    $('.all-campaigns-added').on('click', '.add-form, .remove-form', function (e) {
        if (e.target.classList.contains('add-form')) {
            $('.all-campaigns-added .campaign-repeat').addRepeatedHtml();
        }
        if (e.target.classList.contains('remove-form') && $('.campaign-repeat').length > 2) {
            $(this).parents('.campaign-repeat').remove();
        }
    })
    
    $(document).on('change', '.campaign-setting-check', function () {
        var data_id = $(this).data('id');
        var checked_item = $(this);
        $('.campaign-setting-form').each(function () {
            if ($(this).attr('id') == data_id) {
                if (checked_item.is(':checked')) {
                    $(this).slideDown();
                } else {
                    $(this).slideUp();
                }
            }
        })
    
    
    
    
    
    
    
        // if ($(this).is(':checked')) {
        //    $('.campaign-setting-form').slideDown(); 
        // }
        //     else{
        //   $('.campaign-setting-form').slideUp(); 
        //     }
    })
    
    
    
    $('.create-campaign').on('change', '.target-nearby-location', function () {
        if ($(this).is(':checked')) {
            $('#target-nearby-loc').slideDown();
        } else {
            $('#target-nearby-loc').slideUp();
        }
    })
    
    // 
    
    function checkValue(input) {
        if (!$(input).val() == "") {
            $(input).addClass('field-focused');
        } else {
            if (!$(input).is(':focus')) {
                $(input).removeClass('field-focused');
            }
        }
    }
    
    // flying input
    $('.rule-input .form-control').each(function () {
        checkValue(this);
    })
    
    
    $('.flying-input .form-control').each(function () {
        checkValue(this);
    })
    
    
    $(document).on('focus paste change', '.form-control', function () {
        $(this).addClass('field-focused');
    
    })
    $(document).on('blur change', '.form-control', function () {
        checkValue(this);
    
    })
    
    
    $(document).on('focus', '.form-control,.select2-search__field,.bootstrap-tagsinput  input,.custom-control-input', function () {
        $(this).parents('.field-level').addClass('fld-wr');
    
    })
    $(document).on('blur', '.form-control,.select2-search__field,.bootstrap-tagsinput  input,.custom-control-input', function () {
        $(this).parents('.field-level').removeClass('fld-wr');
    })
    
    // taginput text field
    
    // $(document).on('focus','.bootstrap-tagsinput input', function(){
    //   $(this).parents('.field-level').find('.form-control').addClass('field-focused');
    // })
    //   $(document).on('blur','.bootstrap-tagsinput input', function(){
    //     if($(this).parents('.field-level').find('.form-control').val()==""){
    //   $(this).parents('.field-level').find('.form-control').removeClass('field-focused');
    // }
    // })
    
    // right popup open and hide
    
    // if ($('.sl-daterange').length > 0) {
    //     $('.sl-daterange').daterangepicker({});
    // }
    
    $('.add-cid').click(function () {
        $('.overlay').fadeIn(function () {
            $('._right-pop').addClass('open');
        })
    })
    
    $('.add-cid').click(function () {
        $('.overlay').fadeIn(function () {
            $('._right-pop').addClass('open');
        })
    })
    
    // $('._close,.overlay').click(function() {
    //     $('._right-pop,._assignright-pop,._viewright-pop').removeClass('open');
    
    // })
    
    $(document).on('click', '._close,.overlay', function () {
        $('._right-pop,._assignright-pop,._viewright-pop').removeClass('open');
        $('.overlay').fadeOut();
    
    })
    
    $('.view-account').click(function () {
        $('.overlay').fadeIn(function () {
            $('._viewright-pop').addClass('open');
        })
        //$('.overlay').fadeOut();
    })
    
    $('.asign-location').click(function () {
        $('.overlay').fadeIn(function () {
            $('._assignright-pop').addClass('open');
        })
        //$('.overlay').fadeOut();
    })
    // add location slide down up
    
    $('.add-location-list input[type="checkbox"]').click(function (e) {
        console.log(e);
        if ($(this).is(':checked')) {
            $(this).parents('.add-location-list').addClass('active').find('.edit-location-form').slideDown();
        } else {
            $(this).parents('.add-location-list').removeClass('active').find('.edit-location-form').slideUp();
        }
    })
    
    
    $('.cid-accordion').on('click', '[data-toggle=collapse] .add-cid', function (e) {
        e.stopPropagation();
    });
    
    $('.nav-button').click(function () {
        $('.app').toggleClass('hide-menu')
        $(this).toggleClass('active')
    })
    // counter animation
    $('.location-count').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 1500,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
    
    //bootstrap tooltip
    
    $('[title]').tooltip({
        trigger: 'hover'
    })
    
    $('.adgroup-select2').on("select2:unselect", function (e) {
        $('.tooltip').remove();
    });
    
    
    
    if ($('.account-top-tab').length > 0) {
        var pos = $('.account-top-tab .btn.active').position().left;
        $('.account-top-tab').animate({scrollLeft: pos - 10}, 1000);
    }
    
    // start for promotions
    
    var mobile = 0, desktop = 1;
    
    $('.device-change').on('click', '.sl-icn', function (e) {
        $('.device-change .sl-icn').removeClass('active');
    
        if (e.target.classList.contains('mobile-icn') && mobile === 0) {
    
            $('.device-change .mobile-icn').addClass('active');
            $('.preview-device-suffle .ad-preview-window-wr').wrap('<div class="smartphone1"><div class="smartphoneInner"></div></div>')
            desktop = 0;
            mobile = 1;
            return false;
        } else if (e.target.classList.contains('desktop-icn') && desktop === 0) {
            $('.device-change .desktop-icn').addClass('active');
            $('.preview-device-suffle .ad-preview-window-wr').unwrap().unwrap();
            mobile = 0;
            desktop = 1;
        }
    })
    
    $(document).on('change', '.ad-setting', function () {
        var data_id = $(this).data('id');
        var checked_item = $(this);
        $('.ad-setting-div').each(function () {
            if ($(this).attr('id') == data_id) {
                if (checked_item.is(':checked')) {
                    $(this).slideDown();
                } else {
                    $(this).slideUp();
                }
            }
        })
    })
    
    
    $(document).ready(function() {
        if ($('.datetimepicker').length > 0) {
    
            var nowDate = new Date();
            var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);
            $('.datetimepicker').datetimepicker({
                startDate: today,
                autoclose: true,
                todayHighlight: true,
                'format': 'M dd, yyyy hh:ii'
            })
        }
    });
     