<!DOCTYPE html>
<html lang="pt">
  <head>
		<title>System 3D</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'>

		<link rel="stylesheet" type="text/css" href="css/slicknav.css">
		<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		
		<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>

		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
		<script type="text/javascript" src="js/camera.min.js"></script>
		<script type="text/javascript" src="js/myscript.js"></script>
		<script src="js/sorting.js" type="text/javascript"></script>
		<script src="js/jquery.isotope.js" type="text/javascript"></script>
		<!--script type="text/javascript" src="js/jquery.nav.js"></script-->
		

		<script>
			jQuery(function(){
				jQuery('#camera_wrap_1').camera({
					transPeriod: 500,
					time: 2000,
					height: '490px',
					thumbnails: false,
					pagination: true,
					playPause: false,
					loader: false,
					navigation: false,
					hover: false
				});
			});
		</script>
		
	</head>
	<body data-spy="scroll" data-target=".navmenu">
		
		
	
<?php 

$page = @$_GET['page'];

switch ( @$page ) {
	case 'escolas':
			
		include( 'pages/' . $page . '/header.php' );
		include( 'pages/' . $page . '/estrutura_principal.php' );  
		include( 'pages/' . $page . '/estrutura_secundaria.php' );
		include( 'contato.php' );

		break;
	

	case 'galpoes':
			
		include( 'pages/' . $page . '/header.php');
		include( 'pages/' . $page . '/estrutura_principal.php');  
		include( 'pages/' . $page . '/estrutura_secundaria.php');	   
		include( 'contato.php' );

	   	break;
	
	case 'marquises':
			
		include( 'pages/' . $page . '/header.php');
		include( 'pages/' . $page . '/estrutura_principal.php');  		
		include( 'contato.php' );

	   	break;

	case 'mezaninos':

		include( 'pages/' . $page . '/header.php' );
		include( 'pages/' . $page . '/estrutura_principal.php' );
		include( 'pages/' . $page . '/escadas.php' );
		include( 'pages/' . $page . '/corrimao.php' );
		include( 'pages/' . $page . '/vigamento_steel-deck.php' );
		include( 'contato.php' );
		
		break;

	case 'passarelas':

		include( 'pages/' . $page . '/header.php' );
		include( 'pages/' . $page . '/estrutura_principal.php' );
		include( 'pages/' . $page . '/grades_de_piso.php' );
		include( 'pages/' . $page . '/guarda-corpo.php' );		
		include( 'contato.php' );
		
		break;

	case 'pipe-racks':
					
		include( 'pages/' . $page . '/header.php' );
		include( 'pages/' . $page . '/estrutura_principal.php' );  		
		include( 'contato.php' );

		break;
	

	case 'shoppings':

		include( 'pages/' . $page . '/header.php' );
		include( 'pages/' . $page . '/cobertura.php' );
		include( 'pages/' . $page . '/claraboia.php' );
		include( 'pages/' . $page . '/domus.php' );		
		include( 'pages/' . $page . '/fachada.php' );		
		include( 'pages/' . $page . '/marquise.php' );		
		include( 'pages/' . $page . '/passarela.php' );		

		include( 'contato.php' );
		
		break;


	case 'teatros':	

		include('pages/' . $page . '/header.php');		
		include('pages/' . $page . '/estrutura_principal.php');  
		include('pages/' . $page . '/fechamento.php');          
		include('pages/' . $page . '/passarela.php');          
		include('pages/' . $page . '/arquibancada.php');          
		include('contato.php');      

		break;


	case 'torres':	

		include('pages/' . $page . '/header.php');		
		include('pages/' . $page . '/estrutura_principal.php');  
		include('pages/' . $page . '/vigamento.php');          
		include('pages/' . $page . '/escada.php');          
		include('pages/' . $page . '/corrimao.php');          
		include('contato.php');      
		
		break;

	default:
		
		include( 'header.php' ); ?>


			<!--estrutura_principal-->    
		    <div class="section">    	
				
				<div class="container">
					&nbsp;
				</div>

		       <div class="container">
				
				<div class="row">

					<div class="" data-animated="fadeIn">	
						<div class="element col-sm-4 gall ">
							<a class="plS" href="?page=escolas">
								<img class="img-thumbnail img-responsive picsGall" src="pages/escolas/images/estrutura_principal/thumb_pic1.jpg" alt=""/>
								<h4 class="text-center">Escolas</h4>
							</a>						
						</div>
						<div class="element col-sm-4 gall ">
							<a class="plS" href="?page=shoppings">
								<img class="img-thumbnail img-responsive picsGall" src="pages/shoppings/images/claraboia/thumb_pic1.jpg" alt=""/>
								<h4 class="text-center">Shoppings</h4>
							</a>						
						</div>
						<div class="element col-sm-4 gall ">
							<a class="plS" href="?page=teatros">
								<img class="img-thumbnail img-responsive picsGall" src="pages/teatros/images/estrutura_principal/thumb_pic1.jpg" alt=""/>
								<h4 class="text-center">Teatros</h4>
							</a>						
						</div>
						<div class="element col-sm-4 gall ">
							<a class="plS" href="?page=galpoes">
								<img class="img-thumbnail img-responsive picsGall" src="pages/galpoes/images/estrutura_principal/thumb_pic1.jpg" alt=""/>
								<h4 class="text-center">Galpões</h4>
							</a>						
						</div>
						<div class="element col-sm-4 gall ">
							<a class="plS" href="?page=torres">
								<img class="img-thumbnail img-responsive picsGall" src="pages/torres/images/estrutura_principal/thumb_pic1.jpg" alt=""/>
								<h4 class="text-center">Torres</h4>
							</a>						
						</div>
						<div class="element col-sm-4 gall ">
							<a class="plS" href="?page=passarelas">
								<img class="img-thumbnail img-responsive picsGall" src="pages/passarelas/images/estrutura_principal/thumb_pic1.jpg" alt=""/>
								<h4 class="text-center">Passarelas</h4>
							</a>						
						</div>
						<div class="element col-sm-4 gall ">
							<a class="plS" href="?page=mezaninos">
								<img class="img-thumbnail img-responsive picsGall" src="pages/mezaninos/images/estrutura_principal/thumb_pic1.jpg" alt=""/>
								<h4 class="text-center">Mezaninos</h4>
							</a>						
						</div>
						<div class="element col-sm-4 gall ">
							<a class="plS" href="?page=pipe-racks">
								<img class="img-thumbnail img-responsive picsGall" src="pages/pipe-racks/images/estrutura_principal/thumb_pic1.jpg" alt=""/>
								<h4 class="text-center">Pipe Racks</h4>
							</a>						
						</div>
						<div class="element col-sm-4 gall ">
							<a class="plS" href="?page=marquises">
								<img class="img-thumbnail img-responsive picsGall" src="pages/marquises/images/estrutura_principal/thumb_pic1.jpg" alt=""/>
								<h4 class="text-center">Marquises</h4>
							</a>						
						</div>
					</div>

				</div>
				
			</div>
		</div>    

		<?php include( 'contato.php' ); ?>

<?php 
	break;
}     
?>



     	
		
	<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.js"></script>
	<script>
		$(document).ready(function(){
			$(".bhide").click(function(){
				$(".hideObj").slideDown();
				$(this).hide(); //.attr()
				return false;
			});
			$(".bhide2").click(function(){
				$(".container.hideObj2").slideDown();
				$(this).hide(); // .attr()
				return false;
			});
				
			$('.heart').mouseover(function(){
					$(this).find('i').removeClass('fa-heart-o').addClass('fa-heart');
				}).mouseout(function(){
					$(this).find('i').removeClass('fa-heart').addClass('fa-heart-o');
				});
				
				function sdf_FTS(_number,_decimal,_separator)
				{
				var decimal=(typeof(_decimal)!='undefined')?_decimal:2;
				var separator=(typeof(_separator)!='undefined')?_separator:'';
				var r=parseFloat(_number)
				var exp10=Math.pow(10,decimal);
				r=Math.round(r*exp10)/exp10;
				rr=Number(r).toFixed(decimal).toString().split('.');
				b=rr[0].replace(/(\d{1,3}(?=(\d{3})+(?:\.\d|\b)))/g,"\$1"+separator);
				r=(rr[1]?b+'.'+rr[1]:b);

				return r;
}
				
			setTimeout(function(){
					$('#counter').text('0');
					$('#counter1').text('0');
					$('#counter2').text('0');
					setInterval(function(){
						
						var curval=parseInt($('#counter').text());
						var curval1=parseInt($('#counter1').text().replace(' ',''));
						var curval2=parseInt($('#counter2').text());
						if(curval<=707){
							$('#counter').text(curval+1);
						}
						if(curval1<=12280){
							$('#counter1').text(sdf_FTS((curval1+20),0,' '));
						}
						if(curval2<=245){
							$('#counter2').text(curval2+1);
						}
					}, 2);
					
				}, 500);
			});
	</script>
	<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#menu').slicknav();
		
	});
	</script>
	
	<script type="text/javascript">
    $(document).ready(function(){
       
        var $menu = $("#menuF");
            
        $(window).scroll(function(){
            if ( $(this).scrollTop() > 100 && $menu.hasClass("default") ){
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("default")
                           .addClass("fixed transbg")
                           .fadeIn('fast');
                });
            } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("fixed transbg")
                           .addClass("default")
                           .fadeIn('fast');
                });
            }
        });
	});
    //jQuery
	</script>
	<script>
		/*menu*/
		function calculateScroll() {
			var contentTop      =   [];
			var contentBottom   =   [];
			var winTop      =   $(window).scrollTop();
			var rangeTop    =   200;
			var rangeBottom =   500;
			$('.navmenu').find('a').each(function(){
				contentTop.push( $( $(this).attr('href') ).offset().top );
				contentBottom.push( $( $(this).attr('href') ).offset().top + $( $(this).attr('href') ).height() );
			})
			$.each( contentTop, function(i){
				if ( winTop > contentTop[i] - rangeTop && winTop < contentBottom[i] - rangeBottom ){
					$('.navmenu li')
					.removeClass('active')
					.eq(i).addClass('active');				
				}
			})
		};
		
		$(document).ready(function(){
			calculateScroll();
			$(window).scroll(function(event) {
				calculateScroll();
			});
			$('.navmenu ul li a').click(function() {  
				$('html, body').animate({scrollTop: $(this.hash).offset().top - 80}, 800);
				return false;
			});
		});		
	</script>	
	<script type="text/javascript" charset="utf-8">

		jQuery(document).ready(function(){
			jQuery("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',theme:'light_square',slideshow:4000, autoplay_slideshow: false, social_tools: ''});
			
		});
	</script>

		<!-- Google Analytics -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-57923672-2', 'auto');
			ga('send', 'pageview');

		</script>
	</body>
	
</html>