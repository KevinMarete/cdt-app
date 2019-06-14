<style type="text/css">
    .bootstrapWizard li {
        width: 14% !important;
    }
</style>

<!-- MAIN PANEL -->
<div id="main" role="main">

    <!-- RIBBON -->
    <div id="ribbon">
        
        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <li>Home</li><li>Screening</li><li>New</li>
        </ol>
        <!-- end breadcrumb -->

    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">
        
        <!-- widget grid -->
        <section id="widget-grid" class="">
        
            <!-- row -->
            <div class="row">
        
                <!-- NEW WIDGET START -->
                <article class="col-sm-12 col-md-12 col-lg-12">
        
                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-color-darken" id="wid-screening-new" data-widget-editbutton="false" data-widget-deletebutton="false" data-widget-colorbutton="false">
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
                            <span class="widget-icon"> <i class="fa fa-check"></i> </span>
                            <h2>New Screening Form</h2>
        
                        </header>
        
                        <!-- widget div-->
                        <div>
        
                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <!-- This area used as dropdown edit box -->
        
                            </div>
                            <!-- end widget edit box -->
        
                            <!-- widget content -->
                            <div class="widget-body">
        
                                <div class="row">
                                    <form id="wizard-1" novalidate="novalidate">
                                        <div id="bootstrap-wizard-11" class="col-sm-12">
                                            <div class="form-bootstrapWizard">
                                                <ul class="bootstrapWizard form-wizard">
                                                    <li class="active" data-target="#step1">
                                                        <a href="wizard.html#tab1" data-toggle="tab"> <span class="step">1</span> <span class="title">Socio-Demographic Data</span> </a>
                                                    </li>
                                                    <li data-target="#step2">
                                                        <a href="wizard.html#tab2" data-toggle="tab"> <span class="step">2</span> <span class="title">Family History</span> </a>
                                                    </li>
                                                    <li data-target="#step3">
                                                        <a href="wizard.html#tab3" data-toggle="tab"> <span class="step">3</span> <span class="title">Clinic/Risk Factor History</span> </a>
                                                    </li>
                                                    <li data-target="#step4">
                                                        <a href="wizard.html#tab4" data-toggle="tab"> <span class="step">4</span> <span class="title">Type of Cancer Screening</span> </a>
                                                    </li>
                                                    <li data-target="#step5">
                                                        <a href="wizard.html#tab5" data-toggle="tab"> <span class="step">5</span> <span class="title">Screening Results</span> </a>
                                                    </li>
                                                    <li data-target="#step6">
                                                        <a href="wizard.html#tab6" data-toggle="tab"> <span class="step">6</span> <span class="title">Follow-Up</span> </a>
                                                    </li>
                                                    <li data-target="#step7">
                                                        <a href="wizard.html#tab7" data-toggle="tab"> <span class="step">7</span> <span class="title">Save Form</span> </a>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab1">
                                                    <br>
                                                    <h3><strong>Step 1 </strong> - Socio-Demographic Data</h3>
        
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="Inpatient/Outpatient Number" type="text" name="email" id="email">
        
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="National ID No" type="text" name="email" id="email">
        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="Name" type="text" name="email" id="email">
        
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <select class="form-control input-md" name="sex" id="sex" required>
                                                                        <option value=" ">Select Gender</option>
                                                                        <option value="male">Male</option>
                                                                        <option value="female">Female</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="Age(Years)" type="text" name="email" id="email">
        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="Marital Status" type="text" name="email" id="email">
        
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="No. of Children" type="text" name="email" id="email">
        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="Patient Phone No" type="text" name="email" id="email">
        
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="Address" type="text" name="email" id="email">
        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="Next of Kin (NOK) Name" type="text" name="email" id="email">
        
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="Relationship to N.O.K" type="text" name="email" id="email">
        
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="N.O.K Phone" type="text" name="email" id="email">
        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="Current Residence: County" type="text" name="email" id="email">
        
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="Sub-County" type="text" name="email" id="email">
        
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="Ward/Estate" type="text" name="email" id="email">
        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="Length of time lived in Current Residence (Years)" type="text" name="email" id="email">
    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="Highest Education Level" type="text" name="email" id="email">
        
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="Occupation" type="text" name="email" id="email">
        
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="Ethinicity/Race" type="text" name="email" id="email">
        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Where did you learn about this screening program?</label>
                                                            <div class="col-md-8">
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox">
                                                                    Word of Mouth</label>
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox">
                                                                    From Media</label>
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox">
                                                                    HealthCare Worker </label>
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox">
                                                                    Other(Specify) </label> 
                                                                <label class="checkbox-inline">
                                                                    <input class="form-control input-md" type="text" name="email" id="email">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Screening Service Point</label>
                                                            <div class="col-md-8">
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox">
                                                                    MCH/FP</label>
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox">
                                                                    CCC</label>
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox">
                                                                    GOPC </label>
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox">
                                                                    Outreach </label>
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox">
                                                                    Other(Specify) </label> 
                                                                <label class="checkbox-inline">
                                                                    <input class="form-control input-md" type="text" name="email" id="email">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Referred to this facility?</label>
                                                            <div class="col-md-8">
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox">
                                                                    Yes</label>
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox">
                                                                    No</label>
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox">
                                                                    If Yes, from </label> 
                                                                <label class="checkbox-inline">
                                                                    <input class="form-control input-sm" type="text" name="email" id="email">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="Reason for Referral" type="text" name="email" id="email">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="Vital Signs:BP" type="text" name="email" id="email">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="Pulse Rate" type="text" name="email" id="email">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="Weight" type="text" name="email" id="email">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="Height" type="text" name="email" id="email">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="BMI" type="text" name="email" id="email">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="Blood Sugar Level" type="text" name="email" id="email">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane" id="tab2">
                                                    <br>
                                                    <h3><strong>Step 2</strong> - Family History</h3>
                                                    
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Any history of Cancer in the Family?</label>
                                                            <div class="col-md-8">
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox">
                                                                    Yes</label>
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox">
                                                                    No</label>
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox">
                                                                    If yes, which cancer?</label> 
                                                                <label class="checkbox-inline">
                                                                    <input class="form-control input-md" type="text" name="email" id="email">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Who was affected?</label>
                                                            <div class="col-md-8">
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox">
                                                                    Parent</label>
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox">
                                                                    Sibling</label>
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox">
                                                                    1st or 2nd degree relative</label>
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox">
                                                                    Other(Specify) </label> 
                                                                <label class="checkbox-inline">
                                                                    <input class="form-control input-md" type="text" name="email" id="email">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">What was the age at diagnosis? (Years)</label>
                                                            <div class="col-md-8">
                                                                <label class="checkbox-inline">
                                                                    <input class="form-control input-md" type="text" name="email" id="email">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">What was the sex of the person affected?</label>
                                                            <div class="col-md-8">
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox">
                                                                    Male</label>
                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox">
                                                                    Female</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane" id="tab3">
                                                    <br>
                                                    <h3><strong>Step 3</strong> - Clinical/Risk Factor History</h3>
                                                    <div class="row">
                                                        <fieldset>
                                                            <legend align="center">RISK FACTORS</legend>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Risk factor history</label>
                                                                <div class="col-md-10">
                                                                    <div class="checkbox">
                                                                        <label>
                                                                        <input type="checkbox" class="checkbox style-0">
                                                                        <span>Smoking</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label>
                                                                        <input type="checkbox" class="checkbox style-0">
                                                                        <span>Alcohol Intake</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label>
                                                                        <input type="checkbox" class="checkbox style-0">
                                                                        <span>Previous chemotherapy or radiation treatment</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label>
                                                                        <input type="checkbox" class="checkbox style-0">
                                                                        <span>Any Other (Specify)</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="row">
                                                        <fieldset>
                                                            <legend align="center">COMMON SYMPTOMS</legend>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Symptom history</label>
                                                                <div class="col-md-10">
                                                                    <div class="checkbox">
                                                                        <label>
                                                                        <input type="checkbox" class="checkbox style-0">
                                                                        <span>Recurrent indigestion (dyspepsia)</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label>
                                                                        <input type="checkbox" class="checkbox style-0">
                                                                        <span>Blood in stool</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label>
                                                                        <input type="checkbox" class="checkbox style-0">
                                                                        <span>Yellow eyes</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label>
                                                                        <input type="checkbox" class="checkbox style-0">
                                                                        <span>Blood in urine</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label>
                                                                        <input type="checkbox" class="checkbox style-0">
                                                                        <span>Epistaxis (nose bleeding)</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label>
                                                                        <input type="checkbox" class="checkbox style-0">
                                                                        <span>Difficulty in swallowing</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label>
                                                                        <input type="checkbox" class="checkbox style-0">
                                                                        <span>General weight loss</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label>
                                                                        <input type="checkbox" class="checkbox style-0">
                                                                        <span>Easy fatigability, palpitations</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label>
                                                                        <input type="checkbox" class="checkbox style-0">
                                                                        <span>Abnormal vaginal bleeding</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label>
                                                                        <input type="checkbox" class="checkbox style-0">
                                                                        <span>Enlarging/changing skin moles</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label>
                                                                        <input type="checkbox" class="checkbox style-0">
                                                                        <span>Chronic skin ulcers</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label>
                                                                        <input type="checkbox" class="checkbox style-0">
                                                                        <span>Any lumps or swellings</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label>
                                                                        <input type="checkbox" class="checkbox style-0">
                                                                        <span>Chronic cough</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label>
                                                                        <input type="checkbox" class="checkbox style-0">
                                                                        <span>Persistent headaches</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label>
                                                                        <input type="checkbox" class="checkbox style-0">
                                                                        <span>Changing bowel habits</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label>
                                                                        <input type="checkbox" class="checkbox style-0">
                                                                        <span>Others (specify)</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab4">
                                                    <br>
                                                    <h3><strong>Step 4</strong> - Type of Cancer Screening</h3>
                                                    <br>
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Cancer</th>
                                                                    <th>Visit type</th>
                                                                    <th>Screening modality</th>
                                                                    <th>Last screening modality done</th>
                                                                    <th>Date of last screening</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Cervical</td>
                                                                    <td>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Initial screening</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Repeat screening</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Post-treatment screening</span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>HPV testing</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Pap smear</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>VIA/VILI</span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                    <td><textarea></textarea></td>
                                                                    <td><textarea></textarea></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Breast</td>
                                                                    <td>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Initial screening</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Repeat screening</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Post-treatment screening</span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Clnical breast examination</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Ultrasound</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Mammogram</span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                    <td><textarea></textarea></td>
                                                                    <td><textarea></textarea></td>
                                                                </tr>
                                                                <tr class="prostate_row">
                                                                    <td>Prostate</td>
                                                                    <td>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Initial screening</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Repeat screening</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Post-treatment screening</span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>DRE in combination with PSA testing</span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                    <td><textarea></textarea></td>
                                                                    <td><textarea></textarea></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Colorectal</td>
                                                                    <td>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Initial screening</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Repeat screening</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Post-treatment screening</span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Feccal occult blood test</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Colonoscopy</span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                    <td><textarea></textarea></td>
                                                                    <td><textarea></textarea></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Retinoblastoma <br/>(known Retinoblastoma 1 mutation or positive family history)</td>
                                                                    <td>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>At birth</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Vaccination clinic</span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Eye exam under anaesthesia</span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                    <td><textarea></textarea></td>
                                                                    <td><textarea></textarea></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Oral</td>
                                                                    <td>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Initial screening</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Repeat screening</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Post-treatment screening</span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Visual Screening</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Imaging</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Exfoliative Cytology</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Incision biopsy</span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                    <td><textarea></textarea></td>
                                                                    <td><textarea></textarea></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Oesophageal</td>
                                                                    <td>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Initial screening</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Repeat screening</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Post-treatment screening</span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>White Light Endoscopy</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Lugol’s chromoendoscopy</span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="checkbox">
                                                                            <label>
                                                                            <input type="checkbox" class="checkbox style-0">
                                                                            <span>Narrow band Imaging endoscopy</span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                    <td><textarea></textarea></td>
                                                                    <td><textarea></textarea></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="alert alert-info fade in">
                                                        <strong>Retinoblastoma screening frequency</strong> 
                                                        <ol>
                                                            <li>
                                                                Known RB 1 mutation on genetic testing:
                                                                <ul>
                                                                    <li>Every 6 weeks until 1 year, then every 3 months until 3 years, then every 6 months until 6 years</li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                No genetic testing available
                                                                <ul>
                                                                    <li>
                                                                        Option 1 – positive family history for parent
                                                                        <ul>
                                                                            <li>At birth, then every month for 3 months, then every 3 months for 3 years</li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        Option 2 – positive family history for sibling
                                                                        <ul>
                                                                            <li>At birth, then every month for 3 months, then every 3 months for 1 year</li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ol>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab5">
                                                    <br>
                                                    <h3><strong>Step 5</strong> - Screening Results</h3>
                                                    <br>
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Cancer</th>
                                                                    <th>Screening modality</th>
                                                                    <th>Results/findings</th>
                                                                    <th>Recommended action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Cervical</td>
                                                                    <td>
                                                                        <ul>
                                                                            <li>HPV</li>
                                                                            <li>Pap smear</li>
                                                                            <li>VIA/VILI</li>
                                                                        </ul>
                                                                    </td>
                                                                    <td>
                                                                        <textarea></textarea>   
                                                                    </td>
                                                                    <td>
                                                                        <textarea></textarea>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Breast</td>
                                                                    <td>
                                                                        <ul>
                                                                            <li>Clinical breast examination</li>
                                                                            <li>Ultrasound (< 40 years)</li>
                                                                            <li>Mammogram ≥ 40 years</li>
                                                                        </ul>
                                                                    </td>
                                                                    <td>
                                                                        <textarea></textarea>   
                                                                    </td>
                                                                    <td>
                                                                        <textarea></textarea>
                                                                    </td>
                                                                </tr>
                                                                <tr class="prostate_row">
                                                                    <td>Prostate</td>
                                                                    <td>
                                                                        <ul>
                                                                            <li>DRE in combination with PSA testing</li>
                                                                        </ul>
                                                                    </td>
                                                                    <td>
                                                                        <textarea></textarea>   
                                                                    </td>
                                                                    <td>
                                                                        <textarea></textarea>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Colorectal</td>
                                                                    <td>
                                                                        <ul>
                                                                            <li>Fecal occult blood test</li>
                                                                            <li>Colonoscopy</li>
                                                                        </ul>
                                                                    </td>
                                                                    <td>
                                                                        <textarea></textarea>   
                                                                    </td>
                                                                    <td>
                                                                        <textarea></textarea>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Oral</td>
                                                                    <td>
                                                                        <ul>
                                                                            <li>Visual Screening</li>
                                                                            <li>Imaging</li>
                                                                            <li>Exfoliative Cytology</li>
                                                                            <li>Incision biopsy</li>
                                                                        </ul>
                                                                    </td>
                                                                    <td>
                                                                        <textarea></textarea>   
                                                                    </td>
                                                                    <td>
                                                                        <textarea></textarea>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Oesophageal</td>
                                                                    <td>
                                                                        <ul>
                                                                            <li>White Light Endoscopy</li>
                                                                            <li>Lugol’s chromoendoscopy</li>
                                                                            <li>Narrow band Imaging endoscopy</li>
                                                                        </ul>
                                                                    </td>
                                                                    <td>
                                                                        <textarea></textarea>   
                                                                    </td>
                                                                    <td>
                                                                        <textarea></textarea>
                                                                    </td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab6">
                                                    <br>
                                                    <h3><strong>Step 6</strong> - Follow Up</h3>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="Return date" type="text" name="email" id="email">
        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="Referred to" type="text" name="email" id="email">
        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="Referred for further screening (give reasons)" type="text" name="email" id="email">
        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="Health service provider: Name" type="text" name="email" id="email">
        
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="Cadre" type="text" name="email" id="email">
        
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-md fa-fw"></i></span>
                                                                    <input class="form-control input-md" placeholder="Signature" type="text" name="email" id="email">
        
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab7">
                                                    <br>
                                                    <h3><strong>Step 7</strong> - Save Form</h3>
                                                    <br>
                                                    <h1 class="text-center text-success"><strong><i class="fa fa-check fa-lg"></i> Complete</strong></h1>
                                                    <h4 class="text-center">Click next to finish</h4>
                                                    <br>
                                                    <br>
                                                </div>

                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <ul class="pager wizard no-margin">
                                                                <!--<li class="previous first disabled">
                                                                <a href="javascript:void(0);" class="btn btn-lg btn-default"> First </a>
                                                                </li>-->
                                                                <li class="previous disabled">
                                                                    <a href="javascript:void(0);" class="btn btn-lg btn-default"> Previous </a>
                                                                </li>
                                                                <!--<li class="next last">
                                                                <a href="javascript:void(0);" class="btn btn-lg btn-primary"> Last </a>
                                                                </li>-->
                                                                <li class="next">
                                                                    <a href="javascript:void(0);" class="btn btn-lg txt-color-darken"> Next </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </div>
                                        </div>
                                    </form>
                                </div>
        
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
        
        </section>
        <!-- end widget grid -->

    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->


<script type="text/javascript">
    $(document).ready(function(){
        $('#sex').on('change', function(){
            var sex = $(this).val();
            if(sex == 'female'){
                $('.prostate_row').hide();
            }else{
                $('.prostate_row').show();
            }
        });
    });
</script>