<!DOCTYPE html>
<html>

<head>
    <title>SIGN UP</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
    input[type="file"] {
        background: #fff !important;
        appearance: none !important;
    }
    </style>
</head>

<body>

<section class="card">
<form action="signup-check.php" method="post" enctype="multipart/form-data">
        <img class="img-logo" src='img/logo.png' height="220" width="430" />
        <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
        <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

        <div style="margin-bottom: 20px">
            <label for="role">Select your role</label>
            <select id="role" name="role" onchange="showDropInfo()"
                style="width: calc(100% - 22px); margin-top:10px; margin-left: 11px; padding: 12px; cursor: pointer; border-radius: 5px; appearance: none">
                <option value="Presentor">Presentor</option>
                <option value="Non-Presentor">Non-Presentor</option>
            </select>
        </div>

        <label>Name: (Last Name, First Name M.I.)</label>
        <input required type="text" name="name"><br>

        <label>Email Address</label>
        <input required type="text" name="uname"><br>

        <label>Password</label>
        <input required type="password" name="password"><br>

        <label>Re-Password</label>
        <input required type="password" name="re_password"><br>
    
        <div id="presentorDiv">
            <label for="title_of_paper">Title of Paper</label>
            <input required type="text" name="title_of_paper"><br>

            <label for="revised_abstract">Upload Revised Abstract (If necessary)</label>
            <input type="file" name="revised_abstract"><br>

            <label for="bionote">Upload Bionote with your photo</label>
            <input type="file" required name="bionote"><br>
        </div>

        <label for="proof_of_payment">Proof of Payment</label>
        <input type="file" required name="proof_of_payment"><br>

        <button type="submit">Sign Up</button>
        <h3> Already have an Account? </h3>
        <a href="index.php" class="ca">
            <p style="color:white;"> Click here </p>
        </a>
    </form>

</section>

    <script>
    function showDropInfo() {
        var pF = document.getElementById('role');
        var pD = document.getElementById('presentorDiv');
        var nPD = document.getElementById('nonPresentorDiv');

        if (pF[pF.selectedIndex].text == 'Presentor') {
            pD.style.display = 'block'
        } else {
            pD.style.display = 'none'
        }

        if (pF[pF.selectedIndex].text == 'Non-Presentor') {
            nPD.style.display = 'block'
        } else {
            nPD.style.display = 'none'
        }
    }
    </script>
</body>

</html>