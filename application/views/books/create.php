<?php echo validation_errors(); ?>

<?php echo form_open('books/create'); ?>
	<label for="author">Author</label>
    <input type="input" name="author" /><br />

    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="genre">Genre</label>
    <input type="input" name="genre" /><br />

    <label for="description">Description</label>
    <textarea name="description"></textarea><br />

    <label for="year">Year</label>
    <input type="input" name="year" /><br />


    <input type="submit" name="submit" value="Add book" />

</form>