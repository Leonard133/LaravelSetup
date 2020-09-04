{{--

Use Case
<x-subheader title=" <title> " breadcrumb="<type>|<route>|<breadcrumb_name>"></x-subheader>

Example
<x-subheader title="Admin Create" breadcrumb="admin,admin|index,create|admin_list,admin_create"></x-subheader>

--}}

<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-1">
            <!--begin::Page Heading-->
            <div class="d-flex align-items-baseline flex-wrap mr-5">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold my-1 mr-5">{{ $title }}</h5>
                <!--end::Page Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    {!! $breadcrumb !!}
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page Heading-->
        </div>
        <!--end::Info-->
        <div class="d-flex align-items-center">
            {{ $slot }}
        </div>
    </div>
</div>
