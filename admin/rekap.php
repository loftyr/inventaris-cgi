<p class=MsoNormal>
    <span style='font-family:"Times New Roman","serif"'></span>
</p>

<table class=MsoTableGrid style='border-collapse:collapse;border:none;'>
    <tr>
        <td colspan=8 valign=top>
            <p class=MsoNormal align=center style='margin-bottom: 20px;'><b><span style='font-size:14.0pt;font-family:"Times New Roman","serif"'>RECAPITULATION</span></b>
            </p>
        </td>
    </tr>
    <tr class="body-table">
        <td width=60 valign=top style="border: none;">
            <p class=MsoNormal><b><span style='font-family:"Times New Roman","serif"'></span></b></p>
        </td>
        <td width=174 valign=top>
            <p class=MsoNormal><b><span style='font-family:"Times New Roman","serif"'>TYPE</b></p>
        </td>
        <td width=186 valign=top>
            <p class=MsoNormal><b><span style='font-family:"Times New Roman","serif"'>TOTAL</b></p>
        </td>
        <td width=144 valign=top style="border: none;">
            <p class=MsoNormal><b><span style='font-family:"Times New Roman","serif"'></span></b></p>
        </td>
        <td width=141 valign=top style="border: none;">
            <p class=MsoNormal><b><span style='font-family:"Times New Roman","serif"'></span></b></p>
        </td>
        <td width=171 valign=top>
            <p class=MsoNormal><b><span style='font-family:"Times New Roman","serif"'>STATUS</span></b></p>
        </td>
        <td width=192 valign=top>
            <p class=MsoNormal><b><span style='font-family:"Times New Roman","serif"'>TOTAL</span></b></p>
        </td>
        <td width=60 valign=top style="border: none;">
            <p class=MsoNormal><b><span style='font-family:"Times New Roman","serif"'></span></b></p>
        </td>
    </tr>
    <tr class="body-table">
        <td width=60 valign=top style="border: none;">
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'></span></p>
        </td>
        <?php
        $count_item = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where stdevice.dev_id='5'
			   ORDER BY stdevice.id DESC");
        $count = mysql_num_rows($count_item);
        ?>
        <td width=174 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'>Keyboard</span></p>
        </td>
        <td width=186 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'><?php echo $count; ?></span></p>
        </td>
        <td width=144 valign=top style="border: none;">
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'></span></p>
        </td>
        <td width=141 valign=top style="border: none;">
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'></span></p>
        </td>

        <?php
        $new = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'New'") or die(mysql_error());
        $count = mysql_num_rows($new);
        ?>
        <td width=171 valign=top style='width:128.35pt;'>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'>New</span></p>
        </td>
        <td width=192 valign=top style='width:2.0in;'>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'><?php echo $count; ?></span></p>
        </td>
        <td width=60 valign=top style='width:44.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'></span></p>
        </td>
    </tr>


    <?php
    $count_item = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where stdevice.dev_id='4'  
			   ORDER BY stdevice.id DESC");
    $count = mysql_num_rows($count_item);
    ?>

    <tr class="body-table">
        <td width=60 valign=top style="border: none;">
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'></span></p>
        </td>
        <td width=174 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'>Mouse</span></p>
        </td>
        <td width=186 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'><?php echo $count; ?></span></p>
        </td>
        <td width=144 valign=top style="border: none;">
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'></span></p>
        </td>
        <td width=141 valign=top style="border: none;">
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'></span></p>
        </td>

        <?php
        $new = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'Used'") or die(mysql_error());
        $count = mysql_num_rows($new);
        ?>
        <td width=171 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'>Used</span></p>
        </td>
        <td width=192 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'><?php echo $count; ?></span></p>
        </td>
        <td width=60 valign=top style="border: none;">
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'></span></p>
        </td>
    </tr>

    <?php
    $count_item = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where stdevice.dev_id = '3'
			   ORDER BY stdevice.id DESC");
    $count = mysql_num_rows($count_item);
    ?>
    <tr class="body-table">
        <td width=60 valign=top style="border: none;">
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'></span></p>
        </td>
        <td width=174 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'>Monitor</span></p>
        </td>
        <td width=186 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'><?php echo $count; ?></span></p>
        </td>

        <?php
        $new = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'Repaired'") or die(mysql_error());
        $count = mysql_num_rows($new);
        ?>

        <td width=144 valign=top style="border: none;">
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'></span></p>
        </td>
        <td width=141 valign=top style="border: none;">
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'></span></p>
        </td>
        <td width=171 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'>Repaired</span></p>
        </td>
        <td width=192 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'><?php echo $count; ?></span></p>
        </td>
        <td width=60 valign=top style="border: none;">
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'></span></p>
        </td>
    </tr>


    <?php
    $count_item = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where stdevice.dev_id = '2'
			   ORDER BY stdevice.id DESC");
    $count = mysql_num_rows($count_item);
    ?>
    <tr class="body-table">
        <td width=60 valign=top style="border: none;">
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'></span></p>
        </td>
        <td width=174 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'>PC</span></p>
        </td>
        <td width=186 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'><?php echo $count; ?></span></p>
        </td>

        <?php
        $new = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'Damage'") or die(mysql_error());
        $count = mysql_num_rows($new);
        ?>

        <td width=144 valign=top style="border: none;">
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'></span></p>
        </td>
        <td width=141 valign=top style="border: none;">
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'></span></p>
        </td>
        <td width=171 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'>Damaged</span></p>
        </td>
        <td width=192 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'><?php echo $count; ?></span></p>
        </td>
        <td width=60 valign=top style="border: none;">
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'></span></p>
        </td>
    </tr>

    <?php
    $count_item = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where stdevice.dev_id = '6'
			   ORDER BY stdevice.id DESC");
    $count = mysql_num_rows($count_item);
    ?>
    <tr class="body-table">
        <td width=60 valign=top style="border: none;">
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'></span></p>
        </td>
        <td width=174 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'>UPS</span></p>
        </td>
        <td width=186 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'><?php echo $count; ?></span></p>
        </td>

        <?php
        $new = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where dev_status = 'Dump'") or die(mysql_error());
        $count = mysql_num_rows($new);
        ?>

        <td width=144 valign=top style="border: none;">
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'></span></p>
        </td>
        <td width=141 valign=top style="border: none;">
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'></span></p>
        </td>
        <td width=171 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'>Dump</span></p>
        </td>
        <td width=192 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'><?php echo $count; ?></span></p>
        </td>
        <td width=60 valign=top style="border: none;">
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'></span></p>
        </td>
    </tr>

    <?php
    $count_item = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where stdevice.dev_id = '7'
			   ORDER BY stdevice.id DESC");
    $count = mysql_num_rows($count_item);
    ?>
    <tr class="body-table">
        <td width=60 valign=top style="border: none;">
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'></span></p>
        </td>
        <td width=174 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'>TP Link Wireless</span></p>
        </td>
        <td width=186 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'><?php echo $count; ?></span></p>
        </td>
    </tr>

    <?php
    $count_item = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where stdevice.dev_id = '8'
			   ORDER BY stdevice.id DESC");
    $count = mysql_num_rows($count_item);
    ?>
    <tr class="body-table">
        <td width=60 valign=top style="border: none;">
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'></span></p>
        </td>
        <td width=174 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'>Switch</span></p>
        </td>
        <td width=186 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'><?php echo $count; ?></span></p>
        </td>
    </tr>

    <?php
    $count_item = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where stdevice.dev_id = '9'
		       ORDER BY stdevice.id DESC");
    $count = mysql_num_rows($count_item);
    ?>
    <tr class="body-table">
        <td width=60 valign=top style="border: none;">
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'></span></p>
        </td>
        <td width=174 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'>Printer</span></p>
        </td>
        <td width=186 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'><?php echo $count; ?></span></p>
        </td>
    </tr>

    <?php
    $count_item = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where stdevice.dev_id = '10'
		       ORDER BY stdevice.id DESC");
    $count = mysql_num_rows($count_item);
    ?>
    <tr class="body-table">
        <td width=60 valign=top style="border: none;">
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'></span></p>
        </td>
        <td width=174 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'>Handphone</span></p>
        </td>
        <td width=186 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'><?php echo $count; ?></span></p>
        </td>
    </tr>

    <?php
    $count_item = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where stdevice.dev_id = '11'
		       ORDER BY stdevice.id DESC");
    $count = mysql_num_rows($count_item);
    ?>
    <tr class="body-table">
        <td width=60 valign=top style="border: none;">
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'></span></p>
        </td>
        <td width=174 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'>Kamera</span></p>
        </td>
        <td width=186 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'><?php echo $count; ?></span></p>
        </td>
    </tr>

    <?php
    $count_item = mysql_query("select * from stdevice 
			   LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id
			   where stdevice.dev_id = '12'
		       ORDER BY stdevice.id DESC");
    $count = mysql_num_rows($count_item);
    ?>
    <tr class="body-table">
        <td width=60 valign=top style="border: none;">
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'></span></p>
        </td>
        <td width=174 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'>Projectors</span></p>
        </td>
        <td width=186 valign=top>
            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'><?php echo $count; ?></span></p>
        </td>
    </tr>

</table>