<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="resources/css/main.css">
        <link rel="stylesheet" href="resources/fonts/fonts.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, height=device-height" />

        <link rel="icon" type="image/png" href="resources/pics/favicon.png" />
        <!--[if IE]><link rel="shortcut icon" type="image/png" href="resources/pics/favicon.png" /><![endif]-->

        <script src="resources/js/jquery.js"></script>
        <script src="resources/js/jquery.smooth-scroll.js"></script>
        <script>
            // Initializing Smooth Scroll plugin
            $(document).ready(function() {
              $('a.scroll').click(function(event) {
                event.preventDefault();
                var link = this;
                $.smoothScroll({
                  scrollTarget: link.hash,
                  direction: 'top',
                  speed: 'auto',
                  autoCoefficient: 2
                });
              });
              $('a.hozscroll').click(function(event) {
                event.preventDefault();
                var link = this;
                window.tmp666 = link.hash;
                $.smoothScroll({
                  scrollTarget: '#middle',
                  direction: 'top',
                  speed: 'auto',
                  autoCoefficient: 2,
                  afterScroll: function(options) {
                      var target = window.tmp666;
                          $.smoothScroll({
                            scrollTarget: target,
                            direction: 'left',
                            speed: 'auto',
                            autoCoefficient: 2,
                            beforeScroll: function(options) {
                              if (options.scrollTarget == '#middle') {
                                  $(document.body)[0].setAttribute("style", "overflow-x:hidden;");
                              }
                              else {
                                  $(options.scrollTarget)[0].setAttribute("style", "opacity:1;");
                                  $(document.body)[0].setAttribute("style", "overflow:hidden;");
                              }
                          },
                              afterScroll: function(options) {
                                if (options.scrollTarget == '#middle') {
                                    $( ".project" ).each(function(index, element) {
                                        element.setAttribute("style", "opacity: 0;");
                                    });
                                }
                              }

                          });
                  }
                });
              });
            });
        </script>

        <title>Hello. I'm a title.</title>
    </head>
    <body>
        <section id="top" class="flex-column">
            <div id="top_decoration"></div>
            <img id="top_photo" src="resources/pics/me.jpg" alt="That's me" />
            <h1>Hi! I make<br><strong>websites.</strong></h1>
            <p>
                Web applications, cool designs, nice animations. And a lot of unuseful random stuff too. <a class="scroll" href="#middle"><strong>Check it out!</strong></a>  (warranty void if used - keep away from fire - copyright lololol - maximum temperature 152 K - products not included.)
            </p>
        </section>
        <section id="middle">
            <div id="middle_decoration" class="flex-column">
                <h1>Here's some of my work.<br />
                    <a class="scroll" href="#contact">Wanna chat?</a></h1>
            </div>
            <a class="hozscroll" href="#project_1">
                <article id="work_1">
                    <h1>ORNE</h1>
                    <p>A secure & confidential social platform.</p>
                </article>
            </a>
            <a class="hozscroll" href="#project_2">
                <article id="work_2">
                    <h1>/idontcare</h1>
                    <p>I don't care. I really don't.</p>
                </article>
            </a>
            <a class="hozscroll" href="#project_3">
                <article id="work_3">
                    <h1>/life</h1>
                    <p>Game Of Life, designed for the 21st century.</p>
                </article>
            </a>
            <a class="hozscroll" href="#project_4">
                <article id="work_4">
                    <h1>&lt;codebrew/&gt;</h1>
                    <p>Garage web hosting for students.</p>
                </article>
            </a>
        </section>
        <section class="project" id="project_1">
            <article class="flex-column">
                <h1>ORNE Network</h1>
                <p>
                    "Big Brother is watching you, take him down". ORNE is the largest project I ever started - and it's been in pre-alpha state for years now. At the beginning, the concept was rather simple: a web framework to allow transparent OpenPGP encryption of sensitive data, with keys and accounts management so that you won't have to worry about the technical stuff. But that concept evolved into a social network demonstrating the use of the base framework, and a direct message web-application, and so on...
                    <br />
                    Rumors says that ORNE will never release, but everyone agree that if it does, it will be BIG.
                </p>
                <div>
                    <a class="hozscroll" href="#middle">Go back</a>
                    <a target="_blank" href="https://orne.network/">Go to homepage</a>
                </div>
            </article>
            <div></div>
        </section>
        <section class="project" id="project_2">
            <article class="flex-column">
                <h1>I don't care.</h1>
                <p>
                    I don't care. In fact, no one does. Use this page to tell people that you are not interested, with a universal language: GIFs.
                </p>
                <div>
                    <a class="hozscroll" href="#middle">Go back</a>
                    <a target="_blank" href="/idontcare">Go to homepage</a>
                </div>
            </article>
            <div></div>
        </section>
        <section class="project" id="project_3">
            <article class="flex-column">
                <h1>/life</h1>
                <p>
                    You want to impress people with a computer screen that looks like you're controlling an army of bacterias? You just want to have "fun" watching life cells? With /life, never choose again: you can do BOTH in one beautifully designed Game Of Life spanning all accross your screen. Tips: Use the R key to play/pause the algorithm, and change cells state with your mouse.
                </p>
                <div>
                    <a class="hozscroll" href="#middle">Go back</a>
                    <a target="_blank" href="/life">Go to homepage</a>
                </div>
            </article>
            <div></div>
        </section>
        <section class="project" id="project_4">
            <article class="flex-column">
                <h1>&lt;codebrew/&gt;</h1>
                <p>
                    Codebrew began as a "random stuff online box" where I used to test websites concepts and some friends uploaded memes. Later, the need for a real hosting space of our own was felt, and we eventually found codebrew was a cool name. We provide free web hosting for students, and random memes repositories.
                </p>
                <div>
                    <a class="hozscroll" href="#middle">Go back</a>
                    <a target="_blank" href="https://codebrew.fr/">Go to homepage</a>
                </div>
            </article>
            <div></div>
        </section>
        <section id="contact">
            <div id="bottom_decoration" class="flex-column">
                <?php
                    if (isset($_POST)) {
                        foreach ($_POST as $key => $value) {
                            $_POST['key'] = htmlspecialchars($value);
                        }
                    }
                    if (!empty($_POST['email']) && !empty($_POST['message']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                        $email = 'square@ornenet.fr';
                        $to = $email;
                        $subject = 'Message from square.codebrew.fr';
                        $message = 'Message from square.codebrew.fr : <br /><br />' . $_POST['message'];
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                        $headers .= "From: " . $_POST['name'] . " <" . $_POST['email'] . ">" . "\r\n";
                        mail($to, $subject, $message, $headers);
                        echo '<h1>Thank you!</h1>';
                    } else {
                echo '<form method="post" action="#contact" class="flex-column">
                    <h1>Drop me a mail!</h1>
                    <input type="text" name="name" placeholder="Your name" />
                    <input type="email" name="email" placeholder="Your email" required />
                    <textarea name="message" placeholder="Hello!" spellcheck="true" required></textarea>
                    <input type="submit" value="Send!" />
                </form>
                '; } ?>
            </div>
            <footer>
                <p>© 2015-<?php print(date("Y")); ?>. All rights reserved.</p>
            </footer>
        </section>
    </body>
</html>
