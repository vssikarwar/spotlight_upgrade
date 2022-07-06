@extends('backend.dashboards.support.layouts.main')
@section('main-content')
<style>
    .account-logo{
        display: inline;
        margin-right: 10px;
    }
    .account-logo img{
        display: inline;
        width: 20px;
    }
    .btn-dark-blue{
        padding: 2px 17px;
    }

</style>
<div class="overlay"></div>
<div class="_right-pop" style="width: 37%;">
    <div class="row align-items-start">
        <div class="col-12">
            <h5>
                <a href="javascript:void(0)" style="display: inline-block;" id='right-pop-close' class="_close"><i><img src="frontend/img/close-icon.png" alt=""></i></a>
                <strong class="page-title pull-right"></strong>
            </h5>
        </div>
    </div>
    <div class="add-location-in-cid mgt-20">
                <table width="100%" class="table table-hover details-table" id="table-GMB" style="display:none;">
            <tr>
                <th style="width: 35%;background-color: #ccc;">Customer ID / Name</th>
                <td></td>
            </tr>
            <tr>
                <th style="width: 35%;background-color: #ccc;">Email</th>
                <td>spotlighttesting12@gmail.com</td>
            </tr>
            <tr>
                <th style="width: 35%;background-color: #ccc;">Created</th>
                <td>10 Nov, 2021 06:35 PM</td>
            </tr>
                        <tr>
                <td colspan="2" align="right">
                    <a href="/connect_gmb/gmail/new">
                        <button class="btn-dark-blue round40">Relink GMB</button>
                    </a>
                </td>
            </tr>
                    </table>
                <table width="100%" class="table table-hover details-table" id="table-adwords" style="display:none;">
            <tr>
                <th style="width: 35%;background-color: #ccc;">Customer ID / Name</th>
                <td>102436421860788650603</td>
            </tr>
            <tr>
                <th style="width: 35%;background-color: #ccc;">Email</th>
                <td>myragoel02@gmail.com</td>
            </tr>
            <tr>
                <th style="width: 35%;background-color: #ccc;">Created</th>
                <td>30 Nov, 2021 10:34 AM</td>
            </tr>
                        <tr>
                <td colspan="2" align="right">
                    <a href="/user-adword-details">
                        <button class="btn-dark-blue ound40">Adwords Account List</button>
                    </a>
                </td>
            </tr>
                    </table>
            </div>
</div>
<div class="content-page user-access-tokens" style="margin-left:0 !important;">
    <div class="content">
        <div class="container-fluid" style="width: 80%;">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Linked Accounts</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card user-token-item">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5><figure class="account-logo"><img src="/img/business.png" alt="Google My Business"/></figure>Google My Business</h5>
                                </div>
                            </div>
                            <p class="mgt-10 account-description">
                           	To link your Google My Business Account, please click on the "Sign in with Google" button and select your google account with which you want to link your Spotlight account. Once you will select your google account, it will ask you to give your permissions to access your locations. Please click on the "Allow" button and your account will be linked with Spotlight.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                                                            <a href="/connect_gmb/gmail" class="link-btn"></a>
                                                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card user-token-item">
                        <div class="card-body" >
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5><figure class="account-logo"><img src="/img/adwords.png" alt="Google Adwords"/></figure>Google Ads</h5>
                                </div>
                            </div>
                            <p class="mgt-10 account-description" >
                                To link your Google Adwords Account, please click on the "Sign in with Google" button and select your google account with which you want to link your
                                Spotlight account. Once you will select your google account, it will ask you to give your permissions to access your MCC / CID account.
                                Please click on the "Allow" button and your account will be linked with Spotlight.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                                                        <a href="/adwordsLogin" class="link-btn"></a>
                                                    </div>
                    </div>
                </div>
                                 <div class="col-md-6">
                    <div class="card user-token-item">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5><figure class="account-logo"><img src="/img/google-bigquery-icon.png" alt="Google BigQuery"/></figure>Google BigQuery</h5>
                                </div>
                            </div>
                            <p class="mgt-10 account-description">BigQuery is Google Cloud's fully managed, petabyte-scale, and cost-effective analytics data warehouse that lets you run analytics over vast amounts of data in near real-time. With BigQuery, there's no infrastructure to set up... <a href="https://cloud.google.com/bigquery/docs/introduction?hl=ar-YE" target="_blank">Read More </a></p>
                        </div>
                        <div class="card-footer text-center">
                                                        <a href="/linkBigQuery">
                                <button class="btn-dark-blue round40" style="padding: 2px 17px">Link Account</button>
                            </a>
                                                    </div>
                    </div>
                </div>
                            </div>
        </div>
    </div>
</div>
<script>
    $('.view-details').click(function(e) {
        accountType = $(this).data('type');
        accountName = $(this).data('title');;
        $('.page-title').html(accountName)
        $('.details-table').hide();
        $('#table-' + accountType).show();
        $('.overlay').fadeIn(function() {
            $('._right-pop').addClass('open');
        });
    });

</script>
<script src="/js/common.js"></script>
<script src="/js/custom.js?q=60820317"></script>
<script src="/js/bootstrap-datepicker.js"></script>
<script src="/js/bootstrap-select.min.js"></script>
</div>

@endsection
