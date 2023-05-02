<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
 
</head>
     <link rel="stylesheet" type="text/css" href="style.css">
     <body style="margin: 50px;">
     <img src='img/logo.png' height="150" width="280" />
     <br>
     <section class="card">
     <table class="table">
        <thead>
            <tr>
            <td class="text-primary">ID</td>
            <td class="text-primary">ROLE</td>
            <td class="text-primary">NAME</td>
            <td class="text-primary">EMAIL ADDRESS</td>
            <td class="text-primary">ACTION</td>
            </tr>
        </thead>

        <tbody>
            <td class="text-white">1</td>
            <td class="text-white">Presentor</td>
            <td class="text-white">Mark Chester Pondang</td>
            <td class="text-white">markchesterpondang@gmail.com</td>
            <td>
                <a class='btn btn-success btn-sm' href='update'>View</a>
                <a class='btn btn-primary btn-sm' href='update'>Approve</a>
                <a class='btn btn-danger btn-sm' href='delete'>Disapprove</a>
            </td>
        </tbody>
     </table>
     </section>
</body>
</html>
