
<?php
$news = [
    [
        "category" => "MAHARASHTRA",
        "title" => "Maharashtra Latest News and Updates",
        "description" => "Get the latest updates from across Maharashtra.",
        "image" => "https://images.unsplash.com/photo-1570168007204-dfb528c6958f?w=900"
    ],
    [
        "category" => "INDIA",
        "title" => "Latest National News and Headlines",
        "description" => "Stay informed with important national updates.",
        "image" => "https://images.unsplash.com/photo-1524492412937-b28074a5d7da?w=900"
    ],
    [
        "category" => "WORLD",
        "title" => "Top International News",
        "description" => "Explore important developments around the world.",
        "image" => "https://images.unsplash.com/photo-1521295121783-8a321d551ad2?w=900"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Latest News | Breaking News & Updates</title>
<style>
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:Arial,sans-serif;background:#f5f6f8;color:#222}
.top{background:#171b25;color:white;padding:10px 5%;font-size:13px}
header{background:white;padding:22px 5%;display:flex;justify-content:space-between;align-items:center}
.logo{font-size:28px;font-weight:bold;color:#d71920}
.logo span{color:#202633}
nav{background:#202633;padding:15px 5%;display:flex;gap:25px;overflow-x:auto}
nav a{color:white;text-decoration:none;white-space:nowrap;font-size:14px}
nav a:hover{color:#ff5555}
.breaking{background:#d71920;color:white;padding:13px 5%;font-weight:bold}
.container{max-width:1200px;margin:30px auto;padding:0 18px}
.heading{font-size:23px;margin-bottom:20px;border-left:5px solid #d71920;padding-left:12px}
.grid{display:grid;grid-template-columns:repeat(3,1fr);gap:22px}
.card{background:white;border-radius:9px;overflow:hidden;box-shadow:0 3px 15px #00000010}
.card img{width:100%;height:190px;object-fit:cover}
.content{padding:17px}
.category{color:#d71920;font-size:12px;font-weight:bold}
.content h2{font-size:19px;margin:10px 0;line-height:1.4}
.content p{color:#666;font-size:14px;line-height:1.6}
footer{background:#202633;color:white;text-align:center;padding:28px;margin-top:50px}
@media(max-width:700px){
header{padding:18px 4%}
.grid{grid-template-columns:1fr}
.card img{height:220px}
}
</style>
</head>
<body>

<div class="top">Welcome to Latest News | Your Daily News Destination</div>

<header>
    <div class="logo">LATEST <span>NEWS</span></div>
    <div>☰</div>
</header>

<nav>
<a href="index.php">Home</a>
<a href="category.php?cat=maharashtra">Maharashtra</a>
<a href="category.php?cat=india">India</a>
<a href="category.php?cat=world">World</a>
<a href="category.php?cat=business">Business</a>
<a href="category.php?cat=sports">Sports</a>
<a href="category.php?cat=technology">Technology</a>
</nav>

<div class="breaking">BREAKING NEWS &nbsp; | &nbsp; Latest updates coming soon</div>

<main class="container">
<h1 class="heading">Latest News</h1>

<div class="grid">
<?php foreach($news as $item): ?>
<div class="card">
<img src="<?= htmlspecialchars($item['image']) ?>"
alt="News image">
<div class="content">
<div class="category">
<?= htmlspecialchars($item['category']) ?>
</div>
<h2><?= htmlspecialchars($item['title']) ?></h2>
<p><?= htmlspecialchars($item['description']) ?></p>
</div>
</div>
<?php endforeach; ?>
</div>
</main>

<footer>
<h2>LATEST NEWS</h2>
<p>Stay Updated. Stay Informed.</p>
<p>© <?= date('Y') ?> Latest News. All Rights Reserved.</p>
</footer>

</body>
</html>

