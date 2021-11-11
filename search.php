<?php
require('default.php');
require('controls/damo_filters.php');
?><form>
    <title><?php
            if (isset($_GET['search'])) {
                echo damo_validate($_GET['search']) . ' - Search Results';
            } else {
                echo 'Search - Damo Softwares';
            }
            ?></title>
    <div class="card mb-7">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="position-relative w-md-400px me-md-2"><span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6"><span class="material-icons-outlined fs-4 text-gray-700">search</span></span><input type="text" class="form-control form-control-solid ps-10" name="search" value="" placeholder="Search" /></div>
                <div class="d-flex align-items-center"><button type="submit" class="btn btn-primary me-5">Search</button><a id="kt_horizontal_search_advanced_link" class="btn btn-link" data-bs-toggle="collapse" href="#kt_advanced_search_form">Advanced Search</a></div>
            </div>
            <div class="collapse" id="kt_advanced_search_form">
                <div class="separator separator-dashed mt-9 mb-6"></div>
                <div class="row g-8 mb-8">
                    <div class="col-xxl-7"><label class="fs-6 form-label fw-bolder text-dark">Tags</label><input type="text" class="form-control form-control form-control-solid" name="tags" value="products, users, events" /></div>
                    <div class="col-xxl-5">
                        <div class="row g-8">
                            <div class="col-lg-6"><label class="fs-6 form-label fw-bolder text-dark">Team Type</label><select class="form-select form-select-solid" data-control="select2" data-placeholder="In Progress" data-hide-search="true">
                                    <option value=""></option>
                                    <option value="1">Not started</option>
                                    <option value="2" selected="selected">In Progress</option>
                                    <option value="3">Done</option>
                                </select></div>
                            <div class="col-lg-6"><label class="fs-6 form-label fw-bolder text-dark">Select Group</label>
                                <div class="nav-group nav-group-fluid"><label><input type="radio" class="btn-check" name="type" value="has" checked="checked" /><span class="btn btn-sm btn-color-muted btn-active btn-active-primary fw-bolder px-4">All</span></label><label><input type="radio" class="btn-check" name="type" value="users" /><span class="btn btn-sm btn-color-muted btn-active btn-active-primary fw-bolder px-4">Users</span></label><label><input type="radio" class="btn-check" name="type" value="orders" /><span class="btn btn-sm btn-color-muted btn-active btn-active-primary fw-bolder px-4">Orders</span></label></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-8">
                    <div class="col-xxl-7">
                        <div class="row g-8">
                            <div class="col-lg-4"><label class="fs-6 form-label fw-bolder text-dark">Min. Amount</label>
                                <div class="position-relative" data-kt-dialer="true" data-kt-dialer-min="1000" data-kt-dialer-max="50000" data-kt-dialer-step="1000" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2"><button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease"><span class="svg-icon svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                                <rect fill="#000000" x="6" y="11" width="12" height="2" rx="1" />
                                            </svg></span></button><input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="$50" /><button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase"><span class="svg-icon svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                                <path d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z" fill="#000000" />
                                            </svg></span></button></div>
                            </div>
                            <div class="col-lg-4"><label class="fs-6 form-label fw-bolder text-dark">Max. Amount</label>
                                <div class="position-relative" data-kt-dialer="true" data-kt-dialer-min="1000" data-kt-dialer-max="50000" data-kt-dialer-step="1000" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2"><button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease"><span class="svg-icon svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                                <rect fill="#000000" x="6" y="11" width="12" height="2" rx="1" />
                                            </svg></span></button><input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="$100" /><button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase"><span class="svg-icon svg-icon-1"><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                                <path d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z" fill="#000000" />
                                            </svg></span></button></div>
                            </div>
                            <div class="col-lg-4"><label class="fs-6 form-label fw-bolder text-dark">Team Size</label><input type="text" class="form-control form-control form-control-solid" name="city" /></div>
                        </div>
                    </div>
                    <div class="col-xxl-5">
                        <div class="row g-8">
                            <div class="col-lg-6"><label class="fs-6 form-label fw-bolder text-dark">Category</label><select class="form-select form-select-solid" data-control="select2" data-placeholder="In Progress" data-hide-search="true">
                                    <option value=""></option>
                                    <option value="1">Not started</option>
                                    <option value="2" selected="selected">Select</option>
                                    <option value="3">Done</option>
                                </select></div>
                            <div class="col-lg-6"><label class="fs-6 form-label fw-bolder text-dark">Status</label>
                                <div class="form-check form-switch form-check-custom form-check-solid mt-1"><input class="form-check-input" type="checkbox" value="" id="flexSwitchChecked" checked="checked" /><label class="form-check-label" for="flexSwitchChecked">Active</label></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form><?php
        if (isset($_GET['search']) && !empty($_GET['search'])) {
            $query = mysqli_real_escape_string($GLOBALS['con'], $_GET['search']);
            $uid = mysqli_real_escape_string($GLOBALS['con'], $_SESSION['myid']);
            if(!$db->query('SELECT count(*) FROM recentlysearched WHERE uid = ? AND keyword = ?', $some_value)->numRows()){
                $stmt = $GLOBALS['con']->prepare("INSERT INTO `recentlysearched` (`uid`, `keyword`) VALUES (?, ?) ON DUPLICATE KEY UPDATE uid=$uid, keyword='$query';");
                $stmt->bind_param('is', $uid, $query);
                $terms = explode(" ", $query);
                $i = 0;
                $query = "SELECT * FROM search WHERE ";
                foreach ($terms as $each) {
                    $i++;
                    if ($i == 1) $query .= "keyword LIKE '%$each%' OR title LIKE '%$each%' OR description LIKE '%$each%'";
                }
                $qry = mysqli_query($con, $query);
                $result = mysqli_num_rows($qry);
                if ($result > 0) {
                    $i = 0;
        ?><div class="d-flex flex-wrap flex-stack">
                <div class="d-flex flex-wrap align-items-center my-1 p-1 rounded-2 bg-primary d-shadow">
                    <h3 class="fw-bolder text-white me-5 my-1 ps-2"><?php echo mysqli_num_rows($qry); ?>| <span class="text-white fs-6">Results Found
                            <?php switch ($result) {
                                case ($result < 10): {
                                        echo '😀';
                                    }
                                    break;
                                case ($result > 10): {
                                        echo '😄';
                                    }
                                    break;
                                default: {
                                        echo '🙂';
                                    }
                            } ?></span></h3>
                </div>
                <div class="d-flex flex-wrap my-1">
                    <div class="d-flex my-0">
                        <select name="status" class="d-shadow form-select form-select-white form-select-sm w-150px me-5">
                            <option class="fs-4" value="1">Recently Updated</option>
                            <option class="fs-4" value="2">Last Month</option>
                            <option class="fs-4" value="3">Last Quarter</option>
                            <option class="fs-4" value="4">Last Year</option>
                        </select>
                        <select name="status" class="d-shadow form-select form-select-white form-select-sm w-100px">
                            <option class="fs-4" value="1">Excel</option>
                            <option class="fs-4" value="1">PDF</option>
                            <option class="fs-4" value="2">Print</option>
                        </select>
                    </div>
                </div>
            </div><?php while ($row = $qry->fetch_assoc()) {
                        $i++; ?><div class="card-body card bg-white my-4 cursor-pointer" onclick="window.location.href='<?php echo $row['link']; ?>'">
                    <div class="tab-content">
                        <div class="card-body p-0 tab-pane fade show active" role="tabpanel" aria-labelledby="kt_activity_today_tab">
                            <div class="timeline">
                                <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label rounded-circle" style="background-color: mediumspringgreen; font-size: large;"><?php echo $i; ?></span></span></div>
                                    </div>
                                    <div class="overflow-auto pe-3">
                                        <div class="fs-4 fw-bolder mb-2"><?php echo $row['title']; ?></div>
                                        <div class="d-flex align-items-center mt-1 fs-6 text-gray-600">
                                            <p><?php echo $row['description']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php }
                } else {
                    echo ('<center class="fs-6">No results found! <br><span style="font-size: xxx-large">🙄</span></center>');
                }
            }
        } else {
            require('pages\popularsearch.php');
            ?>
            <trending_tags>
                <script src="assets/js/damo_search.js" type="text/javascript"></script>
            </trending_tags>
            <?php
        }
?>
<?php require('footer.php'); ?>