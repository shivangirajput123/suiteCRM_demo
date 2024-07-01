<!DOCTYPE html>
<html>
<head>
    <title>Smarty Example</title>
</head>
<body>

<h1>Welcome to Smarty Example</h1>

<h2>Names:</h2>
<p>Name: {$Name}</p>

<h2>First Names:</h2>
<ul>
    {foreach $FirstName as $name}
        <li>{$name}</li>
    {/foreach}
</ul>

<h2>Last Names:</h2>
<ul>
    {foreach $LastName as $name}
        <li>{$name}</li>
    {/foreach}
</ul>

<h2>Classes:</h2>
<table border="1">
    {foreach $Class as $row}
        <tr>
            {foreach $row as $cell}
                <td>{$cell}</td>
            {/foreach}
        </tr>
    {/foreach}
</table>

<h2>Contacts:</h2>
<table border="1">
    <tr>
        <th>Phone</th>
        <th>Fax</th>
        <th>Cell</th>
    </tr>
    {foreach $contacts as $contact}
        <tr>
            <td>{$contact.phone}</td>
            <td>{$contact.fax}</td>
            <td>{$contact.cell}</td>
        </tr>
    {/foreach}
</table>

<h2>Options:</h2>
<select name="states">
    {html_options values=$option_values selected=$option_selected output=$option_output}
</select>

<h2>Example of strpos Custom Modifier:</h2>
<p>Position of 'example' in '{$Name}': {$Name|strpos:"example"}</p>

</body>
</html>
