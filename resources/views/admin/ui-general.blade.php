@extends('admin.layouts.master')
@section('title') @lang('translation.General')  @endsection
@section('content')
@component('admin.components.breadcrumb')
@slot('li_1') Components @endslot
@slot('title') General @endslot
@endcomponent

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Badges</h4>
                <p class="card-title-desc">Add any of the below mentioned modifier classes to change the appearance of a badge.</p>
            </div><!-- end card header -->

            <div class="card-body">
                <div>
                    <h5 class="font-size-14">Default</h5>
                    <div class="d-flex flex-wrap gap-2 mt-1">
                        <span class="badge bg-primary">Primary</span>
                        <span class="badge bg-success">Success</span>
                        <span class="badge bg-info">Info</span>
                        <span class="badge bg-warning">Warning</span>
                        <span class="badge bg-danger">Danger</span>
                        <span class="badge text-bg-dark">Dark</span>
                    </div>
                </div>

                <div class="mt-4">
                    <h5 class="font-size-14">Soft Badge</h5>
                    <div class="d-flex flex-wrap gap-2 mt-1">
                        <span class="badge bg-primary-subtle text-primary">Primary</span>
                        <span class="badge bg-success-subtle text-success ">Success</span>
                        <span class="badge bg-info-subtle text-info ">Info</span>
                        <span class="badge bg-warning-subtle text-warning ">Warning</span>
                        <span class="badge bg-danger-subtle text-danger ">Danger</span>
                        <span class="badge bg-dark-subtle text-dark">Dark</span>
                    </div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Pill Badges</h4>
                <p class="card-title-desc">Use the <code>.rounded-pill</code> modifier class to make
                    badges more rounded.
                </p>
            </div><!-- end card header -->

            <div class="card-body">
                <div>
                    <h5 class="font-size-14">Default</h5>
                    <div class="d-flex flex-wrap gap-2 mt-1">
                        <span class="badge rounded-pill bg-primary">Primary</span>
                        <span class="badge rounded-pill bg-success">Success</span>
                        <span class="badge rounded-pill bg-info">Info</span>
                        <span class="badge rounded-pill bg-warning">Warning</span>
                        <span class="badge rounded-pill bg-danger">Danger</span>
                        <span class="badge rounded-pill text-bg-dark">Dark</span>
                    </div>
                </div>

                <div class="mt-4">
                    <h5 class="font-size-14">Soft Badge</h5>
                    <div class="d-flex flex-wrap gap-2 mt-1">
                        <span class="badge rounded-pill bg-primary-subtle text-primary">Primary</span>
                        <span class="badge rounded-pill bg-success-subtle text-success ">Success</span>
                        <span class="badge rounded-pill bg-info-subtle text-info ">Info</span>
                        <span class="badge rounded-pill bg-warning-subtle text-warning ">Warning</span>
                        <span class="badge rounded-pill bg-danger-subtle text-danger ">Danger</span>
                        <span class="badge rounded-pill bg-dark-subtle text-dark">Dark</span>
                    </div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Badges in Buttons</h4>
                <p class="card-title-desc">Badges can be used as part of links or buttons to provide a counter.</p>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-primary">
                        Notifications <span class="badge bg-success ms-1">4</span>
                    </button>
                    <button type="button" class="btn btn-success">
                        Messages <span class="badge bg-danger ms-1">2</span>
                    </button>
                    <button type="button" class="btn btn-outline-secondary">
                        Draft <span class="badge bg-success ms-1">2</span>
                    </button>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Badges Position Examples</h4>
                <p class="card-title-desc">Example of Badges Position</p>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-3">
                    <button type="button" class="btn btn-primary position-relative">
                        Mails <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">+99 <span class="visually-hidden">unread messages</span></span>
                    </button>


                    <button type="button" class="btn btn-light position-relative">
                        Alerts <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-1"><span class="visually-hidden">unread messages</span></span>
                    </button>

                    <button type="button" class="btn btn-primary position-relative p-0 avatar-sm rounded">
                        <span class="avatar-title bg-transparent">
                            <i class="bx bxs-envelope"></i>
                        </span>
                        <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-1"><span class="visually-hidden">unread messages</span></span>
                    </button>

                    <button type="button" class="btn btn-light position-relative p-0 avatar-sm rounded-circle">
                        <span class="avatar-title bg-transparent text-reset">
                            <i class="bx bxs-bell"></i>
                        </span>
                    </button>

                    <button type="button" class="btn btn-light position-relative p-0 avatar-sm rounded-circle">
                        <span class="avatar-title bg-transparent text-reset">
                            <i class="bx bx-menu"></i>
                        </span>
                        <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-success p-1"><span class="visually-hidden">unread messages</span></span>
                    </button>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Popovers</h4>
                <p class="card-title-desc">Four options are available: top, right, bottom, and left aligned. Directions are mirrored when using Bootstrap in RTL.</p>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">

                    <button type="button" class="btn btn-secondary waves-effect" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                        Popover on top
                    </button>

                    <button type="button" class="btn btn-secondary waves-effect" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                        Popover on right
                    </button>

                    <button type="button" class="btn btn-secondary waves-effect" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                        Popover on bottom
                    </button>

                    <button type="button" class="btn btn-secondary waves-effect" data-bs-toggle="popover" data-bs-placement="left" title="Popover Title" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                        Popover on left
                    </button>

                    <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="popover" data-bs-trigger="focus" title="Dismissible popover" data-bs-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</button>
                </div>

            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tooltips</h4>
                <p class="card-title-desc">Hover over the links below to see tooltips:</p>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                        Tooltip on top
                    </button>

                    <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">
                        Tooltip on right
                    </button>

                    <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                        Tooltip on bottom
                    </button>

                    <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">
                        Tooltip on left
                    </button>

                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Pagination Default Example</h4>
                <p class="card-title-desc">Pagination links indicate a series of related content exists across multiple pages.</p>
            </div><!-- end card header -->

            <div class="card-body">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>

                <nav aria-label="Page navigation example">
                    <ul class="pagination mb-0">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <i class="mdi mdi-chevron-left"></i>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <i class="mdi mdi-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="font-size-14">Pagination Disabled and Active</h5>
                <p class="card-title-desc">Pagination links are customizable for
                    different circumstances. Use <code>.disabled</code> for links that appear
                    un-clickable and <code>.active</code> to
                    indicate the current page.</p>
            </div><!-- end card header -->

            <div class="card-body">
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>

                <nav aria-label="...">
                    <ul class="pagination mb-0">
                        <li class="page-item disabled">
                            <span class="page-link"><i class="mdi mdi-chevron-left"></i></span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                            <span class="page-link">
                                2
                                <span class="sr-only">(current)</span>
                            </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="mdi mdi-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->


<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="font-size-14">Pagination Sizing</h5>
                <p class="card-title-desc">Fancy larger or smaller pagination? Add <code>.pagination-lg</code> or <code>.pagination-sm</code> for additional
                    sizes.</p>
            </div><!-- end card header -->

            <div class="card-body">
                <nav aria-label="...">
                    <ul class="pagination pagination-lg">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>

                <nav aria-label="...">
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->


    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="font-size-14">Pagination Alignment</h5>
                <p class="card-title-desc">Change the alignment of pagination
                    components with flexbox utilities.</p>
            </div><!-- end card header -->

            <div class="card-body">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>

                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Border Spinner</h4>
                <p class="card-title-desc">Use the border spinners for a lightweight loading indicator.</p>
            </div><!-- end card header -->

            <div class="card-body">
                <div>
                    <div class="spinner-border text-primary m-1" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border text-secondary m-1" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border text-success m-1" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border text-info m-1" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border text-warning m-1" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border text-danger m-1" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border text-dark m-1" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>

            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Growing Spinner</h4>
                <p class="card-title-desc">If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!</p>
            </div><!-- end card header -->

            <div class="card-body">
                <div>
                    <div class="spinner-grow text-primary m-1" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow text-secondary m-1" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow text-success m-1" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow text-info m-1" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow text-warning m-1" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow text-danger m-1" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow text-dark m-1" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>

            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Focus ring <span class="float-end badge bg-danger-subtle text-danger  rounded-pill fw-light font-size-10">New</span></h4>
                <p class="card-title-desc">Click directly on the link below to see the focus ring in action.</p>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="hstack gap-2 flex-wrap">
                    <a href="#!" class="d-inline-flex focus-ring focus-ring-primary py-1 px-2 text-decoration-none border rounded-2">Primary focus</a>
                    <a href="#!" class="d-inline-flex focus-ring focus-ring-secondary py-1 px-2 text-decoration-none border rounded-2 text-secondary">Secondary focus</a>
                    <a href="#!" class="d-inline-flex focus-ring focus-ring-success py-1 px-2 text-decoration-none border rounded-2 text-success">Success focus</a>
                    <a href="#!" class="d-inline-flex focus-ring focus-ring-danger py-1 px-2 text-decoration-none border rounded-2 text-danger">Danger focus</a>
                    <a href="#!" class="d-inline-flex focus-ring focus-ring-warning py-1 px-2 text-decoration-none border rounded-2 text-warning">Warning focus</a>
                    <a href="#!" class="d-inline-flex focus-ring focus-ring-info py-1 px-2 text-decoration-none border rounded-2 text-info">Info focus</a>
                    <a href="#!" class="d-inline-flex focus-ring focus-ring-light py-1 px-2 text-decoration-none border rounded-2 text-light">Light focus</a>
                    <a href="#!" class="d-inline-flex focus-ring focus-ring-dark py-1 px-2 text-decoration-none border rounded-2 text-dark">Dark focus</a>
                </div>

            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Icon link <span class="float-end badge bg-danger-subtle text-danger  rounded-pill fw-light font-size-10">New</span></h4>
                <p class="card-title-desc">Take a regular add .icon-link, and insert an icon on either the left or right of your link text. The icon is automatically sized, placed, and colored.</p>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="hstack gap-4 flex-wrap">
                    <a class="icon-link font-size-15 text-decoration-underline" href="#!">
                        <i class="mdi mdi-archive-outline bi"></i>
                        Icon link
                    </a>
                    <a class="icon-link icon-link-hover font-size-15 text-decoration-underline" href="#!">
                        Icon link
                        <i class="mdi mdi-arrow-right align-middle bi mb-1"></i>
                    </a>

                    <a class="icon-link icon-link-hover font-size-15 text-decoration-underline" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="#">
                        <i class="mdi mdi-file-document-edit align-middle bi mb-1"></i>
                        Icon link
                    </a>
                </div>

                <div class="hstack gap-3 flex-wrap mt-3">
                    <a class="icon-link font-size-15 text-decoration-underline link-success" href="#!">
                        <i class="mdi mdi-archive-outline bi"></i>
                        Icon link
                    </a>
                    <a class="icon-link font-size-15 text-decoration-underline link-warning" href="#!">
                        <i class="mdi mdi-archive-outline bi"></i>
                        Icon link
                    </a>
                    <a class="icon-link font-size-15 text-decoration-underline link-secondary" href="#!">
                        <i class="mdi mdi-archive-outline bi"></i>
                        Icon link
                    </a>
                    <a class="icon-link font-size-15 text-decoration-underline link-danger" href="#!">
                        <i class="mdi mdi-archive-outline bi"></i>
                        Icon link
                    </a>
                    <a class="icon-link font-size-15 text-decoration-underline link-info" href="#!">
                        <i class="mdi mdi-archive-outline bi"></i>
                        Icon link
                    </a>
                    <a class="icon-link font-size-15 text-decoration-underline link-dark" href="#!">
                        <i class="mdi mdi-archive-outline bi"></i>
                        Icon link
                    </a>
                    <a class="icon-link font-size-15 text-decoration-underline link-light" href="#!">
                        <i class="mdi mdi-archive-outline bi"></i>
                        Icon link
                    </a>
                </div>

            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div>

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Close Button</h4>
                <p class="card-title-desc">Provide an option to dismiss or close a component with <code>.btn-close</code>. Default styling is limited, but highly customizable. Modify the Sass variables to replace the default <code>background-image</code>. <strong>Be sure to include text for screen readers</strong>, as we’ve done with <code>aria-label</code>.</p>
            </div><!-- end card header -->

            <div class="card-body">
                <button type="button" class="btn-close" aria-label="Close"></button>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Disable Close Button</h4>
                <p class="card-title-desc">Disabled close buttons change their <code>opacity</code>. We’ve also applied <code>pointer-events: none</code> and <code>user-select: none</code> to preventing hover and active states from triggering.</p>
            </div><!-- end card header -->

            <div class="card-body">
                <button type="button" class="btn-close" disabled aria-label="Close"></button>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card overflow-hidden">
            <div class="card-header">
                <h4 class="card-title">Close Button White Variant</h4>
                <p class="card-title-desc">Change the default <code>.btn-close</code> to be white with the <code>.btn-close-white</code> class. This class uses the <code>filter</code> property to invert the <code>background-image</code>.</p>
            </div><!-- end card header -->

            <div class="card-body">
                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                <button type="button" class="btn-close btn-close-white" disabled aria-label="Close"></button>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->
@endsection
@section('script')
<script src="{{ URL::asset('/admins/assets/js/app.min.js') }}"></script>
@endsection
