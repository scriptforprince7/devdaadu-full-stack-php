<?php
include('db/config.php');
// include('lock2.php');

$edit_id = $_GET['edit_rec'];
if (isset($_POST['launch'])) {

	$testimonials_name = $_POST['testimonials_name'];
	$testimonials_content = $_POST['testimonials_content'];
	$is_active = ($_POST['is_active'] != '' ? 1 : 2);
	$query = mysqli_query($conn, "update tbl_testimonials
    	                                             SET testimonials_name='$testimonials_name',
													 testimonials_content='$testimonials_content',
    	                                             is_active=$is_active where testimonials_id=$edit_id");

	if ($query) {
		header('Location:manage-testimonials.php');
	}
}
$details = mysqli_fetch_array(mysqli_query($conn, "select * from tbl_testimonials where testimonials_id=$edit_id"));
?>

<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../">
    <title>Metronic - the world's #1 selling Bootstrap Admin Theme Ecosystem for HTML, Vue, React, Angular &amp; Laravel
        by Keenthemes</title>
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="<?php echo BASE_URL; ?>/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="<?php echo BASE_URL; ?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo BASE_URL; ?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.2/tinymce.min.js"
        integrity="sha512-6JR4bbn8rCKvrkdoTJd/VFyXAN4CE9XMtgykPWgKiHjou56YDJxWsi90hAeMTYxNwUnKSQu9JPc3SQUg+aGCHw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-tablet-and-mobile-fixed aside-enabled">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <?php include 'includes/aside.php' ?>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <<?php include 'includes/header.php' ?> <!--end::Header-->
                    <!--begin::Content-->
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                        <!--begin::Post-->
                        <div class="post d-flex flex-column-fluid" id="kt_post">
                            <!--begin::Container-->
                            <div id="kt_content_container" class="container-xxl">
                                <!--begin::Layout-->
                                <div class="d-flex flex-column flex-lg-row">
                                    <!--begin::Content-->
                                    <div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
                                        <!--begin::Form-->
                                        <form class="form" enctype="multipart/form-data" method="post"
                                            id="kt_subscriptions_create_new">
                                            <!--begin::Customer-->
                                            <div class="card card-flush pt-3 mb-5 mb-lg-10">
                                                <div class="card card-flush pt-3 mb-5 mb-lg-10">

                                                    <div class="card-header">

                                                        <div class="card-title">
                                                            <h2 class="fw-bolder">Edit Testimonials</h2>
                                                        </div>

                                                    </div>
                                                    <div class="card-body pt-0">
                                                        <div class="d-flex flex-column mb-15 fv-row">
                                                            <div class="table-responsive">
                                                                <!--begin::Table-->
                                                                <table id="kt_create_new_custom_fields"
                                                                    class="table align-middle table-row-dashed fw-bold fs-6 gy-5">
                                                                    <!--begin::Table head-->
                                                                    <thead>
                                                                        <tr
                                                                            class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                                                            <th class="pt-0">Testimonial Name</th>
                                                                            <th class="pt-0">Testimonial Content</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <input type="text"
                                                                                    class="form-control form-control-solid"
                                                                                    name="testimonials_name"
                                                                                    value="<?= $details['testimonials_name'] ?>" />
                                                                            </td>
                                                                            <td>
                                                                                <input type="text"
                                                                                    class="form-control form-control-solid"
                                                                                    name="testimonials_content"
                                                                                    value="<?= $details['testimonials_content'] ?>" />
                                                                            </td>

                                                                        </tr>
                                                                    </tbody>
                                                                    <!--end::Table body-->
                                                                </table>




                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-stack mb-8">
                                                            <div class="me-5">
                                                                <label class="fs-6 fw-bold">Status</label>
                                                                <div class="fs-7 fw-bold text-muted">Active/Inactive
                                                                </div>
                                                            </div>
                                                            <!--end::Label-->
                                                            <!--begin::Switch-->
                                                            <label
                                                                class="form-check form-switch form-check-custom form-check-solid">
                                                                <input class="form-check-input" name="is_active"
                                                                    type="checkbox" value="1" checked="checked" />
                                                                <span
                                                                    class="form-check-label fw-bold text-muted">Active</span>
                                                            </label>
                                                            <!--end::Switch-->
                                                        </div>
                                                        <button type="submit" name="launch" style="width: 100%;"
                                                            id="kt_modal" class="btn text-center btn-primary">
                                                            <span class="indicator-label">Update Service</span>
                                                            </span>
                                                        </button>

                                                        <!--end::Option-->
                                                        <!--begin::Option-->

                                                        <!--end::Option-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Card-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Sidebar-->
                                    <div
                                        class="flex-column flex-lg-row-auto w-100 w-lg-250px w-xl-300px mb-10 order-1 order-lg-2">
                                        <!--begin::Card-->

                                        <!--end::Card-->
                                    </div>
                                    <!--end::Sidebar-->
                                </div>
                                <!--end::Layout-->
                                <!--begin::Modals-->
                                <!--begin::Modal - Users Search-->
                                <div class="modal fade" id="kt_modal_customer_search" tabindex="-1" aria-hidden="true">
                                    <!--begin::Modal dialog-->
                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                        <!--begin::Modal content-->
                                        <div class="modal-content">
                                            <!--begin::Modal header-->
                                            <div class="modal-header pb-0 border-0 justify-content-end">
                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                    data-bs-dismiss="modal">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                    <span class="svg-icon svg-icon-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                                                rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                                transform="rotate(45 7.41422 6)" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Close-->
                                            </div>
                                            <!--begin::Modal header-->
                                            <!--begin::Modal body-->
                                            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                                                <!--begin::Content-->
                                                <div class="text-center mb-12">
                                                    <h1 class="fw-bolder mb-3">Search Customers</h1>
                                                    <div class="text-gray-400 fw-bold fs-5">Add a customer to a
                                                        subscription</div>
                                                </div>
                                                <!--end::Content-->
                                                <!--begin::Search-->
                                                <div id="kt_modal_customer_search_handler"
                                                    data-kt-search-keypress="true" data-kt-search-min-length="2"
                                                    data-kt-search-enter="enter" data-kt-search-layout="inline">
                                                    <!--begin::Form-->
                                                    <form data-kt-search-element="form"
                                                        class="w-100 position-relative mb-5" autocomplete="off">
                                                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                                                        <input type="hidden" />
                                                        <!--end::Hidden input-->
                                                        <!--begin::Icon-->
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                                        <span
                                                            class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="17.0365" y="15.1223"
                                                                    width="8.15546" height="2" rx="1"
                                                                    transform="rotate(45 17.0365 15.1223)"
                                                                    fill="black" />
                                                                <path
                                                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                        <!--end::Icon-->
                                                        <!--begin::Input-->
                                                        <input type="text"
                                                            class="form-control form-control-lg form-control-solid px-15"
                                                            name="search" value=""
                                                            placeholder="Search by username, full name or email..."
                                                            data-kt-search-element="input" />
                                                        <!--end::Input-->|
                                                        <!--begin::Spinner-->
                                                        <span
                                                            class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                                            data-kt-search-element="spinner">
                                                            <span
                                                                class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                                                        </span>
                                                        <!--end::Spinner-->
                                                        <!--begin::Reset-->
                                                        <span
                                                            class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                                                            data-kt-search-element="clear">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                            <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                                        height="2" rx="1"
                                                                        transform="rotate(-45 6 17.3137)"
                                                                        fill="black" />
                                                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                                        transform="rotate(45 7.41422 6)" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <!--end::Reset-->
                                                    </form>
                                                    <!--end::Form-->
                                                    <!--begin::Wrapper-->
                                                    <div class="py-5">
                                                        <!--begin::Suggestions-->
                                                        <div data-kt-search-element="suggestions">
                                                            <!--begin::Illustration-->
                                                            <div class="text-center px-4 pt-10">
                                                                <img src="assets/media/illustrations/sketchy-1/4.png"
                                                                    alt="" class="mw-100 mh-200px" />
                                                            </div>
                                                            <!--end::Illustration-->
                                                        </div>
                                                        <!--end::Suggestions-->
                                                        <!--begin::Results-->
                                                        <div data-kt-search-element="results" class="d-none">
                                                            <!--begin::Users-->
                                                            <div class="mh-300px scroll-y me-n5 pe-5">
                                                                <!--begin::User-->
                                                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1"
                                                                    data-kt-search-element="customer">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                                        <img alt="Pic"
                                                                            src="assets/media/avatars/150-1.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Info-->
                                                                    <div class="fw-bold">
                                                                        <span class="fs-6 text-gray-800 me-2">Emma
                                                                            Smith</span>
                                                                        <span class="badge badge-light">Art
                                                                            Director</span>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                                <!--end::User-->
                                                                <!--begin::User-->
                                                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1"
                                                                    data-kt-search-element="customer">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                                        <span
                                                                            class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Info-->
                                                                    <div class="fw-bold">
                                                                        <span class="fs-6 text-gray-800 me-2">Melody
                                                                            Macy</span>
                                                                        <span class="badge badge-light">Marketing
                                                                            Analytic</span>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                                <!--end::User-->
                                                                <!--begin::User-->
                                                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1"
                                                                    data-kt-search-element="customer">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                                        <img alt="Pic"
                                                                            src="assets/media/avatars/150-26.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Info-->
                                                                    <div class="fw-bold">
                                                                        <span class="fs-6 text-gray-800 me-2">Max
                                                                            Smith</span>
                                                                        <span class="badge badge-light">Software
                                                                            Enginer</span>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                                <!--end::User-->
                                                                <!--begin::User-->
                                                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1"
                                                                    data-kt-search-element="customer">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                                        <img alt="Pic"
                                                                            src="assets/media/avatars/150-4.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Info-->
                                                                    <div class="fw-bold">
                                                                        <span class="fs-6 text-gray-800 me-2">Sean
                                                                            Bean</span>
                                                                        <span class="badge badge-light">Web
                                                                            Developer</span>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                                <!--end::User-->
                                                                <!--begin::User-->
                                                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1"
                                                                    data-kt-search-element="customer">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                                        <img alt="Pic"
                                                                            src="assets/media/avatars/150-15.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Info-->
                                                                    <div class="fw-bold">
                                                                        <span class="fs-6 text-gray-800 me-2">Brian
                                                                            Cox</span>
                                                                        <span class="badge badge-light">UI/UX
                                                                            Designer</span>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                                <!--end::User-->
                                                                <!--begin::User-->
                                                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1"
                                                                    data-kt-search-element="customer">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                                        <span
                                                                            class="symbol-label bg-light-warning text-warning fw-bold">M</span>
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Info-->
                                                                    <div class="fw-bold">
                                                                        <span class="fs-6 text-gray-800 me-2">Mikaela
                                                                            Collins</span>
                                                                        <span class="badge badge-light">Head Of
                                                                            Marketing</span>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                                <!--end::User-->
                                                                <!--begin::User-->
                                                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1"
                                                                    data-kt-search-element="customer">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                                        <img alt="Pic"
                                                                            src="assets/media/avatars/150-8.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Info-->
                                                                    <div class="fw-bold">
                                                                        <span class="fs-6 text-gray-800 me-2">Francis
                                                                            Mitcham</span>
                                                                        <span class="badge badge-light">Software
                                                                            Arcitect</span>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                                <!--end::User-->
                                                                <!--begin::User-->
                                                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1"
                                                                    data-kt-search-element="customer">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                                        <span
                                                                            class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Info-->
                                                                    <div class="fw-bold">
                                                                        <span class="fs-6 text-gray-800 me-2">Olivia
                                                                            Wild</span>
                                                                        <span class="badge badge-light">System
                                                                            Admin</span>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                                <!--end::User-->
                                                                <!--begin::User-->
                                                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1"
                                                                    data-kt-search-element="customer">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                                        <span
                                                                            class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Info-->
                                                                    <div class="fw-bold">
                                                                        <span class="fs-6 text-gray-800 me-2">Neil
                                                                            Owen</span>
                                                                        <span class="badge badge-light">Account
                                                                            Manager</span>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                                <!--end::User-->
                                                                <!--begin::User-->
                                                                <div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1"
                                                                    data-kt-search-element="customer">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                                        <img alt="Pic"
                                                                            src="assets/media/avatars/150-6.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Info-->
                                                                    <div class="fw-bold">
                                                                        <span class="fs-6 text-gray-800 me-2">Dan
                                                                            Wilson</span>
                                                                        <span class="badge badge-light">Web
                                                                            Desinger</span>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                                <!--end::User-->
                                                            </div>
                                                            <!--end::Users-->
                                                        </div>
                                                        <!--end::Results-->
                                                        <!--begin::Empty-->
                                                        <div data-kt-search-element="empty" class="text-center d-none">
                                                            <!--begin::Message-->
                                                            <div class="fw-bold py-0 mb-10">
                                                                <div class="text-gray-600 fs-3 mb-2">No users found
                                                                </div>
                                                                <div class="text-gray-400 fs-6">Try to search by
                                                                    username, full name or email...</div>
                                                            </div>
                                                            <!--end::Message-->
                                                            <!--begin::Illustration-->
                                                            <div class="text-center px-4">
                                                                <img src="assets/media/illustrations/sketchy-1/9.png"
                                                                    alt="user" class="mw-100 mh-200px" />
                                                            </div>
                                                            <!--end::Illustration-->
                                                        </div>
                                                        <!--end::Empty-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Search-->
                                            </div>
                                            <!--end::Modal body-->
                                        </div>
                                        <!--end::Modal content-->
                                    </div>
                                    <!--end::Modal dialog-->
                                </div>
                                <!--end::Modal - Users Search-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Post-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Footer-->
                    <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                        <!--begin::Container-->
                        <div
                            class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                            <!--begin::Copyright-->
                            <div class="text-dark order-2 order-md-1">
                                <span class="text-muted fw-bold me-1">2024©</span>
                                <a href="" target="_blank" class="text-gray-800 text-hover-primary">Dev Daadu</a>
                            </div>
                            <!--end::Copyright-->
                            <!--begin::Menu-->
                            <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                                <li class="menu-item">
                                    <a href="logout.php" target="_blank" class="menu-link px-2">Logout</a>
                                </li>
                                <li class="menu-item">
                                    <a href="" target="_blank" class="menu-link px-2">Go To Website</a>
                                </li>
                            </ul>
                            <!--end::Menu-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--begin::Drawers-->

    <!--end::Main-->
    <script>
    var hostUrl = "assets/";
    </script>
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="<?php echo BASE_URL; ?>/assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?php echo BASE_URL; ?>/assets/js/scripts.bundle.js"></script>
    <script src="<?php echo BASE_URL; ?>/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="<?php echo BASE_URL; ?>/assets/js/custom/apps/subscriptions/add/advanced.js"></script>
    <script src="<?php echo BASE_URL; ?>/assets/js/custom/apps/subscriptions/add/customer-select.js"></script>
    <script src="<?php echo BASE_URL; ?>/assets/js/custom/apps/subscriptions/add/products.js"></script>
    <script src="<?php echo BASE_URL; ?>/assets/js/custom/modals/new-card.js"></script>
    <script src="<?php echo BASE_URL; ?>/assets/js/custom/widgets.js"></script>
    <script src="<?php echo BASE_URL; ?>/assets/js/custom/apps/chat/chat.js"></script>
    <script src="<?php echo BASE_URL; ?>/assets/js/custom/modals/create-app.js"></script>
    <script src="<?php echo BASE_URL; ?>/assets/js/custom/modals/upgrade-plan.js"></script>\
    <script>
    tinymce.init({
        selector: 'textarea#default'
    });
    </script>

</body>
<!--end::Body-->

</html>