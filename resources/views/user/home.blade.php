<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accify.com</title>
</head>
<body>
    This is user home page
    <td> {{Auth::guard('web')->user()->email}}  </td>
</body>
</html>