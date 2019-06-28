<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Waterwheel Carousel Plugin Demo</title>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.waterwheelCarousel.js"></script>
	<link href="css/style.css" type="text/css" rel="stylesheet">
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet">
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style type="text/css">

li{
list-style:none;
}


        .box {
    float: left;
    background: #eff0f4;
    display: none;
    padding: 0 42px;
}

        .box-inner {
            width: 318px;
            padding: 10px;
        }

        .box-inner ul li {
            padding-bottom: 13px;
        }

        .box-inner ul {
            list-style: none;
            padding: 0px;
            margin: 0px;
        }

        .box-inner ul li a img {
            width: 100px;

        }
.ktrv {
    width: 100%;
   /* border: 1px solid #222;*/
    height: 300px;
    position: relative;
    clear: both;
    overflow: hidden;
   background: transparent !important;
    margin: 170px auto 0; 
	    max-width: 700px;
}
    .noselect {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/*        .wwkt img {
      display: inline-block;
      width: 100%;
      height: 100%;
      opacity: 0;

    }*/

.ktrv>div.wwkt>div:nth-child(2) {
    position: absolute;
    top: 0;
    width: 100%;
    height: inherit;
    display: table;
    background-color: #fff;
    border-radius: 5px;
}
    .ktrv>div.wwkt>div:last-child {
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
        display: table;
    }
    .ktrv > div.wwkt > div:first-child {

    display: table-cell;
    vertical-align: middle;
    height: 100%;
    width: 100%;

}
h2 {
    display: table-cell;
    vertical-align: middle;
    /* height: inherit; */
    width: 100%;
    text-align: center;
    color: black;
    font-size: 22px;
}
    #callback-output {
        height: 250px;
        overflow: scroll;
    }
.ktrv>div.wwkt {
    display: inline-block;
    cursor: pointer;
    box-shadow: 0 0 5px #999;
}
.main-sidebar{
    display:block !important;
	width: 100%;
}
    </style>
	<script>
	function showSidebar(){
		$("#open-sidebar").toggleClass("main-sidebar");
		//document.getElementById("open-sidebar").style.display = "block";
	}
		$(document).ready(function(){
			
			alert('dddf');
			 $('#but').click(function() {
			 
			  $('.side-watchlist').toggleClass('cli');
				/*  event.preventDefault();
				 /jQuery('.side-watchlist').animate({
				  //  marginLeft: "+=300px"
				  //}, "slow");
				  $('.side-watchlist').addClass('cli');
				  alert('ggfg');
				  */
			   });
   
   
		});
	</script>
</head>

<body>
<div class="top_secc">
	<div class="bar_secc">
		<div class="blockkk">
		    <div class="icon_secc">
			<div class="dgdg">
			<a href="#" class="mnu_sctn">Menu</a>
			 <div class="hdnnd">
			<img src="img/shape3.png">
			<ul class="three_icns">
				<li><a href=""><img src="img/notification2.png"></a></li>
				<li><a href=""><img src="img/user4.png"></a></li>
				<li><a href=""><img src="img/arrow1.png"></a></li>
			</ul>
			</div>
			</div>
		   
			</div>
		</div>
	</div>
</div>
<div class="sidebar-wrapper">
	<div class="row add_wdth">
		<div class="tggllee" style="padding:0;">
				
			<div class="sidebar-main" style="position: relative;">
			
				<div class="maz-toggle">
					<span id="bar"><i  onclick="showSidebar()" style="position:absolute;z-index:9999;" class="fas fa-bars slide-toggle "></i></span>
				</div>
				
			<div class="box" id="open-sidebar" style="display: none;">
				<div class="box-inner">
					<ul class="">
						<li>
						    <div class="icn_nd_txt"><a href="index.html"><img src="img/1.png" alt=""></a>
						    <div class="icn_open_txt"><p>Stock Watch</p></div>
						    </div>
						</li>
						<li>
						    <div class="icn_nd_txt"><a href="second.html"><img src="img/2.png" alt=""></a>
						    <div class="icn_open_txt"><p>Trade now</p></div>
						    </div>
						</li>
						<li>
						    <div class="icn_nd_txt"><a href="table.html"><img src="img/33.png" alt=""></a>
						    <div class="icn_open_txt"><p>Transaction history</p></div>
						    </div>
						</li>
						<li>
						    <div class="icn_nd_txt"><a href="table2.html"><img src="img/4.png" alt=""></a>
						    <div class="icn_open_txt"><p>Portfolio</p></div>
						    </div>
						</li>
						<li>
						    <div class="icn_nd_txt"><a href="#"><img src="img/5.png" alt=""></a>
						    <div class="icn_open_txt"><p>Help</p></div>
						    </div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		</div>
		
		<div class="fl_only">
			<div class="hn_fstck">
				<div class="sml_dv">
					<p>Symbol</p>
				</div>
			</div>
			<div class="hn_fstck">
				<div class="sml_dv">
					<p>Purchased Price</p>
				</div>
			</div>
			<div class="hn_fstck">
				<div class="sml_dv">
					<p>Current Price</p>
				</div>
			</div>
			<div class="hn_fstck">
				<div class="sml_dv">
					<p>Quantity Purchased</p>
				</div>
			</div>
			<div class="hn_fstck">
				<div class="sml_dv">
					<p>Amount</p>
				</div>
			</div>
			<div class="hn_fstck">
				<div class="sml_dv">
					<p>Profit/Loss</p>
				</div>
			</div>
			
		</div>
			  	<?php
			  	$conn = new mysqli('localhost', 'root', '', 'toroi');
			  	$sql1 = "SELECT Symbol,Quantity,Price,Amount FROM db2";
			  	$result = $conn->query($sql1);
			  	if ($result->num_rows > 0) {
			  		echo "<table><tr><th>ID</th><th>Name</th></tr>";
			  		while($row = $result->fetch_assoc()){
				echo "<tr class='brdr_rds'>";
				  echo "<tr><td>" . $row["Symbol"]. "</td><td>" . $row["Price"]. "</td><td>".$row["Price"]. "</td><td>".$row["Quantity"]. "</td><td>".$row["Amount"]. "</td><td>".$row["Price"]. "</td><tr>";}
			}
			echo "</table>";
				?>
		
	</div>

<div class="row">
<div class="logo_tn">
<img src="img/relogo.png" alt="">
</div>
</div>

</div>
</body>

</html>


<a href="{{data.url}}">
     </a>
     <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
   <script>
        $(document).ready(function() {
            $(".slide-toggle").click(function() {
                $(".box").animate({
                    width: "toggle"
                });
              
            });
        });

    </script>
	<script>
$(document).ready(function(){
    $(".slide-toggle").click(function(){
        $(".form_sece").toggleClass( "intro" );
    });
});
</script>
	<script>

</script>
<style>
.cli{
	margin-left: 361px;
}
</style>

