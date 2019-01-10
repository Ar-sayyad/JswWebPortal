<?php $data_info = $this->db->get_where('dbo.UserTypes', array('userType' => $param2))->result_array();
 foreach ($data_info as $row) {
     $access_pages = $row['Access_pages'];
     //print_r($access_pages);
     $array =  explode(',', $access_pages);
     function Search($value, $array) 
     {
         foreach ($array as $item) {
            if($value==$item){
                return "checked";
            }else{
                
            }
        }
     }
     $page_data = $this->jsw_model->select_data_info('dbo.pages');  
 
     ?>
<style> 
    .modal-dialog {
    width: 800px !important;
}
    .table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td{
        padding: 0px 10px;
        vertical-align: middle;
    }
    .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
    border-bottom-width: 0px;
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    line-height: 1.9 !important;
}
    input[type=checkbox]{
        width: 16px;
    height: 16px;
    }
</style>
<div class="row">
        <div class="col-lg-12 col-md-12">
                <div class="card-content">
                    <h4 style="text-align: center"><b><?php echo $row['Department']; ?></b></h4>
                    <table class="table table-bordered table-striped">                                                
                        <thead class="">        
                            <tr>
                                <th>
                                    <input type="checkbox" onclick="toggle(this);" style="width: 23px;height: 24px;" />  
                                </th>
                                <th>
                                    Page Name
                                </th>
                                <th>
                                   Section
                                </th>                            
                            </tr>
                            <?php  foreach($page_data as $row){?>
                                <tr>
                                    <td><input type="checkbox" name="pagechk" value="<?php echo $row['page_id'];?>" <?php echo Search($row['page_id'], $array);?> class="page_id"></td>   
                                    <td style="text-align:left;"><?php echo $row['page_name'];?></td>
                                    <td><?php echo $row['Dept'];?></td>
                              </tr>
                            <?php } ?>                        
                      
                            <tr>                              
                                <th colspan="4" style="text-align:center;">
                                      <input type="hidden" id="userType_id" value="<?php echo $param2;?>">
                                    <button type="button" name="save" data-id="hello" id="saveAccess" class="btn btn-success" value="save"><i class="material-icons">save</i> Save</button>
                                    <!--<button type="reset" name="Reset" class="btn btn-primary" value="reset"><i class="material-icons">replay</i> Reset</button>-->
                                </th>
                            </tr>

                        </thead>

                    </table>
               
                </div>
            
        </div>	
</div>

 <?php } ?>

<script>
   function toggle(source) {
  checkboxes = document.getElementsByName('pagechk');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
   $(document).ready(function(){ 
    $("#saveAccess").click(function(){
      $("#saveAccess").html('<img src="<?php echo base_url();?>Theme/assets/img/loading.gif" style="width:25px;height:20px;" />');
       $page_id = new Array();
       $.each($("input[name='pagechk']:checked"), function(){ 
           $page_id.push($(this).val());
        });
         $userType_id = $("#userType_id").val();      
           
      $.post('<?php echo base_url();?>Settings/saveAccess', {userType_id:$userType_id,page_id:$page_id}, function(data){
          //alert(data);
                    if(data==1)
                          {                                  
                                $(".success_msg").html('<i class="material-icons">check_circle_outline</i> Rate Data Added Successfully');
                                $(".success_msg").show();
                                window.location.reload();
                                setTimeout(hidetab,4000);
                          }
                          else{
                                  $(".error_msg").html(data);
                                  $(".error_msg").show();
                                  setTimeout(hidetab,4000);
                                  $("#saveAccess").html('<i class="material-icons">save</i> Save');
                          }
		});
      
    });
       
});
</script>