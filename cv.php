
<!-- This program creates the Ashesi CV Template-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Profile section (to be filled by user form data)-->
    <a href="cv.html" download="cv.html">Download</a>
    <div class="container">
        <div class="profile-section">
            <p id="name"><span id="first"></span> <span id="middle"></span> <span id="last"></span></p>
            <p id="gender"></p>
            <p id="address"></p>
            <p id="phone"></p>
            <p id="mail"></p>
        </div>
        <!-- Education-->
        <div id="education">
            <h3>EDUCATION</h3>
            <hr>
            <span id="left"><b>Ashesi University<br>BSc. Computer Science</b><br><br></span>
            <span id="right"><b>Eastern Region, Ghana<br>Expected date of graduation: June 2022</b><br><br></span>

            <span id="left"><b>University of Pennsylvania<br>Computational Science Programme</b><br><br></span>
            <span id="right"><b>Pennsylvania, U.S.A<br>May - July 2020</b><br><br></span>

            <span id="left"><b>St. Augustine's College<br>*BUSINES (WASSCE)</b></span>
            <span id="right"><b>Central Region, Ghana<br>September 2014 - June 2017</b></span> 
        </div>
        <br>
        <!-- Achievements and Awards-->
        <div id="awards">
            <h3 id="special_style">ACHIEVEMENTS/AWARDS</h3>
            <hr>
            <span id="left"><b>The MasterCard Foundation Scholarship Program,</b> Ashesi University<br><br></span>
            <span id="right"><b>2018 - 2022</b><br><br></span>

            <span id="left"><b>Dean's List,</b> Ashesi University<br><br></span>
            <span id="right"><b>2018 - 2020</b><br><br></span>

            <span id="left"><b>Certificate, Best Performance in WASSCE 2017,</b> St. Augustine's College<br></span>
            <span id="right"><b>March 2018</b><br></span>
        </div>
        <!-- Work experience-->
        <div id="work">
            <h3>WORK EXPERIENCE</h3>
            <hr>
            <span id="left"><b>NEXTi2i,</b> Ghana<br></span>
            <span id="right"><b>Present</b><br></span>
            <span id="left"><b>Research Support Intern</b>
                <ul>
                    <li>Conducted secondary research on all business and technological hubs in Ghana to create a network.</li>
                    <li>Transcribed interviews by the hub owners into case studies for analysis.</li>
                    <li>Developed Business Model Canvases using the transcribed interviews to track each hub’s business model.</li>
                </ul>
            </span>
            <br><br>
            <span id="left"><b>Ashesi University Design Lab,</b> Ghana<br></span>
            <span id="right"><b>September 2017 - May 2018</b><br></span>
            <span id="left"><b>Program Assistant Intern</b>
                <ul>
                    <li>Monitored progress of projects through weekly discussions of milestones with Project Leads.</li>
                    <li>Reported performance of projects to the Project Coordinator for easy supervision.</li>
                    <li>Provided logistics to Project Leads for project activities to run effectively.</li>
                </ul>
            </span>
        </div>
        <!-- Projects and Research-->
        <div id="project">
            <h3>PROJECTS AND RESEARCH</h3>
            <hr>
            <span id="left"><b>Elpidia Project</b><br></span>
            <span id="right"><b>Present</b><br></span>
            <span id="left"><b>Co-Lead</b>
                <ul>
                    <li>Designing an app that greatly eases the rather painstaking process of recording students’
                        progress while encouraging every teacher to interact with technology.</li>
                </ul>
            </span>
            <br><br>
            <span id="left"><b>Terra DB Project</b><br></span>
            <span id="right"><b>February 2020</b><br></span>
            <span id="left"><b>Team Member</b>
                <ul>
                    <li>Designed a user interface in a team to aid in collecting information about observatories and
                        “galamsey” events in Ghana using java, java Fx and MySql.</li>
                </ul>
            </span>
            <br><br>
            <span id="left"><b>DiscreteVille Project</b><br></span>
            <span id="right"><b>December 2019</b><br></span>
            <span id="left"><b>Team Member</b>
                <ul>
                    <li>Designed and implemented an algorithm to determine the transitive closure of any relation
                        with the help of Warshall’s algorithm using python.</li>
                </ul>
            </span>
            <br><br>
            <span id="left"><b>Pizza Delivery System</b><br></span>
            <span id="right"><b>May 2019</b><br></span>
            <span id="left"><b>Team Member</b>
                <ul>
                    <li>Designed the front end of the website with a team to enable students order
                        for pizza by delivery using html, css, javascript bootstrap, etc.</li> 
                </ul>
            </span>
        </div>
        <!-- Extra curricular activities-->
        <div id="curricular">
            <h3>CO - CURRICULAR ACTIVITIES</h3>
            <hr>
            <span id="left"><b>Developer Students Club, </b>Ashesi University<br></span>
            <span id="right"><b>Present</b><br></span>
            <span id="left"><b>Co-Lead</b>
                <ul>
                    <li>Assisting freshmen on tutorials during workshops.</li>
                    <li>Coordinating end of semester projects.</li>
                </ul>
            </span>
            <br><br>

            <span id="left"><b>Math Center, </b>Ashesi University <br></span>
            <span id="right"><b>Present</b><br></span>
            <span id="left"><b>Tutor</b>
                <ul>
                    <li>Assisting freshman and fellow colleagues in solving mathematical problems.</li> 
                </ul>
            </span>
        </div>
        <!-- Skills -->
        <div id="skills">
            <h3>SKILLS</h3>
            <hr>
            <ul id="skill">  
                <li>Programming & Markup Languages (Java, Python, JavaScript, C++, HTML & CSS)</li>
                <li>Database Management, MySql</li>
                <li>Secondary Research</li>
                <li>Attention to detail</li>
                <li>Commercial Awareness</li>
            </ul>
        </div>
        <!-- References-->
        <div id="reference">
            <h3 class="title">REFERENCES</h3>
            <hr>
            <p id="ref1">Available upon request</p>
            <p id="ref">*WASSCE - West African Senior Secondary Certificate Examination</p>
            <p id="ref">*Dean's List - Awarded to students with GPA of 3.5 and above</p>      
        </div>
    </div>
    <!-- Javascript file for transfer of data to profile section included-->
    <script src="transfer.js"></script>
</body>
</html>