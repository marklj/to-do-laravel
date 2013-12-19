<html>

<body>


    <h1>Things To-Do</h1>

    <h2>Listing</h2>

    <?php if(count($todos) < 1) print "There is nothing to do!"; ?>

    <ol>

        <?php foreach($todos as $todo): ?>

        <li>

            <a href="/todo/<?php print $todo->id; ?>"><?php print $todo->name; ?></a>

        </li>

        <?php endforeach; ?>

    </ol>

    <p>

    <p><a href="/todo/create">Create item</a></p>
    
    </p>


</body>

</html>