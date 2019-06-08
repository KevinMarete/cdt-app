<!-- MAIN PANEL -->
<div id="main" role="main">

    <!-- RIBBON -->
    <div id="ribbon">

        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <li>Home</li><li>Screening</li><li>List</li>
        </ol>
        <!-- end breadcrumb -->

    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <!--
            The ID "widget-grid" will start to initialize all widgets below 
            You do not need to use widgets if you dont want to. Simply remove 
            the <section></section> and you can use wells or panels instead 
            -->
        
        <!-- widget grid -->
        <section id="widget-grid" class="">
        
            <!-- row -->
            <div class="row">
                
                <!-- NEW WIDGET START -->
                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    
                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget" id="wid-screening-listing" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-deletebutton="false">
                        <!-- widget options:
                            usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
                            
                            data-widget-colorbutton="false"	
                            data-widget-editbutton="false"
                            data-widget-togglebutton="false"
                            data-widget-deletebutton="false"
                            data-widget-fullscreenbutton="false"
                            data-widget-custombutton="false"
                            data-widget-collapsed="true" 
                            data-widget-sortable="false"
                            
                        -->
                        <header>
                            <span class="widget-icon"> <i class="fa fa-list"></i> </span>
                            <h2>Screening Listing </h2>		
                        </header>
        
                        <!-- widget div-->
						<div>
				
                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <!-- This area used as dropdown edit box -->

                            </div>
                            <!-- end widget edit box -->

                            <!-- widget content -->
                            <div class="widget-body no-padding">

                                <table id="datatable_fixed_column" class="table table-striped table-bordered" width="100%">

                                    <thead>
                                        <tr>
                                            <th class="hasinput" style="width:17%">
                                                <input type="text" class="form-control" placeholder="Filter Patient Number" />
                                            </th>
                                            <th class="hasinput" style="width:18%">
                                                <div class="input-group">
                                                    <input class="form-control" placeholder="Filter Name" type="text">
                                                    <span class="input-group-addon">
                                                        <span class="onoffswitch">
                                                            <input type="checkbox" name="start_interval" class="onoffswitch-checkbox" id="st3">
                                                            <label class="onoffswitch-label" for="st3"> 
                                                                <span class="onoffswitch-inner" data-swchon-text="YES" data-swchoff-text="NO"></span> 
                                                                <span class="onoffswitch-switch"></span> 
                                                            </label> 
                                                        </span>
                                                    </span>
                                                </div>
                                                            
                                                        
                                            </th>
                                            <th class="hasinput" style="width:16%">
                                                <input type="text" class="form-control" placeholder="Filter Phone No" />
                                            </th>
                                            <th class="hasinput" style="width:17%">
                                                <input type="text" class="form-control" placeholder="Filter Age" />
                                            </th>
                                            <th class="hasinput icon-addon">
                                                <input id="dateselect_filter" type="text" placeholder="Filter Screening Date" class="form-control datepicker" data-dateformat="yy/mm/dd">
                                                <label for="dateselect_filter" class="glyphicon glyphicon-calendar no-margin padding-top-15" rel="tooltip" title="" data-original-title="Filter Date"></label>
                                            </th>
                                            <th class="hasinput" style="width:16%">
                                                <input type="text" class="form-control" placeholder="Filter Result" />
                                            </th>
                                        </tr>
                                        <tr>
                                            <th data-class="expand">Patient Number</th>
                                            <th>Patient Name</th>
                                            <th data-hide="phone">Phone No</th>
                                            <th data-hide="phone">Age</th>
                                            <th data-hide="phone,tablet">Screening Date</th>
                                            <th data-hide="phone,tablet">Result</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>CP/0010/201401</td>
                                            <td>Tiger Nixon</td>
                                            <td>0728109780</td>
                                            <td>61</td>
                                            <td>2014/12/12</td>
                                            <td>Malignant</td>
                                        </tr>
                                        <tr>
                                            <td>CP/0560/201107</td>
                                            <td>Garrett Winters</td>
                                            <td>0721124780</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>Stage 1</td>
                                        </tr>
                                        <tr>
                                            <td>CP/0078/201401</td>
                                            <td>Ashton Cox</td>
                                            <td>0722167473</td>
                                            <td>66</td>
                                            <td>2014/01/12</td>
                                            <td>Stage 2</td>
                                        </tr>
                                        <tr>
                                            <td>CP/0840/201203</td>
                                            <td>Cedric Kelly</td>
                                            <td>0725189780</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>Malignant</td>
                                        </tr>
                                        <tr>
                                            <td>CP/4782/200811</td>
                                            <td>Airi Satou</td>
                                            <td>0733084578</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>Stage 1</td>
                                        </tr>
                                        <tr>
                                            <td>CP/7884/201212</td>
                                            <td>Brielle Williamson</td>
                                            <td>0734895218</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>Stage 3</td>
                                        </tr>
                                    </tbody>
                            
                                </table>

                            </div>
                            <!-- end widget content -->

                        </div>
                        <!-- end widget div -->
                        
                    </div>
                    <!-- end widget -->
        
                </article>
                <!-- WIDGET END -->
                
            </div>
        
            <!-- end row -->
        
            <!-- row -->
        
            <div class="row">
        
                <!-- a blank row to get started -->
                <div class="col-sm-12">
                    <!-- your contents here -->
                </div>
                    
            </div>
        
            <!-- end row -->
        
        </section>
        <!-- end widget grid -->

    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->


<script type="text/javascript">
    $(document).ready(function() {
        
    });         
</script>