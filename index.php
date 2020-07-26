<style>
.nav{
  color: white;
  font-size: 40px;
  padding: 9px;
  background:#191818;
  border: 2px solid #2d332e;
  border-radius: 9px;
}
</style>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Insurance System</title>
		<meta name="description" content="Morphing Buttons Concept: Inspiration for revealing content by morphing the action element" />
		<meta name="keywords" content="expanding button, morph, modal, fullscreen, transition, ui" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css1/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css1/demo.css" />
		<link rel="stylesheet" type="text/css" href="css1/component.css" />
		<link rel="stylesheet" type="text/css" href="css1/content.css" />
		<script src="js1/modernizr.custom.js"></script>
	</head>
	<body>
    <div class="nav">
    Bueno Insurance System
    </div>
		<div class="container">
			
			<section>
				
				<div class="mockup-content">
					<div class="morph-button morph-button-modal morph-button-modal-2 morph-button-fixed">
						<button type="button">Admin Login</button>
						<div class="morph-content">
							<div>
								<div class="content-style-form content-style-form-1">
									<span class="icon icon-close">Close the dialog</span>
									<h2>Admin Login</h2>
									<form method="post" action="index_admin.php" name='logup'>
										<label>Username</label><input type="text" name='username'/>
										<label>Password</label><input type="password" name='password'/>
										<input type="submit" value="login" name='logup'>
									</form>
								</div>
							</div>
						</div>
					</div><!-- morph-button -->
					<strong class="joiner">or</strong>
					<div class="morph-button morph-button-modal morph-button-modal-3 morph-button-fixed">
						<button type="button">Customer Login</button>
						<div class="morph-content">
							<div>
								<div class="content-style-form content-style-form-2">
									<span class="icon icon-close">Close the dialog</span>
									<h2>Customer Login</h2>
									<form method="post" action="login_cus.php" name='login'>
										<label>Username</label><input type="text" name='uname' />
										<label>Password</label><input type="password" name='pass'/>
										<input type="submit" value="login" name='login'>
									</form>
								</div>
							</div>
						</div>
					</div><!-- morph-button -->
					<div class="morph-button morph-button-modal morph-button-modal-3 morph-button-fixed">
						<button type="button">Agent Login</button>
						<div class="morph-content">
							<div>
								<div class="content-style-form content-style-form-2">
									<span class="icon icon-close">Close the dialog</span>
									<h2>Agent Login</h2>
									<form method="post" action="login_cus.php" name='login'>
										<label>Username</label><input type="text" name='uname' />
										<label>Password</label><input type="password" name='pass'/>
										<input type="submit" value="login" name='login'>
									</form>
								</div>
							</div>
						</div>
					</div>
					<p>Kohlrabi radish okra azuki bean corn fava bean mustard tigernut juccama green bean celtuce collard greens avocado quandong.</p>
				</div><!-- /form-mockup -->
			</section>
			
		</div><!-- /container -->
		<script src="js1/classie.js"></script>
		<script src="js1/uiMorphingButton_fixed.js"></script>
		<script>
			(function() {
				var docElem = window.document.documentElement, didScroll, scrollPosition;

				// trick to prevent scrolling when opening/closing button
				function noScrollFn() {
					window.scrollTo( scrollPosition ? scrollPosition.x : 0, scrollPosition ? scrollPosition.y : 0 );
				}

				function noScroll() {
					window.removeEventListener( 'scroll', scrollHandler );
					window.addEventListener( 'scroll', noScrollFn );
				}

				function scrollFn() {
					window.addEventListener( 'scroll', scrollHandler );
				}

				function canScroll() {
					window.removeEventListener( 'scroll', noScrollFn );
					scrollFn();
				}

				function scrollHandler() {
					if( !didScroll ) {
						didScroll = true;
						setTimeout( function() { scrollPage(); }, 60 );
					}
				};

				function scrollPage() {
					scrollPosition = { x : window.pageXOffset || docElem.scrollLeft, y : window.pageYOffset || docElem.scrollTop };
					didScroll = false;
				};

				scrollFn();

				[].slice.call( document.querySelectorAll( '.morph-button' ) ).forEach( function( bttn ) {
					new UIMorphingButton( bttn, {
						closeEl : '.icon-close',
						onBeforeOpen : function() {
							// don't allow to scroll
							noScroll();
						},
						onAfterOpen : function() {
							// can scroll again
							canScroll();
						},
						onBeforeClose : function() {
							// don't allow to scroll
							noScroll();
						},
						onAfterClose : function() {
							// can scroll again
							canScroll();
						}
					} );
				} );

				// for demo purposes only
				[].slice.call( document.querySelectorAll( 'form button' ) ).forEach( function( bttn ) { 
					bttn.addEventListener( 'click', function( ev ) { ev.preventDefault(); } );
				} );
			})();
		</script>
	</body>
</html>