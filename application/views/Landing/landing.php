<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>Theme/assets/img/logo.png">
<link rel="icon" type="image/png" href="<?php echo base_url();?>Theme/assets/img/logo.png">
<title>JSW WEB PORTAL</title>

<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>Tendance/NewPage/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>Tendance/NewPage/css/animate.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>Tendance/NewPage/fonts/fa/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>Tendance/NewPage/css/overwrite.css">

</head>

<body class="landing-bg">

<div class="container-fluid main-body-content-holder">
	<div class="top-logo-nav-bar">
		<div class="logo-holder pull-left"><a href="#"><img src="<?php echo base_url();?>Tendance/NewPage/img/jsw-logo.png" alt="JSW"/></a></div>
		<div class="navigation-holder pull-right">
			<div class="main-nav pull-left">
				<ul>
					<li class="active-nav"><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
<!--					<li><a href="#">JPL</a></li>
					<li><a href="#">SWPL</a></li>-->
					<li><a href="<?php echo base_url().'Home/home';?>">DPPL</a></li>
				</ul>
			</div>
			<!--<div class="login-link pull-right"><a href="<?php echo base_url();?>Home/Logout"><i class="fa fa-lock" aria-hidden="true"></i> Logout</a></div>-->
		</div>
	</div>
	<div class="headline-holder"><span>Port Information Management System</span></div>
	
	<div class="container">
			<!-- Codrops top bar -->
           
			<section id="dg-container" class="dg-container">
				<div class="dg-wrapper">
					<a href="#"><img src="<?php echo base_url();?>Tendance/NewPage/img/1.jpg" alt="image01"><div>Jaigarh</div></a>
					<a href="#"><img src="<?php echo base_url();?>Tendance/NewPage/img/2.jpg" alt="image02"><div>Goa</div></a>
					<a href="#"><img src="<?php echo base_url();?>Tendance/NewPage/img/3.jpg" alt="image03"><div>Dharamtar</div></a>
				</div>
				<!--nav>	
					<span class="dg-prev">&lt;</span>
					<span class="dg-next">&gt;</span>
				</nav-->
			</section>
	</div>
    <div class="container">
	<div class="news_tricker">
            	<ul id="ticker">
                    <li><a href="#">Dharamtar MTD Handled &gt;&gt; Vessel Count :25&gt;&gt;  Quantity Handled (in MT):912650.7</a></li>
                    <li><a href="#">Dharamtar YTD Handled &gt;&gt; Vessel Count :352&gt;&gt;  Quantity Handled (in MT):12229234</a></li>
                    <li><a href="#">Dharamtar FTD Handled &gt;&gt; Vessel Count :2&gt;&gt;  Quantity Handled (in MT):33722</a></li>                	
                </ul>
	</div>
    </div>
</div>
    <div class="landing-footer">Copyright &copy; JSW  <script>
                    document.write(new Date().getFullYear())
            </script>. All rights reserved</div>

<script src="<?php echo base_url();?>Tendance/NewPage/js/jquery-3.1.0.min.js"></script> 
<script src="<?php echo base_url();?>Tendance/NewPage/js/jquery-ui.js"></script>
<script src="<?php echo base_url();?>Tendance/NewPage/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>Tendance/NewPage/js/jquery.gallery.js"></script>
<script src="<?php echo base_url();?>Tendance/NewPage/js/modernizr.custom.53451.js"></script>
<script type="text/javascript">
			$(function() {
				$('#dg-container').gallery({
					autoplay	:	true
				});
			});
		</script/>
<script>
	jQuery(function() {
    jQuery('#ticker').tickerme();
});



// js code for news ticker

(function(e) {
    e.fn.tickerme = function(t) {
        var n = e.extend({}, e.fn.tickerme.defaults, t);
        return this.each(function() {
            function a() {
                e(t).hide();
                e("body").prepend(r).prepend(i);
                var n = '<div id="ticker_container">';
                n += '<div id="newscontent"><div id="news"></div></div>';
                n += '<div id="controls">';
                n += '<a href="#" id="pause_trigger"><svg class="icon icon-pause" viewBox="0 0 32 32"><use xlink:href="#icon-pause"></use></svg></a>';
                n += '<a href="#" id="play_trigger" style="display:none"><svg class="icon icon-play" viewBox="0 0 32 32"><use xlink:href="#icon-play"></use></svg></a>';
                n += '<a href="#" id="prev_trigger"><svg class="icon icon-prev" viewBox="0 0 32 32"><use xlink:href="#icon-prev"></use></svg></a>';
                n += '<a href="#" id="next_trigger"><svg class="icon icon-next" viewBox="0 0 32 32"><use xlink:href="#icon-next"></use></svg></a>';
                n += "</div>";
                n += "</div>";
                e(n).insertAfter(t);
                e(t).children().each(function(t) {
                    s[t] = e(this).html()
                });
                f()
            }

            function f() {
                if (o == s.length - 1) {
                    o = 0
                } else {
                    o++
                }
                if (n.type == "fade") {
                    e("#news").fadeOut(n.fade_speed, function() {
                        e("#newscontent").html('<div id="news">' + s[o] + "</div>");
                        e("#news").fadeIn(n.fade_speed)
                    })
                }
                u = setTimeout(f, n.duration)
            }
            var t = e(this);
            var r = '<svg display="none" version="1.1" width="224" height="32" viewBox="0 0 224 32"><defs><g id="icon-play"><path class="path1" d="M6 4l20 12-20 12z"></path></g><g id="icon-pause"><path class="path1" d="M4 4h10v24h-10zM18 4h10v24h-10z"></path></g><g id="icon-prev"><path class="path1" d="M18 5v10l10-10v22l-10-10v10l-11-11z"></path></g><g id="icon-next"><path class="path1" d="M16 27v-10l-10 10v-22l10 10v-10l11 11z"></path></g></defs></svg>';
            var i = '<style type="text/css">#ticker_container{width:100%}#newscontent{float:left}#news{display:none}#controls{float:right;height:16px}.icon{display:inline-block;width:16px;height:16px;fill:' + n.control_colour + "}.icon:hover{fill:" + n.control_rollover + "}</style>";
            var s = [];
            var o = -1;
            var u;
            a();
            e("a#pause_trigger").click(function() {
                clearTimeout(u);
                e(this).hide();
                e("#play_trigger").show();
                return false
            });
            e("a#play_trigger").click(function() {
                f();
                e(this).hide();
                e("#pause_trigger").show();
                return false
            });
            e("a#prev_trigger").click(function() {
                if (o == 0) {
                    o = s.length - 1
                } else {
                    o--
                }
                e("#newscontent").html('<div id="news" style="display:block">' + s[o] + "</div>");
                if (n.auto_stop) e("a#pause_trigger").trigger("click");
                return false
            });
            e("a#next_trigger").click(function() {
                if (o == s.length - 1) {
                    o = 0
                } else {
                    o++
                }
                e("#newscontent").html('<div id="news" style="display:block">' + s[o] + "</div>");
                if (n.auto_stop) e("a#pause_trigger").trigger("click");
                return false
            })
        })
    };
    e.fn.tickerme.defaults = {
        fade_speed: 600,
        duration: 6e3,
        auto_stop: true,
        type: "fade",
        control_colour: "#2f4062",
        control_rollover: "#ffffff"
    }
})(jQuery)
</script>

</body>
</html>
