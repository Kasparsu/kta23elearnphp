<?php include 'partials/header.php'; ?>
    <h1>Hello <?=$name?></h1>
    <form>
        <input type="text" name="name">
        <input type="number" name="age">
        <input type="submit">

        <a href="http://localhost:8000/?name=%3Cscript%3Ealert%28%27hello%27%29%3C%2Fscript%3E&age=">https://facebook.com</a>
    </form>
<?php include 'partials/footer.php'; ?>