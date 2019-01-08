<ul class="nav Menus" id="dvmsMenu"  style="display:none;">
        <h4 style="">DVMS DASHBOARD</h4>
        <?php if($title=='DVMS'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
            <a class="nav-link" id="dvmslink" href="<?php echo base_url();?>DVMS">
                    <i class="material-icons">airplay</i>
                    <span class="sidebar-normal"> DVMS </span>
                </a>
            </li>
        <?php if($title=='Berth - 1'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                <a class="nav-link"  href="<?php echo base_url();?>DVMS/berthOne">
                    <i class="material-icons">filter_1</i>
                    <span class="sidebar-normal"> Berth - 1 </span>
                </a>
            </li>            
         <?php if($title=='Berth - 2'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                <a class="nav-link"  href="<?php echo base_url();?>DVMS/berthTwo">
                   <i class="material-icons">filter_2</i>
                    <span class="sidebar-normal"> Berth - 2 </span>
                </a>
            </li>
        <?php if($title=='Berth - 3'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                <a class="nav-link"  href="<?php echo base_url();?>DVMS/berthThree">
                    <i class="material-icons">filter_3</i>
                    <span class="sidebar-normal"> Berth - 3 </span>
                </a>
            </li>
        <?php if($title=='Berth - 4'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                <a class="nav-link"  href="<?php echo base_url();?>DVMS/berthFour">
                    <i class="material-icons">filter_4</i>
                    <span class="sidebar-normal"> Berth - 4 </span>
                </a>
            </li> 
        <?php if($title=='Berth - 5'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                <a class="nav-link"  href="<?php echo base_url();?>DVMS/berthFive">
                    <i class="material-icons">filter_5</i>
                    <span class="sidebar-normal"> Berth - 5 </span>
                </a>
            </li> 
        <?php if($title=='Berth - 6'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                    <a class="nav-link"  href="<?php echo base_url();?>DVMS/berthSix">
                        <i class="material-icons">filter_6</i>
                        <span class="sidebar-normal"> Berth - 6 </span>
                    </a>
                </li> 
        <?php if($title=='Berth - 7'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                <a class="nav-link"  href="<?php echo base_url();?>DVMS/berthSeven">
                    <i class="material-icons">filter_7</i>
                    <span class="sidebar-normal"> Berth - 7 </span>
                </a>
            </li> 
        <?php if($title=='Berth - 8'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                <a class="nav-link"  href="<?php echo base_url();?>DVMS/berthEight">
                    <i class="material-icons">filter_8</i>
                    <span class="sidebar-normal"> Berth - 8 </span>
                </a>
            </li>             
        </ul>   
<!----dvms------>
<ul class="nav Menus" id="mhsMenu" style="display:none;">
    <h4 style="">MHS DASHBOARD</h4>
     <?php if($mydiv3=='New MHS Overview'){?><li class="nav-item mydiv3 active"> <?php }else{?> <li class="nav-item mydiv3"><?php }?>                                       
            <a class=" nav-link" data-toggle="collapse" href="#NMOExamples" aria-expanded="true">
                <i class="material-icons">airplay</i> New MHS Overview <b class="caret"></b>                                        
            </a>
            <?php if($mydiv3=='New MHS Overview'){?><div class="collapse show" id="NMOExamples"> <?php }else{?> <div class="collapse" id="NMOExamples"><?php }?> 

                <ul class="nav">
                    <?php if($title=='New MHS Overview'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                        <a class="nav-link"  href="<?php echo base_url();?>MHS">
                            <i class="material-icons">airplay</i>
                            <span class="sidebar-normal"> New MHS Overview </span>
                        </a>
                    </li>
                     <?php if($title=='MHS PATH - 1'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                            <a class="nav-link"  href="<?php echo base_url();?>MHS/newmhsPathOne">
                                <i class="material-icons">filter_1</i>
                                <span class="sidebar-normal"> MHS PATH - 1 </span>
                            </a>
                        </li>
                    <?php if($title=='MHS PATH - 2'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                            <a class="nav-link"  href="<?php echo base_url();?>MHS/newmhsPathTwo">
                                <i class="material-icons">filter_2</i>
                                <span class="sidebar-normal"> MHS PATH - 2 </span>
                            </a>
                        </li>
                    <?php if($title=='MHS PATH - 3'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                            <a class="nav-link"  href="<?php echo base_url();?>MHS/newmhsPathThree">
                                <i class="material-icons">filter_3</i>
                                <span class="sidebar-normal"> MHS PATH - 3 </span>
                            </a>
                        </li>
                     <?php if($title=='MHS PATH - 4'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                            <a class="nav-link"  href="<?php echo base_url();?>MHS/newmhsPathFour">
                                <i class="material-icons">filter_4</i>
                                <span class="sidebar-normal"> MHS PATH - 4 </span>
                            </a>
                        </li>
                    <?php if($title=='MHS PATH - 5'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                            <a class="nav-link"   href="<?php echo base_url();?>MHS/newmhsPathFive">
                                <i class="material-icons">filter_5</i>
                                <span class="sidebar-normal"> MHS PATH - 5 </span>
                            </a>
                        </li>
                   <?php if($title=='MHS PATH - 6'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                            <a class="nav-link"  href="<?php echo base_url();?>MHS/newmhsPathSix">
                                <i class="material-icons">filter_6</i>
                                <span class="sidebar-normal"> MHS PATH - 6 </span>
                            </a>
                        </li>
                    <?php if($title=='MHS PATH - 7'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                            <a class="nav-link"  href="<?php echo base_url();?>MHS/newmhsPathSeven">
                                <i class="material-icons">filter_7</i>
                                <span class="sidebar-normal"> MHS PATH - 7 </span>
                            </a>
                        </li>
               </ul>
            </div>
        </li>

       <?php if($mydiv3=='Old MHS Overview'){?><li class="nav-item mydiv3 active"> <?php }else{?> <li class="nav-item mydiv3"><?php }?>
            <a class="nav-link" data-toggle="collapse" href="#OMOExamples">
                <i class="material-icons">airplay</i> Old MHS Overview<b class="caret"></b>
            </a>
            <?php if($mydiv3=='Old MHS Overview'){?><div class="collapse show" id="OMOExamples"><?php }else{?> <div class="collapse" id="OMOExamples"><?php }?>                                               
                <ul class="nav">
                    <?php if($title=='Old MHS Overview'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                            <a class="nav-link"  href="<?php echo base_url();?>MHS/oldmhsOverview">
                                 <i class="material-icons">airplay</i>
                                <span class="sidebar-normal"> Old MHS Overview </span>
                            </a>
                        </li>
                    <?php if($title=='MHS PATH - A'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                            <a class="nav-link"  href="<?php echo base_url();?>MHS/oldmhsPathA">
                                <i class="fa">A</i>
                                <span class="sidebar-normal"> MHS PATH - A </span>
                            </a>
                        </li>            
                    <?php if($title=='MHS PATH - B'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                            <a class="nav-link"  href="<?php echo base_url();?>MHS/oldmhsPathB">
                                <i class="fa">B</i>
                                <span class="sidebar-normal"> MHS PATH - B </span>
                            </a>
                        </li>
                    <?php if($title=='MHS PATH - C'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                            <a class="nav-link"  href="<?php echo base_url();?>MHS/oldmhsPathC">
                                <i class="fa">C</i>
                                <span class="sidebar-normal"> MHS PATH - C </span>
                            </a>
                        </li>
                    <?php if($title=='MHS PATH - D'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                            <a class="nav-link"  href="<?php echo base_url();?>MHS/oldmhsPathD">
                                <i class="fa">D</i>
                                <span class="sidebar-normal"> MHS PATH - D </span>
                            </a>
                        </li>
                    <?php if($title=='MHS PATH - E'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                            <a class="nav-link"  href="<?php echo base_url();?>MHS/oldmhsPathE">
                                <i class="fa">E</i>
                                <span class="sidebar-normal"> MHS PATH - E </span>
                            </a>
                        </li>
                   <?php if($title=='MHS PATH - F'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                            <a class="nav-link"  href="<?php echo base_url();?>MHS/oldmhsPathF">
                                <i class="fa">F</i>
                                <span class="sidebar-normal"> MHS PATH - F </span>
                            </a>
                        </li>
                    <?php if($title=='MHS PATH - G'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                            <a class="nav-link"  href="<?php echo base_url();?>MHS/oldmhsPathG">
                                <i class="fa">G</i>
                                <span class="sidebar-normal"> MHS PATH - G </span>
                            </a>
                        </li>
                    <?php if($title=='MHS PATH - H'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                            <a class="nav-link"  href="<?php echo base_url();?>MHS/oldmhsPathH">
                                <i class="fa">H</i>
                                <span class="sidebar-normal"> MHS PATH - H </span>
                            </a>
                        </li>            
                    <?php if($title=='MHS PATH - I'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                            <a class="nav-link"  href="<?php echo base_url();?>MHS/oldmhsPathI">
                                <i class="fa">I</i>
                                <span class="sidebar-normal"> MHS PATH - I </span>
                            </a>
                        </li>            

                </ul>
            </div>
        </li>

            <?php if($title=='Motor Temperature'){?><li class="nav-item mydiv3 activeMenu"> <?php }else{?> <li class="nav-item mydiv3"><?php }?>
               <a class="nav-link"  href="<?php echo base_url();?>MHS/MotorTemperature">
                   <i class="material-icons">
                       wb_sunny
                   </i>
                   <span class="sidebar-normal"> Motor Temperature </span>
               </a>
           </li>
            <?php if($title=='Motor Current'){?><li class="nav-item mydiv3 activeMenu"> <?php }else{?> <li class="nav-item mydiv3"><?php }?>
                <a class="nav-link"  href="<?php echo base_url();?>MHS/MotorCurrent">
                    <i class="material-icons">
                        flash_on
                    </i>
                    <span class="sidebar-normal"> Motor Current </span>
                </a>
            </li>
        </ul>
<!-----MHS----->
<ul class="nav Menus" id="bulMenu" style="display:none;">
    <h4 style="">BUL DASHBOARD</h4>
<?php if($title=='BUL - 1'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
        <a class="nav-link"  href="<?php echo base_url();?>BUL/bulOne">
            <i class="material-icons">tv</i>
            <span class="sidebar-normal"> BUL - 1 </span>
        </a>
    </li>
<?php if($title=='BUL - 2'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
        <a class="nav-link"  href="<?php echo base_url();?>BUL/bulTwo">
            <i class="material-icons">tv</i>
            <span class="sidebar-normal"> BUL - 2 </span>
        </a>
    </li>
<?php if($title=='BUL - 3'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
        <a class="nav-link"  href="<?php echo base_url();?>BUL/bulThree">
            <i class="material-icons">tv</i>
            <span class="sidebar-normal"> BUL - 3 </span>
        </a>
    </li>
</ul>
<!---BUL------>                        
<ul class="nav Menus" id="emsMenu" style="display:none;">
    <h4 style="">EMS DASHBOARD</h4>
        <?php if($title=='EMS - 1'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                <a class="nav-link"  href="<?php echo base_url();?>EMS/emsOne">
                    <i class="material-icons">tv</i>
                    <span class="sidebar-normal"> EMS - 1 </span>
                </a>
            </li>
        <?php if($title=='EMS - 2'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                <a class="nav-link"  href="<?php echo base_url();?>EMS/emsTwo">
                    <i class="material-icons">tv</i>
                    <span class="sidebar-normal"> EMS - 2 </span>
                </a>
            </li>
</ul>
<!---EMS------>                                                
<ul class="nav Menus" id="operationalMenu" style="display:none;">
    <h4 style="">OPERATIONAL REPORTS</h4>
        <?php if($title=='Day wise Equipment Utilization'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                <a class="nav-link"  href="<?php echo base_url();?>REPORTS/DaywiseEquipmentUtilization">
                    <span class="sidebar-normal"> Day wise Equipment Utilization </span>
                </a>
            </li>
        <?php if($title=='DPR'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
               <a class="nav-link"  href="<?php echo base_url();?>REPORTS/DPR">
                   <span class="sidebar-normal"> DPR </span>
               </a>
           </li>
        <?php if($title=='Jetty & RMHS Delays Report'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                <a class="nav-link"  href="<?php echo base_url();?>REPORTS/JettyRMHSDelaysReport">
                    <span class="sidebar-normal"> Jetty & RMHS Delays Report</span>
                </a>
            </li>
        <?php if($title=='Equipment Wise Discharge'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                <a class="nav-link"  href="<?php echo base_url();?>REPORTS/EquipmentWiseDischarge">
                    <span class="sidebar-normal"> Equipment Wise Discharge </span>
                </a>
            </li>
</ul>    
<!---oprational Reports--->
<ul class="nav Menus" id="electricalMenu" style="display:none;">
    <h4 style="">ELECTRICAL REPORTS</h4>
    <?php if($title=='Daily Power Consumption New Jetty'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
            <a class="nav-link"  title="Daily Power Consumption New Jetty" href="<?php echo base_url();?>REPORTS/DailyPowerConsumptionNewJetty">
                   <span class="sidebar-normal"> Daily Power Consumption New Jetty </span>
            </a>
        </li>                                            
    <?php if($title=='Daily Power Consumption Old Jetty'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
            <a class="nav-link"  title="Daily Power Consumption Old Jetty" href="<?php echo base_url();?>REPORTS/DailyPowerConsumptionOldJetty">
               <span class="sidebar-normal"> Daily Power Consumption Old Jetty </span>
            </a>
       </li> 
    <?php if($title=='Cargo Commodity Wise Power Consumption New Jetty'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
            <a class="nav-link"  title="Cargo Commodity Wise Power Consumption New Jetty" href="<?php echo base_url();?>REPORTS/CargoCommodityWisePowerConsumptionnewjetty">
                <span class="sidebar-normal"> Cargo Commodity Wise Power Consumption New Jetty </span>
            </a>
        </li>
    <?php if($title=='Cargo Commodity Wise Power Consumption Old Jetty'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
            <a class="nav-link"  title="Cargo Commodity Wise Power Consumption Old Jetty" href="<?php echo base_url();?>REPORTS/CargoCommodityWisePowerConsumptionOldjetty">
                <span class="sidebar-normal"> Cargo Commodity Wise Power Consumption Old Jetty </span>
            </a>
        </li> 
    <?php if($title=='DPPL Electrical New Jetty System EQ Delays'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
            <a class="nav-link"  title="DPPL Electrical New Jetty System EQ Delays" href="<?php echo base_url();?>REPORTS/DPPLElectricalNewJettySystemEQDelays">
                    <span class="sidebar-normal"> DPPL Electrical New Jetty System EQ Delays  </span>
            </a>
        </li>
    <?php if($title=='DPPL Electrical Old Jetty System EQ Delays'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
            <a class="nav-link"  title="DPPL Electrical Old Jetty System EQ Delays" href="<?php echo base_url();?>REPORTS/DPPLElectricalOldJettySystemEQDelays">
                    <span class="sidebar-normal"> DPPL Electrical Old Jetty System EQ Delays  </span>
            </a>
        </li>
    <?php if($title=='Daily Equipment Wise Power Consumption New'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
            <a class="nav-link"  title="Daily Equipment Wise Power Consumption New" href="<?php echo base_url();?>REPORTS/DailyEquipmentWisePowerConsumptionNew">
                    <span class="sidebar-normal"> Daily Equipment Wise Power Consumption New  </span>
            </a>
        </li>
    <?php if($title=='Daily Equipment Wise Power Consumption Old'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
            <a class="nav-link"  title="Daily Equipment Wise Power Consumption Old" href="<?php echo base_url();?>REPORTS/DailyEquipmentWisePowerConsumptionOld">
                    <span class="sidebar-normal"> Daily Equipment Wise Power Consumption Old  </span>
            </a>
        </li>
    <?php if($title=='DPPL Electrical New Jetty System (MTTR,MTBF)'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
            <a class="nav-link"  title="DPPL Electrical New Jetty System (MTTR,MTBF)" href="<?php echo base_url();?>REPORTS/DPPLElectricalNewJettySystemMTTRvMTBF">
                    <span class="sidebar-normal"> DPPL Electrical New Jetty System (MTTR,MTBF)  </span>
            </a>
        </li>
    <?php if($title=='DPPL Electrical Old Jetty System (MTTR,MTBF)'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
            <a class="nav-link"  title="DPPL Electrical Old Jetty System (MTTR,MTBF)" href="<?php echo base_url();?>REPORTS/DPPLElectricalOldJettySystemMTTRvMTBF">
                    <span class="sidebar-normal"> DPPL Electrical Old Jetty System (MTTR,MTBF)  </span>
            </a>
        </li>

</ul>
<!---electrical Reports--->
<ul class="nav Menus" id="mechanicalMenu" style="display:none;">
    <h4 style="">MECHANICAL REPORTS</h4>
        <?php if($title=='Cycle Time Report BUL'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                <a class="nav-link"  href="<?php echo base_url();?>REPORTS/CycleTimeReportBUL">
                    <span class="sidebar-normal"> Cycle Time Report BUL </span>
                </a>
            </li>
        <?php if($title=='Equipment Compressor'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                <a class="nav-link"  href="<?php echo base_url();?>REPORTS/EquipmentCompressor">
                    <span class="sidebar-normal"> Equipment Compressor</span>
                </a>
            </li>
        <?php if($title=='Running Hours Conveyors'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                <a class="nav-link"  href="<?php echo base_url();?>REPORTS/RunningHoursConveyors">
                    <span class="sidebar-normal"> Running Hours Conveyors</span>
                </a>
            </li>
        <?php if($title=='Running Hours Equipment'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                <a class="nav-link"  href="<?php echo base_url();?>REPORTS/RunningHoursEquipment">
                    <span class="sidebar-normal"> Running Hours Equipment</span>
                </a>
            </li>
</ul>
<!---mechanical Reports--->                        
<ul class="nav Menus" id="manualformsMenu" style="display: none;">
            <h4 style="">MANUAL FORMS</h4>
            <?php if($title=='Jetty'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                     <a class="nav-link"  href="<?php echo base_url();?>Jetty">
                        <i class="material-icons">filter_1</i>Jetty Form
                    </a>
                </li>
           <?php if($title=='MBC'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                     <a class="nav-link"  href="<?php echo base_url();?>MBC">
                        <i class="material-icons">filter_2</i> MBC
                    </a>
                </li>
            <?php if($title=='Cargo Despatch'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                     <a class="nav-link"  href="<?php echo base_url();?>CargoDespatch">
                        <i class="material-icons">filter_3</i> Cargo Despatch
                    </a>
                </li>
            <?php if($title=='Rate Form'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                     <a class="nav-link"  href="<?php echo base_url();?>RateForm">
                        <i class="material-icons">filter_4</i> Rate Form
                    </a>
                </li>
            <?php if($title=='Equipment Delay'){?><li class="nav-item mydiv4 activeMenu"> <?php }else{?> <li class="nav-item mydiv4"><?php }?>
                <a class="nav-link"  href="<?php echo base_url();?>EquipmentDelay">
                        <i class="material-icons">filter_5</i> Equipment Delay
                    </a>
                </li>
        </ul>