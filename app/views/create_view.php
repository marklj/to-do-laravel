<html>

<body>


    <h1>Things To-Do</h1>

    <h2>Create</h2>

    <form method="post" action="<?php print $_SERVER['PHP_SELF']; ?>">

        <input type="text" name="name" placeholder="To-Do Name"><br>

        <textarea name="description" placeholder="Description of item"></textarea><br>

        <input type="submit">

    </form>

    <p><a href="/todo">Back to list</a></p>

</body>
</html>