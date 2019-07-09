<div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-content">
                <form action="" method="POST" enctype="multipart/form-data">
                    <table class="table form">                                                
                        <thead class="">        
                        <tr>
                            <th>
                                ETA Mumbai Date <span style="color:red;">*</span>
                            </th>
                            <th>
                                <input type="date" class="form-control"   required="" value="<?php echo date('Y-m-d');?>" placeholder="Date"  id="ETA_Mumbai_date">
                            </th>
                            <th>
                                ETA Mumbai Time 
                            </th>
                            <th>
                                <input type="time" class="form-control"  value="00:00:00"  required="" placeholder="Time"  id="ETA_Mumbai_time">
                            </th>
                        </tr>
                        <tr>
                            <th>
                                Mother Vessel Name <span style="color:red;">*</span>
                            </th>
                            <th>
                                <input type="text" class="form-control" placeholder="Mother Vessel Name" id="MvesselName">
                            </th>                           
                            <th>
                               Cargo <span style="color:red;">*</span>
                            </th>
                            <th>
                                <input type="text" class="form-control" placeholder="Cargo" id="Cargo">
                            </th>
                        </tr>
                        <tr>
                            <th>
                               Balance Qty <span style="color:red;">*</span>
                            </th>
                            <th>
                                <input type="text" class="form-control" autocomplete="off" placeholder="Balance Qty" id="Bl_Qty">
                            </th>                       
                                                       
                        </tr>                      
                        <tr>
                            <th colspan="4" style="text-align:center">
                                <button type="button" name="save" data-id="hello" id="saveMBC" class="btn btn-success" value="save"><i class="material-icons">save</i> Save</button>
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
    $("#saveMBC").click(function(){
      $("#saveMBC").html('<img src="<?php echo base_url();?>Theme/assets/img/loading.gif" style="width:25px;height:20px;" />');
//      $Month= $("#Month").val();
//      $year= $("#year").val();      
         $ETA_Mumbai_dt = $("#ETA_Mumbai_date").val();          
         $ETA_Mumbai_tm = $("#ETA_Mumbai_time").val(); 
         if($ETA_Mumbai_dt!=='' && $ETA_Mumbai_tm!==''){
         $ETA_Mumbai= $ETA_Mumbai_dt +" "+$ETA_Mumbai_tm;
         }else{
             $(".error_msg").html("Date and Time Required...!");
             $(".error_msg").show();
             setTimeout(hidetab,4000);
              $("#saveMBC").html('<i class="material-icons">save</i> Save');
         }
        $MvesselName= $("#MvesselName").val();
        $Cargo = $("#Cargo").val();
        $bl_qty = $("#Bl_Qty").val();
           
      $.post('<?php echo base_url();?>ETAMumbai/save', {date:$ETA_Mumbai_dt,ETA_Mumbai:$ETA_Mumbai,MvesselName:$MvesselName,Cargo:$Cargo,Bl_Qty:$bl_qty}, function(data){
          //alert(data);
                    if(data==1)
                          {                                  
                                $(".success_msg").html('<i class="material-icons">check_circle_outline</i> ETA Mumbai Data Added Successfully');
                                $(".success_msg").show();
                                window.location.reload();
                                setTimeout(hidetab,4000);
                          }
                          else{
                                  $(".error_msg").html(data);
                                  $(".error_msg").show();
                                  setTimeout(hidetab,4000);
                                  $("#saveMBC").html('<i class="material-icons">save</i> Save');
                          }
		});
      
    });
    $('#Bl_Qty').keypress(function (event) {
            return isNumber(event, this);
        });        
        $('#MvesselName').keypress(function (event) {
            return isChar(event, this);
        }); 
        
        $('#Cargo').keypress(function (event) {
            return isChar(event, this);
        }); 
      
  // THE SCRIPT THAT CHECKS IF THE KEY PRESSED IS A NUMERIC OR DECIMAL VALUE.
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