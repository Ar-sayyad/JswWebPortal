<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>Theme/assets/img/logo.png">
<link rel="icon" type="image/png" href="<?php echo base_url();?>Theme/assets/img/logo.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title>
 JSW Dashboard
</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="<?php echo base_url();?>Theme/assets/css/font-awesome.min.css">
<!-- CSS Files -->

<link href="<?php echo base_url();?>Theme/assets/css/material-dashboard.min40a0.css" rel="stylesheet" />

<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="<?php echo base_url();?>Theme/assets/demo/demo.css" rel="stylesheet" />

<!-- End Google Tag Manager -->
  <style>
               .card {
                    box-shadow: 0px 0px 1px 0px #999;
                    background: #ffffff;
                }

                .main_logo {
                    width: 230px;
                    padding: 0px 20px 0px 20px;
                    /* background-color: #f8f9fa; */
                    border-radius: 5px;
                    /* background: linear-gradient(60deg,#f8f9fa87,#f8f9fae0); */
                    /* box-shadow: 0px 1px 6px 1px rgba(204, 204, 204, 0.43); */
                }

                .dataTable > tbody > tr > td, .dataTable > tbody > tr > th, .dataTable > tfoot > tr > td, .dataTable > tfoot > tr > th, .dataTable > thead > tr > td, .dataTable > thead > tr > th {
                    padding: 8px !important;
                }

                .table .td-actions .btn {
                    margin: 0;
                    padding: 8px;
                }

                .mydiv {
                          background-color: #21252929;
                    margin-left: 5px;
                    margin-right: 5px;
                }

                .mydiv2 {
                       background-color: #ffffff;
                     padding-left: 10px;
                }
                .mydiv3{
                        background-color: rgba(204,204,204,.15);
                        padding-left: 10px;
                }
                .mydiv4{
                        background-color: #ededed;
                }
                #frame{
                    width:100%;
                    height:800px;
                }
                .card .card-header.card-header-icon .card-title, .card .card-header.card-header-text .card-title {
                    margin-top: 15px;
                    color: #ffffff;
                    font-size: 25px;
                    font-weight: 400;
                }
    
        #daily_production, #scrap_production {
            width: 100%;
            height: 400px;
        }
             #overall_oee,#Core_Deposition,#Core_Sinter,#Rod_Elongation,#Clad_Deposition,#Clad_Sinter,#Cone_Preparation,#IPQ,#budget_consumption {
        width: 100%;
        height: 250px;
    }

    .highcharts-pie-series .highcharts-point {
        stroke: silver;
        stroke-width: 1px;
    }

    .highcharts-pie-series .highcharts-data-label-connector {
        stroke: silver;
        stroke-dasharray: 2, 2;
        stroke-width: 2px;
    }
    .card-stats{
        margin-top:30px;
        margin-bottom:30px;
    }
    .main_logo {
    width: 230px;
    padding: 0px 20px 0px 20px;
    /* background-color: #f8f9fa; */
    border-radius: 5px;
    /* background: linear-gradient(60deg,#f8f9fa87,#f8f9fae0); */
    /* box-shadow: 0px 1px 6px 1px rgba(204, 204, 204, 0.43); */
}
    </style>
 </head>