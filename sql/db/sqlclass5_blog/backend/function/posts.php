<?php
date_default_timezone_set("Asia/Taipei");
function showAllPosts()
{
    try {
        global $pdo;
        // $sql = "SELECT * FROM {$table}";
        // $sql = "SELECT * FROM blog ORDER BY id DESC"; // ORDER BY排序的資料表像是ID 或者是時間  DES遞減ASC遞增
        $sql = "SELECT blog.*,category.title 
        AS c_title,category.slug,members.user 
        FROM blog 
        LEFT JOIN category 
        ON blog.cate_id = category.id
        LEFT JOIN members
        on blog.user_id = members.id
        ORDER BY id DESC"; // 合併category 此時假設兩個資料夾有相同的名稱 但要同時呈現出來 可以設定別名 設定為AS xxxxx
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $row_array = array();
        while ($rows = $stmt->fetch()) {
            $row_array[] = $rows;
        }
        return $row_array;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
function showAllCatePost($cate_id)
{
    try {
        global $pdo;
        $sql = "SELECT blog.*,category.title AS c_title,category.slug 
        FROM blog 
        LEFT JOIN category 
        ON blog.cate_id = category.id  WHERE blog.cate_id = ? ORDER BY id DESC";
        //獨立分類
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$cate_id]);
        $row_array = array();
        while ($rows = $stmt->fetch()) {
            $row_array[] = $rows;
        }
        return $row_array;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
function show($id)
{
    try {
        global $pdo;
        $sql = $sql = "SELECT blog.*,category.title AS c_title,category.slug,members.user
        FROM blog 
        LEFT JOIN category 
        ON blog.cate_id = category.id
        LEFT JOIN members
        ON blog.user_id = members.id
        WHERE blog.id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        return $row;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function storePost($title, $content, $cate_id, $cover, $tmp_name, $filetype, $error)
{
    session_start();
    try {
        // include("backend/pdo.php"); 這種方式會依照頁面來抓路徑 導致徒法通用
        global $pdo; // 全域的方式取pdo
        $sql = "INSERT INTO blog(title,content,create_at,update_at,cover,cate_id,user_id)VALUE(?,?,?,?,?,?,?)"; // 在非windows平台上會抱錯所以要加上cover
        $stmt = $pdo->prepare($sql);
        // $cover = 0; // 在非windows平台上會抱錯所以要暫時加上cover
        $create_at = date("Y-m-d H:i:s");
        $target = "images/{$cover}"; //圖片上船位置
        if ($error == 0) {
            if (move_uploaded_file($tmp_name, $target)) {
                $stmt->execute([$title, $content, $create_at, $create_at, $cover, $cate_id, $_SESSION["ID"]]);
                img($filetype,  $target, $cover); //壓縮的 function 
            } else {
                echo "上傳錯誤";
            }
        } else {
            echo "新增錯誤";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
function delete($id, $cover)
{
    try {
        global $pdo;
        $sql = "DELETE FROM blog WHERE id =?";
        if ($cover != 0) {
            unlink(("images/{$cover}"));
            unlink(("thumbs/{$cover}"));
        }
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function update($title, $content, $cate_id,  $cover, $id, $tmp_name, $filetype, $error)
{
    try {
        global $pdo;
        $update_at = date("Y-m-d H:i:s");
        $sql = "UPDATE 
                    blog
                SET 
                    title = ?,
                    content = ?,
                    update_at = ?,
                    cate_id = ?,
                    cover = ?
                WHERE 
                    id = ? ";
        $stmt = $pdo->prepare($sql);
        $target = "images/{$cover}";
        if ($tmp_name == 0) {
            $stmt->execute([$title, $content, $update_at, $cate_id, $cover, $id]);
        } else {
            if ($error == 0) {
                if (move_uploaded_file($tmp_name, $target)) {
                    $stmt->execute([$title, $content, $update_at, $cate_id, $cover, $id]);
                    img($filetype,  $target, $cover);
                };
            }
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
function showAllPages($per = 3)
{
    try {
        global $pdo;
        $sql = "SELECT * FROM blog";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        // $total = $stmt->rowCount();
        // $pages = ceil($total / $per);
        if (!isset($_GET["page"])) {
            $page = 1;
        } else {
            $page = $_GET["page"];
        }
        $start = ($page - 1) * $per;
        $sql = "SELECT blog.*,category.title 
        AS c_title,category.slug,members.user 
        FROM blog 
        LEFT JOIN category 
        ON blog.cate_id = category.id
        LEFT JOIN members
        on blog.user_id = members.id
        ORDER BY id DESC
        LIMIT {$start},{$per} ";
        $stmt = $pdo->prepare($sql);
        $rows = array();
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            $rows[] = $row;
        }
        return $rows;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
function pages($per = 3)
{
    global $pdo;
    $sql = "SELECT * FROM blog";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $total = $stmt->rowCount();
    $pages = ceil($total / $per);

    if (!isset($_GET["page"])) {
        $page = 1;
    } else {
        $page = $_GET["page"];
    }
    $next = $page + 1;
    $prev = $page - 1;
    echo "<ul class='pagination justify-content-center'>";
    if ($page != 1) {
        echo "<li class='page-item'><a href='{$_SERVER["PHP_SELF"]}?page=1' class='page-link'> 第一頁 </a><li>";
        echo "<li class='page-item'><a href='{$_SERVER["PHP_SELF"]}?page={$prev}' class='page-link'> 上一頁 </a></li>";
    }
    for ($i = 0; $i < $pages; $i++) {
        $p = $i + 1;
        if ($p == $page) {
            echo "<li class='page-item active'><a href='#' class='page-link'>{$p}</a></li>";
        } else {
            echo "<li class='page-item'><a href='{$_SERVER["PHP_SELF"]}?page={$p}' class='page-link'>{$p}</a></li>";
        }
    }
    if ($page != $pages) {
        echo "<li class='page-item'><a href='{$_SERVER["PHP_SELF"]}?page={$next}' class='page-link'> 下一頁 </a></li>";
        echo "<li class='page-item'><a href='{$_SERVER["PHP_SELF"]}?page={$pages}' class='page-link'> 最末頁 </a></li>";
    }
    echo "</ui>";
}
function img($filetype, $target, $cover)
{
    switch ($filetype) {
        case "image/jpg":
            $canvas = imagecreatefromjpeg($target);
            break;
        case "image/png":
            $canvas = imagecreatefrompng($target);
            break;
        case "image/gif":
            $canvas = imagecreatefromgif($target);
            break;
        default:
            echo "上傳失敗";
            return;
    }
    $canvas_w = imagesx($canvas);
    $canvas_h = imagesy($canvas);
    $new_w = 800;
    $new_h = $canvas_h / $canvas_w * 800;

    $new_canvas = imagecreatetruecolor($new_w, $new_h);
    imagecopyresampled($new_canvas, $canvas, 0, 0, 0, 0, $new_w, $new_h, $canvas_w, $canvas_h);

    // $new_name = uniqid() . ".jpg";檔名已經有了

    switch ($filetype) {
        case "image/jpg":
            imagejpeg($new_canvas, "thumbs/{$cover}");
            break;
        case "image/png":
            imagepng($new_canvas, "thumbs/{$cover}");
            break;
        case "image/gif":
            imagegif($new_canvas, "thumbs/{$cover}");
            break;
        default:
            echo "上傳失敗";
            return;
    }
    // imagejpeg($new_canvas, "thumbs/{$new_name}");
    imagedestroy($new_canvas);
    imagedestroy($canvas);
}


function search($search){
    try{
        // LIKE為比對
        global $pdo;
        $sql = "SELECT * FROM blog WHERE title LIKE ? OR content LIKE ? ";
        $stmt = $pdo->prepare($sql);
        $search = "%$search%";
        $stmt -> execute([$search,$search]);
        $rows = array();
        while($row = $stmt->fetch() ){
            $rows[] = $row;
        }
        return $rows;
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}
