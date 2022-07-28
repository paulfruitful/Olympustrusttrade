const HIDE_NOFITICATION_AFTER = 3; // hides noitification after 3 seconds

// You can add to this:
// Someone from <random-city>
const citites = [
    "Aberdeen", "Abilene", "Akron", "Albany", "Albuquerque", "Alexandria", "Allentown",
    "Amarillo", "Anaheim", "Anchorage", "Ann Arbor", "Antioch", "Apple Valley",
    "Appleton", "Arlington", "Arvada", "Asheville", "Athens", "Atlanta",
    "Atlantic City", "Augusta", "Aurora", "Austin", "Bakersfield", "Baltimore", "Barnstable",
    "Baton Rouge", "Beaumont", "Bel Air", "Bellevue", "Berkeley", "Bethlehem", "Billings",
    "Birmingham", "Bloomington", "Boise", "Boise City", "Bonita Springs", "Boston", "Boulder",
    "Bradenton", "Bremerton", "Bridgeport", "Brighton", "Brownsville", "Bryan", "Buffalo", "Burbank", 
    "Burlington", "Cambridge", "Canton", "Cape Coral", "Carrollton", "Cary", "Cathedral City", 
    "Cedar Rapids", "Champaign", "Chandler", "Charleston", "Charlotte", "Chattanooga", "Chesapeake", 
    "Chicago", "Chula Vista", "Cincinnati", "Clarke County", "Clarksville", "Clearwater", "Cleveland", 
    "College Station", "Colorado Springs", "Columbia", "Columbus", "Concord", "Coral Springs", "Corona", 
    "Corpus Christi", "Costa Mesa", "Dallas", "Daly City", "Danbury", "Davenport", "Davidson County", 
    "Dayton", "Daytona Beach", "Deltona", "Denton", "Denver", "Des Moines", "Detroit", "Downey", "Duluth", 
    "Durham", "El Monte", "El Paso", "Elizabeth", "Elk Grove", "Elkhart", "Erie", "Escondido", "Eugene", 
    "Evansville", "Fairfield", "Fargo", "Fayetteville", "Fitchburg", "Flint", "Fontana", "Fort Collins", 
    "Fort Lauderdale", "Fort Smith", "Fort Walton Beach", "Fort Wayne", "Fort Worth", "Frederick", 
    "Fremont", "Fresno", "Fullerton", "Gainesville", "Garden Grove", "Garland", "Gastonia", "Gilbert", 
    "Glendale", "Grand Prairie", "Grand Rapids", "Grayslake", "Green Bay", "GreenBay", "Greensboro", 
    "Greenville", "Gulfport-Biloxi", "Hagerstown", "Hampton", "Harlingen", "Harrisburg", "Hartford", 
    "Havre de Grace", "Hayward", "Hemet", "Henderson", "Hesperia", "Hialeah", "Hickory", "High Point", 
    "Hollywood", "Honolulu", "Houma", "Houston", "Howell", "Huntington", "Huntington Beach", "Huntsville", 
    "Independence", "Indianapolis", "Inglewood", "Irvine", "Irving", "Jackson", "Jacksonville", "Jefferson", 
    "Jersey City", "Johnson City", "Joliet", "Kailua", "Kalamazoo", "Kaneohe", "Kansas City", "Kennewick", 
    "Kenosha", "Killeen", "Kissimmee", "Knoxville", "Lacey", "Lafayette", "Lake Charles", "Lakeland", 
    "Lakewood", "Lancaster", "Lansing", "Laredo", "Las Cruces", "Las Vegas", "Layton", "Leominster", 
    "Lewisville", "Lexington", "Lincoln", "Little Rock", "Long Beach", "Lorain", "Los Angeles", "Louisville", 
    "Lowell", "Lubbock", "Macon", "Madison", "Manchester", "Marina", "Marysville", "McAllen", "McHenry", 
    "Medford", "Melbourne", "Memphis", "Merced", "Mesa", "Mesquite", "Miami", "Milwaukee", "Minneapolis", 
    "Miramar", "Mission Viejo", "Mobile", "Modesto", "Monroe", "Monterey", "Montgomery", "Moreno Valley", 
    "Murfreesboro", "Murrieta", "Muskegon", "Myrtle Beach", "Naperville", "Naples", "Nashua", "Nashville", 
    "New Bedford", "New Haven", "New London", "New Orleans", "New York", "New York City", "Newark", 
    "Newburgh", "Newport News", "Norfolk", "Normal", "Norman", "North Charleston", "North Las Vegas", 
    "North Port", "Norwalk", "Norwich", "Oakland", "Ocala", "Oceanside", "Odessa", "Ogden", "Oklahoma City", 
    "Olathe", "Olympia", "Omaha", "Ontario", "Orange", "Orem", "Orlando", "Overland Park", "Oxnard", 
    "Palm Bay", "Palm Springs", "Palmdale", "Panama City", "Pasadena", "Paterson", "Pembroke Pines", 
    "Pensacola", "Peoria", "Philadelphia", "Phoenix", "Pittsburgh", "Plano", "Pomona", "Pompano Beach", 
    "Port Arthur", "Port Orange", "Port Saint Lucie", "Port St. Lucie", "Portland", "Portsmouth", 
    "Poughkeepsie", "Providence", "Provo", "Pueblo", "Punta Gorda", "Racine", "Raleigh", "Rancho Cucamonga", 
    "Reading", "Redding", "Reno", "Richland", "Richmond", "Richmond County", "Riverside", "Roanoke", 
    "Rochester", "Rockford", "Roseville", "Round Lake Beach", "Sacramento", "Saginaw", "Saint Louis", 
    "Saint Paul", "Saint Petersburg", "Salem", "Salinas", "Salt Lake City", "San Antonio", "San Bernardino", 
    "San Buenaventura", "San Diego", "San Francisco", "San Jose", "Santa Ana", "Santa Barbara", "Santa Clara", 
    "Santa Clarita", "Santa Cruz", "Santa Maria", "Santa Rosa", "Sarasota", "Savannah", "Scottsdale", 
    "Scranton", "Seaside", "Seattle", "Sebastian", "Shreveport", "Simi Valley", "Sioux City", "Sioux Falls", 
    "South Bend", "South Lyon", "Spartanburg", "Spokane", "Springdale", "Springfield", "St. Louis", 
    "St. Paul", "St. Petersburg", "Stamford", "Sterling Heights", "Stockton", "Sunnyvale", "Syracuse", 
    "Tacoma", "Tallahassee", "Tampa", "Temecula", "Tempe", "Thornton", "Thousand Oaks", "Toledo", "Topeka", 
    "Torrance", "Trenton", "Tucson", "Tulsa", "Tuscaloosa", "Tyler", "Utica", "Vallejo", "Vancouver", 
    "Vero Beach", "Victorville", "Virginia Beach", "Visalia", "Waco", "Warren", "Washington", "Waterbury", 
    "Waterloo", "West Covina", "West Valley City", "Westminster", "Wichita", "Wilmington", "Winston", 
    "Winter Haven", "Worcester", "Yakima", "Yonkers", "York", "Youngstown"
];


// You can add to this:
// Someone from <random-city> recently <random-product>
const products = [
    'Invested $300',
    'Deposited $100',
    'Bought the Basic plan',
    'Bought the Gold plan',
    'Bought the Master plan',
    'Bought the Premium plan',
];


// ------------- README--------------------
// LEAVE THE BELLOW ALONE UNLESS YOU KNOW WHAT YOU ARE DONE.
//-----------------------------------------
document.write(`<div class="d-none" id="notification-popup" style="color:#262626!important;font-size:14px;box-shadow:0 .5rem 1rem rgba(0,0,0,.15);width:420px;padding:10px;border-radius:6px;position:fixed;bottom:10px;left:10px;background-color:white;">
Someone from <span id="city"></span> recently <span id="product"></span>
<div style="color:rgb(163, 163, 163)">
    <span id="time"></span> ago &nbsp; 
    <img src="https://img.icons8.com/office/16/000000/checked--v1.png" width="14px"/> Verified
</div>
</div>`);

const notification = document.getElementById('notification-popup');
const city = document.querySelector('#notification-popup #city');
const product = document.querySelector('#notification-popup #product');
const time = document.querySelector('#notification-popup #time');
const cityCount = citites.length;

function resetNotification() {
    city.textContent = citites[Math.floor(Math.random() * cityCount)];
    product.textContent = products[Math.floor(Math.random() * products.length)];
    time.textContent = (Math.floor(Math.random() * 60) + 2) + ' ' +  ['minutes', 'seconds'][Math.floor(Math.random() * 2)];

    notification.classList.remove('d-none');
    setTimeout(() => {
        notification.classList.add('d-none');
        setTimeout(resetNotification, Math.floor(Math.random() * 6000) + 1000);
    }, HIDE_NOFITICATION_AFTER * 1000);
}

resetNotification();