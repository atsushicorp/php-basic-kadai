<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>社員情報入力フォーム</title>
  <style type="text/css">
    .form-border {
      border: 1px solid #000000;
      width: 400px;
    }
    h1 {
      margin-left: 10px;
    }
    form {
      padding: 10px;
    }
   .submitbtn {
    margin-top: 5px;
   }
  </style>
</head>
<body>
  <div class="form-border">
    <h1>社員情報入力フォーム</h1>
    <form method="POST" action="./confirm.php">
      <table>
        <tr>
          <td>
            <label for="employee_name">社員名</label>
          </td>
          <td>
            <input type="text" id="employee_name" name="employee_name" />
          </td>
        </tr>
        <tr>
          <td>
            <label for="employee_age">年齢</label>
          </td>
          <td>
            <input type="text" id="employess_age" name="employee_age" />
          </td>
        </tr>
        <tr>
          <td>
            <label for="department">所属部署</label>
          </td>
          <td>
            <select type="text" id="department" name="department">
              <option>開発部</option>
              <option>営業部</option>
              <option>人事部</option>
            </select>
          </td>
        </tr>
      </table>
      <input type="submit" class="submitbtn" value="送信" /> 
    </form>
  </div>
</body>
</html>