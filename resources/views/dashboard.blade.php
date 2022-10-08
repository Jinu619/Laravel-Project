@extends('layouts.app')
@section('content')
<!--begin::Toolbar-->
<div class="toolbar py-5 py-lg-15" id="kt_toolbar">
						<!--begin::Container-->
						<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column flex-column align-items-start me-3">
								<!--begin::Title-->
								<h1 class="d-flex text-white fw-bolder my-1 fs-3">Projects Dashboard 
								<!--begin::Separator-->
								<!-- <span class="h-20px border-white opacity-75 border-start ms-3 mx-2"></span> -->
								<!--end::Separator-->
								<!--begin::Description-->
								<!-- <small class="text-white opacity-75 fs-7 fw-bold my-1 ms-1">You have 7 
								<span class="text-primary fw-bolder">Active Projects</span></small> -->
								<!--end::Description--></h1>
								<!--end::Title-->
							</div>
							<!--end::Page title-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Toolbar-->
					<!--begin::Container-->
					<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
						<!--begin::Post-->
						<div class="content flex-row-fluid" id="kt_content">
							<!--begin::Row-->
							<div class="row g-5 g-xl-10 mb-xl-10">
								<!--begin::Col-->
								<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
									<!--begin::Card widget 16-->
									<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-center h-md-50 mb-5 mb-xl-10" style="background-color: #080655;background-image:url('media/svg/shapes/wave-bg-dark.svg')">
										<!--begin::Header-->
										<div class="card-header pt-5">
											<!--begin::Title-->
											<div class="card-title d-flex flex-column">
												<!--begin::Amount-->
												<span class="fs-2hx fw-bolder text-white me-2 lh-1 ls-n2">{{$totaltask}}</span>
												<!--end::Amount-->
												<!--begin::Subtitle-->
												<span class="text-white opacity-50 pt-1 fw-bold fs-6">Total Tasks</span>
												<!--end::Subtitle-->
											</div>
											<!--end::Title-->
										</div>
										<!--end::Header-->
										<!--begin::Card body-->
										<div class="card-body d-flex align-items-end pt-0">
											<!--begin::Progress-->
											<div class="d-flex align-items-center flex-column mt-3 w-100">
												<div class="d-flex justify-content-between fw-bolder fs-6 text-white opacity-50 w-100 mt-auto mb-2">
													<span>{{$pendingtasks}} Pending</span>
													<span>{{$percentage}}%</span>
												</div>
												<div class="h-8px mx-3 w-100 bg-light-danger rounded">
													<div class="bg-danger rounded h-8px" role="progressbar" style="width:<?php echo $percentage."%;"?> aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<!--end::Progress-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card widget 16-->
									<!--begin::Card widget 7-->
									<div class="card card-flush h-md-50 mb-5 mb-xl-10">
										<!--begin::Header-->
										<div class="card-header pt-5">
											<!--begin::Title-->
											<div class="card-title d-flex flex-column">
												<!--begin::Amount-->
												<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">{{$notecount}}</span>
												<!--end::Amount-->
												<!--begin::Subtitle-->
												<span class="text-gray-400 pt-1 fw-bold fs-6">Notes</span>
												<!--end::Subtitle-->
											</div>
											<!--end::Title-->
										</div>
										<!--end::Header-->
										<!--begin::Card body-->
										<!-- <div class="card-body d-flex flex-column justify-content-end pe-0"> -->
											<!--begin::Title-->
											<!-- <span class="fs-6 fw-boldest text-gray-800 d-block mb-2">Today’s Heroes</span> -->
											<!--end::Title-->
											<!--begin::Users group-->
											<!-- <div class="symbol-group symbol-hover flex-nowrap">
												<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
													<span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
												</div>
												<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
													<img alt="Pic" src="../../assets/media/avatars/300-11.jpg" />
												</div>
												<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
													<span class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
												</div>
												<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
													<img alt="Pic" src="../../assets/media/avatars/300-2.jpg" />
												</div>
												<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
													<span class="symbol-label bg-danger text-inverse-danger fw-bolder">P</span>
												</div>
												<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
													<img alt="Pic" src="../../assets/media/avatars/300-12.jpg" />
												</div>
												<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
													<span class="symbol-label bg-dark text-gray-300 fs-8 fw-bolder">+42</span>
												</a>
											</div> -->
											<!--end::Users group-->
										<!-- </div> -->
										<!--end::Card body-->
									</div>
									<!--end::Card widget 7-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
									<!--begin::Card widget 4-->
									<div class="card card-flush h-md-50 mb-5 mb-xl-10">
										<!--begin::Header-->
										<div class="card-header pt-5">
											<!--begin::Title-->
											<div class="card-title d-flex flex-column">
												<!--begin::Info-->
												<div class="d-flex align-items-center">
													<!--begin::Currency-->
													<!-- <span class="fs-4 fw-bold text-gray-400 me-1 align-self-start">$</span> -->
													<!--end::Currency-->
													<!--begin::Amount-->
													<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">{{$mnthtask}}</span>
													<!--end::Amount-->
													<!--begin::Badge-->
													<span class="badge badge-success fs-base">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
													<span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
															<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->{{$perce}}%</span>
													<!--end::Badge-->
												</div>
												<!--end::Info-->
												<!--begin::Subtitle-->
												<span class="text-gray-400 pt-1 fw-bold fs-6">Tasks in {{$monthName}}</span>
												<!--end::Subtitle-->
											</div>
											<!--end::Title-->
										</div>
										<!--end::Header-->
										<!--begin::Card body-->
										<div class="card-body pt-2 pb-4 d-flex align-items-center">
											<!--begin::Chart-->
											<!-- <div class="d-flex flex-center me-5 pt-2">
												<div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div>
											</div> -->
											<!--end::Chart-->
											<!--begin::Labels-->
											<div class="d-flex flex-column content-justify-center w-100">
												<!--begin::Label-->
												<div class="d-flex fw-bold align-items-center">
													<!--begin::Bullet-->
													<div class="bullet w-8px h-3px rounded-2 bg-danger me-3"></div>
													<!--end::Bullet-->
													<!--begin::Label-->
													<div class="text-gray-500 flex-grow-1 me-4">Pending</div>
													<!--end::Label-->
													<!--begin::Stats-->
													<div class="fw-boldest text-gray-700 text-xxl-end">{{$mnthtaskpend}}</div>
													<!--end::Stats-->
												</div>
												<!--end::Label-->
												<!--begin::Label-->
												<div class="d-flex fw-bold align-items-center my-3">
													<!--begin::Bullet-->
													<div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
													<!--end::Bullet-->
													<!--begin::Label-->
													<div class="text-gray-500 flex-grow-1 me-4">Completed</div>
													<!--end::Label-->
													<!--begin::Stats-->
													<div class="fw-boldest text-gray-700 text-xxl-end">{{$mnthtaskcmplt}}</div>
													<!--end::Stats-->
												</div>
												<!--end::Label-->
												<!--begin::Label-->
												<div class="d-flex fw-bold align-items-center">
													<!--begin::Bullet-->
													<!-- <div class="bullet w-8px h-3px rounded-2 me-3" style="background-color: #E4E6EF"></div> -->
													<div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
													<!--end::Bullet-->
													<!--begin::Label-->
													<div class="text-gray-500 flex-grow-1 me-4">Expired</div>
													<!--end::Label-->
													<!--begin::Stats-->
													<div class="fw-boldest text-gray-700 text-xxl-end">{{$mnthtaskexp}}</div>
													<!--end::Stats-->
												</div>
												<!--end::Label-->
											</div>
											<!--end::Labels-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card widget 4-->
									<!--begin::List widget 25-->
									<div class="card card-flush h-lg-50">
										<!--begin::Header-->
										<div class="card-header pt-5">
											<!--begin::Title-->
											<h3 class="card-title text-gray-800">Highlights</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar d-none">
												<!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
												<div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
													<!--begin::Display range-->
													<div class="text-gray-600 fw-bolder">Loading date range...</div>
													<!--end::Display range-->
													<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
													<span class="svg-icon svg-icon-1 ms-2 me-0">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
															<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
															<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Daterangepicker-->
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-5">
											<!--begin::Item-->
											<div class="d-flex flex-stack">
												<!--begin::Section-->
												<div class="text-gray-700 fw-bold fs-6 me-2">Avg. Client Rating</div>
												<!--end::Section-->
												<!--begin::Statistics-->
												<div class="d-flex align-items-senter">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr094.svg-->
													<span class="svg-icon svg-icon-2 svg-icon-success me-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="16.9497" y="8.46448" width="13" height="2" rx="1" transform="rotate(135 16.9497 8.46448)" fill="currentColor" />
															<path d="M14.8284 9.97157L14.8284 15.8891C14.8284 16.4749 15.3033 16.9497 15.8891 16.9497C16.4749 16.9497 16.9497 16.4749 16.9497 15.8891L16.9497 8.05025C16.9497 7.49797 16.502 7.05025 15.9497 7.05025L8.11091 7.05025C7.52512 7.05025 7.05025 7.52513 7.05025 8.11091C7.05025 8.6967 7.52512 9.17157 8.11091 9.17157L14.0284 9.17157C14.4703 9.17157 14.8284 9.52975 14.8284 9.97157Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--begin::Number-->
													<span class="text-gray-900 fw-boldest fs-6">7.8</span>
													<!--end::Number-->
													<span class="text-gray-400 fw-bolder fs-6">/10</span>
												</div>
												<!--end::Statistics-->
											</div>
											<!--end::Item-->
											<!--begin::Separator-->
											<div class="separator separator-dashed my-3"></div>
											<!--end::Separator-->
											<!--begin::Item-->
											<div class="d-flex flex-stack">
												<!--begin::Section-->
												<div class="text-gray-700 fw-bold fs-6 me-2">Avg. Quotes</div>
												<!--end::Section-->
												<!--begin::Statistics-->
												<div class="d-flex align-items-senter">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr093.svg-->
													<span class="svg-icon svg-icon-2 svg-icon-danger me-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="7.05026" y="15.5355" width="13" height="2" rx="1" transform="rotate(-45 7.05026 15.5355)" fill="currentColor" />
															<path d="M9.17158 14.0284L9.17158 8.11091C9.17158 7.52513 8.6967 7.05025 8.11092 7.05025C7.52513 7.05025 7.05026 7.52512 7.05026 8.11091L7.05026 15.9497C7.05026 16.502 7.49797 16.9497 8.05026 16.9497L15.8891 16.9497C16.4749 16.9497 16.9498 16.4749 16.9498 15.8891C16.9498 15.3033 16.4749 14.8284 15.8891 14.8284L9.97158 14.8284C9.52975 14.8284 9.17158 14.4703 9.17158 14.0284Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--begin::Number-->
													<span class="text-gray-900 fw-boldest fs-6">730</span>
													<!--end::Number-->
												</div>
												<!--end::Statistics-->
											</div>
											<!--end::Item-->
											<!--begin::Separator-->
											<div class="separator separator-dashed my-3"></div>
											<!--end::Separator-->
											<!--begin::Item-->
											<div class="d-flex flex-stack">
												<!--begin::Section-->
												<div class="text-gray-700 fw-bold fs-6 me-2">Avg. Agent Earnings</div>
												<!--end::Section-->
												<!--begin::Statistics-->
												<div class="d-flex align-items-senter">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr094.svg-->
													<span class="svg-icon svg-icon-2 svg-icon-success me-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="16.9497" y="8.46448" width="13" height="2" rx="1" transform="rotate(135 16.9497 8.46448)" fill="currentColor" />
															<path d="M14.8284 9.97157L14.8284 15.8891C14.8284 16.4749 15.3033 16.9497 15.8891 16.9497C16.4749 16.9497 16.9497 16.4749 16.9497 15.8891L16.9497 8.05025C16.9497 7.49797 16.502 7.05025 15.9497 7.05025L8.11091 7.05025C7.52512 7.05025 7.05025 7.52513 7.05025 8.11091C7.05025 8.6967 7.52512 9.17157 8.11091 9.17157L14.0284 9.17157C14.4703 9.17157 14.8284 9.52975 14.8284 9.97157Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--begin::Number-->
													<span class="text-gray-900 fw-boldest fs-6">$2,309</span>
													<!--end::Number-->
												</div>
												<!--end::Statistics-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::LIst widget 25-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-6">
									<!--begin::List Widget 6-->
									<div class="card card-xl-stretch mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0">
											<h3 class="card-title fw-bolder text-dark">Notifications</h3>											
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-0">
											<!--begin::Item-->
											@foreach($lasttimetasks as $lt)
											
											<!--begin::Item-->
											<div class="d-flex align-items-center bg-light-danger rounded p-5 mb-7">
												<!--begin::Icon-->
												<span class="svg-icon svg-icon-danger me-5">
													<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
															<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
												<!--end::Icon-->
												<!--begin::Title-->
												<div class="flex-grow-1 me-2">
													<a href="/tasks" class="fw-bolder text-gray-800 text-hover-primary fs-6">{{$lt->taskname}}</a> <span class="badge badge-light-danger fs-8 fw-bolder m-5">Pending Task</span></h3>
													@if(isset($lt))
													<span class="text-muted fw-bold d-block">Due in {{now()->diffInDays($lt->todate)}} Days {{now()->diff($lt->todate)->h}} hour {{now()->diff($lt->todate)->i}} minitue</span>
												@endif</div>
												<!--end::Title-->
												<!--begin::Lable-->
												<!-- <span class="fw-bolder text-danger py-1">-27%</span> -->
												<!--end::Lable-->
											</div>
											<!--end::Item-->
											
											@endforeach
										</div>
										<!--end::Body-->
									</div>
									<!--end::List Widget 6-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
							<!--begin::Row-->
							<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
								<!--begin::Col-->
								<div class="col-xl-4">
									<!--begin::List Widget 3-->
									<div class="card card-xl-stretch mb-xl-3">
										<!--begin::Header-->
										<div class="card-header border-0">
											<h3 class="card-title fw-bolder text-dark">Todo</h3>
											<div class="card-toolbar">
												<!--begin::Actions-->
												<div class="d-flex align-items-center py-3 py-md-1">

													<!--begin::Button-->
													<a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target" id="kt_toolbar_primary_button">Create</a>
													<!--end::Button-->
												</div>
												<!--end::Actions-->
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										@foreach($newtasks as $nt)
										@if($nt->status != 0) <strike> @endif
											<div class="card-body pt-2">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-8">
												<!--begin::Bullet-->
												<span class="bullet bullet-vertical h-40px bg-success"></span>
												<!--end::Bullet-->
												<!--begin::Checkbox-->
												<div class="form-check form-check-custom form-check-solid mx-5">
													@if($nt->status == 0)
														<input class="form-check-input" type="checkbox" onclick="check(<?php echo $nt->id ?>);" id="checktodo" value="" />
													@else
													<input class="form-check-input" type="checkbox" onclick="check(<?php echo $nt->id ?>);" id="checktodo" value="" checked />
													@endif
												</div>
												<!--end::Checkbox-->
												<!--begin::Description-->
												<div class="flex-grow-1">
													<a href="/tasks" class="text-gray-800 text-hover-primary fw-bolder fs-6">{{$nt->title}}></a>
													<span class="text-muted fw-bold d-block">{{$nt->discription}} </span>
												</div>
												<!--end::Description-->
												<!-- <span class="badge badge-light-success fs-8 fw-bolder">New</span> -->
											</div>
										</div>
										@if($nt->status != 0) </strike> @endif
										<!--end::Body-->
										@endforeach
									</div>
									<!--end:List Widget 3-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-8">
									<!--begin::Tables widget 14-->
									<div class="card card-flush h-md-100">
										<!--begin::Header-->
										<div class="card-header pt-7">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bolder text-gray-800">Projects Stats</span>
												<!-- <span class="text-gray-400 mt-1 fw-bold fs-6">Updated 37 minutes ago</span> -->
											</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-6">
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
													<!--begin::Table head-->
													<thead>
														<tr class="fs-7 fw-bolder text-gray-400 border-bottom-0">
															<th class="p-0 pb-3 min-w-175px text-start">ITEM</th>
															<th class="p-0 pb-3 min-w-100px text-end"></th>
															<th class="p-0 pb-3 min-w-100px text-end">PROGRESS</th>
															<th class="p-0 pb-3 min-w-175px text-end pe-12">STATUS</th>
															<th class="p-0 pb-3 w-125px text-end pe-7"></th>
															<th class="p-0 pb-3 w-50px text-end">VIEW</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
														@foreach ($projects as $prj)
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="symbol symbol-50px me-3">
																		<img src="images/{{$prj->upload}}" class="" alt="" />
																	</div>
																	<div class="d-flex justify-content-start flex-column">
																		<a href="#" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">{{$prj->project_name}}</a>
																		<span class="text-gray-400 fw-bold d-block fs-7">{{auth()->user()->fullname}}</span>
																	</div>
																</div>
															</td>
															<td class="text-end pe-0">
																<span class="text-gray-600 fw-bolder fs-6"></span>
															</td>
															<td class="text-end pe-0">
																<!--begin::Label-->
																<span class="badge badge-success fs-base">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																<span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																		<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->{{$prj->progress}}%</span>
																<!--end::Label-->
															</td>
															<td class="text-end pe-12">
																@if($prj->status == 1) 
																    <span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
                                                                @elseif($prj->status == 2)
                                                                    <span class="badge py-3 px-4 fs-7 badge-light-success">Completed</span>
                                                                @else
                                                                    <span class="badge py-3 px-4 fs-7 badge-light-warning">On Hold</span>
                                                                @endif
															</td>
															<td class="text-end pe-0">
																<div id="kt_table_widget_14_chart_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
															</td>
															<td class="text-end">
																<a href="/projects" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																			<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</td>
														</tr>
														@endforeach
													</tbody>
													<!--end::Table body-->
												</table>
											</div>
											<!--end::Table-->
										</div>
										<!--end: Card Body-->
									</div>
									<!--end::Tables widget 14-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
							
						</div>
						<!--end::Post-->
					</div>
					<!--end::Container-->


<!-- satrt modal -->
<div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>





            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="kt_modal_new_target_form" action="/todos" enctype="multipart/form-data" method="POST">
                    @csrf
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Create a new todo</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-muted fw-bold fs-5">Add new todo
                            <!-- <a href="#" class="fw-bolder link-primary">Project Guidelines</a>. -->
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Note Title</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="Enter Note Title" name="title" required />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8">
                        <label class="fs-6 fw-bold mb-2 required">Note Details</label>
                        <textarea class="form-control form-control-solid" rows="3" name="discription" placeholder="Enter your notes"></textarea>
                    </div>
                    <!--end::Input group-->
                    
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Target-->
<script>
	$('#checktodo').change(function() {
    	// $('#textbox1').val($(this).is(':checked'));	
		alert("checked");
  });	
  function check(e){
	if( $('#checktodo').get(0).checked ){
    	var status = 1;
	}else{
		var status = 0;
	}
	var id = e;
	$.ajax({
            url: "/todos/" + id,
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                id: id,
                status: status
            },
            success: function(response) {
                swal.fire("Good job!", response, "success");                
            },
            error: function(response) {
                alert(response);
            }
        });
  }
</script>
@endsection