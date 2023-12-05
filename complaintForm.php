<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Issue Form</title>
</head>
<body>

<h2>Report Issue Form</h2>

<form action="processForm.php" method="post" enctype="multipart/form-data">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea><br>

    <label for="image">Upload Picture:</label>
    <input type="file" id="image" name="image" accept="image/*"><br>

    <button type="button" onclick="getLocation()">Get Location</button>
    <input type="hidden" id="latitude" name="latitude">
    <input type="hidden" id="longitude" name="longitude">

    <button type="submit">Submit</button>
</form>

<script>
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            alert("Geolocation is not supported by this browser.");
        }
    }

    function showPosition(position) {
        document.getElementById("latitude").value = position.coords.latitude;
        document.getElementById("longitude").value = position.coords.longitude;
    }
</script>

</body>
</html>
