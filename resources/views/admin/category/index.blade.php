@extends('admin/layouts/contentNavbarLayout')

@section('title', 'Categories')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/css/dropzone.css') }}">
@endsection

@section('content')
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">eCommerce /</span> Category List
    </h4>

    <div class="app-ecommerce-category">
        <div class="card">
            <div class="card-datatable table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                    <div class="card-header d-flex flex-wrap py-0">
                        <div class="me-5 ms-n2 pe-5">
                            <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search" class="form-control" placeholder="Search Category"
                                        aria-controls="DataTables_Table_0"></label></div>
                        </div>
                        <div class="d-flex justify-content-start justify-content-md-end align-items-baseline">
                            <div class="dt-action-buttons d-flex align-items-start align-items-md-center justify-content-sm-center mb-3 mb-sm-0 gap-3 pt-0">
                                <div class="dataTables_length mt-0 mt-md-3" id="DataTables_Table_0_length"><label><select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                            class="form-select">
                                            <option value="7">7</option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="50">50</option>
                                            <option value="70">70</option>
                                            <option value="100">100</option>
                                        </select></label></div>
                                <div class="dt-buttons btn-group flex-wrap"><button class="btn btn-secondary add-new btn-primary ms-2" tabindex="0" aria-controls="DataTables_Table_0"
                                        type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEcommerceCategoryList"><span><i class="bx bx-plus me-0 me-sm-1"></i>Add
                                            Category</span></button> </div>
                            </div>
                        </div>
                    </div>
                    <table class="datatables-category-list table border-top dataTable no-footer dtr-column" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info"
                        style="width: 1012px;">
                        <thead>
                            <tr>
                                <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label=""></th>
                                <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 18px;" data-col="1" aria-label=""><input
                                        type="checkbox" class="form-check-input"></th>
                                <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 472px;"
                                    aria-label="Categories: activate to sort column ascending" aria-sort="descending">Categories</th>
                                <th class="text-nowrap text-sm-end sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 131px;"
                                    aria-label="Total Products &amp;nbsp;: activate to sort column ascending">Total Products &nbsp;</th>
                                <th class="text-nowrap text-sm-end sorting_disabled" rowspan="1" colspan="1" style="width: 112px;" aria-label="Total Earning">Total Earning</th>
                                <th class="text-lg-center sorting_disabled" rowspan="1" colspan="1" style="width: 71px;" aria-label="Actions">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd">
                                <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                                <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                <td class="sorting_1">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-wrapper me-2 rounded-2 bg-label-secondary">
                                            <div class="avatar"><img src="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/ecommerce-images/product-16.png"
                                                    alt="Product-8" class="rounded-2"></div>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center"><span class="text-body text-wrap fw-medium">Travel</span><span
                                                class="text-muted text-truncate mb-0 d-none d-sm-block"><small>Choose from wide range of travel accessories from popular brands</small></span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-sm-end">4186</div>
                                </td>
                                <td>
                                    <div class="fw-medium text-sm-end">$7912.99</div>
                                </td>
                                <td class="" style="">
                                    <div class="d-flex align-items-sm-center justify-content-sm-center"><button class="btn btn-sm btn-icon delete-record me-2"><i
                                                class="bx bx-trash"></i></button><button class="btn btn-sm btn-icon"><i class="bx bx-edit"></i></button></div>
                                </td>
                            </tr>
                            <tr class="even">
                                <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                                <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                <td class="sorting_1">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-wrapper me-2 rounded-2 bg-label-secondary">
                                            <div class="avatar"><img src="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/ecommerce-images/product-16.png"
                                                    alt="Product-1" class="rounded-2"></div>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center"><span class="text-body text-wrap fw-medium">Smart Phone</span><span
                                                class="text-muted text-truncate mb-0 d-none d-sm-block"><small>Choose from wide range of smartphones from popular brands</small></span></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-sm-end">1947</div>
                                </td>
                                <td>
                                    <div class="fw-medium text-sm-end">$99129</div>
                                </td>
                                <td class="" style="">
                                    <div class="d-flex align-items-sm-center justify-content-sm-center"><button class="btn btn-sm btn-icon delete-record me-2"><i
                                                class="bx bx-trash"></i></button><button class="btn btn-sm btn-icon"><i class="bx bx-edit"></i></button></div>
                                </td>
                            </tr>
                            <tr class="odd">
                                <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                                <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                <td class="sorting_1">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-wrapper me-2 rounded-2 bg-label-secondary">
                                            <div class="avatar"><img src="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/ecommerce-images/product-16.png"
                                                    alt="Product-4" class="rounded-2"></div>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center"><span class="text-body text-wrap fw-medium">Shoes</span><span
                                                class="text-muted text-truncate mb-0 d-none d-sm-block"><small>Explore the latest shoes from Top brands</small></span></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-sm-end">4940</div>
                                </td>
                                <td>
                                    <div class="fw-medium text-sm-end">$3612.98</div>
                                </td>
                                <td class="" style="">
                                    <div class="d-flex align-items-sm-center justify-content-sm-center"><button class="btn btn-sm btn-icon delete-record me-2"><i
                                                class="bx bx-trash"></i></button><button class="btn btn-sm btn-icon"><i class="bx bx-edit"></i></button></div>
                                </td>
                            </tr>
                            <tr class="even">
                                <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                                <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                <td class="sorting_1">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-wrapper me-2 rounded-2 bg-label-secondary">
                                            <div class="avatar"><img src="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/ecommerce-images/product-16.png"
                                                    alt="Product-10" class="rounded-2"></div>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center"><span class="text-body text-wrap fw-medium">Jewellery</span><span
                                                class="text-muted text-truncate mb-0 d-none d-sm-block"><small>Choose from wide range of Jewellery from popular brands</small></span></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-sm-end">4186</div>
                                </td>
                                <td>
                                    <div class="fw-medium text-sm-end">$7912.99</div>
                                </td>
                                <td class="" style="">
                                    <div class="d-flex align-items-sm-center justify-content-sm-center"><button class="btn btn-sm btn-icon delete-record me-2"><i
                                                class="bx bx-trash"></i></button><button class="btn btn-sm btn-icon"><i class="bx bx-edit"></i></button></div>
                                </td>
                            </tr>
                            <tr class="odd">
                                <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                                <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                <td class="sorting_1">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-wrapper me-2 rounded-2 bg-label-secondary">
                                            <div class="avatar"><img src="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/ecommerce-images/product-16.png"
                                                    alt="Product-7" class="rounded-2"></div>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center"><span class="text-body text-wrap fw-medium">Home Decor</span><span
                                                class="text-muted text-truncate mb-0 d-none d-sm-block"><small>Choose from wide range of home decor from popular brands</small></span></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-sm-end">9184</div>
                                </td>
                                <td>
                                    <div class="fw-medium text-sm-end">$19120.45</div>
                                </td>
                                <td class="" style="">
                                    <div class="d-flex align-items-sm-center justify-content-sm-center"><button class="btn btn-sm btn-icon delete-record me-2"><i
                                                class="bx bx-trash"></i></button><button class="btn btn-sm btn-icon"><i class="bx bx-edit"></i></button></div>
                                </td>
                            </tr>
                            <tr class="even">
                                <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                                <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                <td class="sorting_1">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-wrapper me-2 rounded-2 bg-label-secondary">
                                            <div class="avatar"><img src="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/ecommerce-images/product-16.png"
                                                    alt="Product-11" class="rounded-2"></div>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center"><span class="text-body text-wrap fw-medium">Grocery</span><span
                                                class="text-muted text-truncate mb-0 d-none d-sm-block"><small>Get fresh groceries delivered at your doorstep</small></span></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-sm-end">4186</div>
                                </td>
                                <td>
                                    <div class="fw-medium text-sm-end">$7912.99</div>
                                </td>
                                <td class="" style="">
                                    <div class="d-flex align-items-sm-center justify-content-sm-center"><button class="btn btn-sm btn-icon delete-record me-2"><i
                                                class="bx bx-trash"></i></button><button class="btn btn-sm btn-icon"><i class="bx bx-edit"></i></button></div>
                                </td>
                            </tr>
                            <tr class="odd">
                                <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                                <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                                <td class="sorting_1">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-wrapper me-2 rounded-2 bg-label-secondary">
                                            <div class="avatar"><img src="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/ecommerce-images/product-16.png"
                                                    alt="Product-6" class="rounded-2"></div>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center"><span class="text-body text-wrap fw-medium">Games</span><span
                                                class="text-muted text-truncate mb-0 d-none d-sm-block"><small>Dive into world of Virtual Reality with latest games</small></span></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-sm-end">5764</div>
                                </td>
                                <td>
                                    <div class="fw-medium text-sm-end">$29129</div>
                                </td>
                                <td class="" style="">
                                    <div class="d-flex align-items-sm-center justify-content-sm-center"><button class="btn btn-sm btn-icon delete-record me-2"><i
                                                class="bx bx-trash"></i></button><button class="btn btn-sm btn-icon"><i class="bx bx-edit"></i></button></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row mx-2">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 7 of 14 entries</div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a aria-controls="DataTables_Table_0" aria-disabled="true"
                                            role="link" data-dt-idx="previous" tabindex="-1" class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" role="link" aria-current="page" data-dt-idx="0"
                                            tabindex="0" class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="1" tabindex="0"
                                            class="page-link">2</a></li>
                                    <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" role="link"
                                            data-dt-idx="next" tabindex="0" class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div style="width: 1%;"></div>
                </div>
            </div>
        </div>
        <!-- Offcanvas to add new customer -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceCategoryList" aria-labelledby="offcanvasEcommerceCategoryListLabel">
            <!-- Offcanvas Header -->
            <div class="offcanvas-header py-4">
                <h5 id="offcanvasEcommerceCategoryListLabel" class="offcanvas-title">Add Category</h5>
                <button type="button" class="btn-close bg-label-secondary text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body border-top">
                <form class="pt-0 fv-plugins-bootstrap5 fv-plugins-framework" id="eCommerceCategoryListForm" onsubmit="return true" novalidate="novalidate">
                    <div class="mb-3 fv-plugins-icon-container">
                        <label class="form-label" for="ecommerce-category-name">Name</label>
                        <input type="text" class="form-control" id="ecommerce-category-name" placeholder="Enter category name" name="categoryname" aria-label="category name">
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    <div class="mb-3 fv-plugins-icon-container">
                        <label class="form-label" for="ecommerce-category-description">Description</label>
                        <textarea id="ecommerce-category-description" class="form-control" placeholder="Enter description" aria-label="description" name="description" style="height: 100px;"></textarea>
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" aria-label="Default select example">
                            <option value="1" selected>Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="ecommerce-category-image">Image</label>
                        <div class="dropzone needsclick dz-clickable position-relative" id="dropzone-basic">
                            <div class="dz-message needsclick">
                                Drop files here or click to upload
                            </div>
                            <div class="img-preview" style="display: none;">
                                <img src="" alt="">
                            </div>
                            <input type="file" name="image" class="img-upload" id="image">
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Add</button>
                        <button type="reset" class="btn bg-label-danger" data-bs-dismiss="offcanvas">Discard</button>
                    </div>
                    <input type="hidden">
                </form>
            </div>
        </div>
    </div>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/category.js') }}"></script>
@endsection
