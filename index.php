<?php include 'db.php'; ?>
<?php include 'header.php'; ?>
 
<div style="text-align:center; margin:50px auto; max-width:600px; font-family:Arial;">
    <h2 style="font-size:24px; margin-bottom:20px;">Find Your Perfect Domain</h2>
 
    <form action="search.php" method="GET" style="display:flex; justify-content:center;">
        <input type="text" name="domain" placeholder="Enter domain name" required 
               style="padding:12px; width:70%; border:2px solid #00ff90; border-radius:8px 0 0 8px; font-size:16px;">
        <button type="submit" 
                style="background:#00ff90; border:none; padding:12px 20px; border-radius:0 8px 8px 0; cursor:pointer; font-size:16px;">
            Search
        </button>
    </form>
 
    <p style="margin-top:20px; font-size:14px; color:#555;">Popular: .com | .net | .org</p>
</div>
 
<?php include 'footer.php'; ?>
 
