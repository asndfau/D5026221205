<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <script>
            function showAlert() {
                alert("Selamat Anda mendapatkan 100 juta");
            }

            function changeText() {
                var span = document.getElementById("output"); // mendapatkan object tulisan
                var textBox = document.getElementById("textbox"); // mendapatkan object text box
                textbox.style.color = "violet";
                span.innerHTML = textBox.value; // membaca isi textbox dan mengubah tulisan non input
            }
        </script>
        <button class="btn btn-info" style="margin-bottom: 12px;" onclick="showAlert()">Klik Disini</button>
        <br>

        <button class="btn btn-warning" onclick="changeText();">Click me!</button>
        <br>
        <span id="output">replace me</span>
        <input class="form-control" id="textbox" type="text" />
    </div>
</body>
</html>
