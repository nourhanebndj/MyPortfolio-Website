<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nourhane - Personal Portfolio</title>

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="./assets/images/logo.ico" type="image/x-icon">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="./style.css">

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

    <!--
    - #MAIN
  -->

    <main>

        <!--
      - #SIDEBAR
    -->

        <aside class="sidebar" data-sidebar>

            <div class="sidebar-info">

                <figure class="avatar-box">
                    <img src="./assets/Avatarme.jpg" alt="Bendjeddou Nourhane" width="80">
                </figure>

                <div class="info-content">
                    <h1 class="name" title="Bendjeddou Nourhane">Bendjeddou Nourhane</h1>

                    <p class="title">
                        Backend Developer,<br>
                        Data Analyst,<br>
                        & WordPress Developer.
                    </p>

                </div>

                <button class="info_more-btn" data-sidebar-btn>
                    <span>Show Contacts</span>

                    <ion-icon name="chevron-down"></ion-icon>
                </button>

            </div>

            <div class="sidebar-info_more">

                <div class="separator"></div>

                <ul class="contacts-list">

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Email</p>

                            <a href="mailto:nourhanebndj@gmail.com" class="contact-link">nourhanebndj@gmail.com</a>
                        </div>

                    </li>

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="phone-portrait-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Phone</p>

                            <a href="tel:+12133522795" class="contact-link">+213 658934340</a>
                        </div>

                    </li>

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Birthday</p>

                            <time datetime="1982-06-23">17 September, 2003</time>
                        </div>

                    </li>

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Location</p>

                            <address>Annaba, Algeria</address>
                        </div>

                    </li>

                </ul>

                <div class="separator"></div>

                <ul class="social-list">

                    <li class="social-item">
                        <a href="https://www.facebook.com/profile.php?id=100027476321541" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li class="social-item">
                        <a href="https://www.linkedin.com/in/nourhane-bendjeddou-a4252625b/" class="social-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                    <li class="social-item">
                        <a href="https://github.com/nourhanebndj" class="social-link">
                            <ion-icon name="logo-github"></ion-icon>
                        </a>
                    </li>
                    <li class="social-item">
                        <a href="https://wa.me/213658934340" class="social-link">
                            <ion-icon name="logo-whatsapp"></ion-icon>
                        </a>
                    </li>
                </ul>

            </div>

        </aside>





        <!--
      - #main-content
    -->

        <div class="main-content">

            <!--
        - #NAVBAR
      -->

            <nav class="navbar">

                <ul class="navbar-list">

                    <li class="navbar-item">
                        <button class="navbar-link  active" data-nav-link>About</button>
                    </li>

                    <li class="navbar-item">
                        <button class="navbar-link" data-nav-link>Resume</button>
                    </li>

                    <li class="navbar-item">
                        <button class="navbar-link" data-nav-link>Portfolio</button>
                    </li>
                    <li class="navbar-item">
                        <button class="navbar-link" data-nav-link>Contact</button>
                    </li>

                </ul>

            </nav>





            <!--
        - #ABOUT
      -->

            <article class="about  active" data-page="about">

                <header>
                    <h2 class="h2 article-title">About me</h2>
                </header>

                <section class="about-text">
                    <p>
                        Hey there! I'm Nourhane, a tech enthusiast from Annaba, Algeria. With a degree in Information
                        Systems from Badji Mokhtar University, I have a strong passion for all things digital. My
                        expertise spans web and mobile development, where I specialize in creating user-friendly
                        applications with a keen eye for detail. Additionally, I'm deeply involved in data analysis,
                        leveraging my skills to turn complex data into actionable insights. Whether it's developing a
                        new app, designing a website, or analyzing data to drive business decisions, I thrive on
                        bringing innovative tech solutions to life.
                    </p>
                </section>


                <!--
          - service
        -->

                <section class="service">

                    <h3 class="h3 service-title">What i'm doing</h3>

                    <ul class="service-list">

                        <li class="service-item">

                            <div class="service-icon-box">
                                <img src="./assets/icon_wordpress.png" alt="design icon" width="40">
                            </div>

                            <div class="service-content-box">
                                <h4 class="h4 service-item-title">wordpress design</h4>

                                <p class="service-item-text">
                                    A cutting-edge, visually stunning design that showcases my expertise as a WordPress
                                    designer, with sleek, responsive layouts and high-quality visuals, reflecting a
                                    professional and modern aesthetic. </p>
                            </div>

                        </li>

                        <li class="service-item">

                            <div class="service-icon-box">
                                <img src="./assets/icon-dev.svg" alt="Web development icon" width="40">
                            </div>

                            <div class="service-content-box">
                                <h4 class="h4 service-item-title">Web development</h4>

                                <p class="service-item-text">
                                    A top-tier, professional-grade web development service, delivering sleek,
                                    responsive, and high-performance websites that exemplify modern standards and best
                                    practices. </p>
                            </div>

                        </li>

                        <li class="service-item">

                            <div class="service-icon-box">
                                <img src="./assets/icon-app.svg" alt="mobile app icon" width="40">
                            </div>

                            <div class="service-content-box">
                                <h4 class="h4 service-item-title">Mobile apps</h4>

                                <p class="service-item-text">
                                    Expert-level development of iOS and Android applications, ensuring high performance,
                                    seamless user experience, and adherence to the latest industry standards. </p>
                            </div>

                        </li>

                        <li class="service-item">

                            <div class="service-icon-box">
                                <img src="./assets/icon_analyst.png" alt="analyst icon" width="40">
                            </div>

                            <div class="service-content-box">
                                <h4 class="h4 service-item-title">Data Analysis</h4>

                                <p class="service-item-text">
                                    I deliver professional-level data analysis with the same precision and quality that
                                    defined my high-quality photography. </p>
                            </div>

                        </li>

                    </ul>

                </section>


                <!--
          - testimonials
        -->

                <section class="testimonials">

                    <h3 class="h3 testimonials-title">Testimonials</h3>

                    <ul class="testimonials-list has-scrollbar">

                        <li class="testimonials-item">
                            <div class="content-card" data-testimonials-item>

                                <figure class="testimonials-avatar-box">
                                    <img src="./assets/avatar-1.png" alt="Daniel lewis" width="60"
                                        data-testimonials-avatar>
                                </figure>

                                <h4 class="h4 testimonials-item-title" data-testimonials-title>alkhaldi00's</h4>

                                <div class="testimonials-text" data-testimonials-text>
                                    <p>
                                        Nourhane is truly exceptional with her expertise in WordPress. Her skills and
                                        knowledge make her an invaluable asset to any team.
                                    </p>
                                </div>

                            </div>
                        </li>

                        <li class="testimonials-item">
                            <div class="content-card" data-testimonials-item>

                                <figure class="testimonials-avatar-box">
                                    <img src="./assets/avatar-2.png" alt="Jessica miller" width="60"
                                        data-testimonials-avatar>
                                </figure>

                                <h4 class="h4 testimonials-item-title" data-testimonials-title>Sarah Aya</h4>

                                <div class="testimonials-text" data-testimonials-text>
                                    <p>
                                        Wanna express my deep gratitude to you for your exceptional work on my website!
                                        Your expertise and creativity have brought my project to life in an incredible
                                        way😭 I am thrilled with the final result BRAVO😍BEST DEVELOPER💜
                                    </p>
                                </div>

                            </div>
                        </li>

                        <li class="testimonials-item">
                            <div class="content-card" data-testimonials-item>

                                <figure class="testimonials-avatar-box">
                                    <img src="./assets/avatar-1.png" alt="Emily evans" width="60"
                                        data-testimonials-avatar>
                                </figure>

                                <h4 class="h4 testimonials-item-title" data-testimonials-title>Islem</h4>

                                <div class="testimonials-text" data-testimonials-text>
                                    <p>
                                        I want to extend my deepest gratitude to our exceptional developer in Belfort!
                                        Their expertise and creativity have brought my eCommerce site to life in an
                                        incredible way. I am absolutely thrilled with the final result! Bravo for truly
                                        outstanding work!
                                    </p>
                                </div>

                            </div>
                        </li>

                        <li class="testimonials-item">
                            <div class="content-card" data-testimonials-item>

                                <figure class="testimonials-avatar-box">
                                    <img src="./assets/avatar-4.png" alt="Henry william" width="60"
                                        data-testimonials-avatar>
                                </figure>

                                <h4 class="h4 testimonials-item-title" data-testimonials-title>mohamedhusse130's</h4>

                                <div class="testimonials-text" data-testimonials-text>
                                    <p>
                                        Nourhane is very professional and she did a good work to me
                                    </p>
                                </div>

                            </div>
                        </li>

                    </ul>

                </section>


                <!--
          - testimonials modal
        -->

                <div class="modal-container" data-modal-container>

                    <div class="overlay" data-overlay></div>

                    <section class="testimonials-modal">

                        <button class="modal-close-btn" data-modal-close-btn>
                            <ion-icon name="close-outline"></ion-icon>
                        </button>

                        <div class="modal-img-wrapper">
                            <figure class="modal-avatar-box">
                                <img src="./assets/avatar-1.png" alt="Daniel lewis" width="80" data-modal-img>
                            </figure>

                            <img src="./assets/icon-quote.svg" alt="quote icon">
                        </div>

                        <div class="modal-content">

                            <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>

                            <time datetime="2021-06-14">14 June, 2021</time>

                            <div data-modal-text>
                                <p>
                                    Richard was hired to create a corporate identity. We were very pleased with the work
                                    done. She has a
                                    lot of experience
                                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet,
                                    ullamcous cididt
                                    consectetur adipiscing
                                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                                </p>
                            </div>

                        </div>

                    </section>

                </div>
            </article>





            <!--
        - #RESUME
      -->

            <article class="resume" data-page="resume">

                <header>
                    <h2 class="h2 article-title">Resume</h2>
                </header>

                <section class="timeline">

                    <div class="title-wrapper">
                        <div class="icon-box">
                            <ion-icon name="book-outline"></ion-icon>
                        </div>

                        <h3 class="h3">Education</h3>
                    </div>

                    <ol class="timeline-list">
                        <li class="timeline-item">

                            <h4 class="h4 timeline-item-title">Baccalaureate and Startup Degree</h4>

                            <span>Badji Mokhtar Annaba University
                                June 2024</span>

                            <p class="timeline-text">
                                I graduated from University Badji Mokhtar Annaba with a Bachelor's Degree in Computer
                                Science, achieving an outstanding GPA of 19/20. This rigorous program provided me with a
                                solid foundation in various areas of computer science, including programming, data
                                structures, algorithms, and software development. My academic performance reflects my
                                dedication and deep understanding of the subject matter, preparing me for a successful
                                career in the tech industry.
                            </p>

                        </li>

                        <li class="timeline-item">

                            <h4 class="h4 timeline-item-title"> Baccalaureate Degree </h4>

                            <span>Laarbi Ben Mhidi high school
                                Sep 2018 Jun 2021</span>

                            <p class="timeline-text">
                                I earned my Baccalaureate in Science from Laarbi Ben Mhidi, completing my studies in
                                June 2024. This achievement marked a significant milestone in my academic journey,
                                laying the groundwork for my future studies in computer science. The program equipped me
                                with a strong grasp of scientific principles and analytical skills, which I have carried
                                forward into my higher education and professional pursuits.
                            </p>

                        </li>
                    </ol>

                </section>

                <section class="timeline">

                    <div class="title-wrapper">
                        <div class="icon-box">
                            <ion-icon name="book-outline"></ion-icon>
                        </div>

                        <h3 class="h3">Experience</h3>
                    </div>

                    <ol class="timeline-list">

                        <li class="timeline-item">

                            <h4 class="h4 timeline-item-title"> WordPress Designer </h4>

                            <span>Remote Job, Annaba
                                Jun 2022 - Present
                                (Zemedia, Montpellier, France)</span>

                            <p class="timeline-text">
                                Experienced in building websites using WordPress, Elementor, and Divi since 2023, I am
                                proficient in customizing themes and plugins to create visually appealing and functional
                                websites. My expertise extends to optimizing layouts for responsiveness, ensuring an
                                enhanced user experience across various devices.
                            </p>

                        </li>

                        <li class="timeline-item">

                            <h4 class="h4 timeline-item-title">Web Developer</h4>

                            <span>Freelance, Annaba
                                Jun 2022 - Present</span>

                            <p class="timeline-text">
                                I have excelled as a web developer proficient in HTML, CSS, JavaScript, PHP, and
                                Laravel. I have created responsive front-end interfaces using HTML and CSS, complemented
                                by dynamic features implemented in JavaScript. On the back end, I have developed robust
                                solutions with PHP and Laravel, ensuring seamless data processing and application logic.
                                Thriving in agile environments, I consistently deliver scalable web solutions with a
                                strong focus on quality and collaboration.
                            </p>

                        </li>

                        <li class="timeline-item">

                            <h4 class="h4 timeline-item-title">App Developer</h4>

                            <span>Freelance, Annaba
                                Sep 2023 - Present</span>

                            <p class="timeline-text">
                                I specialize in mobile app development using Flutter and React Native, with a focus on
                                efficient state management through Bloc and Provider. I have implemented Bloc for
                                managing complex states, effectively separating business logic from UI, and utilized
                                Provider for dependency injection, ensuring scalable and maintainable applications.
                                Through cross-functional collaboration, I have designed and developed feature-rich
                                mobile apps that prioritize user experience and adhere to software architecture best
                                practices.
                            </p>

                        </li>

                        <li class="timeline-item">

                            <h4 class="h4 timeline-item-title"> Data Analyst </h4>

                            <span>Freelance, Annaba
                                Jan 2024 - Present</span>

                            <p class="timeline-text">
                                I have conducted data analysis using Python, leveraging libraries such as NumPy, Pandas,
                                Seaborn, and Matplotlib to extract meaningful insights. In addition, I performed
                                statistical analysis and data visualization with R, making sense of complex datasets. My
                                experience includes managing and querying databases using SQL for efficient data
                                extraction and manipulation. I have also developed interactive dashboards and reports
                                using Power BI and Excel, enabling data-driven decision-making. Through these efforts, I
                                provided data-driven insights and recommendations to improve business processes and
                                strategies.
                            </p>

                        </li>
                    </ol>

                </section>

                <section class="skill">

                    <h3 class="h3 skills-title">My skills</h3>

                    <ul class="skills-list content-card">

                        <li class="skills-item">

                            <div class="title-wrapper">
                                <h5 class="h5">HTML</h5>
                                <data value="80">90%</data>
                            </div>

                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: 90%;"></div>
                            </div>

                        </li>

                        <li class="skills-item">

                            <div class="title-wrapper">
                                <h5 class="h5">Css</h5>
                                <data value="70">90%</data>
                            </div>

                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: 90%;"></div>
                            </div>

                        </li>
                        <li class="skills-item">

                            <div class="title-wrapper">
                                <h5 class="h5">JavaScript</h5>
                                <data value="50">80%</data>
                            </div>

                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: 80%;"></div>
                            </div>

                        </li>

                        <li class="skills-item">

                            <div class="title-wrapper">
                                <h5 class="h5">PHP</h5>
                                <data value="90">80%</data>
                            </div>

                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: 80%;"></div>
                            </div>

                        </li>

                        <li class="skills-item">

                            <div class="title-wrapper">
                                <h5 class="h5">Laravel</h5>
                                <data value="50">80%</data>
                            </div>

                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: 80%;"></div>
                            </div>

                        </li>
                        <li class="skills-item">

                            <div class="title-wrapper">
                                <h5 class="h5">Laravel</h5>
                                <data value="50">80%</data>
                            </div>

                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: 80%;"></div>
                            </div>

                        </li>
                        <li class="skills-item">

                            <div class="title-wrapper">
                                <h5 class="h5">SQL</h5>
                                <data value="50">90%</data>
                            </div>

                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: 90%;"></div>
                            </div>

                        </li>
                        <li class="skills-item">

                            <div class="title-wrapper">
                                <h5 class="h5">Python</h5>
                                <data value="50">80%</data>
                            </div>

                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: 80%;"></div>
                            </div>

                        </li>
                        <li class="skills-item">

                            <div class="title-wrapper">
                                <h5 class="h5">Power Bi</h5>
                                <data value="50">80%</data>
                            </div>

                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: 80%;"></div>
                            </div>

                        </li>
                        <li class="skills-item">

                            <div class="title-wrapper">
                                <h5 class="h5">language R</h5>
                                <data value="50">70%</data>
                            </div>

                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: 70%;"></div>
                            </div>

                        </li>
                        <li class="skills-item">

                            <div class="title-wrapper">
                                <h5 class="h5">Fltter & Dartu</h5>
                                <data value="50">80%</data>
                            </div>

                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: 80%;"></div>
                            </div>

                        </li>
                        <li class="skills-item">

                            <div class="title-wrapper">
                                <h5 class="h5">React Native</h5>
                                <data value="50">80%</data>
                            </div>

                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: 80%;"></div>
                            </div>

                        </li>

                    </ul>

                </section>

            </article>





            <!--
        - #PORTFOLIO
      -->

            <article class="portfolio" data-page="portfolio">

                <header>
                    <h2 class="h2 article-title">Portfolio</h2>
                </header>

                <section class="projects">

                    <ul class="filter-list">

                        <li class="filter-item">
                            <button class="active" data-filter-btn>All</button>
                        </li>

                        <li class="filter-item">
                            <button data-filter-btn>Wordpress</button>
                        </li>

                        <li class="filter-item">
                            <button data-filter-btn>Applications</button>
                        </li>

                        <li class="filter-item">
                            <button data-filter-btn>Web development</button>
                        </li>
                        <li class="filter-item">
                            <button data-filter-btn>Big Data</button>
                        </li>


                    </ul>

                    <div class="filter-select-box">

                        <button class="filter-select" data-select>

                            <div class="select-value" data-selecct-value>Select category</div>

                            <div class="select-icon">
                                <ion-icon name="chevron-down"></ion-icon>
                            </div>

                        </button>

                        <ul class="select-list">

                            <li class="select-item">
                                <button data-select-item>All</button>
                            </li>

                            <li class="select-item">
                                <button data-select-item>Wordpress</button>
                            </li>

                            <li class="select-item">
                                <button data-select-item>Applications</button>
                            </li>

                            <li class="select-item">
                                <button data-select-item>Web development</button>
                            </li>
                            <li class="select-item">
                                <button data-select-item>Big Data </button>
                            </li>
                        </ul>

                    </div>

                    <ul class="project-list">

                        <li class="project-item  active" data-filter-item data-category="web development">
                            <a href="https://github.com/nourhanebndj/EducationCourses">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/educationdz.png" alt="Educations Courses" loading="lazy">
                                </figure>

                                <h3 class="project-title">Education Courses</h3>

                                <p class="project-category">Web development</p>

                            </a>
                        </li>

                        <li class="project-item  active" data-filter-item data-category="web development">
                            <a href="https://github.com/nourhanebndj/Travel-Tour">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/traveltour.png" alt="orizon" loading="lazy">
                                </figure>

                                <h3 class="project-title">Travel Tour</h3>

                                <p class="project-category">Web development</p>

                            </a>
                        </li>

                        <li class="project-item  active" data-filter-item data-category="Wordpress">
                            <a href="#">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/ECLATY.png" alt="Eclaty" loading="lazy">
                                </figure>

                                <h3 class="project-title">Eclaty Blog</h3>

                                <p class="project-category">Wordpress</p>

                            </a>
                        </li>
                        <li class="project-item  active" data-filter-item data-category="Wordpress">
                            <a href="https://belfortdzair.com/">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/belfort.png" alt="BelfortDzair" loading="lazy">
                                </figure>

                                <h3 class="project-title">BelfortDzair</h3>

                                <p class="project-category">Wordpress</p>

                            </a>
                        </li>
                        <li class="project-item  active" data-filter-item data-category="Wordpress">
                            <a href="https://breizh-agency.fr/">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/Breizh.png" alt="Eclaty" loading="lazy">
                                </figure>

                                <h3 class="project-title">Breizh Agency</h3>

                                <p class="project-category">Wordpress</p>

                            </a>
                        </li>
                        <li class="project-item  active" data-filter-item data-category="Wordpress">
                            <a href="https://nerolia-proprete.fr/">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/Nerolia.png" alt="Eclaty" loading="lazy">
                                </figure>

                                <h3 class="project-title">Nerolia Proprete & service</h3>

                                <p class="project-category">Wordpress</p>

                            </a>
                        </li>
                        <li class="project-item  active" data-filter-item data-category="Wordpress">
                            <a href="https://plombi.live-website.com/">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/Plombi.png" alt="PlombierReppaire" loading="lazy">
                                </figure>

                                <h3 class="project-title">PlombierReppaire</h3>

                                <p class="project-category">Wordpress</p>

                            </a>
                        </li>
                        <li class="project-item  active" data-filter-item data-category="Wordpress">
                            <a href="https://efenergiesolutions.fr/">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/EfEnergie.png" alt="Ef Energie" loading="lazy">
                                </figure>

                                <h3 class="project-title">Ef Energies Solutions</h3>

                                <p class="project-category">Wordpress</p>

                            </a>
                        </li>
                        <li class="project-item  active" data-filter-item data-category="Wordpress">
                            <a href="https://ad-eaupro.fr/">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/Adapte.png" alt="Adepte" loading="lazy">
                                </figure>

                                <h3 class="project-title">Adepte & Codiak's</h3>

                                <p class="project-category">Wordpress</p>

                            </a>
                        </li>
                        <li class="project-item  active" data-filter-item data-category="applications">
                            <a href="https://github.com/nourhanebndj/MedApp">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/flutter.png" alt="" loading=" lazy">
                                </figure>

                                <h3 class="project-title">MedAPP</h3>

                                <p class="project-category">Applications</p>

                            </a>
                        </li>
                        <li class="project-item  active" data-filter-item data-category="applications">
                            <a href="https://github.com/nourhanebndj/Astrolabs">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/astrolabs.png" alt="" loading=" lazy">
                                </figure>

                                <h3 class="project-title">Astrolabs</h3>

                                <p class="project-category">Applications</p>

                            </a>
                        </li>
                    </ul>

                </section>

            </article>

            <!--
        - #CONTACT
      -->

            <article class="contact" data-page="contact">

                <header>
                    <h2 class="h2 article-title">Contact</h2>
                </header>

                <section class="mapbox" data-mapbox>
                    <figure>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102080.76882001024!2d7.744464949999999!3d36.91368995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f007bb034e7571%3A0x28fddce8b255b712!2sAnnaba!5e0!3m2!1sfr!2sdz!4v1724864891947!5m2!1sfr!2sdz"
                            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                </section>

                <section class="contact-form">

                    <h3 class="h3 form-title">Contact Form</h3>

                    <form action="traitement.php" method="post" class="form" data-form>

                        <div class="input-wrapper">
                            <input type="text" name="fullname" class="form-input" placeholder="Full name" required
                                data-form-input>

                            <input type="email" name="email" class="form-input" placeholder="Email address" required
                                data-form-input>
                        </div>

                        <textarea name="message" class="form-input" placeholder="Your Message" required
                            data-form-input></textarea>

                        <button class="form-btn" type="submit" disabled data-form-btn>
                            <ion-icon name="paper-plane"></ion-icon>
                            <span>Send Message</span>
                        </button>

                    </form>

                </section>

            </article>

        </div>

    </main>






    <!--
    - custom js link
  -->
    <script src="./script.js"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>