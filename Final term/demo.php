<?php
// --- 1. PHP LOGIC SECTION ---
session_start();

// Connect to your existing database file
include '../Model/login_DB.php'; 

// Check if user is logged in (Redirect to login if not)
if (!isset($_SESSION['user_id'])) {
    header("Location: Login.php"); 
    exit();
}

// Get the user's email for the welcome message
$user_email = $_SESSION['Email'];

// FILTERING LOGIC
$sql = "SELECT * FROM menu"; // Default: Show all food

if (isset($_GET['category'])) {
    $cat = mysqli_real_escape_string($conn, $_GET['category']);
    if ($cat != 'All') {
        $sql = "SELECT * FROM menu WHERE category = '$cat'";
    }
}

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home - Food Panda Clone</title>
    
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        /* Navbar */
        .navbar {
            background-color: #d70f64; /* FoodPanda Pink */
            padding: 15px 30px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .navbar h2 { margin: 0; font-size: 24px; }
        .nav-links a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-weight: 600;
        }
        .nav-links a:hover { text-decoration: underline; }

        /* Filter Buttons */
        .filters {
            text-align: center;
            padding: 30px 0;
        }
        .filter-btn {
            text-decoration: none;
            background-color: white;
            color: #333;
            padding: 10px 25px;
            margin: 0 5px;
            border-radius: 25px;
            border: 1px solid #ddd;
            font-weight: bold;
            transition: 0.3s;
            display: inline-block;
        }
        .filter-btn:hover {
            background-color: #d70f64;
            color: white;
            border-color: #d70f64;
        }

        /* Food Grid */
        .menu-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .food-card {
            background-color: white;
            width: 280px;
            margin: 15px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            overflow: hidden;
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
        }
        .food-card:hover {
            transform: translateY(-5px);
        }
        .food-img-box {
            height: 180px;
            background-color: #eee;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #888;
        }
        .food-img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .food-info {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .food-info h3 { margin: 0 0 5px; color: #333; }
        .category-tag { color: #888; font-size: 14px; margin-bottom: 10px; }
        .price { 
            color: #d70f64; 
            font-size: 18px; 
            font-weight: bold; 
            margin-bottom: 15px; 
        }
        .add-btn {
            margin-top: auto;
            background-color: #d70f64;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            font-size: 14px;
        }
        .add-btn:hover { background-color: #b00c50; }
    </style>
</head>
<body>

    <div class="navbar">
        <h2>Food Panda Clone</h2>
        <div class="nav-links">
            <span>Hi, <?php echo htmlspecialchars($user_email); ?></span>
            <a href="#">My Cart (0)</a>
            <a href="#">My Orders</a>
            <a href="Login.php">Logout</a> </div>
    </div>

    <div class="filters">
        <a href="demo.php?category=All" class="filter-btn">All</a>
        <a href="demo.php?category=Fast Food" class="filter-btn">🍔 Fast Food</a>
        <a href="demo.php?category=Italian" class="filter-btn">🍕 Italian</a>
        <a href="demo.php?category=Drinks" class="filter-btn">🥤 Drinks</a>
    </div>

    <div class="menu-container">
        
        <?php
        // Loop through database results
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
        ?>
            
            <div class="food-card">
                <div class="food-img-box">
                    <?php if(!empty($row['image'])): ?>
                        <img src="../images/<?php echo $row['image']; ?>" alt="Food">
                    <?php else: ?>
                        <span>No Image</span>
                    <?php endif; ?>
                </div>
                
                <div class="food-info">
                    <h3><?php echo $row['name']; ?></h3>
                    <div class="category-tag"><?php echo $row['category']; ?></div>
                    <div class="price">Tk <?php echo $row['price']; ?></div>
                    
                    <form method="post">
                        <input type="hidden" name="food_id" value="<?php echo $row['id']; ?>">
                        <button type="button" class="add-btn" onclick="alert('Added <?php echo $row['name']; ?> to cart!')">Add to Cart</button>
                    </form>
                </div>
            </div>

        <?php 
            }
        } else {
            echo "<h3 style='color:#666;'>No items found in this category.</h3>";
        }
        ?>

    </div>

</body>
</html>