<?php foreach($posts as $post): ?>

<article>

    <h1><?=$post['first_name']?> <?=$post['last_name']?> posted:</h1>

    <p><?=$post['content']?></p>

    <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
        <?=Time::display($post['created'])?>
    </time>

<form method='POST' action='/posts/p_delete'>
<input type='hidden' name='post_id' value=<?=$post['post_id']?>> 
    <input type='submit' value='Delete Post'> 
 </form> 

<br />

<form method='POST' action='/posts/p_edit'>
<input type='hidden' name='post_id' value=<?=$post['post_id']?>> 
    <label for='content'>Edit Post:</label><br>
    <textarea name='content' id='content'></textarea>
    <br/>
    <input type='submit' value='Edit Post'>

</form> 


</article>

<?php endforeach; ?>