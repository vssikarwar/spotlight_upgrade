@extends('backend.dashboards.admin.layouts2.main')

@section('main-container') 

 
                <div class="content-wrapper">
                    
<!--<ol class="breadcrumb"
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
</ol>-->                   
                    

<section class="content-header">
    <a href="/affinity-categories/add" class="btn btn-primary">New Affinity Category</a>    <a href="/affinity-categories/import" class="btn btn-primary">Import Affinity Category</a>    <a href="/affinity-categories/export" class="btn btn-primary">Export Affinity Category</a>    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Publishers</li>
    
</ol>
<!--<ol class="breadcrumb"
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
</ol>--></section>

<div class="affinityCategories index large-9 medium-8 columns content box">
    <h3>Affinity Categories</h3>
    <div class="table-responsive">
        <table cellpadding="0" cellspacing="0" id="example1" class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th scope="col"><a href="/affinity-categories?direction=asc&amp;sort=id">Id</a></th>
                <th scope="col" class="actions">Actions</th>
                <th scope="col"><a href="/affinity-categories?direction=asc&amp;sort=parent_id">Parent</a></th>
                <th scope="col"><a href="/affinity-categories?direction=asc&amp;sort=googleid">Googleid</a></th>
                <th scope="col"><a href="/affinity-categories?direction=asc&amp;sort=name">Name</a></th>
                <th scope="col"><a href="/affinity-categories?direction=asc&amp;sort=alias">Alias</a></th>
                <th scope="col"><a href="/affinity-categories?direction=asc&amp;sort=status">Status</a></th>
                <th scope="col"><a href="/affinity-categories?direction=asc&amp;sort=created">Created</a></th>
                <th scope="col"><a href="/affinity-categories?direction=asc&amp;sort=modified">Modified</a></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($affinityCategories as $key => $affinityCategory)
                        <tr>
                <td>{{ $affinityCategory->id }}</td>
                <td></td>
                <?php $id = $affinityCategory->id; ?>
                <td><a href="/affinity-categories/view/18">Local News Junkies</a></td>
                <td>{{ $affinityCategory->googleid }}</td>
                <td>{{ $affinityCategory->name }}</td>
                <td>{{ $affinityCategory->alias }}</td>

                <?php
                if($affinityCategory->status == 1)
                {
                $status = 'Active';
                }
                else
                { 
                $status = 'Inactive';
                }
                ?>
                

                <td><span class='label label-success' style='color: green'>{{ $status }}</span></td>
                <td>{{ $affinityCategory->created }}</td>
                <td>{{ $affinityCategory->modified }}</td>
               
            </tr>
            @endforeach
                    </tbody>
    </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
                        <li class="prev disabled"><a href="" onclick="return false;">&lt; previous</a></li>            <li class="active"><a href="">1</a></li><li><a href="/affinity-categories?page=2">2</a></li>            <li class="next"><a rel="next" href="/affinity-categories?page=2">next &gt;</a></li>            <li class="last"><a href="/affinity-categories?page=2">last &gt;&gt;</a></li>        </ul>
        <p>Page 1 of 2, showing 20 record(s) out of 30 total</p>
    </div>
</div>
                </div>
            <footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> {{ App::VERSION() }}
    </div>
    <strong>Copyright &copy; 2022 <a href="{{url('/')}}">Singleinterface</a>.</strong> All rights
    reserved.
</footer>
<script>
           // saveBrowsingLogs();
            function saveBrowsingLogs(){
                var url = '/affinity-categories';
                var queryString = "url="+url;
                  jQuery.ajax({
                                    type: "POST",
                                    url: {{url('/ajax/save-browsing-logs')}},
                                    data: queryString,     
                                          
                                    success: function(data){                
            }
        });

    }
</script><aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                            <p>Will be 23 on April 24th</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-user bg-yellow"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                            <p>New phone +1(800)555-1234</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                            <p>nora@example.com</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-file-code-o bg-green"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                            <p>Execution time 5 seconds</p>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Custom Template Design
                            <span class="label label-danger pull-right">70%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Update Resume
                            <span class="label label-success pull-right">95%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Laravel Integration
                            <span class="label label-warning pull-right">50%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Back End Framework
                            <span class="label label-primary pull-right">68%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
                <h3 class="control-sidebar-heading">General Settings</h3>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Report panel usage
                        <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                        Some information about this general settings option
                    </p>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Allow mail redirect
                        <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                        Other sets of options are available
                    </p>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Expose author name in posts
                        <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                        Allow the user to show his name in blog posts
                    </p>
                </div>
                <!-- /.form-group -->

                <h3 class="control-sidebar-heading">Chat Settings</h3>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Show me as online
                        <input type="checkbox" class="pull-right" checked>
                    </label>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Turn off notifications
                        <input type="checkbox" class="pull-right">
                    </label>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Delete chat history
                        <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                    </label>
                </div>
                <!-- /.form-group -->
            </form>
        </div>
        <!-- /.tab-pane -->
    </div>
</aside>
            <div class="control-sidebar-bg"></div>
        </div>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script><script src="/admin_l_t_e/bootstrap/js/bootstrap.js"></script><script src="/admin_l_t_e/js/star-rating.js"></script><script src="/admin_l_t_e/plugins/slimScroll/jquery.slimscroll.min.js"></script><script src="/admin_l_t_e/plugins/fastclick/fastclick.js"></script><script src="/admin_l_t_e/js/AdminLTE.min.js"></script><script src="/admin_l_t_e/js/select2.min.js"></script><script src="/usermgmt/js/chosen/chosen.ajaxaddition.jquery.js?q=60820317"></script><script src="/admin_l_t_e/plugins/chartjs/Chart.min.js"></script><script src="/admin_l_t_e/js/jquery-ui-1.10.4.custom.min.js"></script><script src="/frontend/js/common.js"></script><script src="/frontend/js/form.submit.js"></script>        <script type="text/javascript">
            $(document).ready(function () {
                $(".navbar .menu").slimscroll({
                    height: "200px",
                    alwaysVisible: false,
                    size: "3px"
                }).css("width", "100%");

                var a = $('a[href="/affinity-categories"]');
                if (!a.parent().hasClass('treeview')) {
                    a.parent().addClass('active').parents('.treeview').addClass('active');
                }
            });
            $('.select2').select2();
        </script>
        
    </body>
</html>

@endsection