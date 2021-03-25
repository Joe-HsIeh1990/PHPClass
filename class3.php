<?php
    $s = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam accusantium, quia tempore perspiciatis ipsum unde expedita minus odio illum molestiae sed corporis necessitatibus, cum magni facere nobis? Dolores, rem harum!";

    // echo strtoupper($s); // 全部轉大寫
    // echo strtolower($s); // 全部轉小寫
    // echo ucfirst($s); // 首字大寫每一段
    // echo ucwords($s); // 每一個手字大寫

    // 上面都是可以用css做到

    $new_s = substr($s,0,50);// 取得0-50個字
    echo $new_s."繼續閱讀..."; //部落格常有用到

    $cs = "中華職棒有夠爛真的夠爛爛到爆炸";//用中文很常出現問題出現亂碼須滿足條件 
    // $new_cs = substr($cs,0,13);
    // echo $new_cs;

    // 如何正常顯示中文
    $new_cs = mb_substr($cs,0,13,"utf-8"); //這邊需要加上編碼
    echo $new_cs;

    // 簡單觀念 如果html可以做到就不要用css 如果css可以做到不要用js 如果js可以做到不要用php  友關係到效能問題 css吃的效能是gpu js是cpu

    //例如時間部分 用php來做可以依照當地時間來做計算 js就比較麻煩


    // 表單傳遞
    // 內容於form.php及form2.php
