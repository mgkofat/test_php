<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
     <link rel="stylesheet" href="../head.css">
    <title>header</title>
</head>
<body>
<input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>Pro<span>duction</span></h3>
        </div>
        
        <div>
            <div class="side-menu">
                <ul>
                <li>
                       <a href="" class="active">
                            <span class="las la-home"></span>
                            <small>Home</small>
                        </a>
                    </li>
                    <li>
                       <a href="">
                            <span class="las la-user-alt"></span>
                            <small>User</small>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="head-bar">
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>
                <div class="header-menu"> 
                    <div class="logout">
                        <span>
                            <form method="post">
                            <button id="logoutButton" type="submit" name="logout">Log out</button>
                        </form>
                    </span>
                    </div>
                </div>
            </div>
        </div>
</div>
</body>
</html>