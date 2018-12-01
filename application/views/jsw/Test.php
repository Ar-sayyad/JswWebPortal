<?php include 'includes/header.php';?> 

    <body class="">
        <div class="wrapper ">
          
          
                
      <!-- Sidebar -->
      <?php include 'includes/sidebar.php';?>       

    <!-- End Sidebar -->  
       

<div class="main-panel">
    <!-- Navbar -->
      <?php include 'includes/navbar.php';?>       

    <!-- End Navbar -->


   <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
<!--                            <iframe id="frame" src="<?php echo $linkUrl;?>" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true">
                                Under Development..!
                            </iframe>-->

                            <button style="float:right" id="fullscreen" class="btn btn-fullscreen button"><i class="material-icons" style="font-size: 50px;">fullscreen</i></button>
                        </div>
                        <!-- end content-->
                    </div>
                    <!--  end card  -->
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
<script type="text/javascript">          
var processJsonContent=function(){
     return $.ajax({
        url:encodeURI("https://172.21.25.29/PIVision/PB/#/PBDisplays/20081"),
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
        type:"POST",
        data:"",
        contentType:"application/json; charset=UTF-8",
        crossDomain: true,
        xhrFields: { withCredentials: true },
        beforeSend:function(xhr){
            xhr.setRequestHeader("Authorization","Basic SnN3YWRtaW46YWRtaW5AMTIz")}
    });
};
  var ajaxEF = processJsonContent();
   $.when(ajaxEF).fail(function() {        
        console.log("Cannot Find the Assetdatabases.")
    });
    $.when(ajaxEF).done(function() {
        alert(ajaxEF);
    });
  
   //window.onload = processJsonContent;
  </script>
</body>
</html>
