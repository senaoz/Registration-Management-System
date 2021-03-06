<head>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <style>
        ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
        }

        li {
            float: left;
        }

        li a, .dropbtn {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-weight: bold;
        }

        li.dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: rgb(255, 255, 255);
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 10px;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
            border-radius: 10px;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;}

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>
<div id="menu">
<?php
session_start();
if (isset($_SESSION["u_mail"])){
    if ($_SESSION["role"] == 'Admin') {
            echo '<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="src/pages/adminTables.php">Admin Tables</a></li>
    <li class="dropdown">
        <a href="src/pages/userindex.php" class="dropbtn">Admin Menu</a>
        <div class="dropdown-content">
            <a href="src/pages/userindex.php">My Page</a>
            <a href="src/pages/settings.php">Settings</a>
            <a href="src/pages/register.php">Register New Users</a>
            <a href="src/courses/createCourses.php">Create New Courses</a>
            <a href="src/logout.php">Logout</a>
            </ul>';
        }

    if ($_SESSION["role"] == 'Professor') {
        echo '<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="src/pages/profTables.php">My Courses</a></li>
    <li><a href="src/courses/consents.php">Consents</a></li>
    <li class="dropdown">
        <a href="src/pages/userindex.php" class="dropbtn">User Menu</a>
        <div class="dropdown-content">
            <a href="src/pages/userindex.php">My Page</a>
            <a href="src/logout.php">Logout</a>
            </ul>';
    }

    if ($_SESSION["role"] == 'Student') {
        echo '<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="src/pages/userTables.php">My Information</a></li>
    <li><a href="src/courses/courses.php">Courses</a></li>
    <li class="dropdown">
        <a href="src/pages/userindex.php" class="dropbtn">User Menu</a>
        <div class="dropdown-content">
            <a href="src/pages/userindex.php">My Page</a>
            <a href="src/logout.php">Logout</a>
            </ul>';
    }

}
else { echo '<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="src/course/courses.php">Courses</a></li>
    <li><a href="src/login.php">Login</a></li>
</ul>';
}

?>
</div>
</body>




