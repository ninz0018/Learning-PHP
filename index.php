<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>PHP Learning</title>
</head>
<body>
    <main>
        <div class="d-flex justify-content-center align-items-center">     
        <form action="includes/formdata.php" method="post">
            <label for="username">Username</label><br>
            <input type="text" name="username" placeholder="Enter Username" id="username"><br><br>
            <label for="password">Password</label><br>
            <input type="text" name="password" placeholder="Enter Password" id="password"> <br><br>
            <label for="selectcar">Select Color</label><br>
            <select name="selectcar" id="selectcar">
                <option value="Nothing Selected" Selected>Select Color</option>
                <option value="red">Red</option>
                <option value="blue">Blue</option>
                <option value="Yellow">Yellow</option>
            </select><br><br>
            <button class="btn btn-primary rounded" type="submit">Submit</button>
        </form>
        </div>
    </main>
</body>
</html>