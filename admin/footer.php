</div>

			<!-- end:: Body -->

			<!-- begin::Footer -->
			<footer class="m-grid__item		m-footer ">
				<div class="m-container m-container--fluid m-container--full-height m-page__container">
					<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
						<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
								<?php echo @$web_copy; ?>
							</span>
						</div>
						<div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
							<!-- <ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">About</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">Privacy</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">T&C</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">Purchase</span>
									</a>
								</li>
								<li class="m-nav__item m-nav__item">
									<a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
										<i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
									</a>
								</li>
							</ul> -->
						</div>
					</div>
				</div>
			</footer>

			<!-- end::Footer -->
		</div>

		<!-- end:: Page -->

		<!-- end::Quick Sidebar -->

		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>

		<!-- end::Scroll Top -->

		
		<!-- begin::Quick Nav -->

		<!--begin::Global Theme Bundle -->
		<!-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js" type="text/javascript"></script> -->
		<script src="assets/js/vendors.bundle.js" type="text/javascript"></script>
		<script src="assets/js/scripts.bundle.js" type="text/javascript"></script>
		<?php if($currentpage != 'Dashboard' ){ ?>
		<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>
		<script src="assets/js/bootstrap-datetimepicker.js" type="text/javascript"></script>
		<script src="assets/js/datatables.bundle.js" type="text/javascript"></script>
		<script src="assets/js/datatable.basic.js" type="text/javascript"></script>
		<script src="assets/js/bootstrap-markdown.js" type="text/javascript"></script>
		<!-- <script src="assets/js/javascript.js" type="text/javascript"></script> -->
		<script src="assets/js/toastr.js" type="text/javascript"></script>
		<script src="assets/js/select2.js" type="text/javascript"></script>
		<script src="assets/js/custom.js" type="text/javascript"></script>
		<!--end::Global Theme Bundle -->
		<script src="assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
		<script>
		  $(function () {
		    //bootstrap WYSIHTML5 - text editor
		    $('.textarea').wysihtml5({
		      toolbar:{
				    "font-styles": true, 
				    "emphasis": true, 
				    "lists": true,
				    "html": false,
				    "link": false, 
				    "image": false 
					}
				});
		  });
		</script>
		<?php } ?>
		<!--begin::Page Scripts -->
		<script src="assets/js/dashboard.js" type="text/javascript"></script>

		<script>
			
			
		 // $(document).ready(function(){
   //        $(document).bind("contextmenu",function(e){
   //         return false;
   //        });
   //       });
		</script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>