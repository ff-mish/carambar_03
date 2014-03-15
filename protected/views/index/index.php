<div class="header"
     data-style="margin-top:-200px" data-animate="margin-top:0" data-delay="0" data-time="500" data-easing="easeOutQuart"
     data-0="transform:translate3d(0,0px,0);" data-500="transform:translate3d(0,50px,0);">
	<div class="hdcontent">
		<a class="nav1 nav1on" href="#"></a>
		<a class="nav2" href="#"></a>
	</div>
</div>
<!--  -->
<div class="page phase<?php echo $phase;?>">
	<!-- #Presentation Block -->
	<div class="presentation">
		<div class="skyline"
		     data-0="transform:translate3d(0,0px,0);" data-500="transform:translate3d(0,100px,0);"></div>
		<div class="blue-road"
		     data-style="opacity:0;" data-animate="opacity:1;" data-delay="0" data-time="800"
		     data-0="transform:translate3d(0,0px,0);" data-500="transform:translate3d(0,50px,0);"></div>
		<div class="presentation-box">
			<div class="carambar-man" data-style="left:-1000px" data-animate="left:85px" data-delay="0" data-time="800" data-easing="easeOutQuart"></div>
			<?php if($phase == 1 || $phase == 2):?>
			<div class="tooltip" data-style="left:149px;opacity:0;" data-animate="left:249px;opacity:1;" data-delay="800" data-time="500">
				<div class="tips-content"></div>
				<div class="tips-video">
					<img src="pic/presentation-video.jpg" />
					<a class="video-play" href="javascript:void(0);" data-a="open_video" data-d="mid="></a>
				</div>
			</div>
			<?php endif;?>
			<?php if($phase == 3):?>
				<div class="tooltip" data-style="left:149px;opacity:0;" data-animate="left:249px;opacity:1;" data-delay="800" data-time="500">
					<div class="tips-content-p3"></div>
				</div>
			<?php endif;?>
			<div class="indicator-count-wrap"
			     data-style="opacity:0;" data-animate="opacity:1;" data-delay="1000" data-time="500"
			     data-0="transform:translate3d(0,0px,0);" data-500="transform:translate3d(0,50px,0);">
				<div class="indicator-title">Nombre de soutiens récoltés</div>
				<div class="indicator-count"></div>
				<div class="indicator-hashtag">#GOODLUCKCARAMBAR</div>
				<div class="indicator-btn"></div>
			</div>
		</div>
		<div class="goto-support-bg" data-0="transform:translate3d(0,0px,0);" data-500="transform:translate3d(0,70px,0);">
			<a href="#" class="goto-support">ET TENTEZ DE GAGNER DE NOMBREUX CADEAUX ICI</a>
		</div>
	</div>
	<!-- /Presentation Block -->
	<!-- #Challenge Block -->
	<div class="challenge_bg">
		<div class="map_bg"
		     data-0="transform:translate3d(0,0px,0);" data-1500="transform:translate3d(0,-400px,0);"></div>
	</div>
	<?php if($phase == 1 || $phase == 2):?>
	<div class="challenge">
		<div class="challenge-title"></div>
		<div class="challenge-man" data-300="transform:translate3d(0,0px,0);" data-400="transform:translate3d(0,-259px,0);"></div>
		<div class="challenge-inner" data-646="transform:translate3d(0,0px,0);" data-1200="transform:translate3d(0,100px,0);">
			<div class="challenge-item">
				<div class="challenge-img">
					<img src="pic/challenge1.jpg" />
				</div>
				<div class="vote-btn vote-btn1" data-a="vote" data-d="cid=1">DEFI No1</div>
			</div>
			<div class="challenge-item">
				<div class="challenge-img">
					<img src="pic/challenge2.jpg" />
				</div>
				<div class="vote-btn vote-btn2" data-a="vote" data-d="cid=2">DEFI No2</div>
			</div>
			<div class="challenge-item">
				<div class="challenge-img">
					<img src="pic/challenge3.jpg" />
				</div>
				<div class="vote-btn vote-btn3" data-a="vote" data-d="cid=3">DEFI No3</div>
			</div>
		</div>
	</div>
	<?php endif;?>
	<?php if($phase == 3):?>
	<div class="videolistbg">
		<div class="videolist-tit"></div>
		<div class="challenge-man" data-300="transform:translate3d(0,0px,0);" data-400="transform:translate3d(0,-259px,0);"></div>
		<div class="videolist">
			<div class="videolistshare">
				<div class="video-con">
					<div class="videolist-item">
						<div class="videolist-item-tit videolist-item-tit1"></div>
						<div class="videolist-box"><a href="#"><img src="images/demo.jpg" /></a></div>
						<div class="videolist-txt">le soutien politique français</div>
						<div class="video-icon"></div>
					</div>
					<div class="videolist-item">
						<div class="videolist-item-tit videolist-item-tit2"></div>
						<div class="videolist-box"><a href="#"><img src="images/demo.jpg" /></a></div>
						<div class="videolist-txt">le soutien politique français</div>
						<div class="video-icon"></div>
					</div>
					<div class="videolist-item">
						<div class="videolist-item-tit videolist-item-tit3"></div>
						<div class="videolist-boxnull">prochainement...</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endif;?>
	<!-- /Challenge Block -->

	<div class="yellow-wrap">
		<!--  -->
		<div class="img"></div>
		<!--  -->
		<div class="share">
			<div class="share-fb">
				<a href="#" class="share-fbbtn" data-a="open_facebook"></a>
			</div>
			<div class="share-t">
				<textarea class="share-txt"></textarea>
				<p class="share-t-num">14/140</p>
				<a href="#" class="share-tbtn"></a>
			</div>
			<div class="share-i cs-clear">
				<a href="#" class="share-iandroid"></a>
				<a href="#" class="share-iios"></a>
			</div>
		</div>
		<!--  -->
		<div class="tshirttit"></div>
		<!--  -->
		<div class="tshirt"></div>
		<!--  -->
		<div class="photit"></div>
		<!--  -->
		<div class="pholist cs-clear">
			<div class="phoitem">
				<img src="images/demo2.jpg" />
			</div>
			<div class="phoitem">
				<img src="images/demo2.jpg" />
			</div>
			<div class="phoitem">
				<img src="images/demo2.jpg" />
			</div>
			<div class="phoitem">
				<img src="images/demo2.jpg" />
			</div>
			<div class="phoitem">
				<img src="images/demo2.jpg" />
			</div>
		</div>
		<!-- line -->
		<div class="line line3">
			<div class="line-com3"></div>
		</div>
		<!--  -->
	</div>


	<!--<div class="facebook-post">-->
	<!--<div class="facebook-post-title"></div>-->
	<!--<div class="facebook-post-img" id="fileupload">-->
	<!--<input type="file" accept="image/*" name="file">-->
	<!--</div>-->
	<!--<div class="poptxt-pic">-->
	<!--<a class="pop-zoomout-btn" data-a="pop-zoomout-btn" href="javascript:void(0)">Zoom In</a>-->
	<!--<a class="pop-zoomin-btn" data-a="pop-zoomin-btn" href="javascript:void(0)">Zoom Out</a>-->
	<!--<div class="poptxt-pic-inner">-->
	<!--<img style="pointer-events:none" />-->
	<!--</div>-->
	<!--</div></div>-->
	<!--<div class="facebook-post-textarea">-->
	<!--<textarea rows="" cols=""></textarea>-->
	<!--</div>-->
	<!--<div class="facebook-post-icon"></div>-->
	<!--<div class="facebook-post-submit"></div>-->
	<!--</div>-->



	<!--  -->

	<!--  -->



	<!--  -->
</div>
<!-- footer -->
<div class="footer">
	Mentions légales
</div>

<div class="overlay" data-a="close_popup"></div>


<!-- Templates -->
<!-- #youtube-player-tpl -->
<script type="text/tpl" id="youtube-player-template">
	<div class="pop video-popup" data-a="close_popup">
		<div class="popup-close"></div>
		<iframe width="825" height="640" src="//www.youtube.com/embed/7-h4gSeXb5s?autoplay=1&rel=0" frameborder="0" allowfullscreen></iframe>
	</div>
</script>
<!-- /youtube-player-tpl -->

<!-- #facebook-post-tpl -->
<script type="text/tpl" id="facebook-post-template">
	<div class="pop pop-fb">
		<div class="pop-close" data-a="close_popup"></div>
		<div class="pop-fttit">PUBLIER VOTRE SOUTIEN avec le #goodluckcarambar</div>
		<div class="pop-ft-form cs-clear">
			<div class="facebook-post-img-wrap">
				<div class="facebook-post-img" id="fileupload">
					<input type="file" accept="image/*" name="file">
				</div>

				<div class="facebook-post-load">
					<div class="popload-percent"><p></p></div>
					<div class="popload-text">Téléchargement en cours…</div>
				</div>

				<div class="poptxt-pic">
					<a class="pop-zoomout-btn" data-a="pop-zoomout-btn" href="javascript:void(0)">Zoom In</a>
					<a class="pop-zoomin-btn" data-a="pop-zoomin-btn" href="javascript:void(0)">Zoom Out</a>
					<div class="poptxt-pic-inner">
						<img style="pointer-events:none" />
					</div>
				</div>
			</div>
			<div class="pop-ft-text">
				<div class="pop-ft-ftit">votre commentaire</div>
				<input id="facebook-img" type="hidden" />
				<textarea id="facebook-content"></textarea>
			</div>
		</div>
		<div class="pop-ft-check">
			<input type="checkbox" />
			<span>j'ai lu et j'accepte le règlement du jeu</span>
		</div>
		<div class="pop-ft-icon"></div>
		<div class="pop-ft-btn" data-a="submit-facebook"></div>
	</div>
</script>
<!-- #facebook-post-tpl -->