 <div class="sidebar" data-color="rose" data-background-color="white">
        <div class="logo">
            <a href="<?php echo base_url();?>" class="simple-text logo-mini" style="width: 0px;">

            </a>
            <a href="<?php echo base_url();?>" class="simple-text logo-normal">
                <img class="main_logo" src="<?php echo base_url();?>Theme/assets/img/logo.png" />
            </a>
        </div>
            <div class="sidebar-wrapper">

                <div class="user">
                    <div class="photo">
                        <img src="<?php echo base_url();?>Theme/assets/img/admin.png" />
                    </div>
                    <div class="user-info ">
                        <a data-toggle="collapse" href="#collapseExample" class="username">
                            <span>
                                JSW Admin                               
                            </span>
                        </a>
                        
                    </div>
                </div>

                <ul class="nav">
                    <?php if($mydiv=='HOME'){?><li class="nav-item mydiv active"> <?php }else{?> <li class="nav-item mydiv"><?php }?>
                        <a class="nav-link" href="<?php echo base_url();?>">
                            <i class="material-icons">home</i>
                            <p> HOME </p>
                        </a>
                    </li>

                     <?php if($mydiv=='DASHBOARD'){?><li class="nav-item mydiv active"> <?php }else{?> <li class="nav-item mydiv"><?php }?>
                        <a class="nav-link" data-toggle="collapse" href="#pagesExamples" aria-expanded="true">
                            <i class="material-icons">developer_board</i>
                            <p>
                                DASHBOARD
                                <b class="caret"></b>
                            </p>
                        </a>
                         <?php if($mydiv=='DASHBOARD'){?><div class="collapse show" id="pagesExamples"> <?php }else{?> <div class="collapse" id="pagesExamples"><?php }?>                        
                            <ul class="nav">
                                 <?php if($mydiv2=='DVMS'){?><li class="nav-item mydiv2 active"> <?php }else{?> <li class="nav-item mydiv2"><?php }?> 
                                    <a class="nav-link" data-toggle="collapse" href="#dvmsExamples">
                                        <i class="material-icons">airplay</i>
                                        <p>
                                            DVMS
                                            <b class="caret"></b>
                                        </p>
                                    </a>
                            <?php if($mydiv2=='DVMS'){?> <div class="collapse show" id="dvmsExamples"> <?php }else{?>  <div class="collapse" id="dvmsExamples"><?php }?>                                    
                                        <ul class="nav">
                                <?php if($title=='DVMS'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>DVMS">
                                                    <i class="material-icons">airplay</i>
                                                    <span class="sidebar-normal"> DVMS </span>
                                                </a>
                                            </li>
                                 <?php if($title=='Berth - 1'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>DVMS/berthOne">
                                                    <i class="material-icons">filter_1</i>
                                                    <span class="sidebar-normal"> Berth - 1 </span>
                                                </a>
                                            </li>            
                                <?php if($title=='Berth - 2'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>DVMS/berthTwo">
                                                   <i class="material-icons">filter_2</i>
                                                    <span class="sidebar-normal"> Berth - 2 </span>
                                                </a>
                                            </li>
                                <?php if($title=='Berth - 3'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>DVMS/berthThree">
                                                    <i class="material-icons">filter_3</i>
                                                    <span class="sidebar-normal"> Berth - 3 </span>
                                                </a>
                                            </li>
                                <?php if($title=='Berth - 4'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>DVMS/berthFour">
                                                    <i class="material-icons">filter_4</i>
                                                    <span class="sidebar-normal"> Berth - 4 </span>
                                                </a>
                                            </li> 
                                <?php if($title=='Berth - 5'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>DVMS/berthFive">
                                                    <i class="material-icons">filter_5</i>
                                                    <span class="sidebar-normal"> Berth - 5 </span>
                                                </a>
                                            </li> 
                                <?php if($title=='Berth - 6'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>DVMS/berthSix">
                                                    <i class="material-icons">filter_6</i>
                                                    <span class="sidebar-normal"> Berth - 6 </span>
                                                </a>
                                            </li> 
                                 <?php if($title=='Berth - 7'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>DVMS/berthSeven">
                                                    <i class="material-icons">filter_7</i>
                                                    <span class="sidebar-normal"> Berth - 7 </span>
                                                </a>
                                            </li> 
                                <?php if($title=='Berth - 8'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>DVMS/berthEight">
                                                    <i class="material-icons">filter_8</i>
                                                    <span class="sidebar-normal"> Berth - 8 </span>
                                                </a>
                                            </li>             
                                        </ul>
                                    </div>
                                </li>
                                
                                <?php if($mydiv2=='MHS'){?><li class="nav-item mydiv2 active"> <?php }else{?> <li class="nav-item mydiv2"><?php }?>                                
                                    <a class="nav-link" data-toggle="collapse" href="#MHSExamples" aria-expanded="true">
                                        <i class="material-icons">pages</i>
                                        <p>
                                            MHS
                                            <b class="caret"></b>
                                        </p>
                                    </a>
                                     <?php if($mydiv2=='MHS'){?> <div class="collapse show" id="MHSExamples"> <?php }else{?>  <div class="collapse" id="MHSExamples"><?php }?> 
                                        <ul class="nav">
                                            <?php if($mydiv3=='New MHS Overview'){?><li class="nav-item mydiv3 active"> <?php }else{?> <li class="nav-item mydiv3"><?php }?>                                            
                                                <a class=" nav-link" data-toggle="collapse" href="#NMOExamples" aria-expanded="true">
                                                    <i class="material-icons">airplay</i>
                                                    <p>
                                                        New MHS Overview
                                                        <b class="caret"></b>
                                                    </p>
                                                </a>
                                                <?php if($mydiv3=='New MHS Overview'){?><div class="collapse show" id="NMOExamples"> <?php }else{?> <div class="collapse" id="NMOExamples"><?php }?> 
                                                    <ul class="nav">
                                                 <!--//if ($this->session->userdata('admin_login') == 1 || $this->session->userdata('mechanical_login') == 1) {-->
                                            <?php if($title=='New MHS Overview'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                            <a class="nav-link" href="<?php echo base_url();?>MHS">
                                                                <i class="material-icons">airplay</i>
                                                                <span class="sidebar-normal"> New MHS Overview </span>
                                                            </a>
                                                        </li>
                                            <?php if($title=='MHS PATH - 1'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                    <a class="nav-link" href="<?php echo base_url();?>MHS/newmhsPathOne">
                                                        <i class="material-icons">filter_1</i>
                                                        <span class="sidebar-normal"> MHS PATH - 1 </span>
                                                    </a>
                                                </li>
                                             <?php if($title=='MHS PATH - 2'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                    <a class="nav-link" href="<?php echo base_url();?>MHS/newmhsPathTwo">
                                                        <i class="material-icons">filter_2</i>
                                                        <span class="sidebar-normal"> MHS PATH - 2 </span>
                                                    </a>
                                                </li>
                                            <?php if($title=='MHS PATH - 3'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                            <a class="nav-link" href="<?php echo base_url();?>MHS/newmhsPathThree">
                                                                <i class="material-icons">filter_3</i>
                                                                <span class="sidebar-normal"> MHS PATH - 3 </span>
                                                            </a>
                                                        </li>
                                            <?php if($title=='MHS PATH - 4'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                            <a class="nav-link" href="<?php echo base_url();?>MHS/newmhsPathFour">
                                                                <i class="material-icons">filter_4</i>
                                                                <span class="sidebar-normal"> MHS PATH - 4 </span>
                                                            </a>
                                                        </li>
                                            <?php if($title=='MHS PATH - 5'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                            <a class="nav-link" href="<?php echo base_url();?>MHS/newmhsPathFive">
                                                                <i class="material-icons">filter_5</i>
                                                                <span class="sidebar-normal"> MHS PATH - 5 </span>
                                                            </a>
                                                        </li>
                                            <?php if($title=='MHS PATH - 7'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                            <a class="nav-link" href="<?php echo base_url();?>MHS/newmhsPathSeven">
                                                                <i class="material-icons">filter_7</i>
                                                                <span class="sidebar-normal"> MHS PATH - 7 </span>
                                                            </a>
                                                        </li>
                                            <?php if($title=='MHS PATH - 8'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                            <a class="nav-link" href="<?php echo base_url();?>MHS/newmhsPathEight">
                                                                <i class="material-icons">filter_8</i>
                                                                <span class="sidebar-normal"> MHS PATH - 8 </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <?php if($mydiv3=='Old MHS Overview'){?><li class="nav-item mydiv3 active"> <?php }else{?> <li class="nav-item mydiv3"><?php }?>
                                                <a class="nav-link" data-toggle="collapse" href="#OMOExamples">
                                                    <i class="material-icons">airplay</i>
                                                    <p>
                                                        Old MHS Overview
                                                        <b class="caret"></b>
                                                    </p>
                                                </a>
                                            <?php if($mydiv3=='Old MHS Overview'){?><div class="collapse show" id="OMOExamples"><?php }else{?> <div class="collapse" id="OMOExamples"><?php }?>                                                
                                                    <ul class="nav">
                                            <?php if($title=='Old MHS Overview'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                            <a class="nav-link" href="<?php echo base_url();?>MHS/oldmhsOverview">
                                                                 <i class="material-icons">airplay</i>
                                                                <span class="sidebar-normal"> Old MHS Overview </span>
                                                            </a>
                                                        </li>
                                             <?php if($title=='MHS PATH - A'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                            <a class="nav-link" href="<?php echo base_url();?>MHS/oldmhsPathA">
                                                                <i class="fa">A</i>
                                                                <span class="sidebar-normal"> MHS PATH - A </span>
                                                            </a>
                                                        </li>            
                                            <?php if($title=='MHS PATH - B'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                            <a class="nav-link" href="<?php echo base_url();?>MHS/oldmhsPathB">
                                                                <i class="fa">B</i>
                                                                <span class="sidebar-normal"> MHS PATH - B </span>
                                                            </a>
                                                        </li>
                                            <?php if($title=='MHS PATH - C'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                            <a class="nav-link" href="<?php echo base_url();?>MHS/oldmhsPathC">
                                                                <i class="fa">C</i>
                                                                <span class="sidebar-normal"> MHS PATH - C </span>
                                                            </a>
                                                        </li>
                                            <?php if($title=='MHS PATH - D'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                            <a class="nav-link" href="<?php echo base_url();?>MHS/oldmhsPathD">
                                                                <i class="fa">D</i>
                                                                <span class="sidebar-normal"> MHS PATH - D </span>
                                                            </a>
                                                        </li>
                                             <?php if($title=='MHS PATH - E'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                            <a class="nav-link" href="<?php echo base_url();?>MHS/oldmhsPathE">
                                                                <i class="fa">E</i>
                                                                <span class="sidebar-normal"> MHS PATH - E </span>
                                                            </a>
                                                        </li>
                                             <?php if($title=='MHS PATH - F'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                            <a class="nav-link" href="<?php echo base_url();?>MHS/oldmhsPathF">
                                                                <i class="fa">F</i>
                                                                <span class="sidebar-normal"> MHS PATH - F </span>
                                                            </a>
                                                        </li>
                                             <?php if($title=='MHS PATH - G'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                            <a class="nav-link" href="<?php echo base_url();?>MHS/oldmhsPathG">
                                                                <i class="fa">G</i>
                                                                <span class="sidebar-normal"> MHS PATH - G </span>
                                                            </a>
                                                        </li>
                                             <?php if($title=='MHS PATH - H'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                            <a class="nav-link" href="<?php echo base_url();?>MHS/oldmhsPathH">
                                                                <i class="fa">H</i>
                                                                <span class="sidebar-normal"> MHS PATH - H </span>
                                                            </a>
                                                        </li>            
                                              <?php if($title=='MHS PATH - I'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                            <a class="nav-link" href="<?php echo base_url();?>MHS/oldmhsPathI">
                                                                <i class="fa">I</i>
                                                                <span class="sidebar-normal"> MHS PATH - I </span>
                                                            </a>
                                                        </li>            
                                                      
                                                    </ul>
                                                </div>
                                            </li>

                                             <?php if($mydiv3=='Motor Temperature'){?><li class="nav-item mydiv3 active"> <?php }else{?> <li class="nav-item mydiv3"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>MHS/MotorTemperature">
                                                    <i class="material-icons">
                                                        wb_sunny
                                                    </i>
                                                    <span class="sidebar-normal"> Motor Temperature </span>
                                                </a>
                                            </li>
                                            <?php if($mydiv3=='Motor Current'){?><li class="nav-item mydiv3 active"> <?php }else{?> <li class="nav-item mydiv3"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>MHS/MotorCurrent">
                                                    <i class="material-icons">
                                                        flash_on
                                                    </i>
                                                    <span class="sidebar-normal"> Motor Current </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                            <?php if($mydiv2=='BUL'){?><li class="nav-item mydiv2 active"> <?php }else{?> <li class="nav-item mydiv2"><?php }?> 
                                    <a class="nav-link" data-toggle="collapse" href="#bulExamples">
                                        <i class="material-icons">airplay</i>
                                        <p>
                                            BUL
                                            <b class="caret"></b>
                                        </p>
                                    </a>
                            <?php if($mydiv2=='BUL'){?> <div class="collapse show" id="bulExamples"> <?php }else{?>  <div class="collapse" id="bulExamples"><?php }?>                                    
                                        <ul class="nav">
                                <?php if($title=='BUL - 1'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>BUL/bulOne">
                                                    <i class="material-icons">tv</i>
                                                    <span class="sidebar-normal"> BUL - 1 </span>
                                                </a>
                                            </li>
                                <?php if($title=='BUL - 2'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>BUL/bulTwo">
                                                    <i class="material-icons">tv</i>
                                                    <span class="sidebar-normal"> BUL - 2 </span>
                                                </a>
                                            </li>
                                <?php if($title=='BUL - 3'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>BUL/bulThree">
                                                    <i class="material-icons">tv</i>
                                                    <span class="sidebar-normal"> BUL - 3 </span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>

                             <?php if($mydiv2=='EMS'){?><li class="nav-item mydiv2 active"> <?php }else{?> <li class="nav-item mydiv2"><?php }?> 
                                    <a class="nav-link" data-toggle="collapse" href="#EMSExamples">
                                        <i class="material-icons">
                                            desktop_windows
                                        </i>
                                        <p>
                                            EMS
                                            <b class="caret"></b>
                                        </p>
                                    </a>
                             <?php if($mydiv2=='EMS'){?><div class="collapse show" id="EMSExamples"> <?php }else{?> <div class="collapse" id="EMSExamples"><?php }?>         
                                        <ul class="nav">
                                 <?php if($title=='EMS - 1'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>EMS/emsOne">
                                                    <i class="material-icons">tv</i>
                                                    <span class="sidebar-normal"> EMS - 1 </span>
                                                </a>
                                            </li>
                                  <?php if($title=='EMS - 2'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>EMS/emsTwo">
                                                    <i class="material-icons">tv</i>
                                                    <span class="sidebar-normal"> EMS - 2 </span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                     <?php if($mydiv=='REPORTS'){?><li class="nav-item mydiv active"> <?php }else{?> <li class="nav-item mydiv"><?php }?>
                        <a class="nav-link" data-toggle="collapse" href="#REPORTSExamples">
                            <i class="material-icons">receipt</i>
                            <p>
                                REPORTS
                                <b class="caret"></b>
                            </p>
                        </a>
                         <?php if($mydiv=='REPORTS'){?><div class="collapse show" id="REPORTSExamples"><?php }else{?> <div class="collapse" id="REPORTSExamples"><?php }?>
                        
                            <ul class="nav">
                                <?php if($mydiv2=='Operation'){?><li class="nav-item mydiv2 active"> <?php }else{?> <li class="nav-item mydiv2"><?php }?>
                                    <a class=" nav-link" data-toggle="collapse" href="#Operational">
                                        <i class="material-icons">build</i>
                                        <p>
                                            Operation
                                            <b class="caret"></b>
                                        </p>
                                    </a>
                                    <?php if($mydiv2=='Operation'){?><div class="collapse show" id="Operational"> <?php }else{?> <div class="collapse" id="Operational"><?php }?>                                    
                                        <ul class="nav">
                                    <?php if($title=='Equipment Utilization Summary'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>REPORTS/EquipmentUtilizationSummary">
                                                    <span class="sidebar-normal"> Equipment Utilization Summary </span>
                                                </a>
                                            </li>
                                    <?php if($title=='Day wise Equipment Utilization'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>REPORTS/DaywiseEquipmentUtilization">
                                                    <span class="sidebar-normal"> Day wise Equipment Utilization </span>
                                                </a>
                                            </li>
                                    <?php if($title=='Jetty & RMHS Delays Report'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>REPORTS/JettyRMHSDelaysReport">
                                                    <span class="sidebar-normal"> Jetty & RMHS Delays Report</span>
                                                </a>
                                            </li>
                                    <?php if($title=='Equipment Wise Discharge'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>REPORTS/EquipmentWiseDischarge">
                                                    <span class="sidebar-normal"> Equipment Wise Discharge </span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>

                                  <?php if($mydiv2=='Electrical'){?><li class="nav-item mydiv2 active"> <?php }else{?> <li class="nav-item mydiv2"><?php }?>
                                    <a class="nav-link" data-toggle="collapse" href="#Electrical">
                                        <i class="material-icons">settings_input_hdmi</i>
                                        <p>
                                            Electrical
                                            <b class="caret"></b>
                                        </p>
                                    </a>
                                    <?php if($mydiv2=='Electrical'){?><div class="collapse show" id="Electrical"> <?php }else{?> <div class="collapse" id="Electrical"><?php }?>                                    
                                        <ul class="nav">
                                        <?php if($title=='DPPL Energy Consumption'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>REPORTS/DPPLEnergyConsumption">
                                                    <span class="sidebar-normal"> DPPL Energy Consumption </span>
                                                </a>
                                            </li>
                                        <?php if($title=='Cargo Commodity & Equip. Power Consumption'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>REPORTS/CargoCommodityEquipmentPowerConsumption">
                                                    <span class="sidebar-normal">Cargo Commodity & Equip. Power Consumption</span>
                                                </a>
                                            </li>
                                        <?php if($title=='MTTR and MTBF'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>REPORTS/MTTRandMTBF">
                                                    <span class="sidebar-normal"> MTTR and MTBF </span>
                                                </a>
                                            </li>
                                        <?php if($title=='Equipment Delay'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>REPORTS/EquipmentDelay">
                                                    <span class="sidebar-normal"> Equipment Delay </span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>

                                 <?php if($mydiv2=='Mechanical'){?><li class="nav-item mydiv2 active"> <?php }else{?> <li class="nav-item mydiv2"><?php }?>
                                    <a class="nav-link" data-toggle="collapse" href="#Mechanical">
                                        <i class="material-icons">settings</i>
                                        <p>
                                            Mechanical
                                            <b class="caret"></b>
                                        </p>
                                    </a>
                                    <?php if($mydiv2=='Mechanical'){?><div class="collapse show" id="Mechanical"> <?php }else{?> <div class="collapse" id="Mechanical"><?php }?>
                                        <ul class="nav">
                                         <?php if($title=='Conveyor Lubrication Pump'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>REPORTS/ConveyorLubricationPump">
                                                    <span class="sidebar-normal"> Conveyor Lubrication Pump </span>
                                                </a>
                                            </li>
                                         <?php if($title=='Conveyor Temp & Load'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>REPORTS/ConveyorTempLoad">
                                                    <span class="sidebar-normal"> Conveyor Temp & Load </span>
                                                </a>
                                            </li>
                                         <?php if($title=='Cycle Time Report BUL'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>REPORTS/CycleTimeReportBUL">
                                                    <span class="sidebar-normal"> Cycle Time Report BUL </span>
                                                </a>
                                            </li>
                                         <?php if($title=='Equipment Compressor'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>REPORTS/EquipmentCompressor">
                                                    <span class="sidebar-normal"> Equipment Compressor</span>
                                                </a>
                                            </li>
                                         <?php if($title=='Equipment Temp & Load'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>REPORTS/EquipmentTempLoad">
                                                    <span class="sidebar-normal"> Equipment Temp & Load</span>
                                                </a>
                                            </li>
                                         <?php if($title=='Running Hours Conveyors'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>REPORTS/RunningHoursConveyors">
                                                    <span class="sidebar-normal"> Running Hours Conveyors</span>
                                                </a>
                                            </li>
                                         <?php if($title=='Running Hours Equipment'){?><li class="nav-item mydiv4 active"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                                                <a class="nav-link" href="<?php echo base_url();?>REPORTS/RunningHoursEquipment">
                                                    <span class="sidebar-normal"> Running Hours Equipment</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item mydiv">
                        <a class="nav-link" href="<?php echo base_url();?>Home/Logout">
                            <i class="material-icons">power_settings_new</i>
                            <p> LOGOUT </p>
                        </a>
                    </li>
                </ul>
                
                 </div>
    </div>