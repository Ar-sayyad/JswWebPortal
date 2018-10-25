<style>
   
    .table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
    padding: 0px 6px;
    color:black;
    text-align: center;
    }
    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {   
    line-height: 2.428571 !important;
}

</style>

<div class="row main-section">			
        <div class="col-lg-12 col-md-12">
            <div class="card">

                <div class="card-content">
                <form action="" method="POST" enctype="multipart/form-data">
                    <table class="table form">                                                
                        <thead class="">

                            <tr class="sect2">
                                <th> Select Month :<span class="required">*</span></th>
                                <th>
                                    <select id="Month" name="Month" placeholder="Month" required="" class="clsmon form-control">
                                        <option value="">---Select Month---</option>
                                         <?php foreach($month_info as $mon){?>                                       
                                        <option data-id="<?php echo trim($mon['FY_Order']);?>" value="<?php echo trim($mon['MonthName']);?>"><?php echo trim($mon['MonthName']);?></option>                                      
                                         <?php }?>  
                                    </select>
                                </th>

                                <th> Select Year :<span class="required">*</span></th>
                                <th>
                                    <select id="year" name="year" placeholder="year" required="" class="form-control">
                                        <option value="">---Select Year---</option>
                                       <option value="<?php echo $prev = (date('Y')-1);?>"><?php echo date('Y')-1;?></option>
                                        <option value="<?php echo $curr = date('Y');?>"><?php echo date('Y');?></option>
                                        <option value="<?php echo $post = date('Y')+1;?>"><?php echo date('Y')+1;?></option>
                                    </select>
                                </th>
                            </tr>
                            <tr>
                                <th colspan="4" >
                                     <hr class="hr2">
                                </th>
                            </tr>
                        <tr>
                            <th colspan="4" class="sect" style="color: #751b85;">
                                MANUAL MHC CONSUMPTION
                            </th>
                        </tr>
                            <tr class="sect">
                                <th colspan="4">
                                <table class="table table-striped table-bordered">
                                    <thead class="">
                                        <tr style="background-color:#eee">
                                            <th style="width:10% !important">
                                                SR.
                                            </th>
                                            <th style="width:30% !important">
                                                Description
                                            </th>
                                            <th style="width:30% !important">
                                                Value
                                            </th>
                                            <th style="width:30% !important">
                                                CRANE NAME
                                            </th>                                      
                                        </tr>
                                    <?php $exist = $this->swpl_model->select_data_info('tbl_crane');
                                    $sr=1;  foreach($exist as $eqp){?> 
                                        <tr style="">
                                            <th style="width:10% !important">
                                                <?php echo $sr;?>
                                            </th>
                                        <th>
                                            <input type="text" id="Description" name="Description" value="<?php echo trim($eqp['CR_NAME']);?>"  autocomplete="off"  class="frmdata Description">
                                        </th>
                                        <td>
                                             <input type="text" id="Value" name="Value"  autocomplete="off" class="frmdata Value">
                                        </td>
                                        <td>
                                             <input type="text" id="Crane_Name" name="Crane_Name"  autocomplete="off"  class="frmdata Crane_Name">
                                        </td>
                                    </tr>
                                    <?php $sr++; } ?>
                                </thead>
                                </table> 
                                    </th>
                                
                            </tr>
                                                     
                            <tr>
                                <th colspan="4" style="text-align:center">
                                    <button type="button" name="save" data-id="hello" id="saveConsumption" class="btn btn-success" value="save"><i class="material-icons">save</i> Save</button>
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
    $("#saveConsumption").click(function(){
      $("#saveConsumption").html('<img src="<?php echo base_url();?>site/content/img/loading.gif" style="width:25px;height:20px;" />');
      $Month= $("#Month").val();
      $year= $("#year").val();
      
        $Crane_Name = new Array();
        $(".Crane_Name").each(function() {
           $Crane_Name.push($(this).val());
        });
         $Description= new Array();
        $(".Description").each(function() {
           $Description.push($(this).val());
        });
        
         $Value = new Array();
        $(".Value").each(function() {
           $Value.push($(this).val());
        });
           
      $.post('<?php echo base_url();?>mhcConsumption/saveConsumption', { Month: $Month,year:$year,Crane_Name:$Crane_Name,Description:$Description,Value:$Value }, function(data){
          //alert(data);
                    if(data==1)
                          {                                  
                                $(".success_msg").html('<i class="material-icons">check_circle_outline</i> MHC Consumption Data Added Successfully');
                                $(".success_msg").show();
                                window.location.reload();
                                setTimeout(hidetab,4000);
                          }
                          else{
                                  $(".error_msg").html(data);
                                  $(".error_msg").show();
                                  setTimeout(hidetab,4000);
                                  $("#saveConsumption").html('<i class="material-icons">save</i> Save');
                          }
		});      
    });
     $('.Value').keypress(function (event) {
            return isNumber(event, this);
        });
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