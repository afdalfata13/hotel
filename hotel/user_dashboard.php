<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <header class="bg-primary text-white text-center py-4">
        <h1>Welcome to Our Hotel</h1>
        <p>Your comfort is our priority</p>
        <a href="user_form.php" class="btn btn-light mt-3">Home Page</a>
    </header>

    <!-- Room Types Section -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Our Rooms</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Standard Room">
                    <div class="card-body">
                        <h5 class="card-title">Standard Room</h5>
                        <p class="card-text">A cozy and affordable room with essential amenities for a comfortable stay.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Deluxe Room">
                    <div class="card-body">
                        <h5 class="card-title">Deluxe Room</h5>
                        <p class="card-text">Spacious room with premium furnishings and extra amenities for added
                            luxury.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Family Room">
                    <div class="card-body">
                        <h5 class="card-title">Family Room</h5>
                        <p class="card-text">Perfect for families, featuring multiple beds and ample space for everyone.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hotel Facilities Section -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Hotel Facilities</h2>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Free Wi-Fi</li>
            <li class="list-group-item">Swimming Pool</li>
            <li class="list-group-item">24/7 Room Service</li>
            <li class="list-group-item">Fitness Center</li>
            <li class="list-group-item">Restaurant and Bar</li>
        </ul>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 Our Hotel. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>