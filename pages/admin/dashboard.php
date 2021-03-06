<?php
require_once "../../includes/connection.php";
if($_SESSION['LoggedIn']==false){header("Location: ../../Index.php", true, 301);}
require "header.php";
require "sidebar.php";
require_once "../../includes/adminprocessing.php";
ViewCustomers();
?>
<!-- Html goes here -->
<div class="btn-group">
    <table style="width: 100%">
        <tr>
            <td><button class="" style = "color: whitesmoke;">Total No Users <br><?php echo count($Customers)?></button></td>
            <td><button class="" style = "color: whitesmoke;">Total Active Users <br><?php echo count($ActiveCustomers)?></button></td>
            <td><button class="" style = "color: whitesmoke;">Total Inactive Users<br><?php echo count($InActiveCustomers)?></button></td>
            <td><button class="" style = "color: whitesmoke;">Total Data Usage</button></td>
        </tr>
    </table>
</div>
<div class="container">
  <!-- DONUT CHART BLOCK (LEFT-CONTAINER) --> 
  <div class="donut-chart-block block"> 
                    <h2 class="titular">MONTHLY DATA USAGE</h2>
                    <div class="donut-chart">
 <!-- PORCIONES GRAFICO CIRCULAR
      ELIMINADO #donut-chart
      MODIFICADO CSS de .donut-chart -->
      <div id="porcion1" class="recorte"><div class="quesito ios" data-rel="21"></div></div>
     <div id="porcion2" class="recorte"><div class="quesito mac" data-rel="39"></div></div>
     <div id="porcion3" class="recorte"><div class="quesito win" data-rel="31"></div></div>
     <div id="porcionFin" class="recorte"><div class="quesito linux" data-rel="9"></div></div>
 <!-- FIN AÑADIDO GRÄFICO -->
                            <p class="center-date">MAY<br><span class="scnd-font-color">2013</span></p>        
                    </div>
                    <ul class="os-percentages horizontal-list">
                        <li>
                            <p class="ios os scnd-font-color">1st WEEK</p>
                            <p class="os-percentage">21<sup>%</sup></p>
                        </li>
                        <li>
                            <p class="mac os scnd-font-color">2nd WEEK</p>
                            <p class="os-percentage">39<sup>%</sup></p>
                        </li>
                        <li>
                            <p class="linux os scnd-font-color">3rd WEEK</p>
                            <p class="os-percentage">9<sup>%</sup></p>
                        </li>
                        <li>
                            <p class="win os scnd-font-color">4th WEEK</p>
                            <p class="os-percentage">31<sup>%</sup></p>
                        </li>
                    </ul>
                </div>
 <!-- LINE CHART BLOCK (LEFT-CONTAINER) -->
                <div class="line-chart-block block">
     <div class="line-chart">
       <div class='grafico'>
       <ul class='eje-y'>
         <li data-ejeY='30'></li>
         <li data-ejeY='20'></li>
         <li data-ejeY='10'></li>
         <li data-ejeY='0'></li>
       </ul>
       <ul class='eje-x'>
         <li>Apr</li>
         <li>May</li>
         <li>Jun</li>
       </ul>
         <span data-valor='25'>
           <span data-valor='8'>
             <span data-valor='13'>
               <span data-valor='5'>   
                 <span data-valor='23'>   
                 <span data-valor='12'>
                     <span data-valor='15'>
                     </span></span></span></span></span></span></span>
       </div>
       
     </div>
                    <ul class="time-lenght horizontal-list">
                        <li><a class="time-lenght-btn" href="#14">Week</a></li>
                        <li><a class="time-lenght-btn" href="#15">Month</a></li>
                        <li><a class="time-lenght-btn" href="#16">Year</a></li>
                    </ul>
                    <ul class="month-data clear">
                        <li>
                            <p>APR<span class="scnd-font-color"> 2013</span></p>
                            <p><span class="entypo-plus increment"> </span>21<sup>%</sup></p>
                        </li>
                        <li>
                            <p>MAY<span class="scnd-font-color"> 2013</span></p>
                            <p><span class="entypo-plus increment"> </span>48<sup>%</sup></p>
                        </li>
                        <li>
                            <p>JUN<span class="scnd-font-color"> 2013</span></p>
                            <p><span class="entypo-plus increment"> </span>35<sup>%</sup></p>
                        </li>
                    </ul>
                </div>
                

  
  <div class="bar-chart-block block">
    <h2 class='titular'>By Location<span>*1000</span></h2>
    <div class='grafico bar-chart'>
       <ul class='eje-y'>
         <li data-ejeY='60'></li>
         <li data-ejeY='45'></li>
         <li data-ejeY='30'></li>
         <li data-ejeY='15'></li>
         <li data-ejeY='0'></li>
       </ul>
       <ul class='eje-x'>
         <li data-ejeX='37'><i>Surulere</i></li>
         <li data-ejeX='56'><i>Ikeja</i></li>
         <li data-ejeX='25'><i>Victoria Island</i></li>
         <li data-ejeX='18'><i>Lagos Island</i></li>
         <li data-ejeX='45'><i>Apapa</i></li>
         <li data-ejeX='50'><i>Okota</i></li>
         <li data-ejeX='33'><i>Lekki/Ajah</i></li>
       </ul>
    </div>
  </div>
            </div>
<!-- html ends here -->
<?php
require "footer.php";
?>