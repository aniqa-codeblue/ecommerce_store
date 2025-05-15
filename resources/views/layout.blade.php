<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          body,
          html {
            margin: 0;
            padding: 0;
            height: 100%;
          }

          .container1 {
            display: flex;
            height: 100%;
          }

          .sidebar {
            flex: 0 0 250px;
            background-color: #333;
            color: #fff;
          }

          .sidebar ul {
            list-style: none;
            padding: 0;
          }

          .sidebar ul li {
            padding: 10px;
          }

          .sidebar ul li a {
            color: #fff;
            text-decoration: none;
          }

          .sidebar ul li a:hover {
            background-color: #555;
          }

          .content {
            flex: 1;
            padding: 20px;
          }
          
    </style>
</head>
<body>
    <div class="container1">
        <nav class="sidebar">
            <ul>
               <li><a href="#">Dashboard</a></li>
               <li><a href="#">Users</a></li>
               <li><a href="#">Settings</a></li>
               <li><a href="#">Logout</a></li>
            </ul>
        </nav>
        <main class="content">
                @yield('content')
        </main>
    </div>
</body>
</html>