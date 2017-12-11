<?php echo validation_errors(); ?>

<?php echo form_open('books/edit/'. $book['id']); ?>
    <label class="hidden" for="id">Id</label>
    <input class="hidden" type="input" name="id" value="<?php echo $book['id']; ?>"/><br />

	<label for="author">Author</label>
    <input type="input" name="author" value="<?php echo $book['author']; ?>"/><br />

    <label for="title">Title</label>
    <input type="input" name="title" value="<?php echo $book['title']; ?>"/><br />

    <label for="genre">Genre</label>
    <input type="input" name="genre" value="<?php echo $book['genre']; ?>"/><br />

    <label for="description">Description</label>
    <textarea name="description"><?php echo $book['description']; ?></textarea><br />

    <label for="year">Year</label>
    <input type="input" name="year" value="<?php echo $book['year']; ?>"/><br />


    <input type="submit" name="submit" value="Add book" />

</form>