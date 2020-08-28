<?php /* Template Name: German Test*/ ?>

			
<?php get_header(); ?>
<script charset="UTF-8">
	var globalData = [];

	function get_data(){
		$.ajax({
    url: "<?php echo admin_url('admin-ajax.php'); ?>",
    data: {
      'action': 'get_german_questions'
    },
    type: 'POST', // POST
    success: function (data) {
	  globalData = data;
	  $('.btn-english-start').prop("disabled", true);
      $('.btn-english-start').removeAttr("disabled");
	  $('.btn-english-start').html('Start')
    }
  });
	}
	window.onload = get_data()

</script>
<script type="text/javascript" async charset="UTF-8" src="<?php bloginfo('template_directory'); ?>/assets/js/german_assesment.js"></script>
<style type="text/css">
			.story {
				height: auto;
			}

			.js-container {
				background: rgba(255, 255, 255, 0.75);
			}

			input[type=radio] {
				margin: -4px 0 0;
				margin-top: 1px\9;
				line-height: normal;
			}

			.js-radio-choice {
				margin-right: 10px !important;
			}

			button:hover,
			input[type="reset"]:hover,
			input[type="submit"]:hover,
			input[type="button"]:hover {
				background-color: #429393;
			}

			a {
				color: #429393;
				text-decoration: underline
			}

			.home-container {
				display: flex;
				align-items: center;
				justify-content: center;
				padding: 35px 0;
				/* height: 100% */
			}

			.home-sub-con {
				padding: 0 35px;
				width: 100%;
			}

			.btn-asses-submit,
			.js-choice-submit-button {
				width: 150px;
				border-radius: 25px;
			}

			.js-question-page {
				align-items: flex-start;
			}

			.js-question-text {
				display: flex;
				flex-direction: row;
				justify-content: center;
				/* direction: rtl; */
			}

			.btn-english-start {
				width: 100%
			}

			.js-nav-box {
				width: 100%;
			}

			.col-sm-6 {
				text-align: center;
			}

			p {
				margin: 0px;
			}

			h1,
			h2 {
				color: #429393;
				margin-top: 25px;
				line-height: 40px;
			}

			button {
				margin-top: 25px;
			}

			.js-article-text h5 {
				color: #444444
			}

			.js-article-text a {
				color: #429393 !important;
				text-decoration: underline !important
			}
			
			.lds-facebook {
				right: -5px;
				left: unset;
			}
		</style>

		<!-- test -->

		<div class="body_view english_view">
			<!-- PAGE CONTENT -->
			<div id="page-search" ng-controller="profiles_uni_controller">
				<div class="js-container english-main-con">

					<!--home page-->
					<div class="home-container">
					<div class="row home-sub-con">
							<div class="col-sm-6">
								<img class="img-main-image" src="https://lookinmena.com/wp-content/themes/lookinmena/assets/images/big_logo_test.png" alt="LookInMENA logo">
							</div>
							<div class="col-sm-6">
							<h1 class="home-header prime-color">German Language Assessment</h1>
								<h5 class="home-header-arabic-desc" style="direction: rtl;">المقدم من Look In MENA</h5>
								<p class="home-header-arabic-desc" style="direction: rtl;">
								</p>
								<button type="submit" class="btn-test btn-asses-submit btn-english-start" disabled>
									<span class="questions-loading">
										<div class="lds-facebook">
											<div></div>
											<div></div>
											<div></div>
										</div>
										Please wait while we setup the questions...
									</span>
								</button>
							</div>

						</div>
					</div>
					</div>
				</div>
			</div>
		</div>


	</div>
	<?php get_footer(); ?>