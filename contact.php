 <?php
    // include_once "../header/header.php";
    include_once "./header.php";
?>
<div id="banner">
    <img src="./media/brpoffice.jpg" alt="blue ridge propane delivery trucks" />
</div>
<div id="contact">
    <h1>Contact Blue Ridge Propane here for service, delivery, products or more information</h1>
    <div id="address">
        <h4>Blue Ridge Propane</h4>
        <h4>PO Box 789</h4>
        <h4>14 Turbyfill Rd</h4>
        <h4>Newland NC, 28657</h4>
        <h4>Phone: 828-733-3603</h4>
        <h4>Fax: 828-733-1438</h4>
        <a href="mailto:blueridgepropanenc@gmail.com" target="_blank">
            <h4>Blueridgepropanenc@gmail.com</h4>
        </a>
    </div>
    <div id="full-form">
        <form action="./mail.php" id="contact-form" method="POST">
            <input type="text" class="inputs" id="first" name="first" placeholder="first name" alt="first name field">
            <input type="text" class="inputs" id="last" name="last" placeholder="last name*" required alt="last name field">
            <input type="email" class="inputs" id="email" name="email" placeholder="customer@gmail.com*" required alt="email field">
            <input type="text" class="inputs" id="business" name="business" placeholder="your business name" alt="business input">
            <input type="tel" id="phone" class="inputs"name="phone" placeholder="Phone: 828-000-0000">
            <div id="user-info">
                <h4  class="contact-titles">I'm interested in:</h4>
                <select name="choose" id="dropdown">
                    <fieldset>
                        <option name="need"value="none">-Choose one-</option>
                        <option name="need"value="request delivery">Request a delivery</option>
                        <option name="need"value="change suppliers">Change Propane Suppliers</option>
                        <option name="need"value="learn about pricing">Learn about Propane pricing options</option>
                        <option name="need"value="switch to lp">Switch to Propane</option>
                    </fieldset>
                </select>
                <div id="use">
                    <h4 class="contact-titles">I use propane gas for:</h4>
                    <li> <input name="heating" value="heating"type="checkbox">Heating</input></li>
                    <li> <input name="cooking" value="cooking"type="checkbox">Cooking</input></li>
                    <li> <input name="water" value="water heater"type="checkbox">Water Heater</input></li>
                    <li> <input name="fireplace" value="fireplace"type="checkbox">Fireplace</input></li>
                    <li> <input name="clothes" value="clothes dryer"type="checkbox">Clothes Dryer</input></li>
                    <li> <input name="generator" value="generator"type="checkbox">Generator</input></li>
                </div>
                <div id="comment">
                    <textarea id="comments"name="comments" 
                    placeholder="Any additional questions or comments"></textarea>
                </div>
                <div id="submit">
                    <button type="submit" name="sumbit" alt="send button">Send</button>
                </div>
            </div>
        </form>
    </div>
    <div class="map-div">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1030.5687581255377!2d-81.93380285487038!3d36.11588108174933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x885093c98a5b7f61%3A0x29dc06deeba0ad8c!2s14+Turbyfill+Rd%2C+Newland%2C+NC+28657!5e0!3m2!1sen!2sus!4v1550507219401" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

</div>


<?php
    
    include_once "./footer/footer.php";
?>