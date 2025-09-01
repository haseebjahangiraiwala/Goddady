<?php include 'db.php'; ?>
<?php include 'header.php'; ?>
 
<div style="max-width:700px; margin:40px auto; font-family:Arial;">
    <h2 style="text-align:center;">Domain Search Results</h2>
    <?php
    if (isset($_GET['domain'])) {
        $domain = mysqli_real_escape_string($conn, $_GET['domain']);
        $query = "SELECT * FROM domains WHERE domain_name LIKE '$domain'";
        $result = mysqli_query($conn, $query);
 
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                if ($row['is_available']) {
                    echo "<div style='border:1px solid #ccc; margin:10px 0; padding:15px; border-radius:8px;'>
                            <strong>{$row['domain_name']}{$row['extension']}</strong> is <span style='color:green;'>Available</span> 
                            - \${$row['price']}
                            <button onclick=\"window.location.href='cart.php?add={$row['id']}'\" 
                                    style='background:#00ff90; border:none; padding:8px 15px; margin-left:20px; border-radius:6px; cursor:pointer;'>
                                Add to Cart
                            </button>
                          </div>";
                } else {
                    echo "<div style='border:1px solid #ccc; margin:10px 0; padding:15px; border-radius:8px;'>
                            <strong>{$row['domain_name']}{$row['extension']}</strong> is <span style='color:red;'>Not Available</span>
                          </div>";
                }
            }
        } else {
            echo "<p style='text-align:center;'>No results found.</p>";
        }
    }
    ?>
</div>
 
<?php include 'footer.php'; ?>
 
