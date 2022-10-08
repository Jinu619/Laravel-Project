@extends('layouts.app')
@section('content')
<div class="container alert-important" id="alert-sucess">
    @include('flash::message')
</div>
<!--begin::Toolbar-->
<div class="toolbar py-5 py-lg-15" id="kt_toolbar">

    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column me-3">
            <!--begin::Title-->
            <h1 class="d-flex text-white fw-bolder my-1 fs-3">Tasks</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-white opacity-75">
                    <a href="/dashboard" class="text-white text-hover-primary">Home</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-white opacity-75">Tasks</li>
                <!--end::Item-->

            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center py-3 py-md-1">

            <!--begin::Button-->
            <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target" onclick = "clearsavedvalues()" id="kt_toolbar_primary_button">Create</a>
            <!--end::Button-->
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->
<!--begin::Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Card-->

        

        <div class="row">

            <div class="col-lg-12">
                <!--begin::Tasks-->
                <div class="card card-flush h-lg-100">
                    
                    <div class="col-xl-12">
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
															<th class="p-0 pb-3 min-w-175px text-start">Project</th>
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
                                                        @foreach($projects as $prj)
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
																@if($prj->progress < 50) 
                                                                    <span class="badge badge-danger fs-base"> 
                                                                @elseif($prj->progress >= 50 && $prj->progress < 75 )
                                                                    <span class="badge badge-primary fs-base"> 
                                                                @else
                                                                    <span class="badge badge-success fs-base">
                                                                @endif 
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
																<a  onclick="viewproject(<?php echo $prj->id; ?>)" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
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
                </div>
                <!--end::Tasks-->
            </div>
            <!--end::Col-->
        </div>
        

    </div>
</div>
<!--end::Card-->
</div>
<!--end::Post-->
</div>
<!--end::Container-->
<!--begin::Footer-->

</div>
<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
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
                <form action="/projects" enctype="multipart/form-data" method="POST">
                    @csrf
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Create a new Project</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-muted fw-bold fs-5">Create Your new Project
                            <!-- <a href="#" class="fw-bolder link-primary">Project Guidelines</a>. -->
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Project Name</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="Enter Project Name" name="project_name" id="project_name" required />
                        <input type="hidden"  name="p_id" id="p_id"  />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-bold mb-2">Project logo</label>
                            <!--begin::Input-->
                            <div class="position-relative d-flex align-items-center">
                                
                                <input class="form-control form-control-solid ps-12" type="file" placeholder="Select a date" name="file" />            
                            </div>
                            <!--end::Input-->
                        </div>
                        <!--end::Col-->
                        
                    </div>



                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8">
                        <label class="fs-6 fw-bold mb-2 required">Progress</label>
                        <input type="number" class="form-control form-control-solid ps-12"  name="progress" id="progress" placeholder="Your project progress" value="0">
                    </div>
                    <!--end::Input group-->

                     <!--begin::Input group-->
                     <div class="d-flex flex-column mb-8">
                        <label class="fs-6 fw-bold mb-2 required">Status</label>
                        <select name="status" id="status" aria-label="Select status" data-control="select2" data-placeholder="Select status..." class="form-select form-select-solid form-select-lg fw-bold">
                            <option  value="1">In Progress</option>
                            <option  value="2">Completed</option>
                            <option  value="3">Hold</option>
                        </select>
                    </div>
                    <!--end::Input group-->
                    <div id="hidden_field">

                    </div>

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


<script type="text/javascript">
    function clearsavedvalues(){
        $('#project_name').val('');
        $('#progress').val('');
        $('#status').val('');
        $('#P_id').val('');
    }
    function changestatus() {
        var newstatus = $('#newstatus').val();
        var id = $('#task_id').val();
        if(newstatus == ''){
            swal.fire("Failed!", "Please select an option", "error");
            return false;
        }
        $.ajax({
            url: "/tasks/" + id,
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                id: id,
                newstatus: newstatus
            },
            success: function(response) {
                swal.fire("Good job!", response, "success");
                location.reload();
            },
            error: function(response) {
                alert(response);
            }
        });
    }
    function viewproject($data){
        var p_id = $data;
        $.ajax({
            url: "/project_view/" + p_id,
            type: "GET",
            data: {
                "_token": "{{ csrf_token() }}",
                p_id: p_id
            },
            success: function(response) {
                $('#project_name').val(response.project_name);
                $('#progress').val(response.progress);
                $('#status').val(response.status).change();
                $('#p_id').val(response.id);
                $('#kt_modal_new_target').modal('show');
                // swal.fire("Good job!", response, "success");
                // location.reload();
            },
            error: function(response) {
                alert(response);
            }
        });
        
    }
</script>


@endsection