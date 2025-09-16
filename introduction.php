<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prem Rawat - Web & Backend Developer</title>
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- AOS (Animate On Scroll) Library CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- ... (other links like Font Awesome, Poppins, etc.) ... -->

    <!-- Remix Icon CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <style>
        
    </style>
    <link rel="stylesheet" href="css/styles.css">

</head>

<body>

    <!-- ==================== HEADER (with Image-like Logo) ==================== -->
    <header>
        <div class="container header-container">
            <!-- New Logo with Icon -->
            <a href="index.php" class="logo">
                <div class="logo-icon-wrapper">
                    <span> <img src="images/5555.png" alt="Prem Rawat Logo" class="logo-image1"></span>
                </div>
            </a>

            <!-- Hamburger Menu -->
            <div class="hamburger">
                <i class="ri-menu-line"></i>
            </div>

            <!-- Navigation -->
        <nav class="nav">
            <ul class="nav-list">
                <li><a href="#home" class="nav-link active">Home</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#skills" class="nav-link">Skills</a></li>
                <li><a href="#qualifications" class="nav-link">Qualifications</a></li>
                <li><a href="#services" class="nav-link">Services</a></li>
                <li><a href="#projects" class="nav-link">Projects</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
                <li><a href="#location" class="nav-link">Location</a></li>
            </ul>
        </nav>
        </div>
    </header>
    
    
    <!-- ==================== HERO (Mobile-First Redesign) ==================== -->
    <section class="section hero" id="home">
        <div class="container hero-container">

            <!-- ===== Image Area (Top on Mobile) ===== -->
            <div class="hero-image-area" data-aos="zoom-in-up">
                <div class="hero-image-wrapper">
                    <img src="images/111.jpg" alt="Prem Rawat" class="hero-profile-img">
                </div>
                <!-- Decorative floating shapes -->
                <div class="hero-shape shape-1"></div>
                <div class="hero-shape shape-2"></div>
            </div>

            <!-- ===== Text Content Area (Bottom on Mobile) ===== -->
            <div class="hero-text-content">
                <h3 data-aos="fade-up" data-aos-delay="100">Hello, I'm</h3>
                <h1 data-aos="fade-up" data-aos-delay="200">Prem Rawat</h1>
                <h2 data-aos="fade-up" data-aos-delay="300" class="typing-text">
                    <!-- Typed.js will insert text here -->
                </h2>
                <p data-aos="fade-up" data-aos-delay="400">
                    A passionate developer from Nepal, creating beautiful, functional websites and robust backend
                    systems to help businesses grow online.
                </p>
                <div class="hero-buttons" data-aos="fade-up" data-aos-delay="500">
                    <a href="#contact" class="btn btn-primary">Contact Me <i class="ri-send-plane-line"></i></a>
                </div>
                <div class="hero-social-links" data-aos="fade-up" data-aos-delay="600">
                    <a href="https://github.com/prem-rawat" target="_blank" aria-label="GitHub"><i
                            class="ri-github-fill"></i></a>
                    <a href="https://www.linkedin.com/in/prem-rawat-5a0a42280" target="_blank" aria-label="LinkedIn"><i
                            class="ri-linkedin-box-fill"></i></a>
                    <a href="https://www.facebook.com/share/17BrnMqkvc/" target="_blank" aria-label="Facebook"><i
                            class="ri-facebook-box-fill"></i></a>
                    <a href="https://x.com/PremJiRawa97726" target="_blank" aria-label="Twitter"><i
                            class="ri-twitter-x-fill"></i></a>
                </div>
            </div>

        </div>
    </section>


    <!-- ==================== ABOUT ==================== -->
    <section class="section about" id="about">
        <div class="container">
            <!-- Section Title and Subtitle -->
            <h2 class="section-title" data-aos="fade-up">About Me</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">My Introduction</p>

            <div class="about-container">
                <!-- Image Area -->
                <div class="about-image-area" data-aos="fade-right" data-aos-delay="200">
                    <img src="images/premji.jpg" alt="Prem Rawat">
                </div>

                <!-- Text Content Area -->
                <div class="about-text-content" data-aos="fade-left" data-aos-delay="300">
                    <p>
                        Hi! I'm Prem Rawat, a creative Web & Backend Developer from Nepal. I'm passionate about building
                        modern, user-friendly, and responsive applications. I love turning ideas into clean, functional
                        digital experiences.
                    </p><br>

                    <p><b>⚡ Fun Fact: </b> For me, debugging a complex bug feels like finding the one off-key note in a
                        symphony. Finding and fixing it brings a unique kind of harmony and satisfaction.</p>

                    <div class="about-stats">
                        <div class="stat-item">
                            <span class="stat-number" data-target-count="2">1.9+</span>
                            <p class="stat-text">Years<br>Experience</p>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number" data-target-count="5">8+</span>
                            <p class="stat-text">Completed<br>Projects</p>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number" data-target-count="10">4+</span>
                            <p class="stat-text">Tools<br>Experience</p>
                        </div>
                    </div>

                    <div class="about-buttons">
                        <a href="assets/prem-cv.pdf" class="btn" download>
                            Download CV <i class="ri-download-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Skills Section -->
    <section class="section" id="skills">
        <div class="container">
            <!-- Section Title and Subtitle -->
            <h2 class="section-title" data-aos="fade-up">Skills</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">My Technical Skills</p>

            <div class="skills-accordion" data-aos="fade-up" data-aos-delay="200">

                <!-- Accordion Item 1: Frontend -->
                <div class="accordion-item">
                    <div class="accordion-header">
                        <div class="accordion-header-title">
                            <i class="fas fa-code"></i>
                            <h3>Development Tools</h3>
                        </div>
                        <i class="fas fa-chevron-down accordion-arrow"></i>
                    </div>
                    <div class="accordion-content">
                        <div class="skill-data"><span class="skill-name">HTML</span><span
                                class="skill-percentage">80%</span></div>
                        <div class="skill-data"><span class="skill-name">CSS</span><span
                                class="skill-percentage">70%</span></div>
                        <div class="skill-data"><span class="skill-name">JavaScript</span><span
                                class="skill-percentage">50%</span></div>
                        <div class="skill-data"><span class="skill-name">React</span><span
                                class="skill-percentage">10%</span></div>
                    </div>
                </div>

                <!-- Accordion Item 2: Backend -->
                <div class="accordion-item">
                    <div class="accordion-header">
                        <div class="accordion-header-title">
                            <i class="fas fa-server"></i>
                            <h3>Backend Tools</h3>
                        </div>
                        <i class="fas fa-chevron-down accordion-arrow"></i>
                    </div>
                    <div class="accordion-content">
                        <div class="skill-data"><span class="skill-name">PHP</span><span
                                class="skill-percentage">65%</span></div>
                        <div class="skill-data"><span class="skill-name">MySQL</span><span
                                class="skill-percentage">55%</span></div>
                        <div class="skill-data"><span class="skill-name">Python</span><span
                                class="skill-percentage">30%</span></div>
                        <div class="skill-data"><span class="skill-name">Java</span><span
                                class="skill-percentage">50%</span></div>
                    </div>
                </div>

                <!-- Accordion Item 3: Design & Other -->
                <div class="accordion-item">
                    <div class="accordion-header">
                        <div class="accordion-header-title">
                            <i class="fas fa-swatchbook"></i>
                            <h3>Design & Other Tools</h3>
                        </div>
                        <i class="fas fa-chevron-down accordion-arrow"></i>
                    </div>
                    <div class="accordion-content">
                        <div class="skill-data"><span class="skill-name">C Programming</span><span
                                class="skill-percentage">60%</span></div>
                        <div class="skill-data"><span class="skill-name">Problem Solving</span><span
                                class="skill-percentage">60%</span></div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Qualifications Section -->
    <section class="section" id="qualifications">
        <div class="container">
            <!-- Section Title and Subtitle -->
            <h2 class="section-title" data-aos="fade-up">Qualification</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Measurable results</p>

            <!-- Qualification Tabs -->
            <div class="qualification-tabs" data-aos="fade-up" data-aos-delay="200">
                <button class="qualification-button active" data-target="#education">
                    <i class="fas fa-graduation-cap"></i> Degree / Level
                </button>
                <button class="qualification-button" data-target="#project-experience">
                    <i class="fas fa-briefcase"></i> Project
                </button>
            </div>

            <div class="qualification-content-area" data-aos="fade-up" data-aos-delay="300">
                <!-- Education Content -->
                <div id="education" class="qualification-content active">
                    <div class="qualification-timeline">
                        <!-- Timeline Item 1 (Left) -->
                        <div class="timeline-item">
                            <div class="timeline-data">
                                <h3 class="timeline-title">Diploma in IT</h3>
                                <p class="timeline-subtitle">Excellent Grades</p>
                                <span class="timeline-date"><i class="fas fa-calendar-alt"></i> 2023 - 2025</span>
                            </div>
                        </div>
                        <!-- Timeline Item 2 (Right) -->
                        <div class="timeline-item">
                            <div class="timeline-data">
                                <h3 class="timeline-title">+2 (Comp. Science and Education)</h3>
                                <p class="timeline-subtitle">Higher Secondary Education</p>
                                <span class="timeline-date"><i class="fas fa-calendar-alt"></i> 2022 - 2024</span>
                            </div>
                        </div>
                        <!-- Timeline Item 3 (Left) -->
                        <div class="timeline-item">
                            <div class="timeline-data">
                                <h3 class="timeline-title">Online Certifications</h3>
                                <p class="timeline-subtitle">Web & Programming</p>
                                <span class="timeline-date"><i class="fas fa-calendar-alt"></i> 2022 - Present</span>
                            </div>
                        </div>
                        <!-- Timeline Item 4 (Right) -->
                        <div class="timeline-item">
                            <div class="timeline-data">
                                <h3 class="timeline-title">SEE Examination</h3>
                                <p class="timeline-subtitle">With Distinction</p>
                                <span class="timeline-date"><i class="fas fa-calendar-alt"></i> 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Experience Content (Updated as per the image) -->
                <div id="project-experience" class="qualification-content">
                    <div class="qualification-timeline">
                        <!-- Timeline Item 1 (Left) -->
                        <div class="timeline-item">
                            <div class="timeline-data">
                                <h3 class="timeline-title">Built a laptop e-commerce website</h3>
                                <p class="timeline-subtitle">College Project</p>
                                <span class="timeline-date"><i class="fas fa-calendar-alt"></i> 2025</span>
                            </div>
                        </div>
                        <!-- Timeline Item 2 (Right) -->
                        <div class="timeline-item">
                            <div class="timeline-data">
                                <h3 class="timeline-title">Build on SMS system</h3>
                                <p class="timeline-subtitle">Group project</p>
                                <span class="timeline-date"><i class="fas fa-calendar-alt"></i> 2023 - 2024</span>
                            </div>
                        </div>
                        <!-- Timeline Item 3 (Left) -->
                        <div class="timeline-item">
                            <div class="timeline-data">
                                <h3 class="timeline-title">Mini E-Commerce Project</h3>
                                <p class="timeline-subtitle">College project</p>
                                <span class="timeline-date"><i class="fas fa-calendar-alt"></i> 2024</span>
                            </div>
                        </div>
                        <!-- Timeline Item 4 (Right) -->
                        <div class="timeline-item">
                            <div class="timeline-data">
                                <h3 class="timeline-title">Admin panel setup</h3>
                                <p class="timeline-subtitle">College Project</p>
                                <span class="timeline-date"><i class="fas fa-calendar-alt"></i> 2025</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== SERVICES ==================== -->
    <section class="section" id="services">
        <div class="container">
            <!-- Section Title and Subtitle -->
            <h2 class="section-title" data-aos="fade-up">Service</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">What I offer</p>

            <!-- Main Services Container -->
            <div class="services-container">
                <!-- Service 1: Frontend Development -->
                <div class="main-service-card" data-aos="fade-up" data-aos-delay="200">
                    <i class="ri-code-s-slash-line main-service-icon"></i>
                    <h3>Frontend Developer</h3>
                    <span class="service-view-more" data-service="frontend">View More <i
                            class="ri-arrow-right-line"></i></span>
                </div>

                <!-- Service 2: Backend Development -->
                <div class="main-service-card" data-aos="fade-up" data-aos-delay="300">
                    <i class="ri-server-line main-service-icon"></i>
                    <h3>Backend Developer</h3>
                    <span class="service-view-more" data-service="backend">View More <i
                            class="ri-arrow-right-line"></i></span>
                </div>

                <!-- Service 3: UI/UX Design -->
                <div class="main-service-card" data-aos="fade-up" data-aos-delay="400">
                    <i class="ri-pencil-ruler-2-line main-service-icon"></i>
                    <h3>Programming</h3>
                    <span class="service-view-more" data-service="uiux">View More <i
                            class="ri-arrow-right-line"></i></span>
                </div>
            </div>

            <!-- ============================================= -->
            <!-- WHY HIRE ME SECTION -->
            <!-- ============================================= -->
            <div class="why-hire-me-container">
                <div class="why-hire-me-text" data-aos="fade-up">
                    <h2>Why Hire Me For Your Next Project?</h2>
                    <p>
                        I'm a creative and detail-oriented developer who transforms ideas into user-friendly, modern
                        applications. I focus on clean layouts, robust logic, and smooth performance. Let's build
                        something great together.
                    </p>
                </div>

                <div class="sub-services-grid" data-aos="fade-up" data-aos-delay="100">
                    <!-- Card 1: Visual Design -->
                    <div class="sub-service-card">
                        <i class="ri-server-line"></i>
                        <h3>Robust Backend</h3>
                        <p>Building the powerful, secure, and scalable logic that drives your application.</p>
                    </div>
                    <!-- Card 2: UX Research -->
                    <div class="sub-service-card">
                        <i class="ri-code-s-slash-line"></i>
                        <h3>Dynamic Frontend</h3>
                        <p>Crafting seamless, interactive user experiences that are fast and intuitive.</p>
                    </div>
                    <!-- Card 3: Design Prototype -->
                    <div class="sub-service-card">
                        <i class="ri-database-2-line"></i>
                        <h3>Database Management</h3>
                        <p>Designing efficient database schemas to ensure data integrity and speed.</p>
                    </div>
                    <!-- Card 4: Responsive Design -->
                    <div class="sub-service-card">
                        <i class="ri-smartphone-line"></i>
                        <h3>Responsive Design</h3>
                        <p>Build mobile-friendly designs that work on all screen sizes.</p>
                    </div>
                    <!-- Card 5: HTML & CSS -->
                    <div class="sub-service-card">
                        <i class="ri-lightbulb-flash-line"></i>
                        <h3>Problem Solving</h3>
                        <p>Deconstructing complex challenges to deliver clean, efficient, and effective solutions.</p>
                    </div>
                    <!-- Card 6: UI Animation -->
                    <div class="sub-service-card">
                        <i class="ri-file-code-line"></i>
                        <h3>Clean & Scalable Code</h3>
                        <p>A commitment to writing well-documented and maintainable code for long-term success.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- MODAL POP-UPS FOR SERVICES -->
    <!-- ============================================= -->
    <div class="service-modal" id="frontend-modal">
        <div class="modal-content">
            <i class="ri-close-line modal-close-icon"></i>
            <h3 class="modal-title">Frontend Developer</h3>
            <p class="modal-description">I create beautiful, responsive websites using HTML, CSS, and JavaScript that
                work perfectly on all devices, focusing on performance and user experience.</p>
            <ul class="modal-services-list">
                <li><i class="ri-checkbox-circle-line"></i> Development of modern user interfaces.</li>
                <li><i class="ri-checkbox-circle-line"></i> Interactive animations and transitions.</li>
                <li><i class="ri-checkbox-circle-line"></i> Ensuring web accessibility (a11y).</li>
            </ul>
        </div>
    </div>

    <div class="service-modal" id="backend-modal">
        <div class="modal-content">
            <i class="ri-close-line modal-close-icon"></i>
            <h3 class="modal-title">Backend Developer</h3>
            <p class="modal-description">I build robust, secure, and scalable backend systems with PHP, MySQL, and other
                technologies to power your web applications flawlessly.</p>
            <ul class="modal-services-list">
                <li><i class="ri-checkbox-circle-line"></i> Database design and management.</li>
                <li><i class="ri-checkbox-circle-line"></i> API (RESTful) development.</li>
                <li><i class="ri-checkbox-circle-line"></i> Server logic and application flow.</li>
            </ul>
        </div>
    </div>

    <div class="service-modal" id="uiux-modal">
        <div class="modal-content">
            <i class="ri-close-line modal-close-icon"></i>
            <h3 class="modal-title">Programming</h3>
            <p class="modal-description">I develop applications and solve problems using Java, Python, C, and other
                programming languages.</p>
            <ul class="modal-services-list">
                <li><i class="ri-checkbox-circle-line"></i> Algorithmic problem-solving.</li>
                <li><i class="ri-checkbox-circle-line"></i> Software architecture and design.</li>
                <li><i class="ri-checkbox-circle-line"></i> Performance optimization and debugging.</li>
            </ul>
        </div>
    </div>

    
    <!-- Projects Section -->
    <section class="section" id="projects">
        <div class="container">
            <!-- Section Title and Subtitle -->
            <h2 class="section-title" data-aos="fade-up">Porjects</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Most Recent Work</p>

            <div class="projects-container">
                <!-- Project 1: TechMart -->
                <div class="project-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="project-img">
                        <img src="images/techmart-screenshot.jpg" alt="TechMart E-commerce Project">
                    </div>
                    <div class="project-info">
                        <h3>My Major Project : TechMart</h3>
                        <p>A complete e-commerce solution with a user-friendly interface, robust backend, and admin
                            dashboard.</p>
                        <div class="project-tech">
                            <span>HTML/CSS</span><span>JavaScript</span><span>PHP</span><span>MySQL</span><span>Bootstrap</span>
                        </div>
                        <div class="project-links">
                            <a href="projects/techmart.php" aria-label="Live Demo"><i
                                    class="fas fa-external-link-alt"></i> Live Demo</a>
                            <a href="https://github.com/prem-rawat?tab=repositories" aria-label="GitHub Code"><i
                                    class="fab fa-github"></i> Code</a>
                        </div>
                    </div>
                </div>

                <!-- Project 2: Student Management System -->
                <div class="project-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="project-img">
                        <img src="images/image321.png" alt="Student Management System Project">
                    </div>
                    <div class="project-info">
                        <h3>Student Management System</h3>
                        <p>A comprehensive system for managing student records, attendance, and academic performance.
                        </p>
                        <div class="project-tech">
                            <span>HTML/CSS</span><span>JavaScript</span><span>PHP</span><span>MySQL</span>
                        </div>
                        <div class="project-links">
                            <a href="projects/sms.php" aria-label="Live Demo"><i class="fas fa-external-link-alt"></i>
                                Live Demo</a>
                            <a href="https://github.com/prem-rawat?tab=repositories" aria-label="GitHub Code"><i
                                    class="fab fa-github"></i> Code</a>
                        </div>
                    </div>
                </div>

                <!-- Project 3: Digital Wallet -->
                <div class="project-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="project-img">
                        <img src="images/image111.png" alt="Digital wallet app">
                    </div>
                    <div class="project-info">
                        <h3>Digital Wallet App</h3>
                        <p>Instantly view your wallet balance, use options to send, add, or scan money, and track recent
                            activity.</p>
                        <div class="project-tech">
                            <span>HTML/CSS</span><span>JavaScript</span><span>PHP</span><span>MySQL</span>
                        </div>
                        <div class="project-links">
                            <a href="projects/wallet.php" aria-label="Live Demo"><i
                                    class="fas fa-external-link-alt"></i> Live Demo</a>
                            <a href="https://github.com/prem-rawat?tab=repositories" aria-label="GitHub Code"><i
                                    class="fab fa-github"></i> Code</a>
                        </div>
                    </div>
                </div>

                <!-- Project 4: Digital Wallet -->
                <div class="project-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="project-img">
                        <img src="images/image111.png" alt="Digital wallet app">
                    </div>
                    <div class="project-info">
                        <h3>Digital Wallet App</h3>
                        <p>Instantly view your wallet balance, use options to send, add, or scan money, and track recent
                            activity.</p>
                        <div class="project-tech">
                            <span>HTML/CSS</span><span>JavaScript</span><span>PHP</span><span>MySQL</span>
                        </div>
                        <div class="project-links">
                            <a href="projects/wallet.php" aria-label="Live Demo"><i
                                    class="fas fa-external-link-alt"></i> Live Demo</a>
                            <a href="https://github.com/prem-rawat?tab=repositories" aria-label="GitHub Code"><i
                                    class="fab fa-github"></i> Code</a>
                        </div>
                    </div>
                </div>
                <!-- Project 5: Digital Wallet -->
                <div class="project-card" data-aos="fade-up" data-aos-delay="300">

                    <div class="project-info">
                        <h3>Coming Soon!</h3>
                        <p>In this project in this time building plz wait some time!</p>

                    </div>
                </div>

                <!-- Project 5: Digital Wallet -->
                <div class="project-card" data-aos="fade-up" data-aos-delay="300">

                    <div class="project-info">
                        <h3>Coming Soon!</h3>
                        <p>In this project in this time building plz wait some time!</p>

                    </div>
                </div>


                <!-- ADD MORE PROJECTS HERE TO TEST PAGINATION -->

            </div>

            <!-- === NEW PAGINATION CONTAINER ADDED HERE === -->
            <div class="pagination-container" data-aos="fade-up">
                <!-- Pagination links will be generated by JavaScript -->
            </div>

        </div>
    </section>

    <!-- =================================
   CALL TO ACTION (CTA) SECTION
   ================================= -->
    <section class="section cta-section" id="cta">
        <div class="container">
            <div class="cta-container" data-aos="zoom-in-up">
                <div class="cta-content">
                    <h2>YOU have a new project</h2>
                    <p>Contact me now and get a 30% Discount on your new project.</p>
                    <a href="#contact" class="btn">
                        Contact me <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="cta-signature">
                    <img src="images/premji.jpg" alt="Prem Rawat Logo" class="logo-image">
                    <p>Prem Rawat<br><span>Web & Backend Developer</span></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section contact" id="contact">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Contact Me</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Direct Contect Now!</p>
            <div class="contact-container">
                <div class="contact-info" data-aos="fade-right">
                    <h3>Get In Touch</h3>
                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fas fa-phone"></i></div>
                            <div class="contact-text">
                                <h4>Call Me</h4>
                                <p>+977 9766810438</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                            <div class="contact-text">
                                <h4>Email Me</h4><a href="mailto:rawatprem675@gmail.com">rawatprem675@gmail.com</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="contact-text">
                                <h4>Location</h4>
                                <p>Butwal-12 Tamnagar, Rupandehi, Nepal</p>
                            </div>
                        </div>
                    </div>
                    <div class="hero-social-links">
                        <a href="https://www.linkedin.com/in/prem-rawat-5a0a42280?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                            target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="https://github.com/prem-rawat" target="_blank"><i class="fab fa-github"></i></a>
                        <a href="https://www.facebook.com/share/17BrnMqkvc/" target="_blank"><i
                                class="fab fa-facebook"></i></a>
                        <a href="https://x.com/PremJiRawa97726?t=-HYAnJ65uh6xwbUDS-Qq6w&s=09" target="_blank"><i
                                class="fab fa-twitter"></i></a>
                        <a href="https://www.tiktok.com/@premrawat342?_t=ZS-8xpe8B6I9tY&_r=1" target="_blank"><i
                                class="fab fa-tiktok"></i></a>
                        <a href="https://www.instagram.com/premrawat1677?utm_source=qr&igsh=MWExdnZpdzRtanQ1aA=="
                            target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="contact-form" data-aos="fade-left">
                    <form action="contact.php" method="POST">
                        <div class="form-group"><label for="name">Your Name</label><input type="text" name="name"
                                id="name" required></div>
                        <div class="form-group"><label for="email">Your Email</label><input type="email" name="email"
                                id="email" required></div>
                        <div class="form-group"><label for="subject">Subject</label><input type="text" name="subject"
                                id="subject" required></div>
                        <div class="form-group"><label for="message">Message</label><textarea id="message"
                                name="message" required></textarea></div>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- =================================
   LOCATION SECTION
   ================================= -->
    <section class="section" id="location">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">My Location</h2>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Found My Location</p>
            <div class="map-container" data-aos="fade-up" data-aos-delay="100">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14134.022731998538!2d83.39863154089965!3d27.67086821212879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399684f8af68a87b%3A0x6342136956e17926!2sTamnagar%2C%20Butwal%2032907!5e0!3m2!1sen!2snp!4v1715843285741!5m2!1sen!2snp"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-col">
                    <h3>Prem Rawat</h3>
                    <p>Web & Backend Developer creating modern, responsive websites and robust backend systems.</p>
                </div>
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#projects">Projects</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Services</h3>
                    <ul class="footer-links">
                        <li><a href="#services">Frontend Development</a></li>
                        <li><a href="#services">Backend Development</a></li>
                        <li><a href="#services">Programming</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Contact Info</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Butwal, Nepal</p>
                    <p><i class="fas fa-phone"></i> +977 9766810438</p>
                    <i class="fas fa-envelope"></i> rawatprem675@gmail.com
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2025 Prem Rawat. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- ==================== BACK TO TOP BUTTON ==================== -->
    <a href="#home" class="back-to-top" aria-label="Back to top">
        <i class="ri-arrow-up-s-line"></i>
    </a>

    <!-- Typed.js Library for Typing Animation -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <!-- AOS Library JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="js/scripts.js"></script>

</body>

</html>