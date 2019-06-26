<?php $data_info = $this->db->get_where('dbo.tbl_JettyForm_MF_DPR', array('Id' => $param2))->result_array();
 foreach ($data_info as $row) {
      ?>
<div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-content">
                <form action="" method="POST" enctype="multipart/form-data">
                    <table class="table form">                                                
                        <thead class="">                        
                        <tr>
                            <th>
                                Date <span style="color:red;">*</span>
                            </th>
                            <th>
                                    <input type="date" class="form-control" readonly="" value="<?php echo $row['date'];?>" placeholder="Date" max="<?php echo date('Y-m-d');?>" id="trans_date">
                            </th>
                            <th>
                                    VCN No.<span style="color:red;">*</span>
                            </th>
                            <th>
                                    <input type="text" class="form-control" value="<?php echo $row['vcn_no'];?>" autocomplete="off" required="" placeholder="VCN No." id="VCN_No">
                            </th>
                            </tr>
                        <tr>
                            <th>
                                Mother Vessel Name <span style="color:red;">*</span>
                            </th>
                            <th>
                                    <input type="text" class="form-control" value="<?php echo $row['Mother_Vessel_Name'];?>" autocomplete="off" readonly="" placeholder="Vessel Name [ Autofill ]" id="Mother_Vessel_Name">
                            </th>
                        
                            <th>
                                Under Discharge
                            </th>
                            
                            <th>
                                    <input type="text" class="form-control" value="<?php echo $row['At_Jetty_under_discharge'];?>" autocomplete="off" placeholder="Under Discharge" id="At_Jetty_under_discharge">
                            </th>
                            </tr>
                        <tr>
                            <th>
                                Jetty Waiting for Discharge
                            </th>
                            <th>
                                    <input type="text" class="form-control" value="<?php echo $row['At_Jetty_waiting_for_discharge'];?>" autocomplete="off" placeholder="Jetty Waiting for Discharge" id="At_Jetty_waiting_for_discharge">
                            </th>                             
                        
                            <th>
                                R-19 Waiting (Loaded)
                            </th>
                            <th>
                                    <input type="text" class="form-control" value="<?php echo $row['At_R_19_waiting_loaded'];?>" autocomplete="off" placeholder="R-19 Waiting (Loaded)" id="At_R_19_waiting_loaded">
                            </th>
                        </tr>
                        <tr>
                            <th>
                                Gull - Waiting (Loaded)
                            </th>
                            <th>
                                    <input type="text" class="form-control" value="<?php echo $row['At_gulf_waiting_loaded'];?>" autocomplete="off" placeholder="Gull - Waiting (Loaded)" id="At_gulf_waiting_loaded">
                            </th>
                        
                            <th>
                                In transit from MV/GULL to Jetty(Loaded
                            </th>
                            <th>
                                    <input type="text" class="form-control" value="<?php echo $row['In_transit_from_MV_GULL_toJetty_Loaded'];?>" autocomplete="off" placeholder="In transit from MV/GULL to Jetty(Loaded" id="In_transit_from_MV_GULL_toJetty_Loaded">
                            </th> 
                        </tr>
                        <tr>
                            <th>
                               Under Loading at MV
                            </th>
                            <th>
                                    <input type="text" class="form-control" value="<?php echo $row['Under_loading_at_MV'];?>" autocomplete="off" placeholder="Under Loading at MV" id="Under_loading_at_MV">
                            </th>                       
                            <th>
                                Waiting for Loading
                            </th>
                            <th>
                                    <input type="text" class="form-control" value="<?php echo $row['Waiting_for_Loading'];?>" autocomplete="off" placeholder="Waiting for Loading" id="Waiting_for_Loading">
                            </th> 
                        </tr>
                        <tr>
                            <th>
                               Waiting at Jetty
                            </th>
                            <th>
                                <input type="text" class="form-control" value="<?php echo $row['Waiting_at_jetty'];?>" autocomplete="off" placeholder="Waiting at Jetty" id="Waiting_at_jetty">
                            </th>                        
                            <th>
                                Empty at Gull R-19
                            </th>
                            <th>
                                <input type="text" class="form-control" value="<?php echo $row['Empty_at_gull_R_19'];?>" autocomplete="off" placeholder="Empty at Gull R-19" id="Empty_at_gull_R_19">
                            </th>
                        </tr>
                        <tr>
                            <th>
                               In Transit - from Jetty to MV
                            </th>
                            <th>
                                <input type="text" class="form-control" value="<?php echo $row['In_transit_from_jetty_to_MV'];?>" autocomplete="off" placeholder="In Transit-from Jetty to MV" id="In_transit_from_jetty_to_MV">
                            </th>  
                            <th>
                               Coastal Cargo
                            </th>
                            <th>
                                <input type="text" class="form-control" value="<?php echo $row['coastal_cargo'];?>" autocomplete="off" placeholder="Coastal Cargo" id="coastal_cargo">
                            </th>                              
                        </tr>
                        <tr>                                                  
                            <th>
                                Hatch Cover Repair
                            </th>
                            <th>
                                <input type="text" class="form-control" value="<?php echo $row['hatch_cover_repair'];?>" autocomplete="off" placeholder="Hatch Cover Repair" id="hatch_cover_repair">
                            </th>
                            
                            <th>
                               Dry Dock
                            </th>
                            <th>
                                <input type="text" class="form-control" value="<?php echo $row['dry_dock'];?>" autocomplete="off" placeholder="Dry Dock" id="dry_dock">
                            </th>
                        </tr>
                        <tr>
                            <th>
                                Breakdown/off hired
                            </th>
                            <th>
                                <input type="text" class="form-control" value="<?php echo $row['Breakdown_offHired'];?>"  autocomplete="off" placeholder="Breakdown/off hired" id="Breakdown_offHired">
                            </th>                        
                            <th colspan="2">&nbsp;</th>
                        </tr>
                            <tr>
                                <th colspan="4" style="text-align:center">
                                    <button type="button" name="save" data-id="hello" id="saveJetty" class="btn btn-success" value="save"><i class="material-icons">edit</i> Update</button>
                                     <!--<button type="reset" name="Reset" class="btn btn-primary" value="reset"><i class="material-icons">replay</i> Reset</button>-->
                                </th>
                            </tr>
                        </thead>
                    </table>
                </form>
                </div>
            </div>
        </div>	
</div>
 <?php } ?>
<script>
   $(document).ready(function(){ 
           $("#VCN_No").change(function(){
                    $VCN_No = $("#VCN_No").val(); 
               $.post('<?php echo base_url();?>Jetty/searchVesselName', {VCN_No:$VCN_No},function(data){                       
                       $("#Mother_Vessel_Name").val(data);
               });
           });
    $("#saveJetty").click(function(){
      $("#saveJetty").html('<img src="<?php echo base_url();?>Theme/assets/img/loading.gif" style="width:25px;height:20px;" />');
//      $Month= $("#Month").val();
//      $year= $("#year").val();      
        $trans_date = $("#trans_date").val(); 
        $VCN_No = $("#VCN_No").val(); 
        $Mother_Vessel_Name = $("#Mother_Vessel_Name").val();
        $At_Jetty_under_discharge = $("#At_Jetty_under_discharge").val();
        $At_Jetty_waiting_for_discharge = $("#At_Jetty_waiting_for_discharge").val();
        $At_R_19_waiting_loaded = $("#At_R_19_waiting_loaded").val();
        $At_gulf_waiting_loaded = $("#At_gulf_waiting_loaded").val();
        $In_transit_from_MV_GULL_toJetty_Loaded = $("#In_transit_from_MV_GULL_toJetty_Loaded").val();
        $Under_loading_at_MV= $("#Under_loading_at_MV").val();
        $Waiting_for_Loading = $("#Waiting_for_Loading").val();
        $Waiting_at_jetty = $("#Waiting_at_jetty").val();
        $Empty_at_gull_R_19 = $("#Empty_at_gull_R_19").val();
        $In_transit_from_jetty_to_MV = $("#In_transit_from_jetty_to_MV").val();
        $coastal_cargo = $("#coastal_cargo").val();
        $hatch_cover_repair = $("#hatch_cover_repair").val();
        $dry_dock = $("#dry_dock").val();
        $Breakdown_offHired = $("#Breakdown_offHired").val();
           
      $.post('<?php echo base_url();?>Jetty/update/<?php echo $param2;?>', {trans_date:$trans_date,VCN_No:$VCN_No,Mother_Vessel_Name:$Mother_Vessel_Name,At_Jetty_under_discharge:$At_Jetty_under_discharge,At_Jetty_waiting_for_discharge:$At_Jetty_waiting_for_discharge,
      At_R_19_waiting_loaded:$At_R_19_waiting_loaded,At_gulf_waiting_loaded:$At_gulf_waiting_loaded,In_transit_from_MV_GULL_toJetty_Loaded:$In_transit_from_MV_GULL_toJetty_Loaded,
      Under_loading_at_MV:$Under_loading_at_MV,Waiting_for_Loading:$Waiting_for_Loading,Waiting_at_jetty:$Waiting_at_jetty,Empty_at_gull_R_19:$Empty_at_gull_R_19,
      In_transit_from_jetty_to_MV:$In_transit_from_jetty_to_MV,coastal_cargo:$coastal_cargo,hatch_cover_repair:$hatch_cover_repair,dry_dock:$dry_dock,Breakdown_offHired:$Breakdown_offHired}, function(data){
          //alert(data);
                    if(data==1)
                          {                                  
                                $(".success_msg").html('<i class="material-icons">check_circle_outline</i> Jetty Data Updated Successfully');
                                $(".success_msg").show();
                                window.location.reload();
                                setTimeout(hidetab,4000);
                          }
                          else if(data==2){
                                $(".error_msg").html("Updation Time Out..! Not Allowed.");
                                $(".error_msg").show();
                                setTimeout(hidetab,4000);
                                $("#saveJetty").html('<i class="material-icons">edit</i> Update');  
                          }
                          else{
                                  $(".error_msg").html(data);
                                  $(".error_msg").show();
                                  setTimeout(hidetab,4000);
                                  $("#saveJetty").html('<i class="material-icons">edit</i> Update');
                          }
		});
      
    });
    $('#Mother_Vessel_Name').keypress(function (event) {
            return isChar(event, this);
        });
        function isChar(evt, element) {
        var charCode = (evt.which) ? evt.which : event.keyCode;

        if ((charCode < 48 || charCode > 57)){                
                        return true;
                }else{
                        $(".error_msg").html('Number Not Allowed..!');
                        $(".error_msg").show();
                        //$(element).val('');
                        setTimeout(hidetab,2000);
                    return false;
            }
    }
    // THE SCRIPT THAT CHECKS IF THE KEY PRESSED IS A NUMERIC OR DECIMAL VALUE.
    function isNumber(evt, element) {

        var charCode = (evt.which) ? evt.which : event.keyCode;

        if (
            (charCode !== 45 || $(element).val().indexOf('-') !== -1) &&      // “-” CHECK MINUS, AND ONLY ONE.
            (charCode !== 46 || $(element).val().indexOf('.') !== -1) &&      // “.” CHECK DOT, AND ONLY ONE.
            (charCode < 48 || charCode > 57)){
                $(".error_msg").html('Characters Not Allowed..!');
                $(".error_msg").show();
                //$(element).val('');
                setTimeout(hidetab,2000);
            return false;
        }

        return true;
    }
});
</script>