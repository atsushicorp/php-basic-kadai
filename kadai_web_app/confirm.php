<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <style>
    .result-form {
      border-top: 2px solid #f5f5f5;
      border-bottom: 2px solid #f5f5f5;
    }
    .form-table{
      border: 1px solid #000000;
    }
    .form-table th,.form-table td {
      border: 1px solid #000000;
    }
    .formbtn {
      margin-top: 10px;
      margin-bottom: 10px;
    }
  </style>
  <title>確認画面</title>
</head>
<body>
  <div class="result-form">
    <h2>ご入力内容をご確認ください</h2>
    <p>問題がなければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>
    <form class="confirm-form" method="POST" action="./complete.php">
      <table class="form-table">
        <tr>
          <th>項目</th>
          <th>入力内容</th>
        </tr>
        <tr>
          <td>社員名</td>
          <td><?=$_POST['employee_name']?><input type="hidden" name="employee_name" value="<?=$_POST['employee_name']?>"/></td>
            
        </tr>
        <tr>
          <td>年齢</td>
          <td><?= $_POST['employee_age'] ?><input type="hidden" name="employee_age" value="<?= $_POST['employee_age'] ?>"/></td>
        </tr>
        <tr>
          <td>所属部署</td>
          <td><?=$_POST['department'] ?><input type="hidden" name="department" value="<?= $_POST['department'] ?>"/></td>
        </tr>
      </table>
      <input type="submit"  class="frombtn" value="確定" />
      <input type="button" class="formbtn" value="キャンセル" onclick="history.back()" />
    </from>
  </div>
</body>
</html>