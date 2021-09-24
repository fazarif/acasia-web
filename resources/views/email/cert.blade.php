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
  background-image: url("https://acasia.net/img/email/e-cert.png");

  /* Full height */
  /*width: 100%;*/
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: contain;
}

.name-box {
  width: 600px;
  top: 55%;
  left: 62%;
  /* 62% untuk view lawa */
  position: absolute;
  transform: translate(-50%, -50%);
  text-align: center;
}

h2 { font-family: Futura, "Trebuchet MS", Arial, sans-serif; font-size: 32px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px; } h3 { font-family: Futura, "Trebuchet MS", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 15.4px; } p { font-family: Futura, "Trebuchet MS", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 20px; } blockquote { font-family: Futura, "Trebuchet MS", Arial, sans-serif; font-size: 21px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 30px; } pre { font-family: Futura, "Trebuchet MS", Arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 18.5714px; }
}

</style>
</head>
<body>

<div class="bg">
  <div class="centered-word">
    <div class="name-box" style="color: white;">
      <h2>{{ strtoupper($name ?? 'ali bin abu') }}</h2>
    </div>
  </div>
</div></body></html>

<!-- <p>This example creates a full page background image. Try to resize the browser window to see how it always will cover the full screen (when scrolled to top), and that it scales nicely on all screen sizes.</p> -->

