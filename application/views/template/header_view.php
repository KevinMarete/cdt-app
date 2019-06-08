<!-- HEADER -->
<header id="header">
    <div id="logo-group">
        <!-- PLACE YOUR LOGO HERE -->
        <span id="logo" style="margin-top:5px !important; width:300px !important"> <img src="<?php echo base_url().'public/template/smartadmin/img/ke-logo.png';?>" alt="CDT" style="width:65px !important; height:40px"><b>Cancer Dispensing Tool (CDT)</b></span>
        <!-- END LOGO PLACEHOLDER -->
    </div>

    <!-- pulled right: nav area -->
    <div class="pull-right">
        
        <!-- collapse menu button -->
        <div id="hide-menu" class="btn-header pull-right">
            <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
        </div>
        <!-- end collapse menu -->

        <!-- logout button -->
        <div id="logout" class="btn-header transparent pull-right">
            <span> <a href="login.html" title="Sign Out" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-sign-out"></i></a> </span>
        </div>
        <!-- end logout button -->

        <!-- welcome_label -->
        <ul class="header-dropdown-list hidden-xs">
            <li>
                <a href="#" class="dropdown-toggle" style="color:black;" data-toggle="dropdown"> <span> Welcome, <b>Demo User</b> </span> </a>
            </li>
        </ul>
        <!-- welcome_label -->

    </div>
    <!-- end pulled right: nav area -->

</header>
<!-- END HEADER -->