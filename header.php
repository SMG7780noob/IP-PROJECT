<!-- header.php -->
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">

<div class="header">
    <img src="siws-logo.png" class="logo" alt="SIWS Logo">
    <div class="college-name">
        <h1>
            <span class="siws">SIWS</span> 
            <span class="full">N.R. SWAMY COLLEGE OF COMMERCE & ECONOMICS AND SMT. THIRUMALAI COLLEGE OF SCIENCE</span> 
            <span class="autonomous">(AUTONOMOUS)</span>
        </h1>
        <p class="details">NAAC Re-Accredited A Grade | College Code 311 | AISHE CODE.C-34030 | Wadala, Mumbai</p>
    </div>
</div>

<div class="announcement">
    <marquee behavior="scroll" direction="left">
        <a href="fees.php" class="marquee-link shine">🎓 Admissions Open Now</a>
    </marquee>
</div>

<style>
body {
    margin: 0;
    font-family: 'EB Garamond', serif;
}
.header {
    display: flex;
    align-items: center;
    padding: 10px 20px;
    background: white;
    border-bottom: 1px solid #ccc;
    flex-wrap: wrap;
}
.logo {
    height: 90px;
    margin-right: 20px;
}
.college-name h1 {
    margin: 0;
    font-size: 20px;
}
.siws {
    color: #3c1e94;
    font-size: 32px;
    font-weight: bold;
}
.full {
    color: #3c1e94;
    font-weight: 600;
}
.autonomous {
    color: black;
}
.details {
    font-size: 14px;
    color: #444;
}
.announcement {
    background-color: #004080;
    text-align: center;
    font-weight: bold;
    padding: 8px;
}
.marquee-link {
    text-decoration: none;
    color: white;
    font-weight: bold;
    font-family: 'EB Garamond', serif;
    position: relative;
    display: inline-block;
}


.shine::after {
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(120deg, transparent, rgba(255, 255, 255, 0.7), transparent);
    animation: shine 2s infinite;
}
@keyframes shine {
    0% {
        left: -100%;
    }
    100% {
        left: 100%;
    }
}

marquee {
    font-size: 17px;
}
</style>
