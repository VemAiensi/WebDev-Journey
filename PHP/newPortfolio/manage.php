<!doctype html>
<?php session_start();
 include('includes/functions.php');
?>


<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>VA | EDIT</title>
        <link rel="icon" type="image/x-icon" href="Assets/<?php getLogo() ?>">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <!-- My Custom Style  -->
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <form action="includes/controller.php" method="POST" enctype="multipart/form-data">

        <nav id="mainnav" class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="Assets/<?php getLogo() ?>" alt="" width="20" height="24">
                </a>
                
                <a class="navbar-brand" href="#home">
                    <?php getTitle() ?>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 me-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#experience"><?php getExp()?></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#about"><?php getAbout() ?></a>
                        </li>
                        
                        
                                <?php
                                    if(isset($_GET['id'])) {
                                        echo "
                                        <li class=nav-item'><a class='nav-link' href='index.php?id=$_GET[id]'>
                                        GO BACK</a>
                                        </li>";
                                    }
                                    else
                                        header('location:index.php');
                                ?>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <br>

        <section class="dark-section">
            <div class="container-fluid">
                <br><br><br>
                
                <div class="container">
                    <div class="container d-flex flex-column align-items-center justify-content-between">
                        <br>
                            
                        <h1 class="text-light"><?php getTitle() ?></h1>
                            
                        <img class="myLogo" src="Assets/<?php getLogo() ?>" alt="">

                        <h2 class="text-light"><?php getSubheading()?></h2>

                        <p class="text-light text-center">Dynamic Portfolio Project <br> Vem Aiensi Marasigan | 3BSCS-1</p>
                        <br>
                    </div>
                </div>

                <h1 class="text-light text-end me-4" type="button" data-bs-toggle="modal" data-bs-target="#editSection1"><i class="bi bi-pencil-square"></i></h1>
            </div>
            <br>
            

            <!-- Modal for editing section 1-->
            <div class="modal fade" id="editSection1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                                    
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Edit Section 1</h5>
                                        
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                                    
                         <div class="modal-body">
                            <input type="hidden" name="logo_old" value="<?php getLogo()?>">

                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text">TITLE</span>
                                <input type="text" class="form-control" name="brand" placeholder="Heading Name" value="<?php getTitle()?>">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <input type="file" class="form-control" name="logo">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text">DESC</span>
                                <input type="text" class="form-control" name="subHeading" placeholder="Write a compelling quote" value="<?php getSubHeading() ?>">
                            </div>
            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="edit-section1" class="btn btn-primary">Save</button>
                            </div>
                            
                        </div>
                                    
                    </div>
                </div>
            </div>
        </section>

        <section id="experience">
            <div class="container-fluid">
                <br><br>
                <div class="container">
                    <div class="container d-flex flex-column align-items-center justify-content-between">
                            
                        <h1 class="text-dark"><?php getExp()?></h1>
                    </div>
                </div>

                <div class="container">
                    <div class="container ">
                        <h3><i class="bi bi-link-45deg"></i>LINKS</h3>
                    </div>
                    <div class="row">
                        <div class="col col-lg-8">
                            <?php showLinks()?>
                        </div>
                        <div class="col">
                        
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#insertLink"><i class='bi bi-plus-circle-fill'></i></button>
                        </div>
                    </div>
                </div>

                <h1 class="text-dark text-end me-4" type="button" data-bs-toggle="modal" data-bs-target="#editSection2"><i class="bi bi-pencil-square"></i></h1>
            </div>

            <!-- Modal for editing section 2-->
            <div class="modal fade" id="editSection2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                                    
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Edit Section 2</h5>
                                        
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                                    
                         <div class="modal-body">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text">TITLE</span>
                                <input type="text" class="form-control" name="exp" placeholder="Heading Name" value="<?php getExp()?>">
                            </div>
            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="edit-section2" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                                    
                    </div>
                </div>
            </div>

            <!-- Modal for inserting link-->
            <div class="modal fade" id="insertLink" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                                    
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Add Link</h5>
                                        
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                                    
                         <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">Link</label>
                                    <input type="text" class="form-control" name="link" placeholder="Type source here">
                                </div>
                                        
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="add_link" class="btn btn-primary">Add link</button>
                                </div>
                        </div>     
                    </div>
                </div>
            </div>

            <br><br>
        </section>

        <section class="dark-section" id="skills">
            <div class="container-fluid">
                <div class="container text-center">
                    <br>
                    <h1 class="text-light"><?php getSkill() ?></h1>
                    <br>
                </div>

                <div class="container text-center">
                    <?php editSkillIcons() ?>
                </div>

                <div class="container text-center">
                    <br>
                    <h1 class="text-light"><?php getCert() ?></h1>
                    <br>
                </div>

                <div class="container">
                    <div class="row">
                        
                        <div class="col">
                            <?php editCerts() ?>
                        </div>
                    </div>
                </div>

                <h1 class="text-light text-end me-4" type="button" data-bs-toggle="modal" data-bs-target="#editSection3"><i class="bi bi-pencil-square"></i></h1>
            </div>

            <!-- Modal for editing section 3 -->
            <div class="modal fade" id="editSection3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                                    
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Edit Section 3</h5>
                                        
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                                    
                         <div class="modal-body">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text">TITLE 1</span>
                                <input type="text" class="form-control" name="skills" placeholder="Heading Name" value="<?php getSkill()?>">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text">TITLE 2</span>
                                <input type="text" class="form-control" name="certs" placeholder="Heading Name" value="<?php getCert()?>">
                            </div>
            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="edit-section3" class="btn btn-primary">Save</button>
                            </div>
                        </div>        
                    </div>
                </div>
            </div>

            <!-- Modal for inserting icon-->
            <div class="modal fade" id="insertIcon" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                                    
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Add Icon</h5>
                                        
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                                    
                         <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">Label</label>
                                    <input type="text" class="form-control" name="label" placeholder="Type icon name">
                                </div>

                                <div class="mb-3">
                                    <input type="file" class="form-control" name="iconInsert">
                                </div>
                                        
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="add_icon" class="btn btn-primary">Save</button>
                                </div>
                        </div>     
                    </div>
                </div>
            </div>

            <!-- Modal for inserting certificate-->
            <div class="modal fade" id="inCert" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                                    
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Add Certificate</h5>
                                        
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                                    
                         <div class="modal-body">

                                <div class="mb-3">
                                    <input type="file" class="form-control" name="inCert">
                                </div>
                                        
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="add_cert" class="btn btn-primary">Save</button>
                                </div>
                        </div>     
                    </div>
                </div>
            </div>
            
            <br>
        </section>

        <section id="about">
            <div class="container-fluid">
                <div class="container">
                    <br><br>
                    <h1 class="text-center"><?php getAbout() ?></h1>
                    <br>

                    <div class="row justify-content-center">
                        <div class="col col-sm-3">
                            <img src="Assets/<?php getProfilePic()?>"  class="rounded-circle" width=100%>
                        </div>
                        <div class="col col-lg-7 align-items-center">
                            <p class="h5"><?php getDesc1()?></p>
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col col-lg-7">
                            <p class="h5"><?php getDesc2()?></div>

                        <div class="col col-sm-3">
                            <img src="Assets/<?php getImage()?>" width=100%>
                        </div>
                    </div>
                </div>
                <h1 class="text-dark text-end me-4 mb-3" type="button" data-bs-toggle="modal" data-bs-target="#editSection4"><i class="bi bi-pencil-square"></i></h1>
                
                <!-- Modal for editing section 4 -->
                <div class="modal fade" id="editSection4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                                        
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Edit Section 4</h5>
                                            
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                                        
                            <div class="modal-body">
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text">TITLE 1</span>
                                    <input type="text" class="form-control" name="about" placeholder="Heading Name" value="<?php getAbout()?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Text 1</label>
                                    <textarea type="text" class="form-control" rows="5" name="desc1" placeholder="Write a paragraph"><?php getDesc1()?></textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Text 2</label>
                                    <textarea type="text" class="form-control" rows="5" name="desc2" placeholder="Write a paragraph"><?php getDesc2()?></textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Choose New Profile pic</label>
                                    <input type="hidden" name="old_profPic" value="<?php getProfilePic()?>">
                                    <input type="file" class="form-control" name="profPic">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Choose New Image</label>
                                    <input type="hidden" name="old_image" value="<?php getImage()?>">
                                    <input type="file" class="form-control" name="imageAbout">
                                </div>
                
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="edit-section4" class="btn btn-primary">Save</button>
                                </div>
                            </div>        
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        </form>
        <div class="footer footer-container">
            <div class="links">
                <a href="https://github.com/VemAiensi" target="_blank">
                    <svg class="icon-f" viewBox="0 0 20.00 20.00" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff" stroke="#ffffff">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="color" transform="translate(-140.000000, -7559.000000)">
                        <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399"> </path> 
                        </g></g> </g>
                    </svg>
                </a>

                <a href="https://web.facebook.com/profile.php?id=100055548079831" target="_blank">
                    <svg class="icon-f" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="bi bi-facebook">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="color"> <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path> </g>
                    </svg>
                </a>

                <a href="https://www.linkedin.com/in/vem-aiensi-a-marasigan-869027258/" target="_blank">
                    <svg class="icon-f" fill="#ffffff" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="color"> 
                        <path d="M28.778 1.004h-25.56c-0.008-0-0.017-0-0.027-0-1.199 0-2.172 0.964-2.186 2.159v25.672c0.014 1.196 0.987 2.161 2.186 2.161 0.010 0 0.019-0 0.029-0h25.555c0.008 0 0.018 0 0.028 0 1.2 0 2.175-0.963 2.194-2.159l0-0.002v-25.67c-0.019-1.197-0.994-2.161-2.195-2.161-0.010 0-0.019 0-0.029 0h0.001zM9.9 26.562h-4.454v-14.311h4.454zM7.674 10.293c-1.425 0-2.579-1.155-2.579-2.579s1.155-2.579 2.579-2.579c1.424 0 2.579 1.154 2.579 2.578v0c0 0.001 0 0.002 0 0.004 0 1.423-1.154 2.577-2.577 2.577-0.001 0-0.002 0-0.003 0h0zM26.556 26.562h-4.441v-6.959c0-1.66-0.034-3.795-2.314-3.795-2.316 0-2.669 1.806-2.669 3.673v7.082h-4.441v-14.311h4.266v1.951h0.058c0.828-1.395 2.326-2.315 4.039-2.315 0.061 0 0.121 0.001 0.181 0.003l-0.009-0c4.5 0 5.332 2.962 5.332 6.817v7.855z"></path> </g>
                    </svg>
                </a>

                <a href="https://www.instagram.com/vem413n51/" target="_blank">
                    <svg class="icon-f" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> 
                    <g id="color" transform="translate(-340.000000, -7439.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M289.869652,7279.12273 C288.241769,7279.19618 286.830805,7279.5942 285.691486,7280.72871 C284.548187,7281.86918 284.155147,7283.28558 284.081514,7284.89653 C284.035742,7285.90201 283.768077,7293.49818 284.544207,7295.49028 C285.067597,7296.83422 286.098457,7297.86749 287.454694,7298.39256 C288.087538,7298.63872 288.809936,7298.80547 289.869652,7298.85411 C298.730467,7299.25511 302.015089,7299.03674 303.400182,7295.49028 C303.645956,7294.859 303.815113,7294.1374 303.86188,7293.08031 C304.26686,7284.19677 303.796207,7282.27117 302.251908,7280.72871 C301.027016,7279.50685 299.5862,7278.67508 289.869652,7279.12273 M289.951245,7297.06748 C288.981083,7297.0238 288.454707,7296.86201 288.103459,7296.72603 C287.219865,7296.3826 286.556174,7295.72155 286.214876,7294.84312 C285.623823,7293.32944 285.819846,7286.14023 285.872583,7284.97693 C285.924325,7283.83745 286.155174,7282.79624 286.959165,7281.99226 C287.954203,7280.99968 289.239792,7280.51332 297.993144,7280.90837 C299.135448,7280.95998 300.179243,7281.19026 300.985224,7281.99226 C301.980262,7282.98483 302.473801,7284.28014 302.071806,7292.99991 C302.028024,7293.96767 301.865833,7294.49274 301.729513,7294.84312 C300.829003,7297.15085 298.757333,7297.47145 289.951245,7297.06748 M298.089663,7283.68956 C298.089663,7284.34665 298.623998,7284.88065 299.283709,7284.88065 C299.943419,7284.88065 300.47875,7284.34665 300.47875,7283.68956 C300.47875,7283.03248 299.943419,7282.49847 299.283709,7282.49847 C298.623998,7282.49847 298.089663,7283.03248 298.089663,7283.68956 M288.862673,7288.98792 C288.862673,7291.80286 291.150266,7294.08479 293.972194,7294.08479 C296.794123,7294.08479 299.081716,7291.80286 299.081716,7288.98792 C299.081716,7286.17298 296.794123,7283.89205 293.972194,7283.89205 C291.150266,7283.89205 288.862673,7286.17298 288.862673,7288.98792 M290.655732,7288.98792 C290.655732,7287.16159 292.140329,7285.67967 293.972194,7285.67967 C295.80406,7285.67967 297.288657,7287.16159 297.288657,7288.98792 C297.288657,7290.81525 295.80406,7292.29716 293.972194,7292.29716 C292.140329,7292.29716 290.655732,7290.81525 290.655732,7288.98792" id="instagram-[#ffffff]"> </path> </g> </g> </g> </g></svg>
                </a>
            </div>
            <div class="footerText">
                <span>VibrantArrow @ 2024 All Rights Reserved</span>
            </div>
        </div>
        
    </body>
</html>

