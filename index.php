<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter</title>
<style>
body{
    background-image: url('https://images.rawpixel.com/image_800/czNmcy1wcml2YXRlL3Jhd3BpeGVsX2ltYWdlcy93ZWJzaXRlX2NvbnRlbnQvbHIvdjU0NmJhdGNoMy1teW50LTM0LWJhZGdld2F0ZXJjb2xvcl8xLmpwZw.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;

.container{
    display: flex;
    justify-content: center;
    margin-top: 200px;
    }
.box{
    background-color: rgba(0, 0, 0, 0.3);
    border-radius: 8px;
    padding: 20px;
    margin: 10px;
    text-align: left;
}
input[type="text"], input[type="number"] {
    width: calc(100% - 0px);
    padding: 10px;
    border-radius: 4px;
    border: 1px solid;
    box-sizing: border-box;
}

button[type="submit"] {
    background-color: black;
    color: #fff;
    outline: none;
    width: 270px;
    height: 50px;
    font-size: 14px;
    cursor: pointer;
    border: 2px solid black;
    text-align: center;
}

button[type="submit"]:hover {
    background-color: rgb(62, 62, 62);
    color: white;
    cursor: pointer;
    transform: scale(1.05);
    transition: all 0.3s ease;
}
</style>
    <script>
        function setFormMethod(method) {
            document.getElementById('myForm').method = method;
        }
    </script>
</head>
<body>
    <?php include('./includes/header.php'); ?>
    <section class="container">
        <div class="box">
            <h2>Enter Your Name and Age</h2>
            <form id="myForm" action="webpage.php">
                Name: <input type="text" name="name" required>
                <br>
                Age: <input type="number" name="age" required>
                <br>
                <br>
                <button type="submit" onclick="setFormMethod('POST');">Submit via POST</button>
                <br>
                <br>
                <button type="submit" onclick="setFormMethod('GET');">Submit via GET</button>
            </form>
        </div>
    </section>
    <?php include('./includes/footer.php'); ?>
</body>
</html>