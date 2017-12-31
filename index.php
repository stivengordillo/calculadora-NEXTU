<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
	<head>
    	<meta charset="utf-8" />
		<jdoc:include type="head" />
        <meta name="robots" content="index,follow" /> 
        <meta name="viewport" content="width=device-width">

        <!-- Fonts -->
            <link href='http://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/reset.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/blog.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/less/load-styles.php?load=template-contenido">

        <!-- Scripts -->

        <script type="text/javascript">
            /*var x;
              x=jQuery(document);
              x.ready(inicio);*/
              function inicio(){
                /*var ancho= window.innerWidth;
                var margen= (1900-ancho)/2;
                var x;
                x=jQuery(".banner");
                x.css("margin-left","-"+margen+"px");*/
                
              }
        </script>


<script type="text/javascript">

           /*jQuery( document ).ready( function( e ){


               if (document.documentElement.clientWidth < 480) { 
                   document.querySelector("meta[name=viewport]").setAttribute(
                         'content', 
                         'width=device-width, initial-scale=0.1, maximum-scale=0.1, user-scalable=1');

                   return;
               }

               if (document.documentElement.clientWidth < 1024) { 
                   document.querySelector("meta[name=viewport]").setAttribute(
                         'content', 
                         'width=device-width, initial-scale=0.7, maximum-scale=0.7, user-scalable=1');

                   return;
               }
           });*/
       </script>

<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?2Qzzdv1aoATGllvbouRaRl7jTJh2IXZe";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],
        p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id))
        {js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js'
        ;fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

	</head>

    <body onresize="inicio()">
<?php include_once("analyticstracking.php") ?>
        <header>
            <div class="wrapper">
                <div class="logo">
                    <iframe src="html5/logo.html" style="width: 458px;height: 95px;" scrolling="no"></iframe>
    <!--            <img class="logo" src="images/logo.png"> -->
                </div>
                <nav>
                    <jdoc:include type="modules" name="info-top" style="xhtml"/>
                    <a id="trigger-menu">MENU</a>
                    <jdoc:include type="modules" name="menu" style="xhtml"/>
                </nav>
                <div class="banner">
                    <jdoc:include type="modules" name="banner-contenido" style="xhtml"/>
                </div>
            </div>
        </header>
        <div class="redes-lateral">
            <jdoc:include type="modules" name="redes-lateral" style="xhtml"/>
        </div>
        <main>
            <div class="wrapper">
                <jdoc:include type="component" />
            </div>
        </main>
            <footer>
                <div class="wrapper">
                    <jdoc:include type="modules" name="datos-pie" style="xhtml"/>
                </div>

                <div class="copy">
                    
                </div>
            </footer>
<!--         <a class="chat" href="#"><img src="images/icons/boton-chat.png"></a> -->
        <script>
            ( function( $, window, document ){

                $(document).ready(function(){
                    // Despliega menu principal en resoluciones inferiores
                    $( "#trigger-menu" ).click(function() {

                        if( $( ".menu" ).is( ':visible' ) )
                            $( ".menu" ).slideUp( 400 );
                        else
                            $( ".menu" ).slideDown( 400 );

                    });

                });

            })( jQuery, this, this.document, undefined );
        </script>
	</body>
    
</html>