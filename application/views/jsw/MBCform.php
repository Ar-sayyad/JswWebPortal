<!DOCTYPE html>
<html lang="en">
<?php include 'includes/header.php';?> 
    
    <body class="">
        <div class="wrapper ">
      <!-- Sidebar -->
      <?php include 'includes/sidebar.php';?>       

    <!-- End Sidebar -->  

<div class="main-panel">
    <!-- Navbar -->
      <?php include 'includes/navbar.php';?>       

        <?php include 'includes/modal.php';?>
    
    <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"> 
                            <div class="form-div card">
                                    <div class="col-md-9">
                                    <form action="<?php echo base_url();?>MBC/searchMBC" method="POST" enctype="multipart/form-data">
                                        <table class="table form">                                                
                                            <thead class="">

                                                <tr>
                                                     <th> Month :<span class="required">*</span></th>
                                                    <th>
                                                        <select id="month" name="month" placeholder="month" required="" class="clsmon form-control">
                                                            <option value="">---Select Month---</option>
                                                             <?php $sr=1; foreach($month_info as $mon){?>                                       
                                                            <option data-id="<?php echo $mon['MonID'];?>" value="<?php echo $mon['MonthFullName'];?>" <?php if($mnth==$mon['MonthFullName']){ echo 'selected'; }else{  } ?>><?php echo trim($mon['MonthFullName']);?></option>                                      
                                                             <?php $sr++;}?>  
                                                        </select>
                                                    </th>

                                                    <th> Year :<span class="required">*</span></th>
                                                    <th>
                                                        <select id="year" name="year" placeholder="year" required="" class="form-control">
                                                            <option value="">---Select Year---</option>
                                                             <option value="<?php echo $prev = (date('Y')-1);?>" <?php if($year== $prev){ echo 'selected'; }else{ } ?>><?php echo date('Y')-1;?></option>
                                        <option value="<?php echo $curr = date('Y');?>" <?php if($year== $curr){ echo 'selected'; }else{ } ?>><?php echo date('Y');?></option>
                                        <option value="<?php echo $post = date('Y')+1;?>" <?php if($year== $post){ echo 'selected'; }else{ } ?>><?php echo date('Y')+1;?></option>
                                                        </select>
                                                    </th>


                                                    <th colspan="4" style="text-align:center">
                                                        <button type="submit" name="save" data-id="hello" id="Search" class="btn btn-success" value="save"> 
                                                            <i class="material-icons">search</i> Search</button>
                                                         <!--<button type="reset" name="Reset" class="btn btn-info" value="reset"><i class="material-icons">replay</i> Reset</button>-->
                                                    </th>
                                                </tr>

                                            </thead>

                                        </table>
                                    </form>
                                     </div>
                                <div class="col-md-3">
                                    <div class="addbtn" style="margin-top: 15px;">
                                         <button data-toggle="modal" data-target="#modal_ajax" onclick="showAjaxModal('<?php echo base_url();?>Home/popup/jsw/addMBCData');" class="btn btn-primary" style="float: right" > <i class="material-icons">add_circle_outline</i> Add MBC Data</button>
                                    </div>
                                </div>
                            </div>
                       
                        <div class="bootstrap-data-table-panel card">
                            <div class="table-responsive">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered table-hover">   
                                    <thead>
                                      <tr>
                                        <th>SR</th>
                                        <th>ETA Dharamtar</th>
                                        <th>MBC Name</th>
                                        <th>Cargo</th>
                                        <th>Balance Qty</th>
                                        <th>Load Port</th>
                                      </tr>
                                    </thead>
                                   
                                    <tbody>
                                      <?php  if(!empty($MBCForm_data)){  $sr=1; foreach($MBCForm_data as $mbc){?>
                                        <tr>
                                        <td><?php echo $sr;?></td>   
                                        <td><?php echo $mbc['ETA_Dharamtar'];?></td>
                                        <td><?php echo $mbc['MBC_name'];?></td>
                                        <td><?php echo $mbc['Cargo'];?></td>
                                        <td><?php echo $mbc['bl_qty'];?></td>
                                        <td><?php echo $mbc['Load_Port'];?></td>
                                      </tr>
                                      <?php $sr++; } }?>                                     
                                     
                                    </tbody>
                                </table>
                            </div>
                        </div>
                   
                </div>
                <!-- end col-md-12 -->
            </div>
            <!-- end row -->
            
        </div>
    </div>
            <!--Footer-->
           <?php include 'includes/footer.php';?>
            <!--/End Footer-->

        </div>
        
    </div>

<!--   Core JS Files   -->
 <?php include 'includes/footer-min.php';?>
 <script>
   $(document).ready(function(){
    $( "form" ).on( "submit", function() {    
      $("#Search").html('<img src="<?php echo base_url();?>Theme/assets/img/loading.gif" style="width:25px;height:20px;" />');
      $Month= $("#month").val();
      $year= $("#year").val();
          //alert($Month);
            if($Month =='' || $year ==''){
                          $(".error_msgg").html('All Fields are Required..!');
                          $(".error_msgg").show();
                          setTimeout(hidetab,4000);
                          $("#Search").html('<i class="material-icons">search</i> Search');
                           return false;
                  }
                  else{
                      return true;
                  }
            
	function hidetab(){    
            $('#mssg').hide();
            $('.error_msgg').hide();
          }	
      
    });
});
</script>    
</body>
</html>
