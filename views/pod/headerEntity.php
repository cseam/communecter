<?php 
$cssAnsScriptFilesTheme = array(
	//X-editable
	'/assets/plugins/x-editable/css/bootstrap-editable.css',
	'/assets/plugins/x-editable/js/bootstrap-editable.js' , 
	//DatePicker
	'/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js' ,
	'/assets/plugins/bootstrap-datepicker/js/locales/bootstrap-datepicker.fr.js' ,
	'/assets/plugins/bootstrap-datepicker/css/datepicker.css',
	
	//DateTime Picker
	'/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js' , 
	'/assets/plugins/bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.fr.js' , 
	'/assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css',
	//Wysihtml5
	'/assets/plugins/wysihtml5/bootstrap-wysihtml5-0.0.2/bootstrap-wysihtml5-0.0.2.css',
	'/assets/plugins/wysihtml5/bootstrap-wysihtml5-0.0.2/wysiwyg-color.css',
	'/assets/plugins/wysihtml5/bootstrap-wysihtml5-0.0.2/wysihtml5-0.3.0.min.js' , 
	'/assets/plugins/wysihtml5/bootstrap-wysihtml5-0.0.2/bootstrap-wysihtml5.js' , 
	'/assets/plugins/wysihtml5/wysihtml5.js',
	
	'/assets/plugins/moment/min/moment.min.js',
	'/assets/plugins/Chart.js/Chart.min.js',
	'/assets/plugins/jquery.qrcode/jquery-qrcode.min.js'
);
HtmlHelper::registerCssAndScriptsFiles($cssAnsScriptFilesTheme);
$cssAnsScriptFilesModule = array(
	//Data helper
	'/js/dataHelpers.js',
	'/js/postalCode.js',
	'/js/activityHistory.js'
);
HtmlHelper::registerCssAndScriptsFiles($cssAnsScriptFilesModule, $this->module->assetsUrl);


$cssAnsScriptFilesModuleSS = array(
	'/plugins/Chart.js/Chart.min.js',
);
HtmlHelper::registerCssAndScriptsFiles($cssAnsScriptFilesModuleSS,Yii::app()->theme->baseUrl."/assets");

$controler = Element::getControlerByCollection($type);
?>

<style>
	/*.headerEntity{
		margin-top:-10px;

		background-image: url("<?php echo $this->module->assetsUrl; ?>/images/bg/wavegrid.png");
		background-repeat: repeat;
		
		moz-box-shadow: 0px 2px 4px -1px #656565;
		-webkit-box-shadow: 0px 2px 4px -1px #656565;
		-o-box-shadow: 0px 2px 4px -1px #656565;
		box-shadow: 0px 2px 4px -1px #656565;
		filter: progid:DXImageTransform.Microsoft.Shadow(color=#656565, Direction=180, Strength=4);
	}*/

	.headerEntity{
		/*margin: 0px;*/
		<?php if(!empty($viewer)){ ?>
			background-image: url("<?php echo $this->module->assetsUrl; ?>/images/people.jpg");
			min-height:70px;
			background-position: center bottom 0px;
			
		<?php }else { ?>
			background-image: url("<?php echo $this->module->assetsUrl; ?>/images/bg/dda-connexion-lines.jpg");
			background-repeat: repeat;
			background-size: 100%;
		<?php } ?>
		/*background-position: left bottom -40px;*/
		moz-box-shadow: 0px 2px 4px -1px #656565;
		-webkit-box-shadow: 0px 2px 4px -1px #656565;
		-o-box-shadow: 0px 2px 4px -1px #656565;
		box-shadow: 0px 0px 4px -1px #656565;
		filter: progid:DXImageTransform.Microsoft.Shadow(color=#656565, Direction=180, Strength=4);
		border-radius: 0px;
		margin-top:-10px;
		margin-bottom:10px;
		padding-bottom: 60px
	}

	.headerEntity .thumbnail{
		margin-bottom:0px;
		max-height:150px;
		display:inline;
	}
	.headerEntity .lbl-entity-name{
		font-size:24px;
	}
	.headerEntity .lbl-entity-locality{
		font-size:14px;
	}
	.headerEntity hr{
		border-top: 1px solid rgba(186, 186, 186, 0.5);
		margin-top:7px;
		margin-bottom:7px;

	}
	.headerEntity .label.tag{
		margin-top:3px;
		margin-left:3px;

	}
	.box-ajaxTools{
		margin-top: -70px;
	}
	.box-ajaxTools .btn.tooltips, 
	.box-ajaxTools .btn.tooltips.active{
		margin-right:10px;
		margin-top:15px;
		border-radius: 10px !important;
	}
	.tag{
		cursor: pointer;
	}


	.short-desc-header{
		max-height: 75px;
		overflow: hidden;
	}


	@media screen and (max-width: 1024px) {
		.headerEntity .lbl-entity-name{
			font-size:20px;
		}
		.headerEntity .lbl-entity-locality{
			font-size:13px;
		}
	}
	progress[value] {
    /* Get rid of the default appearance */
    appearance: none;   
    /* This unfortunately leaves a trail of border behind in Firefox and Opera. We can remove that by setting the border to none. */
    border: none;
    /* Add dimensions */
	width: 100%; height: 20px;
    /* Although firefox doesn't provide any additional pseudo class to style the progress element container, any style applied here works on the container. */
    background-color: whiteSmoke;
    border-radius: 3px;
    box-shadow: 0 2px 3px rgba(0,0,0,.5) inset;
    /* Of all IE, only IE10 supports progress element that too partially. It only allows to change the background-color of the progress value using the 'color' attribute. */
    color: royalblue;
    position: relative;
	}
	/*
	Webkit browsers provide two pseudo classes that can be use to style HTML5 progress element.
	-webkit-progress-bar -> To style the progress element container
	-webkit-progress-value -> To style the progress element value.
	*/
	
	progress[value]::-webkit-progress-bar {
	    background-color: whiteSmoke;
	    border-radius: 3px;
	    box-shadow: 0 2px 3px rgba(0,0,0,.5) inset;
	}
	
	progress[value]::-webkit-progress-value {
	    position: relative;
	    
	    background-size: 35px 20px, 100% 100%, 100% 100%;
	    border-radius:3px;
	    
	    /* Let's animate this */
	    animation: animate-stripes 5s linear infinite;
	}
	
	@keyframes animate-stripes { 100% { background-position: -100px 0; } }
	
	/* Firefox provides a single pseudo class to style the progress element value and not for container. -moz-progress-bar */
	progress[value]::-moz-progress-bar {
	    /* Gradient background with Stripes */
	    background-image:
	    -moz-linear-gradient( 135deg,
		    transparent,
		    transparent 33%,
		    rgba(0,0,0,.1) 33%,
		    rgba(0,0,0,.1) 66%,
		    transparent 66%),
	    -moz-linear-gradient( top,
	        rgba(255, 255, 255, .25),
	        rgba(0,0,0,.2)),
	    -moz-linear-gradient( left, #09c, #f44);    
	    background-size: 35px 20px, 100% 100%, 100% 100%;
	    border-radius:3px;
	    /* Firefox doesn't support CSS3 keyframe animations on progress element. Hence, we did not include animate-stripes in this code block */
	}
	
	.progressStyle::-webkit-progress-value
	{
	    /* Gradient background with Stripes */
	    background-image:
	    -webkit-linear-gradient( 135deg,
	        transparent,
		    transparent 33%,
		    rgba(0,0,0,.1) 33%,
		    rgba(0,0,0,.1) 66%,
		    transparent 66%),
	    -webkit-linear-gradient( top,
	        rgba(255, 255, 255, .25),
	        rgba(0,0,0,.2)),
	    -webkit-linear-gradient( left, #09c, #ff0);
	}
	.fileupload, .fileupload-preview.thumbnail, .fileupload-new .thumbnail, .fileupload-new .thumbnail img, .fileupload-preview.thumbnail img{
		border:inherit !important;
	}
</style>

<div class="row headerEntity bg-light">
	<?php if($type != "pixels" || !empty($viewer)) { ?>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 padding-10 center">
			<?php   
				if(@$entity["profilMediumImageUrl"] && !empty($entity["profilMediumImageUrl"]))
					$images=array("profil"=> array($entity["profilMediumImageUrl"]));
				else 
					$images="";	
				$this->renderPartial('../pod/fileupload', array(  "itemId" => (string) $entity["_id"],
																  "type" => $type,
																  "resize" => false,
																  "contentId" => Document::IMG_PROFIL,
																  "show" => true,
																  "editMode" => $edit,
																  "image" => $images,
																  "openEdition" => $openEdition)); 
			//	$profilThumbImageUrl = Element::getImgProfil(@$entity, "profilMediumImageUrl", $this->module->assetsUrl);
			?>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-8">

			<div class="col-lg-12 col-md-12 col-sm-12 no-padding">
				<div class="col-md-12 no-padding margin-top-15">
					<?php if($type == Organization::COLLECTION || $type == Event::COLLECTION){ ?>
						<h2 class="text-left no-margin <?php if (!@$entity["type"] && !empty($entity["type"])) echo "hide" ?>" style="font-weight:100; font-size:19px;">
								<i class="fa fa-angle-right"></i> 
								<label id="typeHeader" class="text-dark">
									<?php echo Yii::t(Element::getCommonByCollection($type), $entity["type"], null, Yii::app()->controller->module->id); ?>
								</label>
						</h2>
					<?php } ?>
					<span class="lbl-entity-name">
						<i class="fa fa-<?php echo Element::getFaIcon($type); ?>">
						</i> <label id="nameHeader" class="">
								<?php echo @$entity["name"]; ?>
							</label>
					</span>
					<?php if($type==Event::COLLECTION && !empty($entity["parentId"])) {
						$parentEvent = Event::getSimpleEventById($entity["parentId"]);
						echo Yii::t("event","Part of Event",null,Yii::app()->controller->module->id).' : <a href="#'.Event::COLLECTION.'.detail.id.'.$entity["parentId"].'" class="lbh">'.$parentEvent["name"]."</a>";
					}
					?>
				</div>
				<div id="addressHeader" class="col-md-12 no-padding no-padding margin-bottom-10">
					<span class="lbl-entity-locality text-red">
						<i class="fa fa-globe"></i>
						<label class="text-red" id="localityHeader"><?php echo @$entity["address"]["addressLocality"] ; ?>,</label>
						<label class="text-red" id="pcHeader"><?php echo @$entity["address"]["postalCode"] ; ?>,</label> 
						<label class="text-red" id="countryHeader"><?php echo @$entity["address"]["addressCountry"] ; ?></label> 	
					</span>
				</div>
				<?php if($type==Person::COLLECTION && Yii::app()->session["userId"] == (string) $entity["_id"]) { ?>
					<div id="divCommunecterMoi" class="col-md-12 no-padding no-padding margin-bottom-10">
						<a href="javascript:;" class="cobtnHeader hidden btn bg-red">Communectez-moi</a> 
						<a href="javascript:;" class="whycobtnHeader hidden btn btn-default explainLink" data-id="explainCommunectMe" >Pourquoi ?</a>
					</div>
				<?php } ?>
			</div>
			<?php if($type == Project::COLLECTION){ ?>
			<div class="col-md-12 text-dark no-padding" >
				<?php if(isset($entity["properties"]["avancement"])){ 
					//idea => concept => Started => development => testing => mature
					if($entity["properties"]["avancement"]=="idea")
						$val=5;
					else if($entity["properties"]["avancement"]=="concept")
						$val=20;
					else if ($entity["properties"]["avancement"]== "started")
						$val=40;
					else if ($entity["properties"]["avancement"] == "development")
						$val=60;
					else if ($entity["properties"]["avancement"] == "testing")
						$val=80;
					else 
						$val=100;
					echo "<label id='labelProgressStyle'>".Yii::t("project",$entity["properties"]["avancement"],null,Yii::app()->controller->module->id)."</label>";
				}  
				if(isset($entity["properties"]["avancement"])){ ?>
					<progress id="progressStyle" max="100" value="<?php echo $val;?>" class="progressStyle">
					</progress>
				<?php } else { ?>
					<progress id="progressStyle" max="100" value="0" class="progressStyle hide">
					</progress>
				<?php } ?>
			</div>
			<?php } ?>
			<div id="shortDescriptionHeader" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding hidden-xs">
				<?php echo (isset($entity["shortDescription"])) ? $entity["shortDescription"] : null; ?>
			</div>


		</div>
		
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 pull-right padding-10">
			<?php if(isset($entity["tags"]) || isset($entity["gamification"])){ ?>
				<div class="col-lg-12 col-md-12 col-sm-12 no-padding">
					<?php if ($type==Person::COLLECTION){ ?>
					<span class="tag label label-warning pull-right">
						<?php echo  @$entity["gamification"]['total'] ? 
									@$entity["gamification"]['total'] :
									"0"; 
						?> pts
					</span>
					<?php } ?>
					<div id="divTagsHeader">
						<?php if(isset($entity["tags"])){ ?>
							<?php 
								$i=0; 
								foreach($entity["tags"] as $tag){ 
									if($i<6) { 
										$i++;?>
										<div class="tag label label-danger pull-right" data-val="<?php echo  $tag; ?>">
											<i class="fa fa-tag"></i> <?php echo  $tag; ?>
										</div>
						<?php 		}
								} 
						} ?>
					</div>
				</div>
			<?php } 

			?>

			<div class="col-lg-12 col-md-12 col-sm-12 no-padding">
				<style type="text/css">
					.badgePH{ 
						cursor: pointer;
						display: inline-block;
						margin-top: 10px;
						/*margin-bottom: 10px;*/
					}
					/*.badgePH .fa-stack .main { font-size:2.2em;margin-left:10px;margin-top:20px}*/
					.badgePH .fa-stack .main { font-size:1.5em}
					.badgePH .fa-stack .mainTop { 
						/*margin-left:10px;*/
						text-shadow: 0px -1px #656565;;
						margin-top:-5px}
					.badgePH .fa-stack .fa-circle-o{ font-size:4em;}
					/* Tooltip container */
					.opendata .mainTop{
					    color: white;
					    font-size: 1em;
					    padding: 5px;
					}
					.opendata .main{
					    color: #00cc00;
					}
				</style>
				<?php 
				if(!empty($entity["badges"])){?>
					<?php if( Badge::checkBadgeInListBadges("opendata", $entity["badges"]) ){?>
						<div class="badgePH pull-right" data-title="OPENDATA">
							<span class="fa-stack tooltips opendata" style="maring-bottom:5px" data-toggle="tooltip" data-placement="bottom" title='<?php echo Yii::t("badge","opendata", null, Yii::app()->controller->module->id)?>'>
								<i class="fa fa-database main fa-stack-1x text-dark"></i>
								<i class="fa fa-share-alt  mainTop fa-stack-1x"></i>
							</span>
							<span class="text-dark inline" style="font-family:initial;font-size: 15px; line-height: 30px;"> 
								<?php echo Yii::t("common","Open data") ?>						
							</span>
						</div>
				<?php } 
				} ?>
			</div>

			<div class="col-lg-12 col-md-12 col-sm-12 no-padding">
				<h4 class="panel-title text-dark"> 
					<?php 
					if ($openEdition == true) { ?>
						<span class="pull-right tooltips" data-toggle="tooltip" data-placement="top" title="Tous les utilisateurs ont la possibilité de participer / modifier les informations." style="font-family:initial;font-size: 15px; line-height: 30px;"><i class="fa fa-creative-commons"></i> <?php echo Yii::t("common","Open edition") ?></span>
					<?php } ?>
				</h4>
			</div>

			
		</div>
	<?php }else{ ?>
		
	<?php } ?>

	<div class="modal fade" role="dialog" id="modal-confidentiality">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-cog"></i> Confidentialité de vos informations personnelles</h4>
	      </div>
	      <div class="modal-body">
	        <!-- <h3><i class="fa fa-cog"></i> Paramétrez la confidentialité de vos informations personnelles :</h3> -->
	        <div class="row">
	        	<div class="pull-left text-left padding-10" style="border: 1px solid rgba(128, 128, 128, 0.3); margin-left: 10px; margin-bottom: 20px;">
	        		<?php if ($type==Person::COLLECTION){ ?>
	        		<strong><i class="fa fa-group"></i> Public</strong> : visible pour tout le monde<br/>
	        		<strong><i class="fa fa-user-secret"></i> Privé</strong> : visible pour mes contacts seulement<br/>
	        		<strong><i class="fa fa-ban"></i> Masqué</strong> : visible pour personne<br/>
	        		<?php } ?>

	        		<strong><i class="fa fa-group"></i> Open Data</strong> : Vous proposez vos données en accès libre, afin de contribuer au bien commun.<br/>
	        		<?php if ($type!=Person::COLLECTION){ ?>
	        		<strong><i class="fa fa-group"></i> Open Edition</strong> : Tous les utilisateurs ont la possibilité de participer / modifier les informations.<br/>
	        		<?php } ?>
	        	</div>
		    </div>
		    <div class="row text-dark panel-btn-confidentiality">
		    	<?php if ($type==Person::COLLECTION){ ?>
	            <div class="col-sm-4 text-right padding-10 margin-top-10">
		        	<i class="fa fa-message"></i> <strong>Mon e-mail :</strong>
		        </div>
		        <div class="col-sm-8 text-left padding-10">
		        	<div class="btn-group btn-group-email inline-block">
		        		<button class="btn btn-default confidentialitySettings" type="email" value="public"><i class="fa fa-group"></i> Public</button>
		        		<button class="btn btn-default confidentialitySettings" type="email" value="private"><i class="fa fa-user-secret"></i> Privé</button>
		        		<button class="btn btn-default confidentialitySettings" type="email" value="hide"><i class="fa fa-ban"></i> Masqué</button>
		        	</div>
		        </div>
		        <div class="col-sm-4 text-right padding-10 margin-top-10">
		        	<i class="fa fa-message"></i> <strong>Mon adresse :</strong>
		        </div>
		        <div class="col-sm-8 text-left padding-10">
		        	<div class="btn-group btn-group-locality inline-block">
		        		<button class="btn btn-default confidentialitySettings" type="locality" value="public" selected><i class="fa fa-group"></i> Public</button>
		        		<button class="btn btn-default confidentialitySettings" type="locality" value="private"><i class="fa fa-user-secret"></i> Privé</button>
		        		<button class="btn btn-default confidentialitySettings" type="locality" value="hide"><i class="fa fa-ban"></i> Masqué</button>
		        	</div>
		        </div>
		        <div class="col-sm-4 text-right padding-10 margin-top-10">
		        	<i class="fa fa-message"></i> <strong>Mon téléphone :</strong>
		        </div>
		        <div class="col-sm-8 text-left padding-10">
		        	<div class="btn-group btn-group-phone inline-block">
		        		<button class="btn btn-default confidentialitySettings" type="phone" value="public"><i class="fa fa-group"></i> Public</button>
		        		<button class="btn btn-default confidentialitySettings" type="phone" value="private"><i class="fa fa-user-secret"></i> Privé</button>
		        		<button class="btn btn-default confidentialitySettings" type="phone" value="hide"><i class="fa fa-ban"></i> Masqué</button>
		        	</div>
		        </div>
		        <?php } ?>
		        <div class="col-sm-4 text-right padding-10 margin-top-10">
		        	<i class="fa fa-message"></i> <strong>Open Data :</strong>
		        </div>
		        <div class="col-sm-8 text-left padding-10">
		        	<div class="btn-group btn-group-isOpenData inline-block">
		        		<button class="btn btn-default confidentialitySettings" type="isOpenData" value="true"><i class="fa fa-group"></i> Oui</button>
		        		<button class="btn btn-default confidentialitySettings" type="isOpenData" value="false"><i class="fa fa-user-secret"></i> Non</button>
						<?php
							$url = Yii::app()->baseUrl.'/api/';
							if($type == Person::COLLECTION)
								$url .= Person::CONTROLLER;
							else if($type == Organization::COLLECTION)
								$url .= Organization::CONTROLLER;
							else if($type == Event::COLLECTION)
								$url .= Event::CONTROLLER;
							else if($type == Project::COLLECTION)
								$url .= Project::CONTROLLER;
						?>
						<a href="<?php echo $url.'/get/id/'.$entity['_id'] ;?>" data-toggle="tooltip" title='Visualiser la données' id="urlOpenData" class="urlOpenData" target="_blank"><i class="fa fa-eye"></i></a>
					</div>
		        </div>
		        <?php if($type != Person::COLLECTION){ ?>
		        <div class="col-sm-4 text-right padding-10 margin-top-10">
		        	<i class="fa fa-message"></i> <strong>Open Edition :</strong>
		        </div>
		        <div class="col-sm-8 text-left padding-10">
		        	<div class="btn-group btn-group-isOpenEdition inline-block">
		        		<button class="btn btn-default confidentialitySettings" type="isOpenEdition" value="true"><i class="fa fa-group"></i> Oui</button>
		        		<button class="btn btn-default confidentialitySettings" type="isOpenEdition" value="false"><i class="fa fa-user-secret"></i> Non</button>
					</div>
		        </div>
		        <?php } ?>
	        </div>
	      </div>
	      <script type="text/javascript">
			<?php
				//Params Checked
				$typePreferences = array("privateFields", "publicFields");
				$fieldPreferences["email"] = true;
				$fieldPreferences["locality"] = true;
				$fieldPreferences["phone"] = true;
				$typePreferencesBool = array("isOpenData", "isOpenEdition");

				//To checked private or public
				foreach($typePreferences as $typePref){
					foreach ($fieldPreferences as $field => $hidden) {
						if(isset($entity["preferences"][$typePref]) && in_array($field, $entity["preferences"][$typePref])){
							echo "$('.btn-group-$field > button[value=\'".str_replace("Fields", "", $typePref)."\']').addClass('active');";
							$fieldPreferences[$field] = false;
						}
					}
				}
				//To checked if there are hidden
				foreach ($fieldPreferences as $field => $hidden) {
					if($hidden) echo "$('.btn-group-$field > button[value=\'hide\']').addClass('active');";
				}
				foreach ($typePreferencesBool as $field => $typePrefB) {
					if(isset($entity["preferences"][$typePrefB]) && $entity["preferences"][$typePrefB] == true)
						echo "$('.btn-group-$typePrefB > button[value=\'true\']').addClass('active');";	
					else
						echo "$('.btn-group-$typePrefB > button[value=\'false\']').addClass('active');";
				}	
			?> 
	     </script>
	      <div class="modal-footer">
	        <button type="button" class="lbh btn btn-success btn-confidentialitySettings" data-dismiss="modal" aria-label="Close" data-hash="#element.detail.id.<?php echo $entity['_id'] ;?>">OK</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</div>
<?php 
Menu::element($entity,$type);
$this->renderPartial('../default/panels/toolbar');
if(!@$_GET["renderPartial"]){ 
?>
<div class="col-md-12 padding-15" id="pad-element-container">

<script type="text/javascript">
var elementLinks = <?php echo isset($entity["links"]) ? json_encode($entity["links"]) : "''"; ?>;
var contextType = <?php echo json_encode($type)?>;
var contextMap = [];
var element = <?php echo isset($entity) ? json_encode($entity) : "''"; ?>;

jQuery(document).ready(function() {
	setTimeout(function () {
		// Cette fonction s'exécutera dans 5 seconde (1000 millisecondes)
		$.ajax({
			url: baseUrl+"/"+moduleId+"/element/getalllinks/type/<?php echo $type ;?>/id/<?php echo (string)$entity["_id"] ?>",
			type: 'POST',
			data:{ "links" : elementLinks },
			async:false,
			dataType: "json",
			complete: function () {},
			success: function (obj){
				console.log("conntext/////");
				console.log(obj);
				Sig.restartMap();
				Sig.showMapElements(Sig.map, obj);	
				contextMap = obj;	
				$(".communityBtn").removeClass("hide");
			},
			error: function (error) {
				console.log("error findGeoposByInsee");
				callbackFindByInseeError(error);	
				$("#iconeChargement").hide();	
			}
		});	
	}, 1000);

	/*bindHeaderElement();
	activateEditableContextHeader();
	manageModeContextHeader();*/
	/*$(".btn-menu-element").click(function(){
		$(".btn-menu-element").removeClass("active");
		$(this).addClass("active");
	});*/

	if(element.address.addressLocality == ""){
		$(".cobtnHeader,.whycobtnHeader").removeClass("hidden");
		$("#addressHeader").addClass("hidden");
		$(".cobtnHeader").click(function () { 
				var url= document.URL;
				if(url.indexOf("#person.detail") != -1){
					$(".cobtn,.whycobtn,.cobtnHeader,.whycobtnHeader").hide();
					$('#editElementDetail').trigger('click');
					setTimeout( function () { 
						$('#address').trigger('click'); 
						}, 500);
					return false;
				}
				else
					showElementPad("detail.edit");
				
		});
	}

	

});

function showElementPad(type){
	var mapUrl = { 	"detail": 
						{ 
							"url"  : "element/detail/type/<?php echo $type ?>/id/<?php echo (string)$entity["_id"] ?>?", 
							//"hash" : "element.detail.type.<?php echo $type ?>.id.<?php echo (string)$entity["_id"] ?>",
							//"url"  : "<?php echo $controler ?>/detail/id/<?php echo (string)$entity["_id"] ?>?", 
							"hash" : "<?php echo $controler ?>.detail.id.<?php echo (string)$entity["_id"] ?>",
							"data" : null
						} ,
					"detail.edit": 
						{ 
							"url"  : "element/detail/type/<?php echo $type ?>/id/<?php echo (string)$entity["_id"] ?>?", 
							//"hash" : "element.detail.type.<?php echo $type ?>.id.<?php echo (string)$entity["_id"] ?>",
							"hash" : "<?php echo $controler ?>.detail.id.<?php echo (string)$entity["_id"] ?>",
							"data" : {"modeEdit":true}
						},
					"news": 
						{ 
							"url"  : "news/index/type/<?php echo $type ?>/id/<?php echo (string)$entity["_id"] ?>?isFirst=1&", 
							"hash" : "news.index.type.<?php echo $type ?>.id.<?php echo (string)$entity["_id"] ?>",
							"data" : null
						} ,
					"directory": 
						{ 
							"url"  : "element/directory/type/<?php echo $type ?>/id/<?php echo (string)$entity["_id"] ?>?tpl=directory2&", 
						 	//"hash" : "element.directory.type.<?php echo $type ?>.id.<?php echo (string)$entity["_id"] ?>",

						 	//"url"  : "<?php echo $controler ?>/directory/id/<?php echo (string)$entity["_id"] ?>?tpl=directory2&", 
						 	"hash" : "<?php echo $controler ?>.directory.id.<?php echo (string)$entity["_id"] ?>",
						  	"data" : {"links":contextMap, "element":element}
						} ,
					"gallery" :
						{ 
							"url"  : "gallery/index/type/<?php echo $type ?>/id/<?php echo (string)$entity["_id"] ?>?", 
							"hash" : "gallery.index.type.<?php echo $type ?>.id.<?php echo (string)$entity["_id"] ?>",
							"data" : null
						} ,
					"addcontributor" :
						{ 
							"url"  : "project/addcontributorsv/projectId/<?php echo (string)$entity["_id"] ?>?", 
							"hash" : "project.addcontributorsv.projectId.<?php echo (string)$entity["_id"] ?>",
							"data" : null
						} ,
					"addattendee" :
						{ 
							"url"  : "event/addattendeesv/eventId/<?php echo (string)$entity["_id"] ?>?", 
							"hash" : "#event.addattendeesv.eventId.<?php echo (string)$entity["_id"] ?>",
							"data" : null
						} ,
					"addmember" :
						{ 
							"url"  : "organization/addmember/id/<?php echo (string)$entity["_id"] ?>?", 
							"hash" : "#organization.addmember.id.<?php echo (string)$entity["_id"] ?>",
							"data" : null
						},
					"addtimesheet":
						{
							"url"  : "gantt/addtimesheetsv/id/<?php echo (string)$entity["_id"] ?>/type/<?php echo $type ?>?", 
							"hash" : "#gantt.addtimesheetsv.id.<?php echo (string)$entity["_id"] ?>.type.<?php echo $type ?>",
							"data" : null
						},
					"addchart":
						{
							"url"  : "project/addchartsv/id/<?php echo (string)$entity["_id"] ?>?", 
							"hash" : "#project.addchartsv.id.<?php echo (string)$entity["_id"] ?>",
							"data" : null

						}
					};
					

	var url  = mapUrl[type]["url"];
	var hash = mapUrl[type]["hash"];
	var data = mapUrl[type]["data"];

	$("#pad-element-container").hide(200);
	$.blockUI({
		message : "<h4 style='font-weight:300' class='text-dark padding-10'><i class='fa fa-spin fa-circle-o-notch'></i><br>Chargement en cours ...</span></h4>"
	});

	ajaxPost('#pad-element-container',baseUrl+'/'+moduleId+'/'+url+"renderPartial=true", 
			data,
			function(){ 
				//$(".btn-menu-element").removeClass("active");
				history.pushState(null, "New Title", "#" + hash);
				$("#pad-element-container").show(200);
				bindLBHLinks();
				$.unblockUI();
			},"html");
}

</script>
<?php } ?>
