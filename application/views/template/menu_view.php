<!-- Left panel : Navigation area -->
<!-- Note: This width of the aside area can be adjusted through LESS variables -->
<aside id="left-panel">
    <!-- NAVIGATION : This navigation is also responsive-->
    <nav>
        <ul>
            <li class="active">
                <a href="#" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
            </li>
            <li class="top-menu-invisible">
                <a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">Screening</span></a>
                <ul>
                    <li>
                        <a href="<?php echo base_url().'screening'; ?>" title="Screening"><i class="fa fa-lg fa-fw fa-list"></i> <span class="menu-item-parent">List</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'screening/new'; ?>" title="Screening"><i class="fa fa-lg fa-fw fa-plus"></i> <span class="menu-item-parent">New</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o""></i> <span class="menu-item-parent">Registration</span></a>
                <ul>
                    <li>
                        <a href="<?php echo base_url().'registration'; ?>" title="Registration"><i class="fa fa-lg fa-fw fa-list"></i> <span class="menu-item-parent">List</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'registration/new'; ?>" title="Registration"><i class="fa fa-lg fa-fw fa-plus"></i> <span class="menu-item-parent">New</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Lab/Pathology</span></a>
                <ul>
                    <li>
                        <a href="<?php echo base_url().'lab'; ?>" title="Lab"><i class="fa fa-lg fa-fw fa-list"></i> <span class="menu-item-parent">List</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'lab/new'; ?>" title="Lab"><i class="fa fa-lg fa-fw fa-plus"></i> <span class="menu-item-parent">New</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-windows"></i> <span class="menu-item-parent">Radiology</span></a>
                <ul>
                    <li>
                        <a href="<?php echo base_url().'radiology'; ?>" title="Lab"><i class="fa fa-lg fa-fw fa-list"></i> <span class="menu-item-parent">List</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'radiology/new'; ?>" title="Lab"><i class="fa fa-lg fa-fw fa-plus"></i> <span class="menu-item-parent">New</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Pharmacy</span></a>
                <ul>
                    <li>
                        <a href="<?php echo base_url().'pharmacy'; ?>" title="Lab"><i class="fa fa-lg fa-fw fa-list"></i> <span class="menu-item-parent">List</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'pharmacy/new'; ?>" title="Lab"><i class="fa fa-lg fa-fw fa-plus"></i> <span class="menu-item-parent">New</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Reports</span></a>
                <ul>
                    <li>
                        <a href="<?php echo base_url().'reports'; ?>" title="Lab"><i class="fa fa-lg fa-fw fa-list"></i> <span class="menu-item-parent">List</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    
    <span class="minifyme" data-action="minifyMenu"> 
        <i class="fa fa-arrow-circle-left hit"></i> 
    </span>

</aside>
<!-- END NAVIGATION -->