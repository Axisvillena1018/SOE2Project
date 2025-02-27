<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Home.css">
    </head>
    <body>
        <nav class="NavBar">
            <div class="Logo">
                <img src="dyci-logo.png" alt="DYCI Logo">
                <h3>Dr Yanga's College Inc.</h3>
            </div>
            <div class="Menu">
                <div class="drpchapters">
                    <div class="dpchap">
                        <div class="btnchap">
                            <button class="dropbtn">Chapters ▼</button>
                        </div>
                        <div class="contchapters">
                            <?php 
                                $chapters = [
                                    "Admission and Enrollment", 
                                    "Academic Policies", 
                                    "Scholarships, Discounts and Other Financial Grants", 
                                    "Student Services and Campus Life", 
                                    "Student Discipline and Behavior"
                                ];
                                foreach ($chapters as $index => $chapter) {
                                    echo "<button><strong>Chapter " . ($index + 1) . ": </strong>$chapter</button>";
                                }
                            ?>
                        </div>
                    </div> 

                    <div class="dpdash">
                        <div class="btndash">
                            <button class="dropbtn">Dashboard ▼</button>
                        </div>
                        <div class="contdash">
                            <button>To Do List</button>
                            <button>Journal</button>
                        </div>
                    </div> 
                </div>
            </div>
        </nav>
        <div class="Home-Body">
            <div class="btnhome">
                <div class="btnnews">
                    <button>News</button>
                </div>
                <button>Mission Vision and Core Values</button>
                <button>Founder and First President</button>
                <button>History and Timeline Overview</button>
                <button>School Seal and Logo</button>
            </div>
            <div class="Home-Container">
                <div class="HomePage">
                    <div class="HPIntro">
                        <h1>WELCOME TO DYCI ROADMAP</h1>
                    </div>
                </div>
                <div class="News">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FVoxNostraOnline&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
                <div class="Event-Container">
                    <h3>Upcoming Events</h3>
                </div>
            </div>
        </div>
        <script>
            document.querySelector(".btnnews button").addEventListener("click", function(){
                document.querySelector(".HomePage").style.display = "none";
                document.querySelector(".News").style.display = "flex";
            });
        </script>
    </body>
</html>
