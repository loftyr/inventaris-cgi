<html>

<head>
    <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
    <meta name=Generator content="Microsoft Word 14 (filtered)">
    <style>
        p.MsoNormal,
        li.MsoNormal,
        div.MsoNormal {
            margin-top: 0in;
            margin-right: 0in;
            margin-bottom: 8.0pt;
            margin-left: 0in;
            line-height: 107%;
            font-size: 11.0pt;
            font-family: "Calibri", "sans-serif";
        }

        p.MsoNormal {
            margin-bottom: 0in;
            margin-bottom: .0001pt;
            line-height: normal;
        }

        .MsoTableGrid {
            margin-top: 15px;
            border-collapse: collapse;
            border: none;
        }

        p.MsoAcetate,
        li.MsoAcetate,
        div.MsoAcetate {
            margin: 0in;
            margin-bottom: .0001pt;
            font-size: 8.0pt;
            font-family: "Tahoma", "sans-serif";
        }

        span.BalloonTextChar {
            font-family: "Tahoma", "sans-serif";
        }

        .MsoChpDefault {
            font-family: "Calibri", "sans-serif";
        }

        .MsoPapDefault {
            margin-bottom: 8.0pt;
            line-height: 107%;
        }

        @page WordSection1 {
            size: 13.0in 8.5in;
            margin: 48.25pt .5in .5in .75in;
        }

        tr.header-table td {
            border: 1px solid black;
            background: #BFBFBF;
            text-align: center;
            font-weight: bold;
            padding: 5px 0;
        }

        tr.body-table td {
            border: 1px solid black;
            padding: 3px 4px;
            margin: 0;
        }

        .desc {
            font-size: 12px;
        }

        tr.body-ttd {
            height: 120px;
        }

        .WordSection1 {
            padding: 15px 0;
        }

        .text-center {
            text-align: center;
        }
    </style>
    <?php include('print_header.php'); ?>
    <?php include('session.php'); ?>
</head>
<?php $get_id = isset($_GET['stdev_id']) ? $_GET['stdev_id'] : ''; ?>

<body lang=EN-US class="body">

    <?php $location_query = mysqli_query(dbcon(), "select * from stlocation") or die(mysqli_error());
    $location_row = mysqli_fetch_array($location_query);
    ?>

    <div class="empty">
        <?php include('navbar.php'); ?>
    </div>

    <div class="container">
        <div class="row-fluid">
            <div class="block">
                <div class="row-fluid">

                    <div class=WordSection1>

                        <p class=MsoNormal align=center>
                            <b><span style='font-size:14.0pt;font-family:"Times New Roman","serif"'><img width=300 id="Picture 1" src="print-list-inventory_files/image001.png"></span></b>
                        </p>

                        <p class=MsoNormal align=center><b><span style='font-size:14.0pt;font-family:"Times New Roman","serif"'>Form Inventaris Komputer (ITI-IK-IT-002)</span></b></p>

                        <p class=MsoNormal>
                            <b><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b>
                        </p>

                        <div class="container">
                            <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="pull-right">
                                        <div class="empty">
                                            <p class=MsoNormal style='margin-bottom:0in; margin-left:-110px; margin-top:-30px; margin-bottom:.0001pt;line-height:normal'>
                                                <span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>
                                                    <a href="#" onclick="window.print()" class="btn btn-info" id="print" data-placement="top" title="Click to Print"><i class="icon-print icon-large"></i> Print List</a></p>
                                            <script type="text/javascript">
                                                $(document).ready(function() {
                                                    $('#print').tooltip('show');
                                                    $('#print').tooltip('hide');
                                                });
                                            </script>
                                            <p class=MsoNormal style='margin-bottom:0in; margin-top:-30px; margin-bottom:.0001pt;line-height:normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>
                                                    <a id="return" data-placement="top" class="btn btn-success" title="Click to Return" href="device_location.php"><i class="icon-arrow-left"></i> Back</a></p>
                                            <script type="text/javascript">
                                                $(document).ready(function() {
                                                    $('#return').tooltip('show');
                                                    $('#return').tooltip('hide');
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>

                                <!-- Foreach Lokasi -->
                                <?php foreach ($location_query as $row) : ?>
                                    <div class="row-fluid">
                                        <div class="">
                                            <p class=MsoNormal>
                                                <span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>LOCATION:&nbsp;<?php echo $row['stdev_location_name']; ?></span>
                                            </p>

                                            <p class=MsoNormal>
                                                <span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>DATE:
                                                    <?php
                                                    $date = new DateTime();
                                                    echo $date->format('l, F jS, Y');
                                                    ?></span>
                                            </p>

                                            <p class=MsoNormal>
                                                <span style='font-size:12.0pt;font-family:"Times New Roman","serif"'></span>
                                            </p>
                                            <table class=MsoTableGrid>
                                                <tr class="header-table">
                                                    <td>
                                                        <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'>INVENTORY CODE</span></b></p>
                                                    </td>
                                                    <td>
                                                        <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'>TYPE</span></b></p>
                                                    </td>
                                                    <td>
                                                        <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'>MODEL</span></b></p>
                                                    </td>
                                                    <td>
                                                        <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'>BRAND</span></b></p>
                                                    </td>
                                                    <td>
                                                        <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'>DATE ASSIGNED</span></b></p>
                                                    </td>
                                                    <td>
                                                        <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'>STATUS</span></b></p>
                                                    </td>
                                                </tr>
                                                <!--NALD, ARI DI ASTA ANG IMO NA I BUTANG SULOD SA MYSQLi FETCH ARRAY-->
                                                <?php
                                                $my_device = mysqli_query(dbcon(), "select * from location_details LEFT JOIN stdevice ON location_details.id = stdevice.id LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id 
                                            where NOT EXISTS (select * from location_details where dev_status='Dump') and stdev_id like '" . $row['stdev_id'] . "' order by date_deployment DESC") or die(mysqli_error());
                                                while ($row = mysqli_fetch_array($my_device)) {
                                                    $id = $row['id'];
                                                ?>
                                                    <tr class="body-table">
                                                        <td valign=top>
                                                            <p class=MsoNormal>
                                                                <span style='font-family:"Times New Roman","serif"'><?php echo $row['dev_serial']; ?></span>
                                                            </p>
                                                        </td>
                                                        <td valign=top>
                                                            <p class=MsoNormal>
                                                                <span style='font-family:"Times New Roman","serif"'><?php echo $row['dev_name']; ?></span>
                                                            </p>
                                                        </td>
                                                        <td valign=top>
                                                            <p class=MsoNormal>
                                                                <span style='font-family:"Times New Roman","serif"'><?php echo $row['dev_model']; ?></span>
                                                            </p>
                                                        </td>
                                                        <td valign=top>
                                                            <p class=MsoNormal>
                                                                <span style='font-family:"Times New Roman","serif"'><?php echo $row['dev_brand']; ?></span>
                                                            </p>
                                                        </td>
                                                        <td valign=top>
                                                            <p class=MsoNormal>
                                                                <span style='font-family:"Times New Roman","serif"'><?php echo $row['date_deployment']; ?></span>
                                                            </p>
                                                        </td>
                                                        <td valign=top>
                                                            <p class=MsoNormal>
                                                                <span style='font-family:"Times New Roman","serif"'><?php echo $row['dev_status']; ?></span>
                                                            </p>
                                                        </td>
                                                    <?php } ?>
                                                    <!--NALD, ARI DI ASTA ANG IMO NA I BUTANG SULOD SA MYSQLi FETCH ARRAY-->
                                                    </tr>
                                                    <tr class="body-table">
                                                        <td width=1127 colspan=6 valign=top>
                                                            <p class=MsoNormal align=center><span style='font-family:"Times New Roman","serif"'>***NOTHING FOLLOWS***</span></p>
                                                        </td>
                                                    </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <br><br><br>
                                <?php endforeach; ?>

                                <table class="MsoTableGrid no-pm" style="margin-top: 80px">
                                    <tr class="body-ttd">
                                        <td width=250 valign=top class="text-center">
                                            <p class=MsoNormal>
                                                <span style='font-size:12.0pt;font-family: "Times New Roman","serif"'>Prepared by:</span>
                                            </p>
                                        </td>
                                    </tr>

                                    <?php $query = mysqli_query(dbcon(), "select * from admin where admin_id = '$session_id'") or die(mysqli_error());
                                    $row = mysqli_fetch_array($query);
                                    ?>
                                    <tr>
                                        <td width=250 valign=top>
                                            <p class=MsoNormal align=center><b><u><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'><?php echo $row['firstname'] . " " . $row['lastname'];  ?></span></u></b></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width=250 valign=top>
                                            <p class=MsoNormal align=center><span>IT Departement</span></p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</body>
<?php include('script.php'); ?>
<div class="empty">
    <center>
        <hr>
        <footer>
            <p>All Right Reserved T.R.I.S Powered by IT Departement 2020</p>
            <footer>
    </center>
</div>

</html>