<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("https://acasia.net/img/email/delayed_delivery.png");

  /* Full height */
  /*width: 100%;*/
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: contain;
}

.align-div {
  text-align: center;
}

.div-header {
  background-color: #f4ac09;

  width: 685px;
  height: 89px;
  margin: auto;
  text-align: center;
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (max-width: 767px) {
  .image-space{
    width: 100%;
    height: auto;
  }
}


/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
    .image-space {
    /* Full height */
    width: 50%;
    height: auto;
  }
}


.image-space {

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: contain;
}

h3{
  margin: auto;
  padding: 25px 20px;
  font-family: sans-serif;
}

</style>
</head>
<body>

<div class="align-div"><img src="https://acasia.net/img/email/delayed_delivery.png" class="image-space"></div><div class="div-header"><h3>Your e-cert for Semarak Juara VR is ready, click <a href="https://acasia.net/cert-download/{{$id}}">HERE</a> to view and download your e-cert.</h3></div>
</body></html>

<!-- <p>This example creates a full page background image. Try to resize the browser window to see how it always will cover the full screen (when scrolled to top), and that it scales nicely on all screen sizes.</p> -->

