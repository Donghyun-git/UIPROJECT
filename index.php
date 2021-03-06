<?php
include 'link/inc_head.php';
?>

<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="강아지 소개 사이트">
  <meta name="keywords" content="강아지, 반려동물, 소형견, 중형견, 대형견, 병원, 장난감">
  <title>소개하개</title>

  <!-- CSS -->
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/swiper.css">
  <link rel="stylesheet" href="css/font-awesome.css">

  <!-- 파비콘 -->


  <!-- 페이스북 메타 태그 -->
  <meta property="og:title" content="소개하개" />
  <meta property="og:url" content="https://github.com/Donghyun-git" />
  <meta property="og:image" content="data:image/jpeg;base64,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" />
  <meta property="og:description" content="강아지 소개 사이트" />

  <!-- 트위터 메타 태그 -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="소개하개">
  <meta name="twitter:url" content="https://github.com/Donghyun-git">
  <meta name="twitter:image" content="data:image/jpeg;base64,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">
  <meta name="twitter:description" content="강아지 소개 사이트">

  <!-- 웹폰트 -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- HTLM5shiv ie6~8 -->
  <!--[if lt IE 9]>
     <script src="js/html5shiv.min.js"></script>
     <script type="text/javascript">
        alert("현재 브라우저는 지원하지 않습니다. 크롬 브라우저를 추천합니다.!");
     </script>
  <![endif]-->

</head>
<body>
	<header id="header">
		<div class="container">
			<div class="row">
				<div class="header clearfix">
					<h1>
						<a href="#">
							<em><img src="img/logo1.png" alt="Logo"></em>
						</a>
					</h1>
					<nav class="nav">
						<ul class="clearfix">
							<li><a href="#">강아지 종류</a></li>
							<li><a href="link/sell.html">강아지 장난감</a></li>
							<li><a href="link/map.html">천안 산책로</a></li>
							<li><a href="link/medicinfo.html">병원정보</a></li>
							<li><a href="link/board.html">게시판</a></li>
              <li><a href="link/login.html">Sign in/up</a></li>
              
                <?php
              if(isset($_SESSION['id'])){
              echo "<li><h2><b>{$_SESSION['id']}</b> <br>님 환영합니다.</h2><br>
                    </li>";
              }
              else {
                echo "<li><h2>로그인이 <br>필요합니다.</h2></li>";
              }
              ?>
             
						</ul>
            
					</nav>
				</div>
			</div>
		</div>
	</header>
<!-- //header -->

<section id="banner">
  <div class="slider">
    <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide ss1">
        <div class="container"><div class="row">
          <h2> <em>골든 리트리버</em></h2>
          <p>온순한 성미와 똑똑함으로 안내견으로도 유명한..</p>
        </div>
      </div>


      </div>
      <div class="swiper-slide ss2">
        <div class="container"><div class="row">
          <h2><em>시베리안 허스키</em></h2>
          <p> 몹시 영리하고 기본적으로 단체생활에 익숙하여 남에게 폐를 끼치는 일이 잘 없는..
            </p>
        </div>
      </div>
      </div>
      <div class="swiper-slide ss3">
        <div class="container"><div class="row">
          <h2><em>말티즈</em></h2>
          <p>하얀 털을 가진 외모로 아주 귀엽고 인기가 많아서 한국에서 반려견으로 많이 길러지는 종..</p>
        </div>
      </div>
      </div>
    </div>

    <div class="swiper-pagination"></div>
               <div class="swiper-button-prev"></div>
               <div class="swiper-button-next"></div>
  </div>
</div>
<!-- //Slides -->

</section>
<section id=info>
  <div class="container sub_title">
    <div class="row">
     <i class="fa fa-bullhorn" aria-hidden="true"></i><h3>  지식정보 </h3>
    </div>
  </div>
  <div class="container">
    <div class="row_dog">
      <div class="dog">
        <figure>
          <img src="img/info1.jpg" alt="강아지">
        </figure>
        <div class="write">
          <span><a href="#">우리집 강아지를 소개합니다~ 이름은 콩순이구요 취미는 똥싸기에요!
        배변훈련 하는 법 정보 공유합니다~!</a></span>
        </div>
      </div>
      <div class="dog">
        <figure>
          <img src="img/info1.jpg" alt="강아지">
        </figure>
        <div class="write">
          <span><a href="#">우리집 강아지를 소개합니다~ 이름은 콩순이구요 취미는 똥싸기에요!
        배변훈련 하는 법 정보 공유합니다~!</a></span>
        </div>
      </div>
      <div class="dog">
        <figure>
          <img src="img/info1.jpg" alt="강아지">
        </figure>
        <div class="write">
          <span><a href="#">우리집 강아지를 소개합니다~ 이름은 콩순이구요 취미는 똥싸기에요!
        배변훈련 하는 법 정보 공유합니다~!</a></span>
        </div>
      </div>
      <div class="dog">
        <figure>
          <img src="img/info1.jpg" alt="강아지">
        </figure>
        <div class="write">
          <span>
            <a href="#">우리집 강아지를 소개합니다~ 이름은 콩순이구요 취미는 똥싸기에요!
          배변훈련 하는 법 정보 공유합니다~</a>
        </span>
        </div>
      </div>
      <div class="dog">
        <figure>
          <img src="img/info1.jpg" alt="강아지">
        </figure>
        <div class="write">
          <span><a href="#">우리집 강아지를 소개합니다~ 이름은 콩순이구요 취미는 똥싸기에요!
        배변훈련 하는 법 정보 공유합니다~!</a></span>
        </div>
      </div>
      <div class="dog">
        <figure>
          <img src="img/info1.jpg" alt="강아지">
        </figure>
        <div class="write">
          <span><a href="#">우리집 강아지를 소개합니다~ 이름은 콩순이구요 취미는 똥싸기에요!
        배변훈련 하는 법 정보 공유합니다~!</a></span>
        </div>
      </div>
      <div class="dog">
        <figure>
          <img src="img/info1.jpg" alt="강아지">
        </figure>
        <div class="write">
          <span><a href="#">우리집 강아지를 소개합니다~ 이름은 콩순이구요 취미는 똥싸기에요!
        배변훈련 하는 법 정보 공유합니다~!</a></span>
        </div>
      </div>
      <div class="dog">
        <figure>
          <img src="img/info1.jpg" alt="강아지">
        </figure>
        <div class="write">
          <span><a href="#">우리집 강아지를 소개합니다~ 이름은 콩순이구요 취미는 똥싸기에요!
        배변훈련 하는 법 정보 공유합니다~!</a></span>
        </div>
      </div>

    </div>
  </div>
</section>
<!--contents-->

<footer id="footer">
  <div class="container">
    <div class="row">
          <div class="footer">
              <ul>
                  <li><a href="#">사이트 도움말</a></li>
                  <li><a href="#">사이트 이용약관</a></li>
                  <li><a href="#">사이트 운영원칙</a></li>
                  <li><a href="#"><strong>개인정보취급방침</strong></a></li>
                  <li><a href="#">책임의 한계와 법적고지</a></li>
                  <li><a href="#">게시중단요청서비스</a></li>
                  <li><a href="#">고객센터</a></li>
              </ul>
              <address>
                  Copyright ©
                  <a href="https://github.com/Donghyun-git"><strong>Dongs</strong></a>
                  All Rights Reserved.
              </address>
          </div>
      </div>
  </div>
</footer>
<!--footer-->

<script src="js/jquery.min_1.12.4.js"></script>
<script src="js/modernizr-custom.js"></script>
<script src="js/swiper.min.js"></script>
<script src="ie-checker.js"></script>
<script>
const swiper = new Swiper('.swiper-container',{
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

    });
</script>
</body>
</html>
