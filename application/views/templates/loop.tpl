{include file="header.tpl" title=foo}

{section name=user loop=$users}
  ID: {$users[user].id}<br />
  Name: {$users[user].name}<br />
  Email: {$users[user].email}<br />
  <br />
{/section}

<hr style="border: 1px solid;" />

<table>
	<tr>
      <th>ID</th>
      <th>Name</th> 
      <th>Email</th>
    </tr>
  { foreach from=$users item=user }

    <tr>
      <th>{ $user.id }</th>
      <th>{ $user.name }</th> 
      <th>{ $user.email }</th>
    </tr>

   {/foreach}
</table>

<hr style="border: 1px solid;" />

{if !($users[0].name eq "Dat")}
  <p>{ $users[0].name|upper }</p>
{/if}
<!-- { foreach from=$users item=user }
  ID: {$user.id}<br />
  Name: {$user.name}<br />
  Email: {$user.email}<br />
  {foreach from=$numbers item=number}
     Number: {$number}<br />
  {/foreach}
  <br />
{/foreach} -->