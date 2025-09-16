<?php
// =================================================================
// DYNAMIC CONTENT AREA
// =================================================================
// Edit the arrays below to easily update your portfolio content.

// -- Personal Information --
$name = "Prem Rawat";
$tagline = "Web & Backend Developer";
$bio = "I create beautiful, functional websites and robust backend systems to help businesses grow online.";
$about_me = [
    "I'm Prem Rawat, a passionate web and backend developer based in Butwal, Nepal. With expertise in both frontend and backend technologies, I create complete web solutions that are not only visually appealing but also highly functional and user-friendly.",
    "My journey in web development started several years ago, and since then I've worked with various technologies to build websites and applications that solve real-world problems.",
    "When I'm not coding, you can find me exploring new technologies, contributing to open-source projects, or enjoying the beautiful landscapes of Nepal."
];
$contact_info = [
    "phone" => "+977 9766810438",
    "email" => "rawatprem675@gmail.com",
    "location" => "Butwal-12 Tamnagar, Rupandehi, Nepal"
];
$social_links = [
    "facebook" => "#",
    "twitter" => "#",
    "linkedin" => "#",
    "github" => "#"
];

// -- Skills --
// Add or remove skills here. The width style will be applied automatically.
$skills = [
    "Frontend" => [
        ["name" => "HTML", "level" => 95],
        ["name" => "CSS", "level" => 90],
        ["name" => "JavaScript", "level" => 85]
    ],
    "Backend" => [
        ["name" => "PHP", "level" => 80],
        ["name" => "MySQL", "level" => 85],
        ["name" => "Java", "level" => 75]
    ],
    "Programming" => [
        ["name" => "Python", "level" => 80],
        ["name" => "C Programming", "level" => 70],
        ["name" => "Problem Solving", "level" => 90]
    ]
];

// -- Qualifications --
$qualifications = [
    "left" => [
        ["title" => "Diploma in Information Technology (DIT)", "description" => "Completed with excellent grades, covering various aspects of web development, programming, and database management."],
        ["title" => "SEE (Secondary Education Examination)", "description" => "Completed with distinction, showing early aptitude for technical subjects."]
    ],
    "right" => [
        ["title" => "+2 (Higher Secondary Education)", "description" => "Completed with focus on computer science and mathematics."],
        ["title" => "Various Online Certifications", "description" => "Completed multiple online courses in web development, programming languages, and database management to enhance skills."]
    ]
];

// -- Projects --
// Add or remove projects here.
$projects = [
    [
        "title" => "E-commerce Website",
        "description" => "A complete e-commerce solution with product catalog, shopping cart, and payment integration.",
        "image" => "https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80",
        "live_url" => "#",
        "code_url" => "#"
    ],
    [
        "title" => "Student Management System",
        "description" => "A comprehensive system for managing student records, attendance, and academic performance.",
        "image" => "https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80",
        "live_url" => "#",
        "code_url" => "#"
    ],
    [
        "title" => "Personal Portfolio",
        "description" => "A responsive portfolio website showcasing skills, projects, and contact information.",
        "image" => "https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80",
        "live_url" => "#",
        "code_url" => "#"
    ]
];

// -- Services --
$services = [
    [
        "icon" => "fas fa-laptop-code",
        "title" => "Frontend Development",
        "description" => "I create beautiful, responsive websites using HTML, CSS, and JavaScript that work perfectly on all devices."
    ],
    [
        "icon" => "fas fa-server",
        "title" => "Backend Development",
        "description" => "I build robust backend systems with PHP, MySQL, and other technologies to power your web applications."
    ],
    [
        "icon" => "fas fa-code",
        "title" => "Programming",
        "description" => "I develop applications and solve problems using Java, Python, C, and other programming languages."
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> - <?php echo $tagline; ?></title>
    
    <!-- Google Fonts (Poppins) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS (Animate on Scroll) Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
            --text-color: #333;
            --text-light: #f5f5f5;
            --bg-light: #f9f9f9;
            --bg-dark: #f1f1f1;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }

        body {
            line-height: 1.7;
            color: var(--text-color);
            background-color: var(--bg-light);
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        header {
            background: rgba(44, 62, 80, 0.8);
            backdrop-filter: blur(10px);
            color: var(--text-light);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: background 0.3s, box-shadow 0.3s;
        }
        
        header.scrolled {
            background: var(--secondary-color);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text-light);
        }

        .logo span {
            color: var(--primary-color);
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 2.5rem;
        }

        nav ul li a {
            color: var(--text-light);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
            font-size: 1rem;
            position: relative;
            padding-bottom: 5px;
        }
        
        nav ul li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--primary-color);
            transition: width 0.3s;
        }

        nav ul li a:hover, nav ul li a.active {
            color: var(--primary-color);
        }
        
        nav ul li a:hover::after, nav ul li a.active::after {
            width: 100%;
        }

        .hamburger {
            display: none;
            cursor: pointer;
            font-size: 1.8rem;
            z-index: 1001;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80') no-repeat center center/cover;
            color: var(--text-light);
            text-align: center;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .hero h2 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            color: var(--primary-color);
            font-weight: 500;
        }
        
        .hero h2 .typed-text {
            color: var(--primary-color);
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2.5rem;
        }

        .btn {
            display: inline-block;
            background: var(--primary-color);
            color: var(--text-light);
            padding: 0.8rem 2.5rem;
            border: 2px solid var(--primary-color);
            border-radius: 50px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.4s ease;
            text-decoration: none;
            font-weight: 600;
        }
        
        .btn-outline {
            background: transparent;
            color: var(--light-color);
            border-color: var(--light-color);
            margin-left: 1rem;
        }

        .btn:hover {
            background: var(--accent-color);
            border-color: var(--accent-color);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .btn-outline:hover {
            background: var(--light-color);
            color: var(--secondary-color);
        }

        /* General Section Styles */
        .section {
            padding: 6rem 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 4rem;
            font-size: 2.8rem;
            font-weight: 700;
            color: var(--secondary-color);
        }

        .section-title span {
            color: var(--primary-color);
        }

        /* About Section */
        .about-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 3rem;
        }

        .about-img {
            flex: 1;
            min-width: 300px;
            max-width: 400px;
        }

        .about-img img {
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            transition: transform 0.4s;
        }
        
        .about-img img:hover {
            transform: scale(1.05);
        }

        .about-text {
            flex: 1.5;
            min-width: 300px;
        }

        .about-text h3 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: var(--secondary-color);
            font-weight: 600;
        }

        .about-text p {
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }
        
        .about-text .btn {
            margin-top: 1rem;
        }

        /* Skills Section */
        #skills {
            background: var(--bg-dark);
        }
        .skills-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .skill-category {
            padding: 2.5rem 2rem;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .skill-category:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .skill-category h3 {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            color: var(--secondary-color);
            text-align: center;
            font-weight: 600;
        }

        .skill-item {
            margin-bottom: 1.5rem;
        }

        .skill-name {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .skill-bar {
            height: 10px;
            background: #e0e0e0;
            border-radius: 5px;
            overflow: hidden;
        }

        .skill-progress {
            height: 100%;
            background: var(--primary-color);
            border-radius: 5px;
            width: 0;
            transition: width 1.5s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        /* Qualifications Section */
        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 3px;
            background: var(--primary-color);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -1.5px;
        }

        .timeline-item {
            padding: 10px 40px;
            position: relative;
            width: 50%;
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            width: 24px;
            height: 24px;
            background: white;
            border: 4px solid var(--primary-color);
            border-radius: 50%;
            top: 15px;
            z-index: 1;
            transition: background 0.3s;
        }
        
        .timeline-item:hover::after {
            background: var(--accent-color);
        }

        .left { left: 0; text-align: right; }
        .right { left: 50%; }

        .left::after { right: -12px; }
        .right::after { left: -12px; }

        .timeline-content {
            padding: 20px 30px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .timeline-content h3 {
            margin-bottom: 0.5rem;
            color: var(--secondary-color);
            font-weight: 600;
        }

        .timeline-content p {
            color: #666;
            font-size: 0.95rem;
        }

        /* Projects Section */
        #projects {
            background: var(--bg-dark);
        }
        .projects-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .project-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.07);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
        }

        .project-img {
            height: 220px;
            overflow: hidden;
        }

        .project-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .project-card:hover .project-img img {
            transform: scale(1.1);
        }

        .project-info {
            padding: 1.5rem;
        }

        .project-info h3 {
            margin-bottom: 0.5rem;
            color: var(--secondary-color);
            font-weight: 600;
        }

        .project-info p {
            margin-bottom: 1.5rem;
            color: #666;
            font-size: 0.95rem;
        }

        .project-links a {
            margin-right: 1rem;
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .project-links a:hover {
            color: var(--accent-color);
        }
        .project-links a i {
            margin-right: 5px;
        }

        /* Services Section */
        .services-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .service-card {
            background: white;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
            border-bottom: 4px solid var(--primary-color);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .service-icon {
            font-size: 3.5rem;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            transition: transform 0.3s;
        }
        
        .service-card:hover .service-icon {
            transform: scale(1.2) rotate(15deg);
        }

        .service-card h3 {
            margin-bottom: 1rem;
            color: var(--secondary-color);
            font-weight: 600;
        }

        .service-card p {
            color: #666;
            font-size: 0.95rem;
        }

        /* Contact Section */
        #contact {
            background: var(--bg-dark);
        }
        .contact-container {
            display: flex;
            flex-wrap: wrap;
            gap: 3rem;
        }

        .contact-info, .contact-form {
            flex: 1;
            min-width: 300px;
        }

        .contact-info h3 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: var(--secondary-color);
            font-weight: 600;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 1.5rem;
            font-size: 1.4rem;
            flex-shrink: 0;
        }

        .contact-text h4 {
            margin-bottom: 0.2rem;
            color: var(--secondary-color);
            font-weight: 600;
        }

        .contact-text p, .contact-text a {
            color: #666;
            text-decoration: none;
            transition: color 0.3s;
        }

        .contact-text a:hover {
            color: var(--primary-color);
        }

        .social-links {
            display: flex;
            margin-top: 2rem;
        }

        .social-links a {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 45px;
            height: 45px;
            background: var(--secondary-color);
            color: white;
            border-radius: 50%;
            margin-right: 1rem;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .social-links a:hover {
            background: var(--primary-color);
            transform: translateY(-5px);
        }

        .contact-form {
            padding: 2.5rem;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.07);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--secondary-color);
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        
        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        }

        .form-group textarea {
            height: 150px;
            resize: vertical;
        }

        /* Footer */
        footer {
            background: var(--secondary-color);
            color: var(--text-light);
            padding: 4rem 0 2rem;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .footer-col h3 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.5rem;
            font-weight: 600;
        }

        .footer-col h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 3px;
            background: var(--primary-color);
        }

        .footer-col p {
            color: var(--light-color);
            opacity: 0.8;
        }
        
        .footer-col p i {
            margin-right: 10px;
            color: var(--primary-color);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.8rem;
        }

        .footer-links a {
            color: var(--light-color);
            text-decoration: none;
            transition: color 0.3s, padding-left 0.3s;
            opacity: 0.8;
        }

        .footer-links a:hover {
            color: var(--primary-color);
            padding-left: 5px;
            opacity: 1;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.2rem;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s;
            z-index: 999;
        }

        .back-to-top.active {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .back-to-top:hover {
            background: var(--accent-color);
            transform: translateY(-5px);
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .about-content {
                flex-direction: column;
                text-align: center;
            }
        }
        
        @media (max-width: 768px) {
            .hamburger {
                display: block;
            }

            nav ul {
                position: fixed;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100vh;
                background: var(--secondary-color);
                flex-direction: column;
                align-items: center;
                justify-content: center;
                transition: left 0.3s ease-in-out;
            }

            nav ul.active {
                left: 0;
            }

            nav ul li {
                margin: 1.5rem 0;
            }
            nav ul li a {
                font-size: 1.5rem;
            }

            .hero h1 {
                font-size: 2.8rem;
            }

            .hero h2 {
                font-size: 1.5rem;
            }

            .section {
                padding: 4rem 0;
            }
            
            .section-title {
                font-size: 2.2rem;
            }

            .timeline::after {
                left: 31px;
            }

            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }

            .left {
                text-align: left;
            }
            
            .timeline-item::after {
                left: 20px;
            }

            .left::after, .right::after {
                left: 20px;
            }

            .right {
                left: 0;
            }
        }

        @media (max-width: 480px) {
            .hero h1 {
                font-size: 2.2rem;
            }

            .hero h2 {
                font-size: 1.3rem;
            }
            
            .hero-content .btn {
                width: 100%;
                margin-bottom: 1rem;
            }
            
            .hero-content .btn-outline {
                margin-left: 0;
            }

            .section-title {
                font-size: 2rem;
            }

            .btn {
                padding: 0.8rem 1.8rem;
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <a href="#home" class="logo"><?php echo explode(' ', $name)[0]; ?><span><?php echo explode(' ', $name)[1] ?? ''; ?></span></a>
            <div class="hamburger">
                <i class="fas fa-bars"></i>
            </div>
            <nav>
                <ul>
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#qualifications">Qualifications</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container hero-content">
            <h1 data-aos="fade-down"><?php echo $name; ?></h1>
            <h2 data-aos="fade-up" data-aos-delay="200"><span class="typed-text"></span></h2>
            <p data-aos="fade-up" data-aos-delay="400"><?php echo $bio; ?></p>
            <div data-aos="fade-up" data-aos-delay="600">
                <a href="#contact" class="btn">Get In Touch</a>
                <a href="#projects" class="btn btn-outline">My Work</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section" id="about">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">About <span>Me</span></h2>
            <div class="about-content">
                <div class="about-img" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="<?php echo $name; ?>">
                </div>
                <div class="about-text" data-aos="fade-left">
                    <h3>Who am I?</h3>
                    <?php foreach ($about_me as $paragraph): ?>
                        <p><?php echo $paragraph; ?></p>
                    <?php endforeach; ?>
                    <a href="#skills" class="btn">My Skills</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="section" id="skills">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">My <span>Skills</span></h2>
            <div class="skills-container">
                <?php foreach ($skills as $category => $skill_list): ?>
                <div class="skill-category" data-aos="fade-up" data-aos-delay="100">
                    <h3><?php echo $category; ?></h3>
                    <?php foreach ($skill_list as $skill): ?>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span><?php echo $skill['name']; ?></span>
                            <span><?php echo $skill['level']; ?>%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" data-width="<?php echo $skill['level']; ?>%"></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Qualifications Section -->
    <section class="section qualifications" id="qualifications">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">My <span>Qualifications</span></h2>
            <div class="timeline">
                <?php
                $delay = 0;
                $total_items = count($qualifications['left']) + count($qualifications['right']);
                for ($i = 0; $i < $total_items; $i++) {
                    if ($i % 2 == 0) { // Even items go left
                        $item = array_shift($qualifications['left']);
                        $side = 'left';
                    } else { // Odd items go right
                        $item = array_shift($qualifications['right']);
                        $side = 'right';
                    }
                    if ($item) {
                        echo "<div class='timeline-item {$side}' data-aos='fade-up' data-aos-delay='{$delay}'>";
                        echo "<div class='timeline-content'>";
                        echo "<h3>{$item['title']}</h3>";
                        echo "<p>{$item['description']}</p>";
                        echo "</div></div>";
                        $delay += 100;
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="section" id="projects">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">My <span>Projects</span></h2>
            <div class="projects-container">
                <?php foreach ($projects as $index => $project): ?>
                <div class="project-card" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                    <div class="project-img">
                        <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>">
                    </div>
                    <div class="project-info">
                        <h3><?php echo $project['title']; ?></h3>
                        <p><?php echo $project['description']; ?></p>
                        <div class="project-links">
                            <a href="<?php echo $project['live_url']; ?>" target="_blank"><i class="fas fa-external-link-alt"></i> Live Demo</a>
                            <a href="<?php echo $project['code_url']; ?>" target="_blank"><i class="fab fa-github"></i> Code</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section" id="services">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">My <span>Services</span></h2>
            <div class="services-container">
                <?php foreach ($services as $index => $service): ?>
                <div class="service-card" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                    <div class="service-icon">
                        <i class="<?php echo $service['icon']; ?>"></i>
                    </div>
                    <h3><?php echo $service['title']; ?></h3>
                    <p><?php echo $service['description']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section contact" id="contact">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Contact <span>Me</span></h2>
            <div class="contact-container">
                <div class="contact-info" data-aos="fade-right">
                    <h3>Get In Touch</h3>
                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fas fa-phone"></i></div>
                            <div class="contact-text"><h4>Call Me</h4><p><?php echo $contact_info['phone']; ?></p></div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                            <div class="contact-text"><h4>Email Me</h4><a href="mailto:<?php echo $contact_info['email']; ?>"><?php echo $contact_info['email']; ?></a></div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="contact-text"><h4>Location</h4><p><?php echo $contact_info['location']; ?></p></div>
                        </div>
                    </div>
                    <div class="social-links">
                        <?php foreach ($social_links as $platform => $link): ?>
                            <a href="<?php echo $link; ?>" target="_blank" aria-label="<?php echo ucfirst($platform); ?>"><i class="fab fa-<?php echo $platform; ?>"></i></a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="contact-form" data-aos="fade-left">
                    <form action="mailer.php" method="POST"> <!-- Point this to your PHP mailer script -->
                        <div class="form-group"><label for="name">Your Name</label><input type="text" id="name" name="name" required></div>
                        <div class="form-group"><label for="email">Your Email</label><input type="email" id="email" name="email" required></div>
                        <div class="form-group"><label for="subject">Subject</label><input type="text" id="subject" name="subject" required></div>
                        <div class="form-group"><label for="message">Message</label><textarea id="message" name="message" required></textarea></div>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-col">
                    <h3><?php echo $name; ?></h3>
                    <p><?php echo $tagline; ?> creating modern, responsive websites and robust backend systems.</p>
                </div>
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Services</h3>
                    <ul class="footer-links">
                        <?php foreach($services as $service): ?>
                        <li><a href="#services"><?php echo $service['title']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Contact Info</h3>
                    <p><i class="fas fa-map-marker-alt"></i> <?php echo $contact_info['location']; ?></p>
                    <p><i class="fas fa-phone"></i> <?php echo $contact_info['phone']; ?></p>
                    <p><i class="fas fa-envelope"></i> <?php echo $contact_info['email']; ?></p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date("Y"); ?> <?php echo $name; ?>. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#home" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

    <!-- AOS (Animate on Scroll) Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Typed.js (for typing animation) -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {

        // Initialize AOS
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });

        // Typed.js Animation
        if (document.querySelector('.typed-text')) {
            new Typed('.typed-text', {
                strings: ["<?php echo $tagline; ?>", "Programmer", "Problem Solver"],
                typeSpeed: 70,
                backSpeed: 50,
                backDelay: 2000,
                loop: true
            });
        }

        // --- Navigation ---
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('nav ul');
        const navLinks = document.querySelectorAll('nav ul li a');
        const header = document.querySelector('header');

        // Toggle mobile menu
        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            hamburger.classList.toggle('active');
        });

        // Close mobile menu when a link is clicked
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                hamburger.classList.remove('active');
            });
        });
        
        // --- Active Nav Link on Scroll ---
        const sections = document.querySelectorAll('section');
        
        window.addEventListener('scroll', () => {
            // Header scroll effect
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }

            // Active link highlighting
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (pageYOffset >= sectionTop - 150) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(li => {
                li.classList.remove('active');
                if (li.getAttribute('href').includes(current)) {
                    li.classList.add('active');
                }
            });
        });


        // --- Back to Top Button ---
        const backToTopButton = document.querySelector('.back-to-top');
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('active');
            } else {
                backToTopButton.classList.remove('active');
            }
        });

        // --- Animate Skill Bars on Scroll ---
        const skillsSection = document.querySelector('#skills');
        const skillProgressBars = document.querySelectorAll('.skill-progress');

        const skillsObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    skillProgressBars.forEach(bar => {
                        bar.style.width = bar.dataset.width;
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });

        if(skillsSection) {
            skillsObserver.observe(skillsSection);
        }
    });
    </script>
</body>
</html>