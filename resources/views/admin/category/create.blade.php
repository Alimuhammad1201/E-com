@extends('admin.partials.layouts')
@section('page-title')
Category Create
@endsection
@section('main-content')
<div class="page-body">

    <!-- New Product Add Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Category Information</h5>
                                </div>

                                <div class="theme-form theme-form-2 mega-form">
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-4 mb-0">Category Title</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" placeholder="Category Name">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-4 col-form-label form-label-title">Select Category
                                            Image</label>
                                        <div class="form-group col-sm-8">
                                            <input class="form-control" type="file" placeholder="Category Name">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <div class="col-sm-4 form-label-title">Show as Category Top</div>
                                        <div class="col-sm-8">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="yesCheckbox"
                                                    name="yes_checkbox" value="yes">
                                                <label class="form-check-label" for="yesCheckbox">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="noCheckbox"
                                                    name="no_checkbox" value="no">
                                                <label class="form-check-label" for="noCheckbox">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New Product Add End -->

    <!-- footer Start -->
    <div class="container-fluid">
        <footer class="footer">
            <div class="row">
                <div class="col-md-12 footer-copyright text-center">
                    <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- footer En -->
</div>

@endsection