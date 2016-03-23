<h2>登録画面</h2>

  {if count($errors)}
    <ul>
    {foreach from=$errors item=error}
     <li>{$error}</li>
    {/foreach}
    </ul>
  {/if}


<form action="." method="post">
  <table border="0">
    <tr>
      <td>メールアドレス</td>
      <td><input type="text" name="mailaddress" value="{$form.mailaddress}"></td>
    </tr>
    <tr>
      <td>パスワード</td>
      <td><input type="password" name="password" value=""></td>
    </tr>
  </table>
  <p>
  <input type="submit" name="action_databaseaccess" value="登録">
  </p>

</form>
