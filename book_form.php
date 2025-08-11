<form action="booking_handler.php" method = "post" class="booking-form">

        <div class="flex">

            <label for="name">Name:</label>
            <input type="text" placeholder="Enter your name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" placeholder="Enter your email" name="email" required>

            <label for="phone_number">Phone number:</label>
            <input type="tel" id="phone" placeholder="Enter your phone number" name="phone" >
            <input type="hidden" name="country_code" id="country_code">
            

            <label for="address">Address:</label>
            <textarea placeholder="Enter your Address" name="address" required></textarea>

            <label for="arrival_date">Arrival Date:</label>
            <input type="date" placeholder="Select/Enter the Arrival Date" name="arrival_date" required>

            <label for="leaving_date">Leaving Date:</label>
            <input type="date" placeholder="Select/Enter the Leaving Date" name="leaving_date" required>

            <label for="guests">No. of Guests:</label>
            <input type="number" placeholder="Enter the number of guests" name="guests" min="1" required>

            <label for="no_of_days">No. of Days:</label>
            <input type="text" placeholder="Select the number of Days" name="no_of_days" value="<?= htmlspecialchars($no_of_days) ?>" readonly>

            <label for="vehicle_type">Vehicle Type:</label>
            <input type="text" placeholder="Select the vehicle type" name="vehicle_type" value="<?= htmlspecialchars($vehicle_type) ?>" readonly>

            <label for="price">Price (USD) $:</label>
            <input type="text" placeholder="Select the price of the package" name="price" value="<?= htmlspecialchars($price) ?>" readonly>

            <label for="message">Message:</label>
            <textarea name="message" placeholder="Any additional requests or questions?"></textarea>

        </div>

        <input type="submit" value="submit" class="btn" name="send">
        
    </form>