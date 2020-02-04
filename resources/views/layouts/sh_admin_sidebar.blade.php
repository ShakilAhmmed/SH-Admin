<div class="page-container">
	<div class="page-content">
		<div class="sidebar sidebar-main">
						<div class="sidebar-content">

							<!-- User menu -->
							<div class="sidebar-user">
								<div class="category-content">
									<div class="media">
										<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
										<div class="media-body">
											<span class="media-heading text-semibold">{{Auth::user()->name}}</span>
											<div class="text-size-mini text-muted">
												<i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
											</div>
										</div>

										<div class="media-right media-middle">
											<ul class="icons-list">
												<li>
													<a href="#"><i class="icon-cog3"></i></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- /user menu -->


							<!-- Main navigation -->
							<div class="sidebar-category sidebar-category-visible">
								<div class="category-content no-padding">
									<ul class="navigation navigation-main navigation-accordion">

										<!-- Main -->
										<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
										<li class="active"><a href="index.html"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
										<li><router-link  to='/test'><i class="icon-home4"></i> <span>TEST</span></router-link></li>
										<!-- <li>
											<a href="#"><i class="icon-stack2"></i> <span>Page layouts</span></a>
											<ul>
												<li><a href="layout_navbar_fixed.html">Fixed navbar</a></li>
												<li><a href="layout_navbar_sidebar_fixed.html">Fixed navbar &amp; sidebar</a></li>
												<li><a href="layout_sidebar_fixed_native.html">Fixed sidebar native scroll</a></li>
												<li><a href="layout_navbar_hideable.html">Hideable navbar</a></li>
												<li><a href="layout_navbar_hideable_sidebar.html">Hideable &amp; fixed sidebar</a></li>
												<li><a href="layout_footer_fixed.html">Fixed footer</a></li>
												<li class="navigation-divider"></li>
												<li><a href="boxed_default.html">Boxed with default sidebar</a></li>
												<li><a href="boxed_mini.html">Boxed with mini sidebar</a></li>
												<li><a href="boxed_full.html">Boxed full width</a></li>
											</ul>
										</li> -->

										
										<!-- /main -->

										<!-- Forms -->
										<!-- <li class="navigation-header"><span>Forms</span> <i class="icon-menu" title="Forms"></i></li>
										<li>
											<a href="#"><i class="icon-pencil3"></i> <span>Form components</span></a>
											<ul>
												<li><a href="form_inputs_basic.html">Basic inputs</a></li>
												<li><a href="form_checkboxes_radios.html">Checkboxes &amp; radios</a></li>
												<li><a href="form_input_groups.html">Input groups</a></li>
												<li><a href="form_controls_extended.html">Extended controls</a></li>
												<li>
													<a href="#">Selects</a>
													<ul>
														<li><a href="form_select2.html">Select2 selects</a></li>
														<li><a href="form_multiselect.html">Bootstrap multiselect</a></li>
														<li><a href="form_select_box_it.html">SelectBoxIt selects</a></li>
														<li><a href="form_bootstrap_select.html">Bootstrap selects</a></li>
													</ul>
												</li>
												<li><a href="form_tag_inputs.html">Tag inputs</a></li>
												<li><a href="form_dual_listboxes.html">Dual Listboxes</a></li>
												<li><a href="form_editable.html">Editable forms</a></li>
												<li><a href="form_validation.html">Validation</a></li>
												<li><a href="form_inputs_grid.html">Inputs grid</a></li>
											</ul>
										</li> -->
										
										
										<!-- /forms -->
									</ul>
								</div>
							</div>
							<!-- /main navigation -->

						</div>
					</div>

