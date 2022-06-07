<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        * {
  margin: 0;
  padding: 0;
}
body {
    font-family: 'Poppins', sans-serif;
}
.banner-text {
  width: 100%;
  position: absolute;
  z-index: 1;
}
.banner-text ul {
  height: 50px;
  float: right;
}
.banner-text ul li {
  display: inline-block;
  padding: 40px 15px;
  text-transform: uppercase;
  color: #fff;
  font-size: 20px;
}
.banner-text ul li:hover {
  cursor: pointer;
}
.banner-text h2 {
  text-align: center;
  color: #fff;
  font-size: 50px;
  margin-top: 20%;
}
.animation-area {
  background: #fdc830;
  background: -webkit-linear-gradient(to right, #f37335, #fdc830);
  background: linear-gradient(to right, #f37335, #fdc830);
  width: 100%;
  height: 100vh;
}
.box-area {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
}
.box-area li {
  position: absolute;
  display: block;
  list-style: none;
  width: 25px;
  height: 25px;
  background: rgba(255, 255, 255, 0.2);
  animation: animate 20s linear infinite;
  bottom: -150px;
}
.box-area li:nth-child(1) {
  left: 86%;
  width: 80px;
  height: 80px;
  animation-delay: 0s;
}
.box-area li:nth-child(2) {
  left: 12%;
  width: 30px;
  height: 30px;
  animation-delay: 1.5s;
  animation-duration: 10s;
}
.box-area li:nth-child(3) {
  left: 70%;
  width: 100px;
  height: 100px;
  animation-delay: 5.5s;
}
.box-area li:nth-child(4) {
  left: 42%;
  width: 150px;
  height: 150px;
  animation-delay: 0s;
  animation-duration: 15s;
}
.box-area li:nth-child(5) {
  left: 65%;
  width: 40px;
  height: 40px;
  animation-delay: 0s;
}
.box-area li:nth-child(6) {
  left: 15%;
  width: 110px;
  height: 110px;
  animation-delay: 3.5s;
}
@keyframes animate {
  0% {
    transform: translateY(0) rotate(0deg);
    opacity: 1;
  }
  100% {
    transform: translateY(-800px) rotate(360deg);
    opacity: 0;
  }
}

    </style>
</head>
<body>
<div class="banner-text">
 
 <h2><?php echo "Welcome to Amu's PHP MVC Framework" ?></h2>
</div>
<div class="animation-area">
 <ul class="box-area">
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
 </ul>
</div>
</body>
</html>