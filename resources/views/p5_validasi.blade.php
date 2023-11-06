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
    <script>
        function validateForm() {
            console.log("Ini baris 13");
            return false;
            console.log("Ini baris 15");
            return true;
            console.log("Ini baris 17");
        }

        function validate() {
            var bil1 = document.getElementById("bil1");
            var bil2 = document.getElementById("bil2");
            var nrp = document.getElementById("nrp");

            if (bil1.value == "") {
                alert("Bilangan 1 harus diisi")
                bil1.placeholder = "mohon diisi dengan angka"
                bil1.focus();
                return false;
            }

            if (bil2.value == "") {
                alert("Bilangan 2 harus diisi")
                bil2.placeholder = "mohon diisi dengan angka";
                bil2.focus();
                return false;
            }

            if(isNaN(nrp.value)) {
                alert("nrp harus diisi dengan angka")
                return false;
            }

            if (nrp.length !== 9) {
                alert("nrp harus diisi sepuluh digit");
                nrp.focus();
                return false;
            }


        }
    </script>
</head>
<body>
    <div class="container">
        <form action="https://www.detik.com" method="get" onsubmit="return validate();">
            <div class="form-group">
                <label for="bil1">Bilangan 1 :</label>
                <input type="number" id="bil1" class="form-control">
            </div>
            <div class="form-group">
                <label for="bil2">Bilangan 2 :</label>
                <input type="number" id="bil2" class="form-control">
            </div>
            <div class="form-group">
                <label for="nrp">NRP :</label>
                <input type="text" id="nrp" class="form-control">
            </div>
            <input type="submit" value="KIRIM" class="btn btn-danger">
        </form>
    </div>
</body>
</html>
