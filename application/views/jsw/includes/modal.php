<script type="text/javascript">
    function showAjaxModal(url)
    {
           $.post(url, { id: '1' }, function(data)
            {
                if(data)
                {
                     jQuery('.modal-body').html(data);
                }
           });
            jQuery('.modal-body').html('<div style="text-align:center;margin-top:120px;"><img src="<?php echo base_url();?>Theme/assets/img/loading.gif" style="height:80px;" /></div>');
//		// LOADING THE AJAX MODAL
            jQuery('#modal_ajax').modal('show', {backdrop: 'true'});
      }        
</script>
    <!-- (Ajax Modal)-->
    <div class="modal fade" id="modal_ajax" style="">
        <div class="modal-dialog" style="width: 1100px;">
            <div class="modal-content" style="width: 100%;">
                
                <div class="modal-header">
                    <button type="button" class="card-close close" data-dismiss="modal" aria-hidden="true" data-dismiss="alert"><i class="material-icons">close</i></button>
                    <h4 class="modal-title" style="float: left"><img style="height: 50px;" src="<?php echo base_url();?>Theme/assets/img/logo.png">
                        <div class="success_msg" style="display: none"></div><div class="error_msg" style="display: none"></div> 
                          <div class="succes_msg" style="display: none"></div><div class="erro_msg" style="display: none"></div> 
                    </h4>                   
                </div>
                
                <div class="modal-body" style="min-height:650px; overflow:auto;margin-top: -20px;">                
                    
                    
                </div>
                
<!--                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>-->
            </div>
        </div>
    </div>
    
    
   

    

    
    <!-- (Normal Modal)-->
    