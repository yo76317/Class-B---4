<h1>第一次購物</h1>
<a href="?do=reg">
    <img src="icon/0413.jpg" alt="">
</a>
<h1>會員登入</h1>
<table class="all">
    <tr>
        <td class="tt ct">帳號</td>
        <td class="pp"><input type="text" name="acc" id="acc"></td>
    </tr>
    <tr>
        <td class="tt ct">密碼</td>
        <td class="pp"><input type="password" name="pw" id="pw"></td>
    </tr>
    <tr>
    <td class="tt ct">驗證碼</td>
        <td class="pp">
            <?php
                $a=rand(10,99);
                $b=rand(10,99);
                $_SESSION['and']=$a+$b;
                echo $a . " + " . $b . " = ";
            ?>
            <input type="text" name="ans" id="ans">
        </td>
    </tr>
</table>

<div class="ct"><button onclick="login()">確認</button></div> 

<script>
// 檢查帳密
function login(){
    $.post("api/chk_ans.php",
           {ans:$("#ans").val()},
           (chk)=>{
            // parseInt 資料型態
            if(parseInt(chk)==1){
            }else{
                alert("對不起,您輸入的驗證碼有誤請您重新登入")
            }
    })
}
</script>
