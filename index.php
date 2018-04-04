<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Russell Longstaff Web Developer Buckinghamshire England">
    <title>Russell Longstaff Portfolio</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>

<body>

    <header class="header">
        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">
                    Hi I'm <span class="heading-primary--main__name">Russell Longstaff</span>.
                </span>
                <span class="heading-primary--sub">
                    I'm a web developer.
                </span>
            </h1>
            <a href="#projects" class="btn btn--animated scroll_to">See my work</a>
        </div>
    </header>

    <main>

        <section class="section-about section-padding-small">

            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">About</h2>
            </div>

            <div class="row">
                <div class="col-1-of-2">
                    <p class="paragraph">Over the last 12 years my focus has been on the front end with exposure
                        to some backend technologies. I have had some great opportunities working on big brand 
                        fashion ecommerce sites like Matalan, Burberry, Matches Fashion, Lyle &amp; Scott and many others. 
                        My current drive is to move away from the digital marketing domain I currently occupy and move back into full web development
                        so I can progress my career further, into more rewarding and fulfilling opportunities.</p>
                </div>
                <div class="col-1-of-2">
                    <img class="feature-box__img" src="img/about-russ.jpg" alt="Image of Russell Longstaff">
                </div>
            </div>

        </section>

        <section class="section-skills section-padding-small">

            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">Skills</h2> 
            </div>


            <div class="row">
                <div class="col-1-of-3">
                    <div class="feature-box">
                        <h3 class="heading-tertiary u-margin-bottom-small">Beginner</h3>
                        <ul class="format-list-no-markers">
                            <li>React</li>
                            <li>Angular</li>
                            <li>Node</li>
                            <li>PHP</li>
                            <li>MySQL</li>
                            <li>JavaScript</li>
                            <li>jQuery</li>
                            <li>Sass</li>
                            <li>Photoshop</li>
                            <li>Wordpress</li>
                        </ul>
                    </div>
                </div>
                <div class="col-1-of-3">
                    <div class="feature-box">
                        <h3 class="heading-tertiary u-margin-bottom-small">Intermediate</h3>
                        <ul class="format-list-no-markers">
                            <li>CSS</li>
                            <li>HTML</li>
                        </ul>
                    </div>
                </div>
                <div class="col-1-of-3">
                    <div class="feature-box">
                        <h3 class="heading-tertiary u-margin-bottom-small">Expert</h3>
                        <ul class="format-list-no-markers">
                            <li>Not quite yet</li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>

        <section id="projects" class="section-personal-projects section-padding-small">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">Personal Projects</h2>
            </div>

            <div class="row">
                <div class="col-1-of-2">
                    <div class="feature-box">
                        <img srcset="img/booking-request-thumb-1x.jpg 200w, img/booking-request-thumb-2x.jpg 500w" 
                             sizes="(max-width: 56.25em) 30vw, (max-width: 37.5em) 20vw, 200px;"
                             alt="Booking Request System"
                             class="feature-box__img"
                             src="img/booking-request-thumb-2x.jpg">                        
                        
                        <h3 class="heading-tertiary u-margin-bottom-small">Booking Request System</h3>
                    </div>
                </div>
                <div class="col-1-of-2">
                    <p class="paragraph">A project I started to allow users to make holiday booking requests. <br>At the time I had recognised an opportunity to move away from paper-based documenting in my company. We had no available budget to invest in a system so I researched ways to improve the holiday booking process. This was the beginnings of that vision.</p>
                    <p class="paragraph"><strong>The plan</strong> - teach myself the basics of Node, Express, Mongoose and incorporate Bootstrap for a responsive layout. Create a layer of authentication and save users data to a database so that requests could be made and viewed across multiple colleagues that used the system for bookings. It had to be clean, easy and intuitive.</p>
                    <p class="paragraph">You can demo the app by using a random test email address. Once in, make a request and feel free to navigate other user requests by navigating the dropdown menu at the top.</p>
                    <div class="btn-container">
                        <a href="https://rlongstaff-booking-system.herokuapp.com/" class="btn-small btn-small--demo">View Demo</a>
                        <a href="https://gomockingbird.com/projects/27k5ur6/4gXVnC" class="btn-small btn-small--mockup">View Mockup</a>
                        <a href="https://github.com/rllongstaff/booking-system" class="btn-small btn-small--github">View on GitHub</a>    
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-2">
                    <div class="feature-box">
                        <img srcset="img/javascript-game-thumb-1x.jpg 200w, img/javascript-game-thumb-2x.jpg 500w" 
                             sizes="(max-width: 56.25em) 30vw, (max-width: 37.5em) 20vw, 200px;"
                             alt="JavaScript Game"
                             class="feature-box__img"
                             src="img/javascript-game-thumb-2x.jpg">
                             
                        <h3 class="heading-tertiary u-margin-bottom-small">JavaScript Game</h3>
                    </div>
                </div>
                <div class="col-1-of-2">
                    <p class="paragraph">An avid fan of video games, I wanted to try my own hand at creating one for myself. I knew I wasn't an artist and that it would be a huge undertaking, but I thought it would be a great opportunity to learn a bit more about JavaScript.</p>
                    <p class="paragraph"><strong>The plan</strong>- teach myself the basics of vanilla JavaScript by using it to create a small point and click graphic adventure game. I would create my own basic art in Photoshop quickly so that I could focus more on the code involved to get this project running.</p>
                    <p class="paragraph">You can demo the first couple of rooms currently as the rest is incomplete but this should give you an idea of where I was headed with this project. I realise the code is buggy and can be improved vastly to improve performance but every project starts somewhere... right? You can view the code on my GitHub account.</p>
                    <div class="btn-container">
                        <a href="https://rlongstaff-javascript-game.herokuapp.com/Text%20Based%20Adventure/index.html" class="btn-small btn-small--demo">View Demo</a>
                        <a href="https://github.com/rllongstaff/javascript-game" class="btn-small btn-small--github">View on GitHub</a>    
                    </div>
                </div>
            </div>            
        </section>

        <!--
        <section class="section-work section-padding-small">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">Work</h2>
            </div>

            <div class="row">
                <div class="col-1-of-2">
                    <div class="feature-box">
                        <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea nemo, deserunt voluptates debitis quis
                            tempora tenetur, earum ipsa tempore quia repellat? Non mollitia sed, ducimus quia dolores pariatur
                            provident ab?</p>
                    </div>
                </div>
                <div class="col-1-of-2"> 
                    <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea nemo, deserunt voluptates debitis quis tempora
                        tenetur, earum ipsa tempore quia repellat? Non mollitia sed, ducimus quia dolores pariatur provident
                        ab?</p>
                </div>
            </div>
        </section>
        -->

        <section class="section-contact section-padding-small">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">Contact</h2>
            </div>

            <div class="row">
                <div class="contact" id="contact">
                    <div clasws="contact__form">

                    <?php
                    $action=$_REQUEST['action'];
                    if ($action=="")    /* display the contact form */
                        {
                        ?>

                        <form action="#contact" method="POST" class="form" enctype="multipart/form-data">
                            <input type="hidden" name="action" value="submit">
                            <div class="form__group">
                                <input class="form__input" type="text" placeholder="Name" id="name" name="name" required>
                                <label for="name" class="form__label">Name</label>
                            </div>
                            <div class="form__group">
                                <input class="form__input"  type="email" placeholder="Email" id="email" name="email" required>
                                <label for="email" class="form__label">Email</label>
                            </div>                            
                            <div class="form__group">
                                <textarea class="form__textarea" id="your-message" placeholder="Your message" name="message" required></textarea>
                                <label for="your-message" class="form__label">Your message</label>
                            </div>
                            <div class="form__group">
                                <button class="btn btn--white">Submit</button>
                            </div>
                        </form>

                        <?php
                        } 
                    else                /* send the submitted data */
                        {
                        $name=$_REQUEST['name'];
                        $email=$_REQUEST['email'];
                        $message=$_REQUEST['message'];
                        if (($name=="")||($email=="")||($message==""))
                            {
                            echo "All fields are required, please fill <a href=\"\">the form</a> again.";
                            }
                        else{		
                            $from="From: $name<$email>\r\nReturn-path: $email";
                            $subject="Message sent using your contact form";
                            mail("webtest@test.com", $subject, $message, $from);
                            echo '<p class="paragraph form-feedback">Thank you! <br>Your email has been sent. <br>I will be in touch shortly.</p>';
                            }
                        }  
                    ?>                        
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="row">
            <p class="footer__copyright">&copy; Russell Longstaff 2018</p>
            <div class="footer__navigation">
                <ul class="footer__list format-list-no-markers">
                    <li class="footer__item"><a href="https://www.linkedin.com/in/rlongstaff" class="footer__link footer__link--linkedin"><i class="fab fa-linkedin"></i></a></li>
                    <li class="footer__item"><a href="https://github.com/rllongstaff" class="footer__link footer__link--github"><i class="fab fa-github-square"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
    <script src="scripts/main.js"></script>    
</body>

</html>