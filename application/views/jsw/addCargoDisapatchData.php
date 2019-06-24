<div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-content">
                <form action="" method="POST" enctype="multipart/form-data">
                    <table class="table form">                                                
                        <thead class="">
<!--
                            <tr class="sect2">
                                <th> Select Month :<span class="required">*</span></th>
                                <th>
                                    <select id="Month" name="Month" placeholder="Month" required="" class="clsmon form-control">
                                       <option value="">---Select Month---</option>
                                        <?php $sr=1; foreach($month_info as $mon){?>                                       
                                       <option data-id="<?php echo trim($mon['MonID']);?>" value="<?php echo trim($mon['MonName']);?>"><?php echo trim($mon['MonthFullName']);?></option>                                      
                                        <?php $sr++;}?>
                                    </select>
                                </th>

                                <th> Select Year :<span class="required">*</span></th>
                                <th>
                                    <select id="year" name="year" placeholder="year" required="" class="form-control">
                                        <option value="">---Select Year---</option>
                                        <option value="<?php echo date('Y')-1;?>"><?php echo date('Y')-1;?></option>
                                        <option value="<?php echo date('Y');?>"><?php echo date('Y');?></option>
                                        <option value="<?php echo date('Y')+1;?>"><?php echo date('Y')+1;?></option>
                                    </select>
                                </th>
                            </tr>
                            <tr>
                                <th colspan="4" >
                                     <hr class="hr2">
                                </th>
                            </tr>-->
                        
                        <tr>
                            <th>
                                Date
                            </th>
                            <th>
                                <input type="date" class="form-control" required="" value="<?php echo date('Y-m-d');?>" placeholder="Date" max="<?php echo date('Y-m-d');?>" id="date">
                            </th>
                            <th>
                                    Mother Vessel<span style="color:red;">*</span>
                            </th>
                            <th>
                                    <input type="text" class="form-control" autocomplete="off" required="" placeholder="Mother Vessel" id="Mother_vessel">
                            </th>
                        </tr>
                        <tr>
                            <th>
                                Cargo<span style="color:red;">*</span>
                            </th>
                            <th>
                                <input type="text" class="form-control" autocomplete="off" required="" placeholder="Cargo" id="cargo">
                            </th>
                            <th>
                                Cargo Qty For Day<span style="color:red;">*</span>
                            </th>
                            <th>
                                <input type="text" class="form-control" autocomplete="off" required="" placeholder="Cargo Qty For Day" id="cargo_qty_for_day">
                            </th>
                        </tr>
                        <tr>
                            <th>
                                Trips For Day From Berth No<span style="color:red;">*</span>
                            </th>
                            <th>
                                <input type="text" class="form-control" autocomplete="off" required="" placeholder="Trips For Day From Berth No" id="TripsForDay_FromBerthNo">
                            </th>
                            <th colspan="2">&nbsp;</th>
                        </tr>
                       
                                <th colspan="4" style="text-align:center">
                                    <button type="button" name="save" data-id="hello" id="saveCargo" class="btn btn-success" value="save"><i class="material-icons">save</i> Save</button>
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
    $("#saveCargo").click(function(){
      $("#saveCargo").html('<img src="<?php echo base_url();?>Theme/assets/img/loading.gif" style="width:25px;height:20px;" />');
//      $Month= $("#Month").val();
//      $year= $("#year").val();      
        $date = $("#date").val(); 
        $Mother_vessel = $("#Mother_vessel").val();
        $cargo = $("#cargo").val();
        $cargo_qty_for_day= $("#cargo_qty_for_day").val();
        $TripsForDay_FromBerthNo = $("#TripsForDay_FromBerthNo").val();
           
      $.post('<?php echo base_url();?>CargoDespatch/save', {date:$date,Mother_vessel:$Mother_vessel,cargo:$cargo,
      cargo_qty_for_day:$cargo_qty_for_day,TripsForDay_FromBerthNo:$TripsForDay_FromBerthNo}, function(data){
          //alert(data);
                    if(data==1)
                          {                                  
                                $(".success_msg").html('<i class="material-icons">check_circle_outline</i> Cargo Dispatch Data Added Successfully');
                                $(".success_msg").show();
                                window.location.reload();
                                setTimeout(hidetab,4000);
                          }
                          else{
                                  $(".error_msg").html(data);
                                  $(".error_msg").show();
                                  setTimeout(hidetab,4000);
                                  $("#saveCargo").html('<i class="material-icons">save</i> Save');
                          }
		});
      
    });
    $('#cargo_qty_for_day').keypress(function (event) {
            return isNumber(event, this);
        });  
         $('#TripsForDay_FromBerthNo').keypress(function (event) {
            return isNumber(event, this);
        });  
        $('#Mother_vessel').keypress(function (event) {
            return isChar(event, this);
        });  
         $('#cargo').keypress(function (event) {
            return isChar(event, this);
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
});
</script>