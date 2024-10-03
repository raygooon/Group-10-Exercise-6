<?php
$message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle POST submission
    $name = htmlspecialchars($_POST['name']);
    $age = (int) $_POST['age'];
    $message = "Submitted via POST: Welcome, $name! You are $age years old.";
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Handle GET submission
    if (isset($_GET['name']) && isset($_GET['age'])) {
        $name = htmlspecialchars($_GET['name']);
        $age = (int) $_GET['age'];
        $message = "Submitted via GET: Welcome, $name! You are $age years old.";
    } else {
        $message = "Name and age are missing!";
    }
}

?>
<?php include('./includes/header.php'); ?>
<main>
    <h2><?= $message; ?></h2>      
<!--Modals-->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h1>Personal Information</h1>
            <div class="button-group">
                <p>Name: Idago, Justine Grace J.</p>
                <p>Age: 20 years old</p>
                <p>Birthday: September, 30 2003</p>
                <p>Hobbies: Badminton</p>
                <button onclick="closeModal('modal1')">Close</button>
            </div>
        </div>
    </div>

    <div id="modal2" class="modal">
        <div class="modal-content">
            <h1>Personal Information</h1>
            <div class="button-group">
                <p>Name: Valencia, Ghizelle A.</p>
                <p>Age: 20 years old</p>
                <p>Birthday: October, 5 2003</p>
                <p>Hobbies: Badminton</p>
                <button onclick="closeModal('modal2')">Close</button>
            </div>
        </div>
    </div>

    <div id="modal3" class="modal">
        <div class="modal-content">
            <h1>Personal Information</h1>
            <div class="button-group">
                <p>Name: Alvarez, Harlene A.</p>
                <p>Age: 20 years old</p>
                <p>Birthday: July, 8 2001</p>
                <p>Hobbies: Watching anime movies</p>
                <button onclick="closeModal('modal3')">Close</button>
            </div>
        </div>
    </div>

    <div id="modal4" class="modal">
        <div class="modal-content">
            <h1>Personal Information</h1>
            <div class="button-group">
                <p>Name: Raygon, Roberto M.</p>
                <p>Age: 22 years old</p>
                <p>Birthday: July, 15 2002</p>
                <p>Hobbies: Watching series/movies, listening music</p>
                <button onclick="closeModal('modal4')">Close</button>
            </div>
        </div>
    </div>

    <section class="container">
        <div class="box">
            <div class="box-image box-1"></div>
            <h2>Idago, Justine Grace J.</h2>
            <div class="btns">
                <button onclick="openModal('modal1')" class="btn">Personal Information</button>
            </div>  
            <a href="https://www.facebook.com/justinegrace.idago">Social Media Account</a>
        </div>

        <div class="box">
            <div class="box-image box-2"></div>
            <h2>Valencia, Ghizelle A.</h2>
            <div class="btns">
                <button onclick="openModal('modal2')" class="btn">Personal Information</button>
            </div>
            <a href="https://www.facebook.com/profile.php?id=100008659603010">Social Media Account</a>
        </div>

        <div class="box">
            <div class="box-image box-3"></div>
            <h2>Alvarez, Harlene A.</h2>
            <div class="btns">
                <button onclick="openModal('modal3')" class="btn">Personal Information</button>
            </div>
            <a href="https://www.facebook.com/NhelAlvarez08">Social Media Account</a>
        </div>

        <div class="box">
            <div class="box-image box-4"></div>
            <h2>Raygon, Roberto M.</h2>
            <div class="btns">
                <button onclick="openModal('modal4')" class="btn">Personal Information</button>
            </div>
            <a href="https://www.facebook.com/roberto.raygon">Social Media Account</a>
        </div>
    </section>
<div class="meh">
    <a href="index.php">Go Back</a>
</div>
    <script src="scripts.js"></script>
</main>
<?php include('./includes/footer.php'); ?>