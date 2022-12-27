<?php
include('header.php');
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Megha Rao - Portfolio</title>
</head>

<body>
    <div id="header">
        <div class="container">
            <nav class="navbar">
                <h1 class="logo"><span>Port</span>folio</h1>
                <ul id="sidemenu">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#work">Work</a></li>
                    <li><a href="#Portfolio">Portfolio</a></li>
                    <li><a href="#Contact">Cantact</a></li>
                    <i class="fa fa-xmark" onclick="closemenu()"></i>
                </ul>
                <i class="fa fa-bars" onclick="openmenu()"></i>
            </nav>
            <div class="headerTxt">
                <p>PHP Developer</p>
                <h1 class="bodyTxt">Hello, I'm <span>Megha Rao</span></h1>
                <a href="assets/CV.pdf" download class="btn btn2">Download CV</a>
            </div>
        </div>
    </div>

    <!-- ------------------About------------------- -->
    <div class="wrapper">
        <div id="about">
            <div class="container">
                <div class="row">
                    <div class="About-col-1  col-md-4">
                        <img src="assets/Images/user.jpg" alt="">
                    </div>
                    <div class="About-col-2 col-md-8">
                        <h1 class="subtitle">About Me</h1>
                        <p id="AboutPara">Hello, I am Megha Rao. I am from Raipur, Chhattishgarh. And I recently
                            completed Master of Computer Applications from Pt. Ravishankar Shukla University, Raipur (C.G.).
                            Having done internships at Sirmore Software Solution Pvt. Ltd.,I gained a lot of knowledg
                            from my internships.</p>
                        <div class="subNav">
                            <p class="subNavLinks active-link" onclick="opentab('experience')">Experience</p>
                            <p class="subNavLinks" onclick="opentab('education')">Education</p>
                            <p class="subNavLinks" onclick="opentab('projects')">Projects</p>
                        </div>
                        <div class="subNavContents active-tab" id="experience">
                            <ul class="ul">
                                <li><span>Internship (April 2022 - Oct 2022)</span><br>
                                    MIS FOR CHILDREN VACCINATION - A Major Project built in CodeIgniter4 Framework, which is a Web Application.
                                    It manages the record of Hospital, Children, Vaccines, Vaccination and Vaccination Schedule. This System is
                                    completely secure. It will always ensure only valid data is entered and authorised users are able to access the system.</li>
                            </ul>
                        </div>
                        <div class="subNavContents" id="education">
                            <ul class="ul">
                                <li><i class="fa-solid fa-calendar-days cal"></i><span>&nbsp2022</span><br>Master of
                                    Computer Applications(MCA)<br>
                                    <p>Pt. Ravishankar shukal University, Raipur (C.G.)</p>
                                </li>
                                <li><i class="fa-solid fa-calendar-days cal"></i><span>&nbsp2019</span><br>Batchlor's in
                                    Computer Applications(BCA)<br>
                                    <p>Nagarjuna Post Graduation College og Science, Raipur (C.G.)</p>
                                </li>
                            </ul>
                        </div>
                        <div class="subNavContents" id="projects">
                            <ul class="ul">
                                <li><i class="fa-solid fa-calendar-days cal"></i><span>&nbsp2022</span><br>TOURISM MANAGMENT SYSTEM <br>
                                    <p style="text-align: justify">It provide a conventnient way for a customer to book Hotel and Bus for tour purpose.
                                        Made a backend of this Web application using PHP.</p>
                                </li>
                                <li><i class="fa-solid fa-calendar-days cal"></i><span>&nbsp2021</span><br>HOTEL MANAGMENT SYSTEM<br>
                                    <p style="text-align: justify">The hotel Management system is developed for hotels those are using a manual system to handle hotel processes.
                                        Built in .Net Framework and MS Access used for backend.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- -----------------Skills---------------- -->
        <div id="skills">
            <div class="container">
                <h1 class="subtitle" id="skillId">Skills</h1>
                <div>
                    <div class="row" id="skillGrid">
                        <div class="skillBox col-lg-4">
                            <img class="skills" id="html" src="assets/skills/html.svg" alt="html" />
                            <div class="skillName">HTML</div>
                        </div>

                        <div class="skillBox col-lg-4">
                            <img class="skills" src="assets/skills/javascript.svg" alt="javascript" />
                            <div class="skillName">JavaScript</div>
                        </div>

                        <div class="skillBox col-lg-4">
                            <img class="skills" src="assets/skills/css.svg" alt="css" />
                            <div class="skillName">CSS</div>
                        </div>

                        <div class="skillBox col-lg-4">
                            <img class="skills" src="assets/skills/codeigniter.svg" alt="codeigniter" />
                            <div class="skillName">Codeigniter4</div>
                        </div>

                        <div class="skillBox col-lg-4">
                            <img class="skills" src="assets/skills/bootstrap.svg" alt="sass" />
                            <div class="skillName">Bootstrap</div>
                        </div>

                        <div class="skillBox col-lg-4">
                            <img class="skills" src="assets/skills/mysql.svg" alt="firebase" />
                            <div class="skillName">MySql</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- ------------------Work------------------- -->
        <div id="work">
            <div class="container">
                <h1 class="subtitle">My Works</h1>
                <div class="workList">
                    <div>
                        <i class="fa-solid fa-code"></i>
                        <h2>Acadmic Project</h2>
                        <p style="font-size: 25px;">Pt. Ravishnakar Shukla University <br> MCA Projects</p>
                        <span class="button button--flex button--small button--link services__button btnProject" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="color:#0645ad; cursor: pointer; font-size: 20px; font-weight: bold">Click Here</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-folder-plus"></i>
                        <h2>Additional Projects</h2>
                        <p style="font-size: 25px;">Made some other projects to expand my knowledge</p>
                        <span class="button button--flex button--small button--link services__button btnProject" data-bs-toggle="modal" data-bs-target="#staticBackdrop1" style="color: #0645ad; cursor: pointer; font-size: 20px; font-weight: bold">Click Here</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ------------------Portfolio------------------- -->
        <div id="Portfolio">
            <div class="container">
                <h1 class="subtitle">Portfolio</h1>
                <div class="work-list">
                    <div class="work">
                        <div class="portfolioWork">
                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="assets/Images/ss.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/Images/ss1.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/Images/ss2.png" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="work">
                        <h1 class="ProjectTitle">MIS For Children Vaccination</h1>
                        <p id="portfolioPara">
                            A Web Application built in Codeigniter4 Framework,<br>MySql and PHP.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ------------------Contact------------------- -->
        <div id="Contact">
            <div class="container">
                <h1 class="subtitle">Contact Me</h1>
                <div class="row" id="ContactMe">
                    <div class="flex col-md-6" id="contactLeft">
                        <p class="paragraph"><i class="fas fa-paper-plane"></i>raomegha951@gmail.com</p>
                        <p class="paragraph"><i class="fas fa-phone-square-alt"></i>7999417143</p>
                        <div class="socialIcons">
                            <a href="https://www.facebook.com/megha.rao.7315"><i class="fa-brands fa-facebook-square"></i></a>
                            <a href="https://twitter.com/Kanchan9703?t=YwsxgidOanRFpErmradbrA&s=08"><i class="fa-brands fa-twitter-square"></i></a>
                            <a href="https://www.instagram.com/megha.1503/?igshid=YmMyMTA2M2Y%3D"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/megha-rao-696596225"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                        <a href="assets/CV.pdf" download class="btn btn2">Download CV</a>
                    </div>
                    <div class="col-md-6">
                        <div class="contactRight">
                            <form method="POST" id="contactForm" name="insert" action="email.php">
                                <input type="text" name="name" id="Name" placeholder="Enter Youd Name">
                                <input type="text" name="email" id="Email" placeholder="Enter Your Email">
                                <input type="text" name="subject" id="subject" placeholder="Enter subject">
                                <textarea rows="5" name="massage" id="Massage" placeholder="Enter Your Massage"></textarea>
                                <button type="submit" id="btmSubmit" class="btn btn2 tm-submit-btn" name="send">Submit</button>
                                <?php
                                if (isset($_SESSION['msg']) && $_SESSION['msg'] != '') {
                                ?>
                                    <script>
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Oops...',
                                            text: '<?php echo $_SESSION['msg']; ?>',
                                        })
                                    </script>
                                <?php
                                    unset($_SESSION['msg']);
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>Copyright Ⓒ 2022 <span>Megha Rao</span> All rights reserved.</p>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel" style="color: #fff; font-size: 20px; font-weight: 600; margin-top: 10px; font-family: 'Open Sans', sans-serif;">Project Document</h5>
                    <button type="button" class="btn-close  btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul>
                        <li style="list-style: none;"><i class="fas fa-file-powerpoint"></i><a href="assets/MIS CHILDREN VACCINATION (PPT).pptx" style="text-decoration:none; font-family:'Open Sans', sans-serif;">MIS CHILDREN VACCINATION PPT</a></li>
                        <li style="list-style: none;"><i class="fas fa-file" aria-hidden="true"></i><a href="assets/Hotel Management System Presentation.pptx" style="text-decoration:none; font-family:'Open Sans', sans-serif;">HOTEL MANAGEMENT SYSTEM</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade ModalConatiner" id="staticBackdrop1" classdata-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel" style="color: #fff; font-size: 20px; font-weight: 600; margin-top: 10px; font-family: 'Open Sans', sans-serif;">Project Document</h5>
                    <button type="button" class="btn-close  btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul>
                        <li style="list-style: none;"><i class="fas fa-file-powerpoint" style=" margin-right: 15px ; color: #04cff8; border: #fff;"></i><a href="assets/Tourism system ppt.pptx" style="text-decoration:none; color: #fff; font-family:'Open Sans', sans-serif;">TOURISM SYSTEM</a></li>
                        <li style="list-style: none;"><i class="fas fa-file-powerpoint" style=" margin-right: 15px ; color: #04cff8; border: #fff;"></i><a href="https://github.com/MeghaRao15/Todo__List.git" style="text-decoration:none; color: #fff; font-family:'Open Sans', sans-serif;">TODO LIST</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <script>
        // ------------------------About Menu-------------------------
        var tablinks = document.getElementsByClassName("subNavLinks");
        var tabContents = document.getElementsByClassName("subNavContents");

        function opentab(tabname) {
            for (tablink of tablinks) {
                tablink.classList.remove("active-link");
            }
            for (tabContent of tabContents) {
                tabContent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");
        }


        // -------------------------SideMenu-----------------------------
        var sidemenu = document.getElementById('sidemenu');

        function openmenu() {
            sidemenu.style.right = "0";
        }

        function closemenu() {
            sidemenu.style.right = "-200px";

        }
    </script>

    <?php include('footer.php'); ?>
</body>

</html>