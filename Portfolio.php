<?php
// Page Title
$siteTitle = "Mock Page Template";

// Navigation Links
$navItems = [
    "Personal Info",
    "Technical Skills",
    "Job Experience",
    "About Me"
];
// Bio Text
$bioText = "
Software Developer with foundational knowledge in application development and hands-on professional experience as an Implementation Consultant. Possesses basic programming skills and understanding of software development concepts, including APIs, databases, and system configuration. Experienced in translating business requirements into technical solutions, troubleshooting system issues, and supporting deployments. Eager to further develop coding expertise while contributing to building reliable and efficient software solutions within a collaborative development environment";

// Technical Skills
$skills = [
    "HTML & CSS",
    "JavaScript",
    "Responsive Design"
];


$ProgLangheader = "Programming Languges";
$ProgrammingLanguages = [
    "Java",
    "Python",
    "C#",
    "T-SQL",
    "PHP"
];

$API = "API";
$APIList = ["SigningHub", "eMsigner"];

$DataBaseManage = "Database Management";
$DBMList = [
    "Microsoft SQL Server (SSMS), ", 
    "Data Migration & Extraction", 
    "Query Optimization"
];

$API = "API";
$APIList = ["SigningHub", "eMsigner"];


$NetHardware = "Networking & Hardware";
$NethardwareList = [
    "LAN Installation", 
    "System Setup"
];


$OtherHeader = "Other Skills";
$OtherList = [
    "Troubleshooting", 
    "Documentation",
    "Process Automation"
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $siteTitle; ?></title>
    <link rel="stylesheet" href="Portfolio2.css">
</head>

<body>

    <nav class="navbar">
        <?php foreach ($navItems as $item): ?>
            <a href="#"><?php echo $item; ?></a>
        <?php endforeach; ?>
    </nav>
    
    <div class="switch-wrapper">
        <!-- Rounded switch -->
        <label class="switch">
            <input type="checkbox" id="themeSwitch">
            <span class="slider round"></span>
        </label>
    </div>

    <section class="profile-container">
        <div class="bio-box">
            <p><?php echo $bioText; ?></p>
        </div>

        <div class="profile-picture">
           <img src="Profile_Pic.png" alt="Technical Skills">
        </div>
    </section>

 <section class="image-overlay-container">

    <!--------------- Technical Skills Header ---------------->
    <div class="skills-header">
        <img src="OrangeBrush2.png" alt="Technical Skills">
        <div class="TechnicalSkills-overlay">
            Technical Skills
        </div>
    </div>


    <!-- Skill Sections Container -->
    <div class="skills-grid">

        <!-- Programming Skill Set -->
        <div class="skills-list-box">

            <div class="Progrlangheader">
                <div class="SkillList">
                    <?php echo $ProgLangheader ?>
                </div>

                <ul class="Skills">
                    <?php foreach ($ProgrammingLanguages as $proglanguage): ?>
                        <li><?php echo $proglanguage; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <img src="Blue BrushNBG.png" alt="Blue Brush">

        </div>


        <!-- API Section -->
        <div class="APIskills-list-box">

            <div class="APIheader">
                <div class="APISkillList">
                    <?php echo $API ?>
                </div>

                <ul class="APISkills">
                    <?php foreach ($APIList as $apiList): ?>
                        <li><?php echo $apiList; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <img src="Blue BrushNBG.png" alt="Blue Brush">

        </div>


        <!-- Database Management -->
        <div class="DBskills-list-box">

            <div class="DBheader">
                <div class="DBSkillList">
                    <?php echo $DataBaseManage ?>
                </div>

                <ul class="DBSkills">
                    <?php foreach ($DBMList as $DBML): ?>
                        <li><?php echo $DBML; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <img src="RedBrushNBG.png" alt="Red Brush">

        </div>

        <!-- 	Networking & Hardware -->
        <div class="NetHardwareskills-list-box">

            <div class="NetHardwareheader">
                <div class="NetwordSkillList">
                    <?php echo $NetHardware ?>
                </div>

                <ul class="NetHardwareSkills">
                    <?php foreach ($NethardwareList as $NetHardwareL): ?>
                        <li><?php echo $NetHardwareL; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <img src="RedBrushNBG.png" alt="Red Brush">

        </div>


        <!--------------------- 	Other -------------------------- -->
        
        <div class="Otherskills-list-box">

            <div class="Otherheader">
                <div class="OtherSkillList">
                    <?php  echo $OtherHeader  ?>
                </div>

                <ul class="OtherSkills">
                    <?php foreach ($OtherList as $OtherL): ?>
                        <li><?php echo $OtherL; ?></li>
                    <?php endforeach;  ?>
                </ul>
            </div>

            <img src="RedBrushNBG.png" alt="Red Brush">

        </div>
        
        

    </div>
</section>

    <script>
        const themeSwitch = document.getElementById('themeSwitch');
        const body = document.body;
        const updateTheme = () => {
            body.classList.toggle('white-theme', themeSwitch.checked);
            body.classList.toggle('gray-theme', !themeSwitch.checked);
        };
        themeSwitch.addEventListener('change', updateTheme);
        updateTheme();
    </script>
</body>

</html>