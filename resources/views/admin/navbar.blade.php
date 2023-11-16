<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-KyZXEAg3QhqLMpG8r+Knujsl5+z0I5t9z5lFf5r7MIaqM6jXiFzJ2jQ6lOyyUu1H9VStK2f8l+Xt5VxHxJ53Rg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Plus Jakarta Sans';
        }

        .navbar {
            background-color: #006400;
            padding: 15px;
            color: white;
            text-align: right;
            font-size: 13px;
            font-family: 'Plus Jakarta Sans';
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            background-color: #13360D;
            padding-top: 2%; /* Adjusted padding for the space occupied by the navbar */
            font-family: 'Inter';
        }

        .sidebar a {
            padding: 15px;
            text-decoration: none;
            font-size: 15px; /* Adjusted font size */
            color: white;
            display: block;
            transition: 0.3s;
        }

        .sidebar a i {
            margin-right: 10px; /* Spacing between icon and text */
        }

        .sidebar a:hover {
            background-color: #062C00;
        }

        .content {
            margin-left: 270px;
            padding: 16px;
        }

        .top-right {
            position: absolute;
            top: 10px;
            right: 10px;
            color: white;
        }
    </style>
    <title>Beranda</title>
</head>
<body>
<div>
    <div class="navbar" style="padding-right:5%">
        <h2>Admin</h2>
        <button style="background: transparent;border:none; color:white">
            <div id="toggle-button">&#9776;</div>
        </button>
    </div>
    
</div>


<div class="sidebar">
    <a href="#"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="currentColor" d="M6.906.664a1.749 1.749 0 0 1 2.187 0l5.25 4.2c.415.332.657.835.657 1.367v7.019A1.75 1.75 0 0 1 13.25 15h-3.5a.75.75 0 0 1-.75-.75V9H7v5.25a.75.75 0 0 1-.75.75h-3.5A1.75 1.75 0 0 1 1 13.25V6.23c0-.531.242-1.034.657-1.366l5.25-4.2Zm1.25 1.171a.25.25 0 0 0-.312 0l-5.25 4.2a.25.25 0 0 0-.094.196v7.019c0 .138.112.25.25.25H5.5V8.25a.75.75 0 0 1 .75-.75h3.5a.75.75 0 0 1 .75.75v5.25h2.75a.25.25 0 0 0 .25-.25V6.23a.25.25 0 0 0-.094-.195Z"/></svg></i> Beranda</a>
    <a href="#"><i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M12 21q-3.775 0-6.388-1.163T3 17V7q0-1.65 2.638-2.825T12 3q3.725 0 6.363 1.175T21 7v10q0 1.675-2.613 2.838T12 21Zm0-11.975q2.225 0 4.475-.638T19 7.025q-.275-.725-2.513-1.375T12 5q-2.275 0-4.463.638T5 7.024q.35.75 2.538 1.375T12 9.025ZM12 14q1.05 0 2.025-.1t1.863-.288q.887-.187 1.675-.462T19 12.525v-3q-.65.35-1.438.625t-1.675.463q-.887.187-1.862.287T12 11q-1.05 0-2.05-.1t-1.888-.288q-.887-.187-1.662-.462T5 9.525v3q.625.35 1.4.625t1.663.463q.887.187 1.887.287T12 14Zm0 5q1.15 0 2.337-.175t2.188-.463q1-.287 1.675-.65t.8-.737v-2.45q-.65.35-1.438.625t-1.675.463q-.887.187-1.862.287T12 16q-1.05 0-2.05-.1t-1.888-.288q-.887-.187-1.662-.462T5 14.525V17q.125.375.788.725t1.662.638q1 .287 2.2.462T12 19Z"/></svg></i> Master Data</a>
    <a href="#"><i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path stroke-dasharray="64" stroke-dashoffset="64" stroke-width="2" d="M13 3L19 9V21H5V3H13"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="64;0"/></path><path stroke-dasharray="14" stroke-dashoffset="14" d="M12.5 3V8.5H19"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.2s" values="14;0"/></path><g stroke-width="2"><path stroke-dasharray="5" stroke-dashoffset="5" d="M9 17V14"><animate fill="freeze" attributeName="stroke-dashoffset" begin="1s" dur="0.2s" values="5;0"/></path><path stroke-dasharray="6" stroke-dashoffset="6" d="M12 17V13"><animate fill="freeze" attributeName="stroke-dashoffset" begin="1.2s" dur="0.2s" values="6;0"/></path><path stroke-dasharray="7" stroke-dashoffset="7" d="M15 17V12"><animate fill="freeze" attributeName="stroke-dashoffset" begin="1.4s" dur="0.2s" values="7;0"/></path></g></g></svg></i> Manajemen Pengaduan</a>
</div>

<div class="content">
    <h2 style="text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2)">Halo!!</h2>
</div>

<div class="top-right">
    <!-- Add any content for the top-right section here -->
</div>

</body>
</html>
