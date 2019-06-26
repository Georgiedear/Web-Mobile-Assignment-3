
<head>
    <?include "head.php"?>
    <link href="PRSM.css" rel="stylesheet">
    <title>Georgina Yeboah: Three Worlds</title>
</head>


<body>
<div class="container">
<div class="row">

    <div class=" col-12 description">
      <h1 class="prismHead"> Introducing P.R.S.M (2019)  </h1>
            <p class="PrismText"> P.R.S.M stands for Personal Reactive Soft-sensory Mechanics. 
              P.R.S.M explores the integration of soft-touch fabric interfaces with the use of 
              four touch pads that trigger a variety of soothing mediative visuals projected 
              through a glass-octagon shaped plant box. P.R.S.M is meant to help relieve stress 
              while working on stressful inducing tasks at thedesk or at home. The system uses 
              conductive fabric and thread, velostat sheets, 
              a mini projector and the flora. Because the touch pad is soft and portable, P.R.S.M 
              can be used anywhere where the user sees fit. As long as the box is resting nearby, users can 
              enjoy this soft sensory visual experince from their desk, the couch or their bed. </p>
      </div>

    
<div class="col-3 col-6 imageSlide" style="right:300px">
    <div id="P_image" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#P_image" data-slide-to="0" class="active"></li>
          <li data-target="#P_image" data-slide-to="1"></li>
          <li data-target="#P_image" data-slide-to="2"></li>
          <li data-target="#P_image" data-slide-to="3"></li>
          </ol>

          <p class="prismHead"> Gallery </p>

    <div class="carousel-inner d-flex align-items-center">
    <div class="carousel-item active" style="padding-left:80px">
                    <img class="d-block " src="PrismPic.jpg" width="80%" style="border-radius:25px" alt="First slide">
               </div>
                   <div class="carousel-item" style="padding-left:50px">
                    <img class="d-block " src="img/PrismPic2.jpg"  width="85%" style="border-radius:25px" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block " src="img/PrismPic3.jpg"  width="100%" style="border-radius:25px" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block " src="img/PrismPic4.jpg"  width="100%" style="border-radius:25px" alt="Third slide">
                    </div>
                   </div>
             <a class="carousel-control-prev" href="#P_image" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
             </a>
             <a class="carousel-control-next" href="#P_image" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
              </a>
    </div>
    </div>

    <div class="col-3 col-12 videoBox" style="padding-left:120px">
    <p class="prismHead"style="padding-right:85%"> Video </p>

    <video autoplay muted loop  style="width:200px; border-radius:25px"> 

    <source src="video/PRSM.MOV" type="video/mp4">
    </video>
    </div>

</div>
</div>  


  <div class="PrismContainer" style="opacity:0.5">
  <? include "PRSMBackground.php"?>
  <div class="overlay"></div> 
  </div>

</body>
