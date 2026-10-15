
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Programs Offered</title>
<link rel="stylesheet" href="style35.css">
</head>

<body>

<div class="container">

    <h1 class="heading">PROGRAMS OFFERED</h1>

    <!-- POST GRADUATION -->
    <button class="accordion">Post Graduation</button>
    <div class="panel">
        <ul>
            <li>M.Com.</li>
            <li>M.Sc(Fashion Designing & Marchandising</li>
            
        </ul>
    </div>

    <!-- UNDER GRADUATION -->
    <button class="accordion">Under Graduation</button>
    <div class="panel">
        <ul>
            <li>B.Sc.(Non Medical)</li>
            <li>B.Sc.(Medical)</li>
            <li>B.Sc.(Economics)</li>
             <li>B.Sc.(Computer Science)</li>
            <li>Bachelor Of Computer Application(B.C.A)</li>
            <li>B.COM(Regular)(SEMESTER SYSTEM)</li>
            <li>B.COM(Hons.)</li>
            <li>Bachelor Of Arts(B.A)</li>
            <li>B.Sc.(FASHION DESIGNING)</li>
            <li>BBA</li>
        </ul>
    </div>

    <!-- ADD-ON COURSES (FULL CONTENT) -->
    <button class="accordion">Add-on Courses</button>
    <div class="panel">

        <p class="para">
        <strong>Dual Degree Programme</strong><br><br>
        The students can opt for various U.G.C. sponsored Add-On Courses along with their three-years degree course and acquire two degrees in one year. The student gets a separate certificate/diploma issued by the university for these courses.
        </p>

        <ul>
            <li>Cosmetology and Beauty Culture</li>
            <li>Journalism and Mass Media</li>
            <li>Apparel Designing (Fashion Designing)</li>
            <li>Health Care and Education in Early Years</li>
            <li>Marketing and Public Relations</li>
            <li>Banking Services</li>
            <li>Insurance and Risk Management</li>
            <li>Web Designing and Office Automation</li>
            <li>Communication Skills in English</li>
            <li>Biotechnology</li>
            <li>Computer Aided Accounting</li>
            <li>Textile Designing</li>
            <li>Guidance and Counseling</li>
            <li>Event Management</li>
        </ul>

        <p class="para">
        <strong>Course Structure:</strong><br><br>
        • Part I → Certificate<br>
        • Part II → Diploma<br>
        • Part III → Advanced Diploma
        </p>

    </div>

    <!-- VOCATIONAL COURSES -->
    <button class="accordion">Vocational Courses</button>
    <div class="panel">
        <ul>

            <li>B.Voc .in Beauty & Wellness</li>
           
        </ul>
    </div>

    <!-- COMMUNITY COLLEGE -->
    <button class="accordion">Community College Program</button>
    <div class="panel">
        <ul>
            <li>Diploma In Beauty And Wellness Under Communication</li>
            <li>Advanced Diploma In Beaduty And ellness</li>
        </ul>
    </div>

</div>

<script>
var acc = document.getElementsByClassName("accordion");

for (let i = 0; i < acc.length; i++) {
    acc[i].onclick = function () {
        this.classList.toggle("active");
        let panel = this.nextElementSibling;

        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    };
}
</script>

</body>
</html>