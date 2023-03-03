<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERROR | MyTicketing</title>
    <style>
        body {
  margin: 0;
  font-size: 20px;
}

* {
  box-sizing: border-box;
}

.container {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  background: white;
  color: black;
  font-family: arial, sans-serif;
  overflow: hidden;
}

.content {
  position: relative;
  width: 600px;
  max-width: 100%;
  margin: 20px;
  background: white;
  padding: 60px 40px;
  text-align: center;
  box-shadow: -10px 10px 67px -12px rgba(0, 0, 0, 0.2);
  opacity: 0;
  animation: apparition 0.8s 1.2s cubic-bezier(0.39, 0.575, 0.28, 0.995) forwards;
}
.content p {
  font-size: 1.3rem;
  margin-top: 0;
  margin-bottom: 0.6rem;
  letter-spacing: 0.1rem;
  color: #595959;
}
.content p:last-child {
  margin-bottom: 0;
}
.content button {
  display: inline-block;
  margin-top: 2rem;
  padding: 0.5rem 1rem;
  border: 3px solid #595959;
  background: transparent;
  font-size: 1rem;
  color: #595959;
  text-decoration: none;
  cursor: pointer;
  font-weight: bold;
}

.particle {
  position: absolute;
  display: block;
  pointer-events: none;
}
.particle:nth-child(1) {
  top: 26.4058679707%;
  left: 36.3457760314%;
  font-size: 18px;
  filter: blur(0.02px);
  animation: 27s floatReverse2 infinite;
}
.particle:nth-child(2) {
  top: 36.7593712213%;
  left: 38.9483933788%;
  font-size: 27px;
  filter: blur(0.04px);
  animation: 21s float infinite;
}
.particle:nth-child(3) {
  top: 11.5942028986%;
  left: 19.4552529183%;
  font-size: 28px;
  filter: blur(0.06px);
  animation: 24s float2 infinite;
}
.particle:nth-child(4) {
  top: 5.8895705521%;
  left: 35.4679802956%;
  font-size: 15px;
  filter: blur(0.08px);
  animation: 25s floatReverse infinite;
}
.particle:nth-child(5) {
  top: 74.6928746929%;
  left: 74.9506903353%;
  font-size: 14px;
  filter: blur(0.1px);
  animation: 25s float2 infinite;
}
.particle:nth-child(6) {
  top: 48.602673147%;
  left: 1.9550342131%;
  font-size: 23px;
  filter: blur(0.12px);
  animation: 23s floatReverse2 infinite;
}
.particle:nth-child(7) {
  top: 4.9261083744%;
  left: 34.5849802372%;
  font-size: 12px;
  filter: blur(0.14px);
  animation: 36s floatReverse infinite;
}
.particle:nth-child(8) {
  top: 22.6044226044%;
  left: 31.5581854043%;
  font-size: 14px;
  filter: blur(0.16px);
  animation: 29s floatReverse2 infinite;
}
.particle:nth-child(9) {
  top: 13.4939759036%;
  left: 75.7281553398%;
  font-size: 30px;
  filter: blur(0.18px);
  animation: 26s floatReverse infinite;
}
.particle:nth-child(10) {
  top: 90.0726392252%;
  left: 18.5185185185%;
  font-size: 26px;
  filter: blur(0.2px);
  animation: 34s float2 infinite;
}
.particle:nth-child(11) {
  top: 79.802955665%;
  left: 75.0988142292%;
  font-size: 12px;
  filter: blur(0.22px);
  animation: 37s floatReverse2 infinite;
}
.particle:nth-child(12) {
  top: 88.2424242424%;
  left: 29.2682926829%;
  font-size: 25px;
  filter: blur(0.24px);
  animation: 38s float infinite;
}
.particle:nth-child(13) {
  top: 27.3838630807%;
  left: 76.6208251473%;
  font-size: 18px;
  filter: blur(0.26px);
  animation: 35s float2 infinite;
}
.particle:nth-child(14) {
  top: 86.8064118372%;
  left: 85.0642927794%;
  font-size: 11px;
  filter: blur(0.28px);
  animation: 33s floatReverse infinite;
}
.particle:nth-child(15) {
  top: 5.8751529988%;
  left: 30.4818092429%;
  font-size: 17px;
  filter: blur(0.3px);
  animation: 29s floatReverse infinite;
}
.particle:nth-child(16) {
  top: 1.9323671498%;
  left: 27.2373540856%;
  font-size: 28px;
  filter: blur(0.32px);
  animation: 25s float2 infinite;
}
.particle:nth-child(17) {
  top: 13.6752136752%;
  left: 29.4406280667%;
  font-size: 19px;
  filter: blur(0.34px);
  animation: 29s float2 infinite;
}
.particle:nth-child(18) {
  top: 15.6097560976%;
  left: 95.0980392157%;
  font-size: 20px;
  filter: blur(0.36px);
  animation: 26s floatReverse infinite;
}
.particle:nth-child(19) {
  top: 50.4854368932%;
  left: 26.3671875%;
  font-size: 24px;
  filter: blur(0.38px);
  animation: 32s floatReverse2 infinite;
}
.particle:nth-child(20) {
  top: 38.9294403893%;
  left: 85.1272015656%;
  font-size: 22px;
  filter: blur(0.4px);
  animation: 36s float2 infinite;
}
.particle:nth-child(21) {
  top: 58.8957055215%;
  left: 56.157635468%;
  font-size: 15px;
  filter: blur(0.42px);
  animation: 29s floatReverse2 infinite;
}
.particle:nth-child(22) {
  top: 36.3636363636%;
  left: 61.1439842209%;
  font-size: 14px;
  filter: blur(0.44px);
  animation: 26s floatReverse2 infinite;
}
.particle:nth-child(23) {
  top: 10.7711138311%;
  left: 47.197640118%;
  font-size: 17px;
  filter: blur(0.46px);
  animation: 39s floatReverse infinite;
}
.particle:nth-child(24) {
  top: 35.9659781288%;
  left: 86.0215053763%;
  font-size: 23px;
  filter: blur(0.48px);
  animation: 36s floatReverse infinite;
}
.particle:nth-child(25) {
  top: 47.6306196841%;
  left: 43.0107526882%;
  font-size: 23px;
  filter: blur(0.5px);
  animation: 32s float2 infinite;
}
.particle:nth-child(26) {
  top: 46.3768115942%;
  left: 74.9027237354%;
  font-size: 28px;
  filter: blur(0.52px);
  animation: 33s float2 infinite;
}
.particle:nth-child(27) {
  top: 93.9467312349%;
  left: 76.0233918129%;
  font-size: 26px;
  filter: blur(0.54px);
  animation: 34s floatReverse2 infinite;
}
.particle:nth-child(28) {
  top: 1.9417475728%;
  left: 43.9453125%;
  font-size: 24px;
  filter: blur(0.56px);
  animation: 29s floatReverse infinite;
}
.particle:nth-child(29) {
  top: 55.8139534884%;
  left: 75.7128810226%;
  font-size: 17px;
  filter: blur(0.58px);
  animation: 38s float2 infinite;
}
.particle:nth-child(30) {
  top: 5.8608058608%;
  left: 7.8508341511%;
  font-size: 19px;
  filter: blur(0.6px);
  animation: 40s float infinite;
}
.particle:nth-child(31) {
  top: 1.9488428745%;
  left: 76.3956904995%;
  font-size: 21px;
  filter: blur(0.62px);
  animation: 30s floatReverse infinite;
}
.particle:nth-child(32) {
  top: 43.2964329643%;
  left: 1.9743336624%;
  font-size: 13px;
  filter: blur(0.64px);
  animation: 30s floatReverse2 infinite;
}
.particle:nth-child(33) {
  top: 62.7261761158%;
  left: 93.2944606414%;
  font-size: 29px;
  filter: blur(0.66px);
  animation: 21s float2 infinite;
}
.particle:nth-child(34) {
  top: 4.914004914%;
  left: 20.7100591716%;
  font-size: 14px;
  filter: blur(0.68px);
  animation: 21s floatReverse2 infinite;
}
.particle:nth-child(35) {
  top: 74.2168674699%;
  left: 87.3786407767%;
  font-size: 30px;
  filter: blur(0.7px);
  animation: 37s floatReverse infinite;
}
.particle:nth-child(36) {
  top: 28.9855072464%;
  left: 44.7470817121%;
  font-size: 28px;
  filter: blur(0.72px);
  animation: 23s float infinite;
}
.particle:nth-child(37) {
  top: 44.3896424168%;
  left: 52.4233432245%;
  font-size: 11px;
  filter: blur(0.74px);
  animation: 21s floatReverse infinite;
}
.particle:nth-child(38) {
  top: 24.6609124538%;
  left: 42.5321463897%;
  font-size: 11px;
  filter: blur(0.76px);
  animation: 34s float2 infinite;
}
.particle:nth-child(39) {
  top: 78.7207872079%;
  left: 89.8321816387%;
  font-size: 13px;
  filter: blur(0.78px);
  animation: 28s float infinite;
}
.particle:nth-child(40) {
  top: 50.6082725061%;
  left: 94.9119373777%;
  font-size: 22px;
  filter: blur(0.8px);
  animation: 24s floatReverse infinite;
}
.particle:nth-child(41) {
  top: 62.9766297663%;
  left: 42.4481737414%;
  font-size: 13px;
  filter: blur(0.82px);
  animation: 23s floatReverse infinite;
}
.particle:nth-child(42) {
  top: 5.8823529412%;
  left: 67.9133858268%;
  font-size: 16px;
  filter: blur(0.84px);
  animation: 29s float infinite;
}
.particle:nth-child(43) {
  top: 66.2606577345%;
  left: 36.2389813908%;
  font-size: 21px;
  filter: blur(0.86px);
  animation: 37s floatReverse infinite;
}
.particle:nth-child(44) {
  top: 31.4496314496%;
  left: 92.7021696252%;
  font-size: 14px;
  filter: blur(0.88px);
  animation: 29s floatReverse2 infinite;
}
.particle:nth-child(45) {
  top: 18.3574879227%;
  left: 39.8832684825%;
  font-size: 28px;
  filter: blur(0.9px);
  animation: 25s float infinite;
}
.particle:nth-child(46) {
  top: 52.3636363636%;
  left: 85.8536585366%;
  font-size: 25px;
  filter: blur(0.92px);
  animation: 37s float infinite;
}
.particle:nth-child(47) {
  top: 63.768115942%;
  left: 0.9727626459%;
  font-size: 28px;
  filter: blur(0.94px);
  animation: 31s float infinite;
}
.particle:nth-child(48) {
  top: 75.5447941889%;
  left: 39.9610136452%;
  font-size: 26px;
  filter: blur(0.96px);
  animation: 24s floatReverse2 infinite;
}
.particle:nth-child(49) {
  top: 44.0097799511%;
  left: 84.4793713163%;
  font-size: 18px;
  filter: blur(0.98px);
  animation: 27s float infinite;
}
.particle:nth-child(50) {
  top: 45.4106280193%;
  left: 54.4747081712%;
  font-size: 28px;
  filter: blur(1px);
  animation: 36s float infinite;
}
.particle:nth-child(51) {
  top: 39.1676866585%;
  left: 11.7994100295%;
  font-size: 17px;
  filter: blur(1.02px);
  animation: 36s float2 infinite;
}
.particle:nth-child(52) {
  top: 57.1428571429%;
  left: 73.0994152047%;
  font-size: 26px;
  filter: blur(1.04px);
  animation: 34s float2 infinite;
}
.particle:nth-child(53) {
  top: 96.3144963145%;
  left: 4.9309664694%;
  font-size: 14px;
  filter: blur(1.06px);
  animation: 23s float2 infinite;
}
.particle:nth-child(54) {
  top: 27.0531400966%;
  left: 23.3463035019%;
  font-size: 28px;
  filter: blur(1.08px);
  animation: 34s floatReverse2 infinite;
}
.particle:nth-child(55) {
  top: 90.1818181818%;
  left: 4.8780487805%;
  font-size: 25px;
  filter: blur(1.1px);
  animation: 40s floatReverse2 infinite;
}
.particle:nth-child(56) {
  top: 72.8167281673%;
  left: 91.8065153011%;
  font-size: 13px;
  filter: blur(1.12px);
  animation: 35s floatReverse infinite;
}
.particle:nth-child(57) {
  top: 65.8595641646%;
  left: 43.8596491228%;
  font-size: 26px;
  filter: blur(1.14px);
  animation: 37s float2 infinite;
}
.particle:nth-child(58) {
  top: 69.1839220463%;
  left: 39.1772771792%;
  font-size: 21px;
  filter: blur(1.16px);
  animation: 33s floatReverse infinite;
}
.particle:nth-child(59) {
  top: 25.4901960784%;
  left: 66.9291338583%;
  font-size: 16px;
  filter: blur(1.18px);
  animation: 21s floatReverse2 infinite;
}
.particle:nth-child(60) {
  top: 16.6056166056%;
  left: 44.1609421001%;
  font-size: 19px;
  filter: blur(1.2px);
  animation: 40s float infinite;
}
.particle:nth-child(61) {
  top: 61.7647058824%;
  left: 4.9212598425%;
  font-size: 16px;
  filter: blur(1.22px);
  animation: 31s floatReverse infinite;
}
.particle:nth-child(62) {
  top: 20.4131227217%;
  left: 42.0332355816%;
  font-size: 23px;
  filter: blur(1.24px);
  animation: 31s float infinite;
}
.particle:nth-child(63) {
  top: 71.1327649208%;
  left: 26.444662096%;
  font-size: 21px;
  filter: blur(1.26px);
  animation: 23s floatReverse infinite;
}
.particle:nth-child(64) {
  top: 25.5528255528%;
  left: 84.8126232742%;
  font-size: 14px;
  filter: blur(1.28px);
  animation: 34s float2 infinite;
}
.particle:nth-child(65) {
  top: 43.1901840491%;
  left: 39.4088669951%;
  font-size: 15px;
  filter: blur(1.3px);
  animation: 34s floatReverse infinite;
}
.particle:nth-child(66) {
  top: 5.8041112455%;
  left: 51.6066212269%;
  font-size: 27px;
  filter: blur(1.32px);
  animation: 22s floatReverse2 infinite;
}
.particle:nth-child(67) {
  top: 25.6473489519%;
  left: 5.9347181009%;
  font-size: 11px;
  filter: blur(1.34px);
  animation: 21s floatReverse2 infinite;
}
.particle:nth-child(68) {
  top: 88.3435582822%;
  left: 65.0246305419%;
  font-size: 15px;
  filter: blur(1.36px);
  animation: 39s floatReverse2 infinite;
}
.particle:nth-child(69) {
  top: 0.9840098401%;
  left: 32.5765054294%;
  font-size: 13px;
  filter: blur(1.38px);
  animation: 30s float infinite;
}
.particle:nth-child(70) {
  top: 72.9064039409%;
  left: 0.9881422925%;
  font-size: 12px;
  filter: blur(1.4px);
  animation: 21s floatReverse2 infinite;
}
.particle:nth-child(71) {
  top: 55.2404438964%;
  left: 11.8694362018%;
  font-size: 11px;
  filter: blur(1.42px);
  animation: 24s floatReverse infinite;
}
.particle:nth-child(72) {
  top: 78.5454545455%;
  left: 37.0731707317%;
  font-size: 25px;
  filter: blur(1.44px);
  animation: 21s float infinite;
}
.particle:nth-child(73) {
  top: 43.1901840491%;
  left: 57.1428571429%;
  font-size: 15px;
  filter: blur(1.46px);
  animation: 40s float infinite;
}
.particle:nth-child(74) {
  top: 14.4578313253%;
  left: 72.8155339806%;
  font-size: 30px;
  filter: blur(1.48px);
  animation: 21s float2 infinite;
}
.particle:nth-child(75) {
  top: 52.876376989%;
  left: 17.6991150442%;
  font-size: 17px;
  filter: blur(1.5px);
  animation: 29s float2 infinite;
}
.particle:nth-child(76) {
  top: 3.8787878788%;
  left: 80.9756097561%;
  font-size: 25px;
  filter: blur(1.52px);
  animation: 21s floatReverse infinite;
}
.particle:nth-child(77) {
  top: 74.7572815534%;
  left: 48.828125%;
  font-size: 24px;
  filter: blur(1.54px);
  animation: 38s float infinite;
}
.particle:nth-child(78) {
  top: 14.598540146%;
  left: 18.5909980431%;
  font-size: 22px;
  filter: blur(1.56px);
  animation: 39s floatReverse2 infinite;
}
.particle:nth-child(79) {
  top: 18.3796856106%;
  left: 47.711781889%;
  font-size: 27px;
  filter: blur(1.58px);
  animation: 21s float infinite;
}
.particle:nth-child(80) {
  top: 13.7423312883%;
  left: 30.5418719212%;
  font-size: 15px;
  filter: blur(1.6px);
  animation: 32s float infinite;
}

@keyframes apparition {
  from {
    opacity: 0;
    transform: translateY(100px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
@keyframes float {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(180px);
  }
}
@keyframes floatReverse {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-180px);
  }
}
@keyframes float2 {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(28px);
  }
}
@keyframes floatReverse2 {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-28px);
  }
}
    </style>
</head>
<body>
<main class='container'>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>4</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <span class='particle'>0</span>
  <article class='content'>
    <p>ﺍﻟﺼَّﺒْﺮُ ﻳُﻌِﻴْﻦُ ﻋَﻠﻰَ ﻛُﻞِّ ﻋَﻤَﻞٍ</p>
    <p>Kesabaran Itu Membantu Semua Pekerjaan.</p>
    <p>
        <a href="<?php echo base_url()?>">
      <button>Kembali Ke Dashboard</button>
      </a>
    </p>
  </article>
</main>

</body>
</html>