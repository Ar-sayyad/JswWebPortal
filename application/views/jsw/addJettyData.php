<div class="row main-section">
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
                                <input type="date" class="form-control" placeholder="Date" id="trans_date">
                            </th>
                            <th>
                                Jetty Under Discharge
                            </th>
                            <th>
                                <input type="text" class="form-control" placeholder="Jetty Under Discharge">
                            </th>
                        </tr>
                        <tr>
                            <th>
                                Jetty Waiting for Discharge
                            </th>
                            <th>
                                <input type="text" class="form-control" placeholder="Jetty Waiting for Discharge">
                            </th>
                            <th>
                                R-19 Waiting (Loaded)
                            </th>
                            <th>
                                <input type="text" class="form-control" placeholder="R-19 Waiting (Loaded)">
                            </th>
                        </tr>
                        <tr>
                            <th>
                                Gulf - Waiting (Loaded)
                            </th>
                            <th>
                                <input type="text" class="form-control" placeholder="Gulf - Waiting (Loaded)">
                            </th>
                            <th>
                                In transit from MV/GULL to Jetty(Loaded
                            </th>
                            <th>
                                <input type="text" class="form-control" placeholder="In transit from MV/GULL to Jetty(Loaded">
                            </th>
                        </tr>
                         <tr>
                            <th>
                               Under Loading at MV
                            </th>
                            <th>
                                <input type="text" class="form-control" placeholder="Under Loading at MV">
                            </th>
                            <th>
                                Waiting for Loading
                            </th>
                            <th>
                                <input type="text" class="form-control" placeholder="Waiting for Loading">
                            </th>
                        </tr>
                         <tr>
                            <th>
                               Waiting at Jetty
                            </th>
                            <th>
                                <input type="text" class="form-control" placeholder="Waiting at Jetty">
                            </th>
                            <th>
                                Empty at Gull R-19
                            </th>
                            <th>
                                <input type="text" class="form-control" placeholder="Empty at Gull R-19">
                            </th>
                        </tr>
                         <tr>
                            <th>
                               In Transit - from Jetty to MV
                            </th>
                            <th>
                                <input type="text" class="form-control" placeholder="In Transit-from Jetty to MV">
                            </th>
                            <th>
                                Breakdown/off hired
                            </th>
                            <th>
                                <input type="text" class="form-control" placeholder="Breakdown/off hired">
                            </th>
                        </tr>
                            <tr>
                                <th colspan="4" style="text-align:center">
                                    <button type="button" name="save" data-id="hello" id="saveBudget" class="btn btn-success" value="save"><i class="material-icons">save</i> Save</button>
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