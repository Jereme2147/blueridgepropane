 <?php
    // include_once "../header/header.php";
    include_once "./header.php";
?>
    <div id="safety">
        <div id="safe-title"> 
            <h1>Propane Gas Safety</h1>
        </div>
        <div id="smell" onclick="expand('smell-exp')" class="safety">
            <div>
                <h2>What to do if you smell gas:</h2>
                
            </div>
            <div>
                <img src="./media/phone-call.png" alt="" class="safe-img">
                <h3>&#x25BC Learn more &#x25BC</h3>
            </div>
            <div id="smell-exp" class="exp">
                <h4>When it comes to gas appliances, safety is a top priority. If you smell gas in your home, follow these steps:</h4>
                <ol>
                    <li><strong>NO FLAMES OR SPARKS.</strong> Immediately put out all smoking materials and other open flames. Do not operate lights, appliances, telephones, or cell phones. Flames or sparks from these sources can trigger an explosion or a fire.</li>
                    <li><strong>LEAVE THE AREA IMMEDIATELY.</strong> Get everyone out of the building or area where you suspect gas is leaking.</li>
                    <li><strong>SHUT OFF THE GAS.</strong> Turn off the main gas supply valve on your propane tank if it is safe to do so. To close the valve, turn it to the right (clockwise).</li>
                    <li><strong>REPORT THE LEAK.</strong> From a neighbor’s home or other nearby building away from the gas leak, call your propane retailer right away. If you can’t reach your propane retailer, call 911 or your local fire department.</li>
                    <li><strong>DO NOT RETURN TO THE BUILDING OR AREA</strong> until your propane retailer, emergency responder, or qualified service technician determines that it is safe to do so.</li>
                    <li><strong>GET YOUR SYSTEM CHECKED.</strong> Before you attempt to use any of your propane appliances, your propane retailer or a qualified service technician must check your entire system to ensure that it is leak-free.</li>
                </ol>
            </div>

        </div>
        <div id="shutoff" onclick="expand('shutoff-exp')" class="safety"> 
            <div>
                <h2>How to shut your propane take off</h2>
            </div>
             <div>
                <img src="./media/brptank.png" alt="" class="safe-img">
                <h3>&#x25BC Learn more &#x25BC</h3>
            </div>
            <div id="shutoff-exp" class="exp">
                <iframe class="vid" src="https://www.youtube.com/embed/0dPMiNSkOKA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div id="guage" onclick="expand('guage-exp')" class="safety">
            <div>
                <h2>How to read your propane tank gauge</h2>
            </div>
             <div>
                <img src="./media/guage.png" alt="" class="safe-img">
                <h3>&#x25BC Learn more &#x25BC</h3>
            </div>
            <div id="guage-exp" class="exp">
                <iframe class="vid" src="https://www.youtube.com/embed/ZfNCihEGMqU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div id="weather" onclick="expand('weather-exp')" class="safety">
            <div>
                <h2>Propane and weather safety</h2>
            </div>
             <div>
                <img src="./media/weather.png" alt="" class="safe-img">
                <h3>&#x25BC Learn more &#x25BC</h3>
            </div>
            <div id="weather-exp" class="exp">
                <h4>These articles contain valuable safety tips to prepare you and your family for thunderstorms, extreme heat, power outages, earthquakes, wildfires, high snowfall areas, tornadoes, and winter storms. Learn more by clicking the links below.</h4>
                <ul>
                    <li><a href="https://propane.com/safety/propane-safety-and-thunderstorms/" target="_blank">Propane Safety and Thunderstorms</a></li>
                    <li><a href="https://propane.com/safety/propane-safety-and-hurricanes/" target="_blank">Propane Safety and Hurricanes</a></li>
                    <li><a href="https://propane.com/safety/propane-safety-and-tornadoes/" target="_blank">Propane Safety and Tornadoes</a></li>
                    <li><a href="https://propane.com/safety/propane-safety-and-floods/" target="_blank">Propane Safety and Floods</a></li>
                    <li><a href="https://propane.com/safety/power-outage-safety/" target="_blank">Power Outage Safety</a></li>
                    <li><a href="https://propane.com/safety/propane-safety-and-wildfires/" target="_blank">Propane Safety and Wildfires</a></li>
                    <li><a href="https://propane.com/safety/propane-safety-and-extreme-heat/" target="_blank">Propane Safety and Extreme Heat</a></li>
                    <li><a href="https://propane.com/safety/winter-weather-safety-tips/" target="_blank">Winter Weather Safety Tips</a></li>
                    <li><a href="https://propane.com/safety/propane-safety-for-high-snowfall/" target="_blank">Propane Safety for High Snowfall</a></li>
                </ul>
            </div>
            
        </div>
         <div id="additional">
            <h3>Addtional Propane Safety Links</h3>
            <div class="safe-links">
                <img src="./media/nfpa100x100.png" alt="">
                <a href="https://www.nfpa.org/Public-Education/By-topic/Safety-in-the-home/Gasoline-and-propane">NFPA Propane Safety</a>
            </div>
            <div class="safe-links">
                <img src="./media/propane100x100.png" alt="">
                <a href="https://propane.com/safety/">Propane.com</a>
            </div>

            </div>
    </div>
<?php
    
    include_once "./footer/footer.php";
?>