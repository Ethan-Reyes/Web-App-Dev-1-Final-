<?php
#-- Command to run in terminal to check if this works: php -S localhost:8000 -->
# this is the start of my php, it runs before any of the HTML so the page already knows if the form got sent, I took most of this from the lecture in class on module 4 and from my previous code
# my skills array, same idea as my Module 4 skills list, the foreach loop down below prints it out
$skills = array(
    "C#/.NET",
    "Python (PCEP)",
    "SQL",
    "JavaScript",
    "React Native",
    "Three.js",
    "Jest",
    "JSDOM",
    "Git",
    "PowerShell",
    "Power BI",
    "PLCs and HMIs",
    "AWS Cloud Practitioner",
);

# true if somebody hit Send Message, false when the page is just loading normally
$sent = ($_SERVER["REQUEST_METHOD"] === "POST");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--meta data I copied from the lecture video-->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--I added the description for the SEO part of the rubric-->
    <meta name="description" content="Online resume for Ethan D Reyes, a cloud computing student and automation specialist looking for a controls engineering co-op." />
    <title>Ethan D Reyes | Online Resume</title>

    <!--UIkit is the framework from the lecture video, I picked it over bootstrap like I did on my last resume draft-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/uikit@3.25.21/dist/css/uikit.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.25.21/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.25.21/dist/js/uikit-icons.min.js"></script>

    <!--my own CSS goes AFTER UIkit so mine wins when they fight over the same thing-->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="uk-container">
      <header class="resume-header">
        <!--my picture. alt text is for screen readers. I added the width and height so the page doesn't jump while it loads-->
        <img
          class="profile-photo"
          src="images/ethan_reyes_profile.JPG"
          alt="Picture of Ethan at prom, 2024"
          width="200"
          height="200"
        />

        <div class="header-text">
          <h1>Ethan D Reyes</h1>
          <p class="subtitle">Junior Web Developer, Student at WSU Tech</p>

          <!--my date button from the last resume module. I put data- in front of the uk- parts (uk-icon is data-uk-icon) so the W3C validator doesn't flag them, UIkit still reads them fine-->
          <button
            type="button"
            id="date-button"
            class="uk-button uk-button-primary uk-button-small"
          >
            <span data-uk-icon="icon: calendar" class="uk-margin-small-right"></span>Toggle Date
          </button>
          <span id="current-date" aria-live="polite"></span>
        </div>
      </header>

      <main>
        <!--objective and summary-->
        <section>
          <h2>Objective and Summary</h2>
          <ul>
            <li>
              Current Status: Cloud Computing Student at WSU Tech, AWS Certified
              Cloud Practitioner, and Automation Systems Specialist Intern at
              Automated Treating Systems
            </li>
            <li>Target Role: Controls Engineer Co-Op at Koch Industries</li>
            <li>
              Value Offered: Experience, education, and skills in hardware and
              software development. I am an incredibly driven worker who
              consistently brings results. I am an all in one package when you
              hire me.
            </li>
          </ul>
        </section>

        <!--education-->
        <section>
          <h2>Education</h2>
          <ul>
            <li>High School Diploma</li>
            <li>
              WSU Tech: Technical Certificate in Cloud Application Development
              (earned) and AAS in Cloud Computing and Application Development
              (expected 2027), 4.0 GPA
            </li>
            <li>
              Wichita State University: B.S. in Applied Engineering (planned,
              2029)
            </li>
          </ul>
        </section>

        <!--skills, this list comes from the PHP array at the very top of the file-->
        <section>
          <h2>Skills</h2>
          <ul class="skill-list">
            <?php foreach ($skills as $skill) : ?>
              <li><?php echo $skill; ?></li>
            <?php endforeach; ?>
          </ul>
        </section>

        <!--work experience. this accordion is from the UIkit docs (getuikit.com), I added it for the interactive feature on the rubric. click a job to open it, uk-open makes the first one start open-->
        <section>
          <h2>Work Experience</h2>
          <ul data-uk-accordion>
            <li class="uk-open">
              <a class="uk-accordion-title" href="#">Automation Systems Specialist Intern, Automated Treating Systems (May 2026 to present)</a>
              <div class="uk-accordion-content">
                <ul>
                  <li>Build control panels, update PLC firmware, and set up HMI screens</li>
                  <li>Do CAD and BOM analysis and troubleshoot pump systems</li>
                  <li>Set up a Two-Bin Kanban inventory system and 5S processes that improved efficiency by about 45%</li>
                </ul>
              </div>
            </li>
            <li>
              <a class="uk-accordion-title" href="#">Engineering Assistant / Data &amp; Compliance Contractor, Textron Aviation via Ennovar (September 2025 to May 2026)</a>
              <div class="uk-accordion-content">
                <ul>
                  <li>Supported FAA regulatory compliance</li>
                  <li>Built the AReS 3 Diagnostic Information Webpage for embedded hardware</li>
                  <li>Automated warehouse data entry, which sped up data transfers by two months</li>
                </ul>
              </div>
            </li>
          </ul>
        </section>

        <!--projects. these sit in a grid, one column on a phone and two on a bigger screen (the layout is in style.css)-->
        <section>
          <h2>Projects</h2>
          <div class="project-grid">
                        <!--this card links to my intro to web dev final that's live on netlify-->
            <article class="project-card">
              <h3>Intro to Web Development Final</h3>
              <p>
                A 4-page personal interests website with a circle wheel menu, a
                form with validation, and layouts that stack on phones. Built
                with plain HTML, CSS, and JavaScript.
              </p>
              <p>
                <a href="https://intro-to-web-final-reyes.netlify.app/" target="_blank" rel="noopener">View the site</a>
              </p>
            </article>

            <article class="project-card">
              <h3>Whisper Transcription Pipeline</h3>
              <p>
                A Python pipeline using OpenAI Whisper that turns interview
                recordings into text and cut manual transcription time by 80%.
              </p>
            </article>

            <article class="project-card">
              <h3>FAA Aviation Data Pipeline</h3>
              <p>A C# and Python pipeline that ingests FAA aviation data.</p>
            </article>

            <article class="project-card">
              <h3>AReS 3 Diagnostic Webpage</h3>
              <p>
                An internal web app hosted on a diagnostic hardware box used in
                Textron aircraft. It works as a guided reference for
                technicians.
              </p>
            </article>

            <article class="project-card">
              <h3>Portfolio Site with 3D Globe</h3>
              <p>
                My personal site, built from scratch with an interactive 3D
                visitor globe and Jest tests.
              </p>
              <p>
                <a href="https://reyes-engineering.netlify.app/" target="_blank" rel="noopener">View my portfolio site</a>
              </p>
            </article>
          </div>
        </section>

        <!--contact. id="contact" is there so the form can jump back down to this section after it sends-->
        <section id="contact">
          <h2>Contact</h2>
          <ul>
            <li>Location: Wichita, Kansas</li>
            <li>Email: <a href="mailto:ereyes5@wsutech.edu">ereyes5@wsutech.edu</a></li>
            <li>Work Phone: <a href="tel:3168479296">316-847-9296</a></li>
            <li><a href="https://www.linkedin.com/in/ethan-reyes-88134a388" target="_blank" rel="noopener">LinkedIn</a></li>
            <li><a href="https://github.com/Ethan-Reyes" target="_blank" rel="noopener">GitHub</a></li>
          </ul>

          <!--my Module 5 contact form idea. if the form got sent it shows the info, if not it shows the form-->
          <?php if ($sent) : ?>
            <div class="thank-you">
              <h3>Thank you for contacting me!</h3>
              <p>Your information is below:</p>
              <ul>
                <!--this loop is from my Module 5, it goes through everything that got sent. the empty check skips blank fields-->
                <?php foreach ($_POST as $label => $data) : ?>
                  <?php if (is_string($data) && !empty($data)) : ?>
                    <!--I added htmlspecialchars here so nobody can type code into the form and have it run on my page-->
                    <li>
                      <strong><?php echo htmlspecialchars(ucwords(str_replace("_", " ", $label))); ?>:</strong>
                      <?php echo htmlspecialchars($data); ?>
                    </li>
                  <?php endif; ?>
                <?php endforeach; ?>
              </ul>
              <a href="index.php#contact">Send another message</a>
            </div>
          <?php else : ?>
            <!--I changed this from GET (Module 5) to POST so the info doesn't end up sitting in the web address-->
            <form method="post" action="index.php#contact">
              <p>
                <label class="form-label" for="name">Name</label>
                <input class="uk-input" type="text" name="name" id="name" required />
              </p>
              <p>
                <label class="form-label" for="email">Email Address</label>
                <input class="uk-input" type="email" name="email" id="email" required />
              </p>
              <p>
                <label class="form-label" for="subject">Subject</label>
                <input class="uk-input" type="text" name="subject" id="subject" required />
              </p>
              <p>
                <label class="form-label" for="message">Message</label>
                <textarea class="uk-textarea" name="message" id="message" rows="5" required></textarea>
              </p>
              <p>
                <button type="submit" class="uk-button uk-button-primary">Send Message</button>
              </p>
            </form>
          <?php endif; ?>
        </section>
      </main>

      <footer class="site-footer">
        <p>&copy; 2026 Ethan D Reyes</p>
      </footer>
    </div>

    <!--my javascript goes at the bottom so the page loads first-->
    <script src="script.js"></script>
  </body>
</html>