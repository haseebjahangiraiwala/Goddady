<?php include 'db.php'; ?>
<?php include 'header.php'; ?>
 
<div style="max-width:700px; margin:40px auto; font-family:Arial;">
    <h2 style="text-align:center;">Your Cart</h2>
    <?php
    if (isset($_GET['add'])) {
        $domain_id = intval($_GET['add']);
        session_start();
        $_SESSION['cart'][] = $domain_id;
        echo "<p style='color:green; text-align:center;'>Domain added to cart successfully!</p>";
    }
 
    session_start();
    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $id) {
            $q = mysqli_query($conn, "SELECT * FROM domains WHERE id=$id");
            $row = mysqli_fetch_assoc($q);
            echo "<div style='border:1px solid #ccc; margin:10px 0; padding:15px; border-radius:8px;'>
                    <strong>{$row['domain_name']}{$row['extension']}</strong> - \${$row['price']}
                  </div>";
        }
    } else {
        echo "<p style='text-align:center;'>Your cart is empty.</p>";
    }
    ?>
</div>
 
<?php include 'footer.php'; ?>
 
