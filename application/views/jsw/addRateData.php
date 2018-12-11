<div class="row main-section">
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
                               Rate
                            </th>
                            <th>
                                <input type="text" class="form-control"  required="" placeholder="Rate"  id="Rate">
                            </th>
                             </tr>
                        <tr>
                            <th>
                                Description
                            </th>
                            <th>
                                <input type="text" class="form-control" placeholder="Description" id="Description">
                            </th>                           
                            <th colspan="2">
                               &nbsp;
                            </th>
                            </tr>
                       
                      
                            <tr>
                                <th colspan="4" style="text-align:center">
                                    <button type="button" name="save" data-id="hello" id="saveRate" class="btn btn-success" value="save"><i class="material-icons">save</i> Save</button>
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
    $("#saveRate").click(function(){
      $("#saveRate").html('<img src="<?php echo base_url();?>Theme/assets/img/loading.gif" style="width:25px;height:20px;" />');
//      $Month= $("#Month").val();
//      $year= $("#year").val();      
         $date = $("#date").val(); 
        $Rate = $("#Rate").val();
        $Description = $("#Description").val();
           
      $.post('<?php echo base_url();?>RateForm/save', {date:$date,Rate:$Rate,Description:$Description}, function(data){
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
                                  $("#saveRate").html('<i class="material-icons">save</i> Save');
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