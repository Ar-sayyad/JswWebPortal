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
                                    <input type="date" class="form-control" value="<?php echo date('Y-m-d');?>" placeholder="Date" max="<?php echo date('Y-m-d');?>" id="trans_date">
                            </th>
                            <th>
                                Mother Vessel Name <span style="color:red;">*</span>
                            </th>
                            <th>
                                    <input type="text" class="form-control" autocomplete="off" required="" placeholder="Mother Vessel Name" id="Mother_Vessel_Name">
                            </th>
                        </tr>
                        <tr>
                            <th>
                                Under Discharge
                            </th>
                            <th>
                                <input type="text" class="form-control" autocomplete="off" placeholder="Under Discharge" id="At_Jetty_under_discharge">
                            </th>
                            <th>
                                Jetty Waiting for Discharge
                            </th>
                            <th>
                                <input type="text" class="form-control" autocomplete="off" placeholder="Jetty Waiting for Discharge" id="At_Jetty_waiting_for_discharge">
                            </th>
                             
                        </tr>
                        <tr>
                            <th>
                                R-19 Waiting (Loaded)
                            </th>
                            <th>
                                <input type="text" class="form-control" autocomplete="off" placeholder="R-19 Waiting (Loaded)" id="At_R_19_waiting_loaded">
                            </th>
                        
                            <th>
                                Gull - Waiting (Loaded)
                            </th>
                            <th>
                                <input type="text" class="form-control" autocomplete="off" placeholder="Gull - Waiting (Loaded)" id="At_gulf_waiting_loaded">
                            </th>
                        </tr>
                        <tr>
                            <th>
                                In transit from MV/GULL to Jetty(Loaded
                            </th>
                            <th>
                                <input type="text" class="form-control" autocomplete="off" placeholder="In transit from MV/GULL to Jetty(Loaded" id="In_transit_from_MV_GULL_toJetty_Loaded">
                            </th>                        
                            <th>
                               Under Loading at MV
                            </th>
                            <th>
                                <input type="text" class="form-control" autocomplete="off" placeholder="Under Loading at MV" id="Under_loading_at_MV">
                            </th>
                        </tr>
                         <tr>
                            <th>
                                Waiting for Loading
                            </th>
                            <th>
                                <input type="text" class="form-control" autocomplete="off" placeholder="Waiting for Loading" id="Waiting_for_Loading">
                            </th>                        
                            <th>
                               Waiting at Jetty
                            </th>
                            <th>
                                <input type="text" class="form-control" autocomplete="off" placeholder="Waiting at Jetty" id="Waiting_at_jetty">
                            </th>
                        </tr>
                         <tr>
                            <th>
                                Empty at Gull R-19
                            </th>
                            <th>
                                <input type="text" class="form-control" autocomplete="off" placeholder="Empty at Gull R-19" id="Empty_at_gull_R_19">
                            </th>                        
                            <th>
                               In Transit - from Jetty to MV
                            </th>
                            <th>
                                <input type="text" class="form-control" autocomplete="off" placeholder="In Transit-from Jetty to MV" id="In_transit_from_jetty_to_MV">
                            </th>
                        </tr>
                         <tr>
                            <th>
                                Breakdown/off hired
                            </th>
                            <th>
                                <input type="text" class="form-control" autocomplete="off" placeholder="Breakdown/off hired" id="Breakdown_offHired">
                            </th>
                            <th colspan="2"></th>
                        </tr>
                            <tr>
                                <th colspan="4" style="text-align:center">
                                    <button type="button" name="save" data-id="hello" id="saveJetty" class="btn btn-success" value="save"><i class="material-icons">save</i> Save</button>
                                     <button type="reset" name="Reset" class="btn btn-primary" value="reset"><i class="material-icons">replay</i> Reset</button>
                                </th>
                            </tr>

                        </thead>

                    </table>
                </form>
                </div>
            </div>
        </div>	
</div>
<script>
   $(document).ready(function(){ 
    $("#saveJetty").click(function(){
      $("#saveJetty").html('<img src="<?php echo base_url();?>Theme/assets/img/loading.gif" style="width:25px;height:20px;" />');
//      $Month= $("#Month").val();
//      $year= $("#year").val();      
        $trans_date = $("#trans_date").val(); 
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
        $Breakdown_offHired = $("#Breakdown_offHired").val();
           
      $.post('<?php echo base_url();?>Jetty/save', {trans_date:$trans_date,Mother_Vessel_Name:$Mother_Vessel_Name,At_Jetty_under_discharge:$At_Jetty_under_discharge,At_Jetty_waiting_for_discharge:$At_Jetty_waiting_for_discharge,
      At_R_19_waiting_loaded:$At_R_19_waiting_loaded,At_gulf_waiting_loaded:$At_gulf_waiting_loaded,In_transit_from_MV_GULL_toJetty_Loaded:$In_transit_from_MV_GULL_toJetty_Loaded,
      Under_loading_at_MV:$Under_loading_at_MV,Waiting_for_Loading:$Waiting_for_Loading,Waiting_at_jetty:$Waiting_at_jetty,Empty_at_gull_R_19:$Empty_at_gull_R_19,
      In_transit_from_jetty_to_MV:$In_transit_from_jetty_to_MV,Breakdown_offHired:$Breakdown_offHired}, function(data){
          //alert(data);
                    if(data==1)
                          {                                  
                                $(".success_msg").html('<i class="material-icons">check_circle_outline</i> Jetty Data Added Successfully');
                                $(".success_msg").show();
                                window.location.reload();
                                setTimeout(hidetab,4000);
                          }
                          else{
                                  $(".error_msg").html(data);
                                  $(".error_msg").show();
                                  setTimeout(hidetab,4000);
                                  $("#saveJetty").html('<i class="material-icons">save</i> Save');
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
            (charCode !== 45 || $(element).val().indexOf('-') !== -1) &&      // �-� CHECK MINUS, AND ONLY ONE.
            (charCode !== 46 || $(element).val().indexOf('.') !== -1) &&      // �.� CHECK DOT, AND ONLY ONE.
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