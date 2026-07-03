
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        html,body{
            overflow-x:hidden;
            font-family:Arial, sans-serif;
        }

        .header-top{
            background:linear-gradient(90deg,#021c4d,#01255f,#021c4d);
            padding:18px 40px;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        .logo{
            color:#fff;
            font-size:32px;
            font-weight:bold;
        }

        .logo span{
            display:block;
            font-size:12px;
            letter-spacing:2px;
        }

        .menu{
            display:flex;
            list-style:none;
            gap:25px;
            align-items:center;
        }

        .menu li{
            position:relative;
        }

        .menu li a{
            color:#fff;
            text-decoration:none;
            font-size:14px;
            font-weight:600;
        }

        .dropdown{
            position:absolute;
            top:25px;
            left:0;
            background:#fff;
            min-width:180px;
            display:none;
            list-style:none;
            z-index:1000;
        }

        .dropdown li{
            padding:12px;
            border-bottom:1px solid #eee;
        }

        .dropdown li a{
            color:#000;
        }

        .menu li:hover .dropdown{
            display:block;
        }

        .quote-btn{
            background:#ff7b00;
            color:#fff;
            padding:12px 20px;
            border:none;
            border-radius:4px;
            cursor:pointer;
            font-weight:bold;
        }

        .menu-btn{
            display:none;
            color:#fff;
            font-size:28px;
            cursor:pointer;
        }

        /* Custom Offcanvas */
        .custom-offcanvas{
            position:fixed;
            top:0;
            right:-100%;
            width:280px;
            height:100vh;
            background:#0b1f44;
            padding:30px;
            transition:0.4s;
            z-index:9999;
        }

        .custom-offcanvas.active{
            right:0;
        }

        .custom-offcanvas ul{
            list-style:none;
            margin-top:40px;
        }

        .custom-offcanvas ul li{
            margin:20px 0;
        }

        .custom-offcanvas ul li a{
            color:#fff;
            text-decoration:none;
        }

        .close-btn{
            color:#fff;
            font-size:28px;
            cursor:pointer;
            text-align:right;
        }

        @media(max-width:992px){
            .desktop-menu{
                display:none;
            }

            .quote-btn{
                display:none;
            }

            .menu-btn{
                display:block;
            }
        }
    </style>
</head>
<body>

<header class="header-top">
    <div class="logo">
        OPCIEAS
        <span>FURNITURE</span>
    </div>

    <ul class="menu desktop-menu">
        <li><a href="#">HOME</a></li>
        <li><a href="#">ABOUT US</a></li>

        <li>
            <a href="#">PRODUCTS <i class="fa-solid fa-angle-down"></i></a>
            <ul class="dropdown">
                <li><a href="#">Sofa</a></li>
                <li><a href="#">Chair</a></li>
                <li><a href="#">Table</a></li>
            </ul>
        </li>

        <li>
            <a href="#">INDUSTRIES <i class="fa-solid fa-angle-down"></i></a>
            <ul class="dropdown">
                <li><a href="#">Office</a></li>
                <li><a href="#">Home</a></li>
            </ul>
        </li>

        <li><a href="#">BLOGS</a></li>
        <li><a href="#">CONTACT</a></li>
    </ul>

    <button class="quote-btn">REQUEST QUOTE</button>

    <div class="menu-btn" onclick="openMenu()">
        <i class="fa-solid fa-bars"></i>
    </div>
</header>

<div class="custom-offcanvas" id="offcanvas">
    <div class="close-btn" onclick="closeMenu()">
        <i class="fa-solid fa-xmark"></i>
    </div>

    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Industries</a></li>
        <li><a href="#">Blogs</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</div>

<script>
    function openMenu() {
        document.getElementById("offcanvas").classList.add("active");
    }

    function closeMenu() {
        document.getElementById("offcanvas").classList.remove("active");
    }
</script>

</body>
</html>

