<?php $data_info = $this->db->get_where('dbo.tbl_Equipment_Delay_MF', array('Id' => $param2))->result_array();
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
                                Date
                            </th>
                            <th>
                                    <input type="date" class="form-control" max="<?php echo date('Y-m-d');?>" value="<?php echo $row['date'];?>"  required="" placeholder="Date" readonly="" id="date">
                            </th>
                            <th>
                               Delay Start Time
                            </th>
                            <th>
                                    <input type="text" class="form-control" readonly=""  required="" value="<?php echo $row['Delay_start_Time'];?>" onkeyup="getTime();" placeholder="Delay start Time"  id="Delay_start_Time">
                            </th>
                        </tr>
                        <tr>
                            <th>
                                Delay End Time
                            </th>
                            <th>
                                    <input type="text" class="form-control" readonly="" value="<?php echo $row['Delay_end_time'];?>" onkeyup="getTime();" placeholder="Delay End Time" id="Delay_end_time">
                            </th>                           
                            <th>
                                Delay Time
                            </th>
                            <th>
                                <input type="text" class="form-control" readonly="" value="<?php echo $row['Delay_Time'];?>"  placeholder="Delay Time" id="Delay_Time">
                            </th> 
                        </tr>
                       <tr>
                            <th>
                                Equipment Name
                            </th>
                            <th>
                                    <input type="text" class="form-control" readonly value="<?php echo $row['Equipment_Name'];?>"  placeholder="Equipment Name" id="Equipment_Name">
                            </th>                           
                            <th>
                                    Operator Name <span style="color:red;">*</span>
                            </th>
                            <th>
                                <input type="text" class="form-control" placeholder="Operator Name" value="<?php echo $row['Operator_Name'];?>" id="Operator_Name">
                            </th> 
                        </tr>
                        <tr>
                            <th>
                                Remarks
                            </th>
                            <th>
                                <input type="text" class="form-control" placeholder="Remarks" value="<?php echo $row['Remarks'];?>"  id="Remarks">
                            </th>                           
                            <th>
                                    Delay Filter <span style="color:red;">*</span>
                            </th> 
                            <th>
                                    <select class="form-control" id="Delay_FIlter" name="delay_filter" required="">
                                            <option value="">---Select Delay---</option>
                                            <option value="Delay" <?php if($row['Delay_FIlter']=='Delay'){ echo "Selected"; }else{}?>>Delay</option>
                                            <option value="No Cargo Available" <?php if($row['Delay_FIlter']=='No Cargo Available'){ echo "Selected"; }else{}?>>No Cargo Available</option>
                                    </select>
                            </th>
                        </tr>
                            <tr>
                                <th colspan="4" style="text-align:center">
                                    <button type="button" name="save" data-id="hello" id="saveEquipment" class="btn btn-success" value="save"><i class="material-icons">save</i> Update</button>
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
<script src="<?php echo base_url();?>Theme/assets/js/moment.js" type="text/javascript"></script>
<script>  
   $(document).ready(function(){ 
    $("#saveEquipment").click(function(){
      $("#saveEquipment").html('<img src="<?php echo base_url();?>Theme/assets/img/loading.gif" style="width:25px;height:20px;" />');
       $Operator_Name = $("#Operator_Name").val();
        $Delay_FIlter = $("#Delay_FIlter").val();
        $Remarks = $("#Remarks").val();   
      $.post('<?php echo base_url();?>EquipmentDelay/update/<?php echo $param2;?>', {Operator_Name:$Operator_Name,Remarks:$Remarks,Delay_FIlter:$Delay_FIlter}, function(data){
          //alert(data);
                    if(data==1)
                          {                                  
                                $(".success_msg").html('<i class="material-icons">check_circle_outline</i> Equipment Delay Updated Successfully');
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
});
</script>