<?php
date_default_timezone_set("Asia/Bangkok");
?>
<html>
    <head>
        <title>Form Register</title>
        <style>
body {
    background-image: url(background.jpg);
    background-size: 100% 100%;
}
#taskbar   {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 999;
    animation: slide-up 0.5s ease;
}

@keyframes slide-up {
    from {
        transform: translateY(100%);
    }
    to {
        transform: translateY(0);
    }
}

/* Gaya tautan di dalam taskbar */
#taskbar ul {
    list-style: none;
    padding: 0;
}

#taskbar ul li {
    display: inline;
    margin-right: 20px;
}

#taskbar ul li:last-child {
    margin-right: 0;
}

#taskbar ul li a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
}

fieldset {
    background-color: thistle;
    font-style: italic;
    font-size: larger;
    padding: 0px;
    width: 300px;
    height: 400px;
    border: 2px lightcoral;
}
        </style>
    </head>
    <body>
        <div id="taskbar">
            <nav>
                <a href="BERANDA.html"><button>BERANDA</button></a>
            </nav>
        </div>
<br>
<br>
<br>
        <img src="LogoUdayana.png">
        <p style="font-size: large;"><b>SELAMAT DATANG DI WEB RESMI UNIVERSITAS UDAYANA</b></p>
<br>
<center>
    <fieldset>
    <h1>REGISTER</h1>
            <form action="Index.php" method="POST">
                <label for="">Username:</label>
                <input type="text" name="Username" autocomplete="off"><br>
                
                <label for="">Password:</label>
                <input type="password" name="Password" autocomplete="off"><br><br>
                
                <label for="Address">Address:</label>
                <input type="Address"  name="Address" autocomplete="off"><br><br>

                <label for="">Gender:</label>
                <input type="radio" name="Gender" value="MAN"><label>MAN</label><br><br>
                <input type="radio" name="Gender" value="WOMAN"><label>WOMAN</label><br><br>
<br>
                <label for="Religion">Religion:</label>
                <select class="" name="Religion">
                    <option value="MUSLIM">ISLAM</option>
                    <option value="KKRISTEN PROTESTAN">KRISTEN PROTESTAN</option>
                    <option value="KRISTEN KATHOLIK">KRISTEN KATHOLIK</option>
                    <option value="HINDU">HINDU</option>
                    <option value="BUDHA">BUDHA</option>
                    <option value="KONGHUCU">KONGHUCU</option>
                </select>
<br>
                <button type="submit" name="Submit" value= <?php echo date("h,i,sa"); ?>Submit</button> 
                       </form>
        </fieldset>
</center>
</body>
</html>
