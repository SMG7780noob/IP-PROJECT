<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
<div class="contact-banner">
    <img src="contact-banner.jpg" alt="Contact Banner">
    <div class="banner-text">Get In Touch With Us</div>
</div>

<div class="content">
    <h2>Contact Us</h2>
    <p>If you got any questions, please do not hesitate to send us a message. We reply within 24 hours!</p>

    <div class="contact-section">
        <div class="map-box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.9746908583056!2d72.85664667497586!3d19.02083688217241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cef291c9ad91%3A0x67b8c7feec6313f4!2sSmt%20Thirumalai%20College%20of%20Science!5e0!3m2!1sen!2sin!4v1751312898464!5m2!1sen!2sin"
                width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <h3>Address</h3>
            <p>S.I.W.S. College, Plot No. 337, Sewree Wadala Estate, Major R. Parameshwaran Marg, Mumbai – 400 031</p>
            <h3>Contact Us</h3>
            <p>📞 022 2418 0390<br>📧 siws@siwscollege.edu.in</p>
        </div>

        <div class="form-box">
            <form>
                <input type="text" placeholder="Your Name" required><br>
                <input type="email" placeholder="Email" required>
                <input type="text" placeholder="Contact No."><br>
                <input type="text" placeholder="Passed out from">
                <input type="text" placeholder="Year"><br>
                <textarea placeholder="Suggestions, if any"></textarea><br>
                <label><input type="checkbox"> Sign up for periodic newsletter.</label><br>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

<style>
.contact-banner {
    position: relative;
}
.contact-banner img {
    width: 100%;
    height: 250px;        
    object-fit: cover;
}
.banner-text {
    position: absolute;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%);
    color: white;
    font-size: 32px;
    font-weight: bold;
    text-shadow: 2px 2px 4px #000;
}

.contact-section {
    display: flex;
    gap: 20px;
    padding: 20px;
    flex-wrap: wrap;
}
.map-box, .form-box {
    flex: 1;
    min-width: 300px;
}
.form-box {
    background-color: #e6f2ff;
    padding: 20px;
    border-radius: 8px;
}
.form-box input, .form-box textarea {
    width: 100%;
    margin: 8px 0;
    padding: 10px;
    border: 1px solid #aaa;
    border-radius: 4px;
}
.form-box button {
    background-color: #ffb400;
    padding: 10px 20px;
    border: none;
    font-weight: bold;
    cursor: pointer;
    border-radius: 4px;
}
</style>
