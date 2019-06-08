<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
<script data-pace-options='{ "restartOnRequestAfter": true }' src="<?php echo base_url().'public/template/smartadmin/js/plugin/pace/pace.min.js';?>"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
    if (!window.jQuery.ui) {
        document.write('<script src="<?php echo base_url().'public/template/smartadmin/js/libs/jquery-ui.min.js';?>"><\/script>');
    }
</script>

<!-- IMPORTANT: APP CONFIG -->
<script src="<?php echo base_url().'public/template/smartadmin/js/app.config.js';?>"></script>

<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
<script src="<?php echo base_url().'public/template/smartadmin/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js';?>"></script> 

<!-- BOOTSTRAP JS -->
<script src="<?php echo base_url().'public/template/smartadmin/js/bootstrap/bootstrap.min.js';?>"></script>

<!-- CUSTOM NOTIFICATION -->
<script src="<?php echo base_url().'public/template/smartadmin/js/notification/SmartNotification.min.js';?>"></script>

<!-- JARVIS WIDGETS -->
<script src="<?php echo base_url().'public/template/smartadmin/js/smartwidgets/jarvis.widget.min.js';?>"></script>

<!-- EASY PIE CHARTS -->
<script src="<?php echo base_url().'public/template/smartadmin/js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js';?>"></script>

<!-- SPARKLINES -->
<script src="<?php echo base_url().'public/template/smartadmin/js/plugin/sparkline/jquery.sparkline.min.js';?>"></script>

<!-- JQUERY VALIDATE -->
<script src="<?php echo base_url().'public/template/smartadmin/js/plugin/jquery-validate/jquery.validate.min.js';?>"></script>

<!-- JQUERY MASKED INPUT -->
<script src="<?php echo base_url().'public/template/smartadmin/js/plugin/masked-input/jquery.maskedinput.min.js';?>"></script>

<!-- JQUERY SELECT2 INPUT -->
<script src="<?php echo base_url().'public/template/smartadmin/js/plugin/select2/select2.min.js';?>"></script>

<!-- JQUERY UI + Bootstrap Slider -->
<script src="<?php echo base_url().'public/template/smartadmin/js/plugin/bootstrap-slider/bootstrap-slider.min.js';?>"></script>

<!-- browser msie issue fix -->
<script src="<?php echo base_url().'public/template/smartadmin/js/plugin/msie-fix/jquery.mb.browser.min.js';?>"></script>

<!-- FastClick: For mobile devices -->
<script src="<?php echo base_url().'public/template/smartadmin/js/plugin/fastclick/fastclick.min.js';?>"></script>

<!--[if IE 8]>

<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

<![endif]-->

<!-- Demo purpose only -->
<!--<script src="<?php //echo base_url().'public/template/smartadmin/js/demo.min.js';?>"></script>-->

<!-- MAIN APP JS FILE -->
<script src="<?php echo base_url().'public/template/smartadmin/js/app.min.js';?>"></script>

<!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
<!-- Voice command : plugin -->
<script src="<?php echo base_url().'public/template/smartadmin/js/speech/voicecommand.min.js';?>"></script>

<!-- SmartChat UI : plugin -->
<script src="<?php echo base_url().'public/template/smartadmin/js/smart-chat-ui/smart.chat.ui.min.js';?>"></script>
<script src="<?php echo base_url().'public/template/smartadmin/js/smart-chat-ui/smart.chat.manager.min.js';?>"></script>

<!-- PAGE RELATED PLUGIN(S) -->

<!-- Flot Chart Plugin: Flot Engine, Flot Resizer, Flot Tooltip -->
<script src="<?php echo base_url().'public/template/smartadmin/js/plugin/flot/jquery.flot.cust.min.js';?>"></script>
<script src="<?php echo base_url().'public/template/smartadmin/js/plugin/flot/jquery.flot.resize.min.js';?>"></script>
<script src="<?php echo base_url().'public/template/smartadmin/js/plugin/flot/jquery.flot.time.min.js';?>"></script>
<script src="<?php echo base_url().'public/template/smartadmin/js/plugin/flot/jquery.flot.tooltip.min.js';?>"></script>

<!-- Vector Maps Plugin: Vectormap engine, Vectormap language -->
<script src="<?php echo base_url().'public/template/smartadmin/js/plugin/vectormap/jquery-jvectormap-1.2.2.min.js';?>"></script>
<script src="<?php echo base_url().'public/template/smartadmin/js/plugin/vectormap/jquery-jvectormap-world-mill-en.js';?>"></script>

<!-- Full Calendar -->
<script src="<?php echo base_url().'public/template/smartadmin/js/plugin/moment/moment.min.js';?>"></script>
<script src="<?php echo base_url().'public/template/smartadmin/js/plugin/fullcalendar/fullcalendar.min.js';?>"></script>

<!-- DataTables -->
<script src="<?php echo base_url().'public/template/smartadmin/js/plugin/datatables/jquery.dataTables.min.js';?>"></script>
<script src="<?php echo base_url().'public/template/smartadmin/js/plugin/datatables/dataTables.colVis.min.js';?>"></script>
<script src="<?php echo base_url().'public/template/smartadmin/js/plugin/datatables/dataTables.tableTools.min.js';?>"></script>
<script src="<?php echo base_url().'public/template/smartadmin/js/plugin/datatables/dataTables.bootstrap.min.js';?>"></script>
<script src="<?php echo base_url().'public/template/smartadmin/js/plugin/datatable-responsive/datatables.responsive.min.js';?>"></script>
        
<script>
    $(document).ready(function() {

        // DO NOT REMOVE : GLOBAL FUNCTIONS!
        pageSetUp();

        /* BASIC ;*/
        var responsiveHelper_dt_basic = undefined;
        var responsiveHelper_datatable_fixed_column = undefined;
        var responsiveHelper_datatable_col_reorder = undefined;
        var responsiveHelper_datatable_tabletools = undefined;
        
        var breakpointDefinition = {
            tablet : 1024,
            phone : 480
        };
        /* END BASIC */

        /* COLUMN FILTER  */
        var otable = $('#datatable_fixed_column').DataTable({
            //"bFilter": false,
            //"bInfo": false,
            //"bLengthChange": false
            //"bAutoWidth": false,
            //"bPaginate": false,
            //"bStateSave": true // saves sort state using localStorage
            "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6 hidden-xs'f><'col-sm-6 col-xs-12 hidden-xs'<'toolbar'>>r>"+
                    "t"+
                    "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
            "autoWidth" : true,
            "oLanguage": {
                "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
            },
            "preDrawCallback" : function() {
                // Initialize the responsive datatables helper once.
                if (!responsiveHelper_datatable_fixed_column) {
                    responsiveHelper_datatable_fixed_column = new ResponsiveDatatablesHelper($('#datatable_fixed_column'), breakpointDefinition);
                }
            },
            "rowCallback" : function(nRow) {
                responsiveHelper_datatable_fixed_column.createExpandIcon(nRow);
            },
            "drawCallback" : function(oSettings) {
                responsiveHelper_datatable_fixed_column.respond();
            }		
        
        });

        // Apply the filter
        $("#datatable_fixed_column thead th input[type=text]").on( 'keyup change', function () {
            
            otable
                .column( $(this).parent().index()+':visible' )
                .search( this.value )
                .draw();
                
        } );
        /* END COLUMN FILTER */   

    });

</script>