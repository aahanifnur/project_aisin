<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?= base_url('assets/'); ?>img/logo/logo.png" rel="icon">
    <title>RuangAdmin - Form Basics</title>
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>css/ruang-admin.min.css" rel="stylesheet">
    <!-- tambahan -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>multistep_wizard.css">
    <link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>

<body id="page-top" style="text-align: center;">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img width="100px" height="90px" src="<?= base_url('assets/'); ?>img/logo/aisin.png">
                </div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Features
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap" aria-expanded="true" aria-controls="collapseBootstrap">
                    <i class="far fa-fw fa-window-maximize"></i>
                    <span>Menu</span>
                </a>
                <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Bootstrap UI</h6>
                        <a class="collapse-item" href="alerts.html">Alerts</a>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="dropdowns.html">Dropdowns</a>
                        <a class="collapse-item" href="modals.html">Modals</a>
                        <a class="collapse-item" href="popovers.html">Popovers</a>
                        <a class="collapse-item" href="progress-bar.html">Progress Bars</a>
                    </div>
                </div>
            </li>


            <hr class="sidebar-divider">
            <div class="version" id="">Version 1.1 2022</div>
        </ul>
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white small"><?= $user['name']; ?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') .  $user['image']; ?>">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- Topbar -->

                <div class="container">
                    <div class="card h-100">
                        <div class="form">
                            <div class="left-side">
                                <div class="left-heading">
                                    <h3>indeed</h3>
                                </div>
                                <div class="steps-content">
                                    <h3>Step <span class="step-number">1</span></h3>
                                    <p class="step-number-content active">Enter your personal information to get closer to companies.</p>
                                    <p class="step-number-content d-none">Get to know better by adding your diploma,certificate and education life.</p>
                                    <p class="step-number-content d-none">Help companies get to know you better by telling then about your past experiences.</p>
                                    <p class="step-number-content d-none">Add your profile piccture and let companies find youy fast.</p>
                                </div>
                                <ul class="progress-side">
                                    <li class="active">Personal Information</li>
                                    <li>Education</li>
                                    <li>Work Experience</li>
                                    <li>User Photo</li>
                                </ul>

                            </div>
                            <div class="right-side">
                                <div class="main active">
                                    <small><i class="fa fa-smile-o"></i></small>
                                    <div class="text">
                                        <h2>Your Personal Information</h2>
                                        <p>Enter your personal information to get closer to copanies.</p>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div">
                                            <input type="text" required require id="user_name">
                                            <span>First Name</span>
                                        </div>
                                        <div class="input-div">
                                            <input type="text" required>
                                            <span>Last Name</span>
                                        </div>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div">
                                            <input type="text" required require>
                                            <span>Phone number</span>
                                        </div>
                                        <div class="input-div">
                                            <input type="text" required require>
                                            <span>E-mail Address</span>
                                        </div>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div">
                                            <select>
                                                <option>Select Country</option>
                                                <option>India</option>
                                                <option>France</option>
                                                <option>UK</option>
                                                <option>USA</option>
                                                <option>Germany</option>
                                                <option>Russia</option>
                                                <option>China</option>
                                                <option>Japan</option>
                                                <option>Pakistan</option>
                                            </select>

                                        </div>
                                        <div class="input-div">

                                            <select>
                                                <option>Select City</option>
                                                <option>New Delhi</option>
                                                <option>Paris</option>
                                                <option>London</option>
                                                <option>Washington D.C.</option>
                                                <option>Berlin</option>
                                                <option>Moscow</option>
                                                <option>Bejing</option>
                                                <option>Tokyo</option>
                                                <option>Islamabad</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="buttons">
                                        <button class="next_button">Next Step</button>
                                    </div>
                                </div>
                                <div class="main">
                                    <small><i class="fa fa-smile-o"></i></small>
                                    <div class="text">
                                        <h2>Education</h2>
                                        <p>Inform companies about your education life.</p>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div">
                                            <input type="text" required require>
                                            <span>School Name</span>
                                        </div>
                                        <div class="input-div">
                                            <input type="text" required>
                                            <span>Board Name</span>
                                        </div>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div">
                                            <input type="text" required require>
                                            <span>College/University name</span>
                                        </div>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div">
                                            <select>
                                                <option>Select Course</option>
                                                <option>BCA</option>
                                                <option>B-TECH</option>
                                                <option>BA</option>
                                                <option>B-COM</option>
                                                <option>B-SC</option>
                                                <option>MBA</option>
                                                <option>MCA</option>
                                                <option>M-COM</option>
                                                <option>M-TECH</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="buttons button_space">
                                        <button class="back_button">Back</button>
                                        <button class="next_button">Next Step</button>
                                    </div>
                                </div>
                                <div class="main">
                                    <small><i class="fa fa-smile-o"></i></small>
                                    <div class="text">
                                        <h2>Work Experiences</h2>
                                        <p>Can you talk about your past work experience?</p>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div">
                                            <input type="text" required require>
                                            <span>Experience 1</span>
                                        </div>
                                        <div class="input-div">
                                            <input type="text" required require>
                                            <span>Position</span>
                                        </div>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div">
                                            <input type="text" required>
                                            <span>Experience 2</span>
                                        </div>
                                        <div class="input-div">
                                            <input type="text" required>
                                            <span>Position</span>
                                        </div>
                                    </div>
                                    <div class="input-text">
                                        <div class="input-div">
                                            <input type="text" required>
                                            <span>Experience 3</span>
                                        </div>
                                        <div class="input-div">
                                            <input type="text" required>
                                            <span>Position</span>
                                        </div>
                                    </div>
                                    <div class="buttons button_space">
                                        <button class="back_button">Back</button>
                                        <button class="next_button">Next Step</button>
                                    </div>
                                </div>



                                <div class="main">
                                    <small><i class="fa fa-smile-o"></i></small>
                                    <div class="text">
                                        <h2>User Photo</h2>
                                        <p>Upload your profile picture and share yourself.</p>
                                    </div>
                                    <div class="user_card">
                                        <span></span>
                                        <div class="circle">
                                            <span><img src="https://i.imgur.com/hnwphgM.jpg"></span>

                                        </div>
                                        <div class="social">
                                            <span><i class="fa fa-share-alt"></i></span>
                                            <span><i class="fa fa-heart"></i></span>

                                        </div>
                                        <div class="user_name">
                                            <h3>Peter Hawkins</h3>
                                            <div class="detail">
                                                <p><a href="#">Izmar,Turkey</a>Hiring</p>
                                                <p>17 last day . 94Apply</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="buttons button_space">
                                        <button class="back_button">Back</button>
                                        <button class="submit_button">Submit</button>
                                    </div>
                                </div>
                                <div class="main">
                                    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                        <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                                        <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                                    </svg>

                                    <div class="text congrats">
                                        <h2>Congratulations!</h2>
                                        <p>Thanks Mr./Mrs. <span class="shown_name"></span> your information have been submitted successfully for the future reference we will contact you soon.</p>
                                    </div>
                                </div>






                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>copyright &copy; <script>
                                document.write(new Date().getFullYear());
                            </script> - developed by
                            <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
                        </span>
                    </div>
                </div>
            </footer>
            <!-- Footer -->

        </div>
    </div>


    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/ruang-admin.min.js"></script>

    <!-- wizard -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/js/'); ?>multistep_wizard.js"></script>
</body>

</html>