<div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-content">
                <form action="" method="POST" enctype="multipart/form-data">
                    <table class="table form">                                                
                        <thead class="">        
                        <tr>
                            <th>
                                Date
                            </th>
                            <th>
                                <input type="date" class="form-control" max="<?php echo date('Y-m-d');?>"  required="" placeholder="Date"  id="date">
                            </th>
                            <th>
                               Delay Start Time
                            </th>
                            <th>
                                <input type="time" class="form-control"  required="" value="00:00:00" onkeyup="getTime();" placeholder="Delay start Time"  id="Delay_start_Time">
                            </th>
                        </tr>
                        <tr>
                            <th>
                                Delay End Time
                            </th>
                            <th>
                                <input type="time" class="form-control" value="00:00:00" onkeyup="getTime();" placeholder="Delay End Time" id="Delay_end_time">
                            </th>                           
                            <th>
                                Delay Time
                            </th>
                            <th>
                                <input type="text" class="form-control" readonly=""  placeholder="Delay Time" id="Delay_Time">
                            </th> 
                        </tr>
                       <tr>
                            <th>
                                Equipment Name
                            </th>
                            <th>
                                <select class="form-control"  id="Equipment_Name">
                                    <option value="" selected="" disabled="">--Select Name--</option>
                                    <option value="BUL1">BUL1</option>
                                    <option value="BUL2">BUL2</option>
                                    <option value="BUL3">BUL3</option>
                                    <option value="BU1">BU1</option>
                                    <option value="BU2">BU2</option>
                                    <option value="Sennebogen J1">Sennebogen J1</option>
                                    <option value="Sennebogen J5">Sennebogen J5</option>
                                </select>
                            </th>                           
                            <th>
                                Operator Name
                            </th>
                            <th>
                                <input type="text" class="form-control" placeholder="Operator Name" id="Operator_Name">
                            </th> 
                        </tr>
                        <tr>
                            <th>
                                Remarks
                            </th>
                            <th>
                                <input type="text" class="form-control" placeholder="Remarks" id="Remarks">
                            </th>                           
                            <th colspan="2"> &nbsp;
                            </th> 
                        </tr>
                            <tr>
                                <th colspan="4" style="text-align:center">
                                    <button type="button" name="save" data-id="hello" id="saveEquipment" class="btn btn-success" value="save"><i class="material-icons">save</i> Save</button>
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
<script src="<?php echo base_url();?>Theme/assets/js/moment.js" type="text/javascript"></script>
<script>
    function getTime(){
           $Delay_start_Time = $("#Delay_start_Time").val();
           $Delay_end_time = $("#Delay_end_time").val();
            var startTime = moment($Delay_start_Time, 'hh:mm');
            var endTime = moment($Delay_end_time, 'hh:mm');
            var totalHours = (endTime.diff(startTime, 'hours'));
            var totalMinutes = endTime.diff(startTime, 'minutes');
            var clearMinutes = totalMinutes % 60;
            var time = (totalHours + ":" + clearMinutes);
             $("#Delay_Time").val(time);
       }   
   $(document).ready(function(){ 
    $("#saveEquipment").click(function(){
      $("#saveEquipment").html('<img src="<?php echo base_url();?>Theme/assets/img/loading.gif" style="width:25px;height:20px;" />');
         $date = $("#date").val(); 
        $Delay_start_Time = $("#Delay_start_Time").val();
        $Delay_end_time = $("#Delay_end_time").val();
        $Delay_Time = $("#Delay_Time").val();
        $Equipment_Name = $("#Equipment_Name").val();
        $Operator_Name = $("#Operator_Name").val();
        $Remarks = $("#Remarks").val();   
      $.post('<?php echo base_url();?>EquipmentDelay/save', {date:$date,Delay_start_Time:$Delay_start_Time,Delay_end_time:$Delay_end_time,
      Delay_Time:$Delay_Time,Equipment_Name:$Equipment_Name,Operator_Name:$Operator_Name,Remarks:$Remarks}, function(data){
          //alert(data);
                    if(data==1)
                          {                                  
                                $(".success_msg").html('<i class="material-icons">check_circle_outline</i> Equipment Delay Data Added Successfully');
                                $(".success_msg").show();
                                window.location.reload();
                                setTimeout(hidetab,4000);
                          }
                          else{
                                  $(".error_msg").html(data);
                                  $(".error_msg").show();
                                  setTimeout(hidetab,4000);
                                  $("#saveEquipment").html('<i class="material-icons">save</i> Save');
                          }
		});
      
    });
    $('.Budget').keypress(function (event) {
            return isNumber(event, this);
        });        
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