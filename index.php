<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AC Repair Services</title>
    <style>
        /* Add your styles here */
        /* ... (previous styles) ... */

        .service-details {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            width: 70%; /* Adjust the width as needed */
            
        }

        hr {
            border: 0;
            height: 1px;
            background: #ddd;
            margin: 20px 0;
            width:73%;
        }
    </style>
</head>

<body>
    <h2>AC Repair Services</h2>

    <div class="service-details" id="acInstallation">
        <img src="images/ac_installation.jpg" alt="AC Installation" width="80px" height="80px">
        <p>AC Installation and uninstall</p>
        <ul>
            <li><strong>Cost:</strong> $120 (Premium)</li>
            <li><strong>Warranty:</strong> 1 month</li>
            <li><strong>Rating:</strong> <input type="number" id="acInstallationRating" min="1" max="5" step="1" value="4"></li>
            <li><strong>About:</strong> Professional AC installation service ensuring optimal performance and efficiency.</li>
        </ul>
        <button onclick="addToCart('AC Installation and Uninstall', 120, getRating('acInstallationRating'))">Add to Cart</button>
    </div>

    <hr>

    <div class="service-details" id="acFoamService">
        <img src="images/ac_foam_service.jpeg" alt="AC Foam Service" width="80px" height="80px">
        <p>AC Foam and power jet Service</p>
        <ul>
            <li><strong>Cost:</strong> $100</li>
            <li><strong>Warranty:</strong> 6 months</li>
            <li><strong>Rating:</strong> <input type="number" id="acFoamServiceRating" min="1" max="5" step="1" value="5"></li>
            <li><strong>About:</strong> High-pressure AC power jet service to remove stubborn dirt and improve performance.</li>
        </ul>
        <button onclick="addToCart('AC Foam and Power Jet Service', 100, getRating('acFoamServiceRating'))">Add to Cart</button>
    </div>

    <hr>

    <div>
        <h2>Shopping Cart</h2>
        <ul id="cartItems"></ul>
        <button onclick="displayTotalCost()">View Total Cost</button>
        <div id="totalCost"></div>
        <button onclick="bookServices()">Book Services</button>
    </div>

    <script>
        let cart = [];

        function addToCart(serviceName, cost, rating) {
            cart.push({ service: serviceName, cost: cost, rating: rating });
            alert(serviceName + ' added to cart with cost $' + cost + ' and rating ' + rating);
            displayCartItems();
        }

        function displayCartItems() {
            const cartItemsList = document.getElementById('cartItems');
            cartItemsList.innerHTML = ''; // Clear previous items

            for (let item of cart) {
                const listItem = document.createElement('li');
                listItem.textContent = ${item.service} - Cost: ${item.cost} - Rating: ${item.rating};
                cartItemsList.appendChild(listItem);
            }
        }

        function getRating(inputId) {
            return document.getElementById(inputId).value;
        }

        function displayTotalCost() {
            let totalCost = 0;
            for (let item of cart) {
                totalCost += item.cost;
            }
            document.getElementById('totalCost').textContent = 'Total Cost: $' + totalCost;
        }

        function bookServices() {
            if (cart.length === 0) {
                alert('Your cart is empty. Add services before booking.');
            } else {
                let confirmation = confirm('Do you want to book the services?');
                if (confirmation) {
                    alert('Booking in progress. Redirecting to booking page...');
                    // Perform any additional actions, such as navigating to a booking page or submitting a form
                }
            }
        }
    </script>

</body>

</html>