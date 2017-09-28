<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form>
            <select name="dia">
                <?php for ($i=1; $i<=31; $i++):?>
                <option value="<?php print $i;?>"><?php print $i;?></option>
                <?php endfor;?>                
            </select>
            /
            <select name="mes">
                <?php for ($i=1; $i<=12; $i++):?>
                <option value="<?php print $i;?>"><?php print $i;?></option>
                <?php endfor;?>                
            </select>
            /
            <select name="ano">
                <?php for ($i=1900; $i<=2017; $i++):?>
                <option value="<?php print $i;?>"><?php print $i;?></option>
                <?php endfor;?>                
            </select>
        </form>
    </body>
</html>

