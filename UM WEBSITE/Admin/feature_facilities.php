<?php
require('component/essentials.php');
require('component/links.php');
require('component/db_config.php');

adminlogin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel - Features & Facilities Queries</title>

    <style>
        #dashboard-menu {
            position: fixed;
            height: 100%;
            z-index: 11;
        }

        .custom-alert {
            position: fixed;
            top: 80px;
            right: 25px;
        }

        @media screen and (max-width:991px) {
            #dashboard-menu {
                height: auto;
                width: 100%;

            }

            #main-content {
                margin-top: 60px;

            }

        }
    </style>
</head>
<body class="bg-light">
    <?php require('component/header.php') ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">Features & Facilities Queries</h3>
                <!--feature  session  -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title mg-0">Features</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#feature-s">
                               <i class="bi bi-plus-square"></i>  Add
                            </button>
                        </div>
                        

                            <div class="table-responsive-md" style="height: 350px; overflow-y:scroll">
                                <table class="table table-hover border">
                                        <thead>
                                            <tr class="bg-dark text-light">
                                                   <th scope="col">#</th>
                                                   <th scope="col">Name</th>
                                                   
                                                   <th scope="col" width="20%">Action</th>


                                            </tr>
                                        </thead>
                                    <tbody id="features-data">
                                        
                                                

                                                
                        
                                    </tbody>
                                </table>
                            </div>

                    </div>
                  
                </div>  

                <!-- facilites session -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title mg-0">Facilities</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#facility-s">
                               <i class="bi bi-plus-square"></i>  Add
                            </button>
                        </div>
                        

                            <div class="table-responsive-md" style="height: 350px; overflow-y:scroll">
                                <table class="table table-hover border">
                                        <thead >
                                            <tr class="bg-dark text-light">
                                                   <th scope="col">#</th>
                                                   <th scope="col">Name</th>
                                                   <th scope="col">Icon</th>
                                                   <th scope="col" width="40%">Description</th>

                                                   
                                                   <th scope="col" width="20%">Action</th>


                                            </tr>
                                        </thead>
                                    <tbody id="facility-data">
                                        
                                                

                                                
                        
                                    </tbody>
                                </table>
                            </div>

                    </div>
                  
                </div> 


                




            </div>
        </div>
    </div>

<!-- feature model -->
    <div class="modal fade" id="feature-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="feature_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Feature</h5>
                                </div>
                                <div class="modal-body">



                                    <div class=" mb-3">
                                        <label class="form-label fw-bold">Name</label>
                                        <input type="text" name="feature_name" class="form-control  shadow-none" required>
                                    </div>
                                    

                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn text-secondary shadow-none " data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit"  class="btn custom-bg text-white shadow-none  ">SUBMIT</button>
                                </div>
                            </div>
                        </form>

                    </div>


    </div>

    <!-- facilites model -->
    <div class="modal fade" id="facility-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="facility_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Facilities</h5>
                                </div>
                                <div class="modal-body">



                                    <div class=" mb-3">
                                        <label class="form-label fw-bold">Name</label>
                                        <input type="text" name="facility_name" class="form-control  shadow-none" required>
                                    </div>
                                    <div class=" mb-3">
                                        <label class="form-label fw-bold">Icon</label>
                                        <input type="file" name="facility_icon" id="member_picture_inp" class="form-control  shadow-none" accept=".svg" required>
                                    </div>
                                    <div class="mb-3">
                                         <label class="form-label fw-bold">Description</label>
                                          <textarea name="facility_desc" class="form-control shadow-none" rows="3"></textarea>

                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn text-secondary shadow-none " data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit"  class="btn custom-bg text-white shadow-none  ">SUBMIT</button>
                                </div>
                            </div>
                        </form>

                    </div>


    </div>


<?php require('component/script.php') ?>
<script src="script/feature_facilities.js"></script>


</body>

</html>