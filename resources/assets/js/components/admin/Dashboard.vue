<template>
	<!-- <div> -->
		<div class="m-grid__item m-grid__item--fluid m-wrapper">
		    <!-- BEGIN: Subheader -->
		    <div class="m-subheader ">
		        <div class="d-flex align-items-center">
		            <div class="mr-auto">
		                <h3 class="m-subheader__title ">
		                    Dashboard
		                </h3>
		                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
		                    <li class="m-nav__item m-nav__item--home">
		                        <a href="admin/home" class="m-nav__link m-nav__link--icon">
		                            <i class="m-nav__link-icon la la-home"></i>
		                        </a>
		                    </li>
		                    <li class="m-nav__separator">
		                        -
		                    </li>
		                    <li class="m-nav__item">
		                        <a href="admin/home" class="m-nav__link">
		                            <span class="m-nav__link-text">
		                                Dashboard
		                            </span>
		                        </a>
		                    </li>
		                </ul>
		            </div>
		        </div>
		    </div>
		    <!-- END: Subheader -->
		    <div class="m-content">
		       <!--Begin::Section-->
		       <div class="row">
		        <div class="col-xl-8">
		            <div class="m-portlet m-portlet--mobile ">
		                <div class="m-portlet__head">
		                    <div class="m-portlet__head-caption">
		                        <div class="m-portlet__head-title">
		                            <h3 class="m-portlet__head-text">
		                                Exclusive Datatable Plugin
		                            </h3>
		                        </div>
		                    </div>
		                    <div class="m-portlet__head-tools">
		                        <ul class="m-portlet__nav">
		                            <li class="m-portlet__nav-item">
		                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
		                                    <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
		                                        <i class="la la-ellipsis-h m--font-brand"></i>
		                                    </a>
		                                    <div class="m-dropdown__wrapper">
		                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
		                                        <div class="m-dropdown__inner">
		                                            <div class="m-dropdown__body">
		                                                <div class="m-dropdown__content">
		                                                    <ul class="m-nav">
		                                                        <li class="m-nav__separator m-nav__separator--fit m--hide"></li>
		                                                        <li class="m-nav__item m--hide">
		                                                            <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
		                                                                Submit
		                                                            </a>
		                                                        </li>
		                                                    </ul>
		                                                </div>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                            </li>
		                        </ul>
		                    </div>
		                </div>
		                <div class="m-portlet__body">
		                    <!--begin: Datatable -->
		                    <div class="m_datatable" id="m_datatable_latest_orders"></div>
		                    <!--end: Datatable -->
		                </div>
		            </div>
		        </div>
		        <div class="col-xl-4">
		            <!--begin:: Widgets/Audit Log-->
		            <div class="m-portlet m-portlet--full-height ">
		                <div class="m-portlet__head">
		                    <div class="m-portlet__head-caption">
		                        <div class="m-portlet__head-title">
		                            <h3 class="m-portlet__head-text">
		                                Audit Log
		                            </h3>
		                        </div>
		                    </div>
		                    <div class="m-portlet__head-tools">
		                        <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
		                            <li class="nav-item m-tabs__item">
		                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">
		                                    Today
		                                </a>
		                            </li>
		                            <li class="nav-item m-tabs__item">
		                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">
		                                    Week
		                                </a>
		                            </li>
		                            <li class="nav-item m-tabs__item">
		                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab3_content" role="tab">
		                                    Month
		                                </a>
		                            </li>
		                        </ul>
		                    </div>
		                </div>
		                <div class="m-portlet__body">
		                    <div class="tab-content">
		                        <div class="tab-pane active" id="m_widget4_tab1_content">
		                            <div class="m-scrollable" data-scrollable="true" data-max-height="400" style="height: 400px; overflow: hidden;">
		                                <div class="m-list-timeline m-list-timeline--skin-light">
		                                    <div class="m-list-timeline__items">
		                                        <div class="m-list-timeline__item">
		                                            <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
		                                            <span class="m-list-timeline__text">
		                                                12 new users registered
		                                            </span>
		                                            <span class="m-list-timeline__time">
		                                                Just now
		                                            </span>
		                                        </div>
		                                        <div class="m-list-timeline__item">
		                                            <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
		                                            <span class="m-list-timeline__text">
		                                                System shutdown
		                                                <span class="m-badge m-badge--success m-badge--wide">
		                                                    pending
		                                                </span>
		                                            </span>
		                                            <span class="m-list-timeline__time">
		                                                14 mins
		                                            </span>
		                                        </div>
		                                        <div class="m-list-timeline__item">
		                                            <span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
		                                            <span class="m-list-timeline__text">
		                                                New invoice received
		                                            </span>
		                                            <span class="m-list-timeline__time">
		                                                20 mins
		                                            </span>
		                                        </div>
		                                        <div class="m-list-timeline__item">
		                                            <span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
		                                            <span class="m-list-timeline__text">
		                                                DB overloaded 80%
		                                                <span class="m-badge m-badge--info m-badge--wide">
		                                                    settled
		                                                </span>
		                                            </span>
		                                            <span class="m-list-timeline__time">
		                                                1 hr
		                                            </span>
		                                        </div>
		                                        <div class="m-list-timeline__item">
		                                            <span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
		                                            <span class="m-list-timeline__text">
		                                                System error -
		                                                <a href="#" class="m-link">
		                                                    Check
		                                                </a>
		                                            </span>
		                                            <span class="m-list-timeline__time">
		                                                2 hrs
		                                            </span>
		                                        </div>
		                                        <div class="m-list-timeline__item">
		                                            <span class="m-list-timeline__badge m-list-timeline__badge--brand"></span>
		                                            <span class="m-list-timeline__text">
		                                                Production server down
		                                            </span>
		                                            <span class="m-list-timeline__time">
		                                                3 hrs
		                                            </span>
		                                        </div>
		                                        <div class="m-list-timeline__item">
		                                            <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
		                                            <span class="m-list-timeline__text">
		                                                Production server up
		                                            </span>
		                                            <span class="m-list-timeline__time">
		                                                5 hrs
		                                            </span>
		                                        </div>
		                                        <div class="m-list-timeline__item">
		                                            <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
		                                            <span href="" class="m-list-timeline__text">
		                                                New order received
		                                                <span class="m-badge m-badge--danger m-badge--wide">
		                                                    urgent
		                                                </span>
		                                            </span>
		                                            <span class="m-list-timeline__time">
		                                                7 hrs
		                                            </span>
		                                        </div>
		                                        <div class="m-list-timeline__item">
		                                            <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
		                                            <span class="m-list-timeline__text">
		                                                12 new users registered
		                                            </span>
		                                            <span class="m-list-timeline__time">
		                                                Just now
		                                            </span>
		                                        </div>
		                                        <div class="m-list-timeline__item">
		                                            <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
		                                            <span class="m-list-timeline__text">
		                                                System shutdown
		                                                <span class="m-badge m-badge--success m-badge--wide">
		                                                    pending
		                                                </span>
		                                            </span>
		                                            <span class="m-list-timeline__time">
		                                                14 mins
		                                            </span>
		                                        </div>
		                                        <div class="m-list-timeline__item">
		                                            <span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
		                                            <span class="m-list-timeline__text">
		                                                New invoice received
		                                            </span>
		                                            <span class="m-list-timeline__time">
		                                                20 mins
		                                            </span>
		                                        </div>
		                                        <div class="m-list-timeline__item">
		                                            <span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
		                                            <span class="m-list-timeline__text">
		                                                DB overloaded 80%
		                                                <span class="m-badge m-badge--info m-badge--wide">
		                                                    settled
		                                                </span>
		                                            </span>
		                                            <span class="m-list-timeline__time">
		                                                1 hr
		                                            </span>
		                                        </div>
		                                        <div class="m-list-timeline__item">
		                                            <span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
		                                            <span class="m-list-timeline__text">
		                                                New invoice received
		                                            </span>
		                                            <span class="m-list-timeline__time">
		                                                20 mins
		                                            </span>
		                                        </div>
		                                        <div class="m-list-timeline__item">
		                                            <span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
		                                            <span class="m-list-timeline__text">
		                                                DB overloaded 80%
		                                                <span class="m-badge m-badge--info m-badge--wide">
		                                                    settled
		                                                </span>
		                                            </span>
		                                            <span class="m-list-timeline__time">
		                                                1 hr
		                                            </span>
		                                        </div>
		                                        <div class="m-list-timeline__item">
		                                            <span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
		                                            <span class="m-list-timeline__text">
		                                                System error -
		                                                <a href="#" class="m-link">
		                                                    Check
		                                                </a>
		                                            </span>
		                                            <span class="m-list-timeline__time">
		                                                2 hrs
		                                            </span>
		                                        </div>
		                                        <div class="m-list-timeline__item">
		                                            <span class="m-list-timeline__badge m-list-timeline__badge--brand"></span>
		                                            <span class="m-list-timeline__text">
		                                                Production server down
		                                            </span>
		                                            <span class="m-list-timeline__time">
		                                                3 hrs
		                                            </span>
		                                        </div>
		                                        <div class="m-list-timeline__item">
		                                            <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
		                                            <span class="m-list-timeline__text">
		                                                Production server up
		                                            </span>
		                                            <span class="m-list-timeline__time">
		                                                5 hrs
		                                            </span>
		                                        </div>
		                                        <div class="m-list-timeline__item">
		                                            <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
		                                            <span href="" class="m-list-timeline__text">
		                                                New order received
		                                                <span class="m-badge m-badge--danger m-badge--wide">
		                                                    urgent
		                                                </span>
		                                            </span>
		                                            <span class="m-list-timeline__time">
		                                                7 hrs
		                                            </span>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="tab-pane" id="m_widget4_tab2_content"></div>
		                        <div class="tab-pane" id="m_widget4_tab3_content"></div>
		                    </div>
		                </div>
		            </div>
		            <!--end:: Widgets/Audit Log-->
		        </div>
		    </div>
		    <!--End::Section-->   
		</div>
		</div>
	<!-- </div> -->
</template>

<script>
	export default {
		name: 'dashboard'
	}
</script>

<style>
	
</style>