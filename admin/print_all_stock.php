<html>

<head>
  <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
  <meta name=Generator content="Microsoft Word 14 (filtered)">
  <style>
    /* Font Definitions */
    /* @font-face {
      font-family: Calibri;
      panose-1: 2 15 5 2 2 2 4 3 2 4;
    }

    @font-face {
      font-family: Tahoma;
      panose-1: 2 11 6 4 3 5 4 4 2 4;
    } */

    /* Style Definitions */
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
      /* mso-border-alt: solid windowtext .5pt;
      mso-yfti-tbllook: 1184;
      mso-padding-alt: 0in 5.4pt 0in 5.4pt */
    }

    p.MsoAcetate,
    li.MsoAcetate,
    div.MsoAcetate {
      /* mso-style-link: "Balloon Text Char"; */
      margin: 0in;
      margin-bottom: .0001pt;
      font-size: 8.0pt;
      font-family: "Tahoma", "sans-serif";
    }

    span.BalloonTextChar {
      /* mso-style-name: "Balloon Text Char";
      mso-style-link: "Balloon Text"; */
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

    /* div.WordSection1 {
      page: WordSection1;
    } */

    tr.header-table td {
      border: 1px solid black;
      background: #BFBFBF;
      text-align: center;
    }

    tr.body-table td {
      border: 1px solid black;
      padding: 3px 4px;
      margin: 0;
    }

    .desc {
      font-size: 12px;
    }
  </style>
  <?php include('print_header.php'); ?>
  <?php include('session.php'); ?>
</head>

<body lang=EN-US>
  <div class="empty">
    <?php include('navbar.php'); ?>
    <div class="container">
      <div class="row-fluid">
        <div class="col-lg-12">
          <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon-check"></i><strong> All Stock Print Report</strong>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <div class="container">
    <div class="row-fluid">
      <div class="block">
        <div class="row-fluid">

          <div class=WordSection1>

            <p class=MsoNormal align=center>
              <b><span style='font-size:14.0pt;font-family:"Times New Roman","serif"'><img width=356 height=130 id="Picture 1" src="print-list-inventory_files/image001.png"></span></b>
            </p>

            <p class=MsoNormal align=center>
              <b><span style='font-size:14.0pt;font-family:"Times New Roman","serif"'>PT. INGCO TEKNIKA INDONESIA</span></b>
            </p>

            <p class=MsoNormal>
              <b><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>&nbsp;</span></b>
            </p>

            <div class="container">
              <div class="container-fluid">
                <div class="row-fluid">
                  <div class="pull-left">
                    <p class=MsoNormal>
                      <span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>TRIS all Stock</span>
                    </p>

                    <p class=MsoNormal>
                      <span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>DATE:
                        <?php
                        $date = new DateTime();
                        echo $date->format('l, F jS, Y');
                        ?>
                      </span>
                    </p>

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
                        <p class=MsoNormal style='margin-bottom:0in; margin-top:-30px; margin-bottom:.0001pt;line-height:normal'>
                          <span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>
                            <a id="return" data-placement="top" class="btn btn-success" title="Click to Return" href="device_stocks.php"><i class="icon-arrow-left"></i> Back</a></p>
                        <script type="text/javascript">
                          $(document).ready(function() {
                            $('#return').tooltip('show');
                            $('#return').tooltip('hide');
                          });
                        </script>
                      </div>
                    </div>

                    <table class=MsoTableGrid>
                      <tr style='height:23.25pt' class="header-table">
                        <td>
                          <p class=MsoNormal><b><span style='font-family:"Times New Roman","serif"'>INVENTORY CODE</span></b></p>
                        </td>
                        <td>
                          <p class=MsoNormal><b><span style='font-family:"Times New Roman","serif"'>TYPE</span></b></p>
                        </td>
                        <td>
                          <p class=MsoNormal><b><span style='font-family:"Times New Roman","serif"'>MODEL</span></b></p>
                        </td>
                        <td>
                          <p class=MsoNormal><b><span style='font-family:"Times New Roman","serif"'>BRAND</span></b></p>
                        </td>
                        <td>
                          <p class=MsoNormal><b><span style='font-family:"Times New Roman","serif"'>DISCRIPTION</span></b></p>
                        </td>
                        <td>
                          <p class=MsoNormal><b><span style='font-family:"Times New Roman","serif"'>STATUS</span></b></p>
                        </td>
                      </tr>
                      <!--NALD, ARI DI ASTA ANG IMO NA I BUTANG SULOD SA MYSQL FETCH ARRAY-->
                      <?php
                      $device_query = mysql_query("select * from stdevice LEFT JOIN device_name ON stdevice.dev_id=device_name.dev_id ") or die(mysql_error());
                      while ($row = mysql_fetch_array($device_query)) {
                        $id = $row['id'];
                        $dev_id = $row['dev_id'];
                      ?>
                        <tr class="body-table">
                          <td>
                            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'><?php echo $row['dev_serial']; ?></span></p>
                          </td>
                          <td>
                            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'><?php echo $row['dev_name']; ?></span></p>
                          </td>
                          <td>
                            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'><?php echo $row['dev_model']; ?></span></p>
                          </td>
                          <td>
                            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'><?php echo $row['dev_brand']; ?></span></p>
                          </td>
                          <td>
                            <p class=MsoNormal><span class="desc"><?php echo $row['dev_desc']; ?></span></p>
                          </td>
                          <td>
                            <p class=MsoNormal><span style='font-family:"Times New Roman","serif"'><?php echo $row['dev_status']; ?></span></p>
                          </td>
                        <?php } ?>
                        <!--NALD, ARI DI ASTA ANG IMO NA I BUTANG SULOD SA MYSQL FETCH ARRAY-->
                        </tr>
                        <tr>
                          <td width=1127 colspan=6 valign=top style='width:845.5pt;border:solid windowtext 1.0pt;border-top:none;padding:0in 5.4pt 0in 5.4pt'>
                            <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal'><span style='font-family:"Times New Roman","serif"'>***NOTHING
                                FOLLOWS***</span></p>
                          </td>
                        </tr>
                    </table>

                    <?php include('rekap.php') ?>

                    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>
                        <o:p>&nbsp;</o:p>
                      </span></p>

                    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>
                        <o:p>&nbsp;</o:p>
                      </span></p>

                    <table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0 style='border-collapse:collapse;border:none;'>
                      <tr style='height:44.85pt'>
                        <td width=376 valign=top style='width:281.8pt;padding:0in 5.4pt 0in 5.4pt;height:44.85pt' class="text-center">
                          <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>Prepared by:</span></p>
                        </td>
                        <td width=376 valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt;height:44.85pt' class="text-center">
                          <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>Checked By:</span></p>
                        </td>
                        <td width=376 valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt;height:44.85pt' class="text-center">
                          <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>Knowing By:</span></p>
                        </td>
                      </tr>

                      <?php $query = mysql_query("select * from admin where admin_id = '$session_id'") or die(mysql_error());
                      $row = mysql_fetch_array($query);
                      ?>
                      <tr style='height:17.85pt'>
                        <td width=376 valign=top style='width:281.8pt;padding:0in 5.4pt 0in 5.4pt;height:17.85pt'>
                          <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal'>
                            <b><u><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'><?php echo $row['firstname'] . " " . $row['lastname'];  ?></span></u></b>
                          </p>
                        </td>
                        <td width=376 valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt;height:17.85pt'>
                          <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal'>
                            <b><u><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>Marina</span></u></b>
                          </p>
                        </td>
                        <td width=376 valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt;height:17.85pt'>
                          <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal'>
                            <b><u><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>Agus Setiawan</span></u></b>
                          </p>
                        </td>
                      </tr>
                      <tr>
                        <td width=376 valign=top style='width:281.8pt;padding:0in 5.4pt 0in 5.4pt'>
                          <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal'>
                            <span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>IT Departement</span>
                          </p>
                        </td>
                        <td width=376 valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt'>
                          <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal'>
                            <span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>P&P</span>
                          </p>
                        </td>
                        <td width=376 valign=top style='width:281.85pt;padding:0in 5.4pt 0in 5.4pt'>
                          <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal'>
                            <span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>CEO Group Holding</span>
                          </p>
                        </td>
                      </tr>
                    </table>

                    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:normal'><span style='font-size:12.0pt;font-family:"Times New Roman","serif"'>
                        <o:p>&nbsp;</o:p>
                      </span></p>

                  </div>
                </div>
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