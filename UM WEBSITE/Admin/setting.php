<?php
require('component/essentials.php');
require('component/links.php');

adminlogin();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel -Setting</title>

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
                <h3 class="mb-4">Settings</h3>

                <!-- General seeting session -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title mg-0">General Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                                <i class="bi bi-pencil-square"></i> Edit
                        </div>

                        <h6 class="card-subtitle mb-1 fw-bold ">Site title</h6>
                        <p class="card-text" id="site_title"> </p>
                        <h6 class="card-subtitle mb-1 fw-bold ">About us</h6>
                        <p class="card-text" id="site_about"></p>

                    </div>
                </div>
    
                <!-- !-- General seeting modal --> 

                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="general_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">General Settings</h5>
                                </div>
                                <div class="modal-body">



                                    <div class=" mb-3">
                                        <label class="form-label fw-bold">Site Title</label>
                                        <input type="text" name="site_title" id="site_title_inp" class="form-control  shadow-none" required>
                                    </div>
                                    <div class=" mb-3">
                                        <label class="form-label fw-bold">About us</label>
                                        <textarea name="site_about" id="site_about_inp" class="form-control shadow-none" rows="6" required></textarea>

                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="site_title.value=general_data.site_title,site_about.value=general_data.site_about" class="btn text-secondary shadow-none " data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit"  class="btn custom-bg text-white shadow-none  ">SUBMIT</button>
                                </div>
                            </div>
                        </form>

                    </div>


                </div>
                <!-- !-- contact details session --> 
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title mg-0">Contact Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contacts-s">
                                <i class="bi bi-pencil-square"></i> Edit
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                        <h6 class="card-subtitle mb-1 fw-bold ">Address</h6>
                                         <p class="card-text" id="address"> </p>
                                </div>
                                <div class="mb-4">
                                        <h6 class="card-subtitle mb-1 fw-bold ">Geogle Map</h6>
                                         <p class="card-text" id="gmap"> </p>
                                </div>
                                <div class="mb-4">
                                        <h6 class="card-subtitle mb-1 fw-bold ">Phone number</h6>
                                            <p class="card-text mb-1" >
                                                <i class="bi bi-telephone-fill"></i> 
                                                <span id="pn1"></span>
                                            </p>
                                            <p class="card-text" >
                                                <i class="bi bi-telephone-fill"></i> 
                                                <span id="pn2"></span>
                                            </p>
                                </div>

                                <div class="mb-4">
                                        <h6 class="card-subtitle mb-1 fw-bold ">E-mail</h6>
                                         <p class="card-text" id="email"> </p>
                                </div>

                            
                                 
                            </div>
                            <div class="col-lg-6">
                                    <div class="mb-4">
                                        <h6 class="card-subtitle mb-1 fw-bold ">Social Links</h6>
                                            <p class="card-text mb-2" >
                                                <i class="bi bi-facebook me-1"></i> 
                                                <span id="fb"></span>
                                            </p>
                                            <p class="card-text mb-2" >
                                                <i class="bi bi-instagram me-1"></i>    
                                                <span id="insta"></span>
                                            </p>
                                            <p class="card-text" >
                                                <i class="bi bi-twitter me-1"></i>    
                                                <span id="tweet"></span>
                                            </p>
                                    </div>
                                    <div class="mb-4">
                                        <h6 class="card-subtitle mb-1 fw-bold ">iFrame</h6>
                                            <iframe id="iframe" loading="lazy" class="border p-2 w-100"></iframe>
                                    </div>

                            </div>
                        </div>
                        
                        

                    </div>
                </div>
                <!-- contact session model -->
                <div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form id="contacts_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Contacts Settings</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid p-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                               <div class=" mb-3">
                                                  <label class="form-label fw-bold">Address</label>
                                                   <input type="text" name="Address" id="address_inp" class="form-control  shadow-none" required>
                                                </div>
                                                <div class=" mb-3">
                                                  <label class="form-label fw-bold">Geogle Map Link</label>
                                                   <input type="text" name="gmap" id="gmap_inp" class="form-control  shadow-none" required>
                                                </div>
                                                <div class=" mb-3">
                                                  <label class="form-label fw-bold">Phone Numbers</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" >
                                                          <i class="bi bi-telephone-fill"></i>
                                                        </span>
                                                      <input type="number" name="pn1" id="pn1_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" >
                                                         <i class="bi bi-telephone-fill"></i>
                                                        </span>
                                                      <input type="number" name="pn2" id="pn2_inp" class="form-control shadow-none">
                                                    </div>
                                                </div>
                                                <div class=" mb-3">
                                                  <label class="form-label fw-bold">Email</label>
                                                   <input type="email" name="email" id="email_inp" class="form-control  shadow-none" required>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class=" mb-3">
                                                  <label class="form-label fw-bold">Social Links</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" >
                                                        <i class="bi bi-facebook "></i> 
                                                        </span>
                                                      <input type="text" name="fb" id="fb_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" >
                                                        <i class="bi bi-instagram "></i> 
                                                        </span>
                                                      <input type="text" name="insta" id="insta_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" >
                                                        <i class="bi bi-twitter "></i> 
                                                        </span>
                                                      <input type="text" name="tweet" id="tweet_inp" class="form-control shadow-none">
                                                    </div>
                                                </div>
                                                <div class=" mb-3">
                                                  <label class="form-label fw-bold">iFrame</label>
                                                   <input type="text" name="iframe" id="iframe_inp" class="form-control  shadow-none" required>
                                                </div>



                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="contacts_inp(contacts_data)" class="btn text-secondary shadow-none " data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit"  class="btn custom-bg text-white shadow-none  ">SUBMIT</button>
                                </div>
                            </div>
                        </form>

                    </div>


                </div>

                <!--management Team session  -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title mg-0">Management Team</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#team-s">
                               <i class="bi bi-plus-square"></i>  Add
                            </button>
                        </div>
                        <div class="row" id="team-data">
                            
                            

                        </div>

                    </div>
                </div>  

                <!-- mangement teamsession model -->
                <div class="modal fade" id="team-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="team_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Team member</h5>
                                </div>
                                <div class="modal-body">



                                    <div class=" mb-3">
                                        <label class="form-label fw-bold">Name</label>
                                        <input type="text" name="member_name" id="member_name_inp" class="form-control  shadow-none" required>
                                    </div>
                                    <div class=" mb-3">
                                        <label class="form-label fw-bold">Picture</label>
                                        <input type="file" name="member_picture" id="member_picture_inp" class="form-control  shadow-none" accept=".jpg,.png,.webp,.jpeg" required>


                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="member_name.value='',member_picture.value=''" class="btn text-secondary shadow-none " data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit"  class="btn custom-bg text-white shadow-none  ">SUBMIT</button>
                                </div>
                            </div>
                        </form>

                    </div>


                </div>

                




            </div>
        </div>
    </div>








    <!-- Modal session start -->


    <!-- model session end -->













    <!-- shutdown session start -->







<?php require('component/script.php') ?>
<script src="script/setting.js"></script>
   


</body>

</html>