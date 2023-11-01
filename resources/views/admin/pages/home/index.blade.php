@extends('admin.layout.auth')
@section('title','dashboard')
@section('adminContent')

<div class="mobile-menu-overlay"></div>

<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="title pb-20">
            <h2 class="h3 mb-0">Hospital Overview</h2>
        </div>

        <div class="row pb-10">
            <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <div class="card-box height-100-p widget-style3">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">{{ $majors }}</div>
                            <div class="font-14 text-secondary weight-500">
                                Appointment
                            </div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon" data-color="#00eccf">
                                <i class="icon-copy dw dw-calendar1"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <div class="card-box height-100-p widget-style3">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">{{ $booking }}</div>
                            <div class="font-14 text-secondary weight-500">
                                Total Majors
                            </div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon" data-color="#ff5b5b">
                                <span class="icon-copy ti-heart"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <div class="card-box height-100-p widget-style3">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">{{ $doctors }}</div>
                            <div class="font-14 text-secondary weight-500">
                                Total Doctor
                            </div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon">
                                <i
                                    class="icon-copy fa fa-stethoscope"
                                    aria-hidden="true"
                                ></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <div class="card-box height-100-p widget-style3">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark">$3,800</div>
                            <div class="font-14 text-secondary weight-500">Earning</div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon" data-color="#09cc06">
                                <i class="icon-copy fa fa-money" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="card-box pb-10">
            <div class="h5 pd-20 mb-0">Recent Patient</div>
            <table class="data-table table nowrap">
                <thead>
                    <tr>
                        <th class="table-plus">Name</th>
                        <th>Gender</th>
                        <th>Weight</th>
                        <th>Assigned Doctor</th>
                        <th>Admit Date</th>
                        <th>Disease</th>
                        <th class="datatable-nosort">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table-plus">
                            <div class="name-avatar d-flex align-items-center">
                                <div class="avatar mr-2 flex-shrink-0">
                                    <img
                                        src="admin/vendors/images/photo4.jpg"
                                        class="border-radius-100 shadow"
                                        width="40"
                                        height="40"
                                        alt=""
                                    />
                                </div>
                                <div class="txt">
                                    <div class="weight-600">Jennifer O. Oster</div>
                                </div>
                            </div>
                        </td>
                        <td>Female</td>
                        <td>45 kg</td>
                        <td>Dr. Callie Reed</td>
                        <td>19 Oct 2020</td>
                        <td>
                            <span
                                class="badge badge-pill"
                                data-bgcolor="#e7ebf5"
                                data-color="#265ed7"
                                >Typhoid</span
                            >
                        </td>
                        <td>
                            <div class="table-actions">
                                <a href="#" data-color="#265ed7"
                                    ><i class="icon-copy dw dw-edit2"></i
                                ></a>
                                <a href="#" data-color="#e95959"
                                    ><i class="icon-copy dw dw-delete-3"></i
                                ></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-plus">
                            <div class="name-avatar d-flex align-items-center">
                                <div class="avatar mr-2 flex-shrink-0">
                                    <img
                                        src="admin/vendors/images/photo5.jpg"
                                        class="border-radius-100 shadow"
                                        width="40"
                                        height="40"
                                        alt=""
                                    />
                                </div>
                                <div class="txt">
                                    <div class="weight-600">Doris L. Larson</div>
                                </div>
                            </div>
                        </td>
                        <td>Male</td>
                        <td>76 kg</td>
                        <td>Dr. Ren Delan</td>
                        <td>22 Jul 2020</td>
                        <td>
                            <span
                                class="badge badge-pill"
                                data-bgcolor="#e7ebf5"
                                data-color="#265ed7"
                                >Dengue</span
                            >
                        </td>
                        <td>
                            <div class="table-actions">
                                <a href="#" data-color="#265ed7"
                                    ><i class="icon-copy dw dw-edit2"></i
                                ></a>
                                <a href="#" data-color="#e95959"
                                    ><i class="icon-copy dw dw-delete-3"></i
                                ></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-plus">
                            <div class="name-avatar d-flex align-items-center">
                                <div class="avatar mr-2 flex-shrink-0">
                                    <img
                                        src="admin/vendors/images/photo6.jpg"
                                        class="border-radius-100 shadow"
                                        width="40"
                                        height="40"
                                        alt=""
                                    />
                                </div>
                                <div class="txt">
                                    <div class="weight-600">Joseph Powell</div>
                                </div>
                            </div>
                        </td>
                        <td>Male</td>
                        <td>90 kg</td>
                        <td>Dr. Allen Hannagan</td>
                        <td>15 Nov 2020</td>
                        <td>
                            <span
                                class="badge badge-pill"
                                data-bgcolor="#e7ebf5"
                                data-color="#265ed7"
                                >Infection</span
                            >
                        </td>
                        <td>
                            <div class="table-actions">
                                <a href="#" data-color="#265ed7"
                                    ><i class="icon-copy dw dw-edit2"></i
                                ></a>
                                <a href="#" data-color="#e95959"
                                    ><i class="icon-copy dw dw-delete-3"></i
                                ></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-plus">
                            <div class="name-avatar d-flex align-items-center">
                                <div class="avatar mr-2 flex-shrink-0">
                                    <img
                                        src="admin/vendors/images/photo9.jpg"
                                        class="border-radius-100 shadow"
                                        width="40"
                                        height="40"
                                        alt=""
                                    />
                                </div>
                                <div class="txt">
                                    <div class="weight-600">Jake Springer</div>
                                </div>
                            </div>
                        </td>
                        <td>Female</td>
                        <td>45 kg</td>
                        <td>Dr. Garrett Kincy</td>
                        <td>08 Oct 2020</td>
                        <td>
                            <span
                                class="badge badge-pill"
                                data-bgcolor="#e7ebf5"
                                data-color="#265ed7"
                                >Covid 19</span
                            >
                        </td>
                        <td>
                            <div class="table-actions">
                                <a href="#" data-color="#265ed7"
                                    ><i class="icon-copy dw dw-edit2"></i
                                ></a>
                                <a href="#" data-color="#e95959"
                                    ><i class="icon-copy dw dw-delete-3"></i
                                ></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-plus">
                            <div class="name-avatar d-flex align-items-center">
                                <div class="avatar mr-2 flex-shrink-0">
                                    <img
                                        src="admin/vendors/images/photo1.jpg"
                                        class="border-radius-100 shadow"
                                        width="40"
                                        height="40"
                                        alt=""
                                    />
                                </div>
                                <div class="txt">
                                    <div class="weight-600">Paul Buckland</div>
                                </div>
                            </div>
                        </td>
                        <td>Male</td>
                        <td>76 kg</td>
                        <td>Dr. Maxwell Soltes</td>
                        <td>12 Dec 2020</td>
                        <td>
                            <span
                                class="badge badge-pill"
                                data-bgcolor="#e7ebf5"
                                data-color="#265ed7"
                                >Asthma</span
                            >
                        </td>
                        <td>
                            <div class="table-actions">
                                <a href="#" data-color="#265ed7"
                                    ><i class="icon-copy dw dw-edit2"></i
                                ></a>
                                <a href="#" data-color="#e95959"
                                    ><i class="icon-copy dw dw-delete-3"></i
                                ></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-plus">
                            <div class="name-avatar d-flex align-items-center">
                                <div class="avatar mr-2 flex-shrink-0">
                                    <img
                                        src="admin/vendors/images/photo2.jpg"
                                        class="border-radius-100 shadow"
                                        width="40"
                                        height="40"
                                        alt=""
                                    />
                                </div>
                                <div class="txt">
                                    <div class="weight-600">Neil Arnold</div>
                                </div>
                            </div>
                        </td>
                        <td>Male</td>
                        <td>60 kg</td>
                        <td>Dr. Sebastian Tandon</td>
                        <td>30 Oct 2020</td>
                        <td>
                            <span
                                class="badge badge-pill"
                                data-bgcolor="#e7ebf5"
                                data-color="#265ed7"
                                >Diabetes</span
                            >
                        </td>
                        <td>
                            <div class="table-actions">
                                <a href="#" data-color="#265ed7"
                                    ><i class="icon-copy dw dw-edit2"></i
                                ></a>
                                <a href="#" data-color="#e95959"
                                    ><i class="icon-copy dw dw-delete-3"></i
                                ></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-plus">
                            <div class="name-avatar d-flex align-items-center">
                                <div class="avatar mr-2 flex-shrink-0">
                                    <img
                                        src="admin/vendors/images/photo8.jpg"
                                        class="border-radius-100 shadow"
                                        width="40"
                                        height="40"
                                        alt=""
                                    />
                                </div>
                                <div class="txt">
                                    <div class="weight-600">Christian Dyer</div>
                                </div>
                            </div>
                        </td>
                        <td>Male</td>
                        <td>80 kg</td>
                        <td>Dr. Sebastian Tandon</td>
                        <td>15 Jun 2020</td>
                        <td>
                            <span
                                class="badge badge-pill"
                                data-bgcolor="#e7ebf5"
                                data-color="#265ed7"
                                >Diabetes</span
                            >
                        </td>
                        <td>
                            <div class="table-actions">
                                <a href="#" data-color="#265ed7"
                                    ><i class="icon-copy dw dw-edit2"></i
                                ></a>
                                <a href="#" data-color="#e95959"
                                    ><i class="icon-copy dw dw-delete-3"></i
                                ></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-plus">
                            <div class="name-avatar d-flex align-items-center">
                                <div class="avatar mr-2 flex-shrink-0">
                                    <img
                                        src="admin/vendors/images/photo1.jpg"
                                        class="border-radius-100 shadow"
                                        width="40"
                                        height="40"
                                        alt=""
                                    />
                                </div>
                                <div class="txt">
                                    <div class="weight-600">Doris L. Larson</div>
                                </div>
                            </div>
                        </td>
                        <td>Male</td>
                        <td>76 kg</td>
                        <td>Dr. Ren Delan</td>
                        <td>22 Jul 2020</td>
                        <td>
                            <span
                                class="badge badge-pill"
                                data-bgcolor="#e7ebf5"
                                data-color="#265ed7"
                                >Dengue</span
                            >
                        </td>
                        <td>
                            <div class="table-actions">
                                <a href="#" data-color="#265ed7"
                                    ><i class="icon-copy dw dw-edit2"></i
                                ></a>
                                <a href="#" data-color="#e95959"
                                    ><i class="icon-copy dw dw-delete-3"></i
                                ></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
@endsection



