<?php
    
    const ID = 1;
    $title = "PHPテスト";
    $content = "PHPテストです";
    $post_at = "2025/12/01";
    $tag = ['PHP','プログラミング'];
    $status = true;

    
    $blog1 = array(
        'id' => ID,
        'title' => $title,
        'content' => $content,
        'post_at' => $post_at,
        'tag' => $tag,
        'status' => $status
    );

    // echo $blog1['title'];

    const ID2 = 1;
    $title2 = "PHPテスト";
    $content2 = "PHPテストです";
    $post_at2 = "2025/12/01";
    $tag2 = ['PHP','プログラミング'];
    $status2 = true;
    
    $blog2 = array(
        'id2' => ID2,
        'title2' => $title2,
        'content2' => $content2,
        'post_at2' => $post_at2,
        'tag2' => $tag,
        'status2' => $status2
    );

    $blogs = [$blog1, $blog2];
    
    foreach($blog1 as $blog) {
        // echo '<pre>';        
        echo $blog . "<br>";
        // echo '</pre>';        
    }

    foreach($blog2 as $key => $value) {
        // echo '<pre>';        
        echo $key . $value;
        // echo '</pre>';        
    }
?>
