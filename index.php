<!doctype html>
<html lang="en">
  <head>
  <?include "head.php"?>
  <link href="nav.css" rel="stylesheet">

  </head>
  <body>

<div class="container">
        <div class="col-12" style="background-color:#fff; padding-top:10px;padding-bottom:20px; text-align:center ">
                <h1> Three Worlds </h1>
                <h6 style="padding-top:5px"> Discover and Explore the Following Three Interactive Installations by Georgina Yeboah </h6>

        </div>
       
</div>
        
        <div style="margin-left: -5px">
        <!-- WILL TRANSITION BETWEEN BACKGROUNDS AND CHANGE DIVS BY INSTALLATION BUTTON -->
            <div class= "navigation d-flex justify-content-center" id="navCarousel" style="padding-bottom: 150px; padding-top: 5px; position: relative; overflow: visible;">
            
                <div class="cloud9-item" style="  position: absolute; transform-origin: 0px 50px; z-index: 100; transform: translate(654px, 209.4px) scale(1)">
                <a href="#PRISMPage"> <img src="buttons/PRSM_Button_Primary" title="PRISM BUTTON" width="90%"alt="Button1"><h5 style="text-align:center; padding-right:15px; padding-top:8px"> PRSM </h5> </a> 
                </div>

                <div  class="cloud9-item" style=" position: absolute; transform-origin: 0px 50px; z-index: 62; transform: translate(316.745px, 198.9px) scale(0.625)">
                <a href="#OneThousandPage"> <img src="buttons/1000_Button_Primary" style="padding-left:20px" title="1000DreamsOrMore BUTTON" width="75%" alt="Button2"> <h5 style="text-align:center; padding-top:8px"> 1000 Dreams Or More </h5> </a>
                </div>

                <div  class="cloud9-item" style=" position: absolute; transform-origin: 0px 50px; z-index: 62; transform: translate(1015.13px, 198.9px) scale(0.625)">
                <a href="#SequenciaPage"> <img src="buttons/Seq_Button_Primary" title="SEQUENCIA BUTTON"  width="90%" alt="Button3"><h5 style="text-align:center; padding-top:10px"> SEQUENCIA </h5> </a>
                </div>


            </div>
            <!-- <div id="buttons">
  <button class="left">
    ←
  </button>
  <button class="right">
    →
  </button>
</div> -->
            <div id="reveal_box">

                <div id="PRISMPage">

                    <iframe src="./PRSM.php" class="w-100 border-0 p-0 m-0" style="height:600px"></iframe>

                </div>

                <div id="OneThousandPage">

                    <iframe src="./1000DreamsOrMore.php" class="w-100 border-0 p-0 m-0" style="height:600px;"></iframe>

                </div>

                <div id="SequenciaPage">
                    
                    <iframe src="./Sequencia.php" class="w-100 border-0 p-0 m-0" style="height:600px;"></iframe>
                </div>

            </div>

            <div class="container footer">
<div style = "background: #fff">

    <div style="text-align:center">
    <p> GGY Copyright 2019 </p>
    </div>


</div>
</div>

        </div>

</div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
  </body>
</html>