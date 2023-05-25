<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="viewer.css" rel="stylesheet">
    <title>Visionneur de JSON</title>

    <!-- Bootstrap -->
    <link href="fichier secondaire (pas toucher)/netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','fichier secondaire (pas toucher)/www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-49250144-1', 'json2table.com');
      ga('send', 'pageview');

    </script>
  </head>
  <body  onLoad="document.fo.login.focus()">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active" id="jsonLi"><a href="#" id="jsonViewMenu">JSON&nbsp;</a></li>
            <li class="active" id="tableLi"><a href="#" id="tableViewMenu">&nbsp;Table&nbsp;</a></li>
            <li class="active" id="treeLi"><a href="#" id="treeViewMenu">&nbsp;Arbre&nbsp;</a></li>
            <li class="active" id="treeLi"><a href="deconnexion.php" id="treeViewMenu">&nbsp;disco&nbsp;</a></li>
          </ul>
          <button type="button" class="btn btn-default navbar-btn" id="load_json_btn"><span class="glyphicon glyphicon-play"></span></button>
		  <!--button type="button" class="btn btn-default navbar-btn" id="load_url_btn">Load URL</button-->
          <!--ul class="nav navbar-nav navbar-right">
          <li><a href="#">json2table.com&nbsp;</a></li>
        </ul-->


        </div>
    </nav>


    <!-- Begin page content -->
    <div class="container-fluid fill" style="padding-left: 0px; padding-right: 0px">

    <div id="all_panels">

    	<div id="json_pnl">
            <div id="inner_text">
        	<textarea id="json_vl" wrap="hard" placeholder="Copiez le Fichier JSON ici et appuyez sur le bouton [ > ]"></textarea>
        </div>
    	</div>
        <div id="xxa">

                <div id="table_pnl">
                  <div class="top_size"></div>
                  <div id="inner_tbl"></div>
                </div>
                <div id="tree_pnl">
                  <div class="top_size"></div>
                  <div id="inner_tree"></div>
                </div>
        </div>
    </div>

    </div>

    <div class="modal fade bs-example-modal-sm" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">JSON Invalide!</h4>
          </div>
          <div class="modal-body">
            <strong>Erreur: </strong><span id="error_msg"></span>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade bs-example-modal-sm" id="aboutModal" tabindex="-1" role="dialog" aria-labelledby="aboutModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Visualisateur de JSON</h4>
          </div>
          <div class="modal-body">
            <p> Un Outil permettant de visualiser le contenu JSON sous forme de tableau et d'arbre. L'outil convertit visuellement un fichier JSON en tableau et en arbre pour faciliter la navigation, l'analyse et la validation de JSON.</p>
            <p>&nbsp;</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade bs-example-modal-sm" id="inputURLModal" tabindex="-1" role="dialog" aria-labelledby="inputURLModalLabel" aria-hidden="true">
     <form>
	 </form>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="fichier secondaire (pas toucher)/ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="fichier secondaire (pas toucher)/netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="fichier secondaire (pas toucher)/jquery.jcubic.pl/js/jquery.splitter-0.14.0.js"></script>
    <link href="fichier secondaire (pas toucher)/jquery.jcubic.pl/css/jquery.splitter.css" rel="stylesheet"/>

	<script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="fichier secondaire (pas toucher)/w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "ur-b8756614-8756-d77-785e-7018db6c35ac", doNotHash: true, doNotCopy: true, hashAddressBar: false});</script>

	<script src="viewer.js"></script>
  </body>

</html>
