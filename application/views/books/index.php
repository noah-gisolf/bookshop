	<table id="books" class="display">
    <thead>
        <tr>
            <th>Author</th>
            <th>Title</th>
            <th>Genre</th>
            <th>Description</th>
            <th>Year</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($books as $book): ?>
        <tr>
            <td><?php echo $book['author']; ?></td>
            <td><?php echo $book['title']; ?></td>
            <td><?php echo $book['genre']; ?></td>
            <td><?php echo $book['description']; ?></td>
            <td><?php echo $book['year']; ?></td>
            <td><a href="/bookshop/index.php/books/edit/<?=$book["id"]?>">Edit</a></td>
            <td><a href="/bookshop/index.php/books/delete/<?=$book["id"]?>">✖</a></td>
        </tr>
<?php endforeach; ?>
    </tbody>
</table>
