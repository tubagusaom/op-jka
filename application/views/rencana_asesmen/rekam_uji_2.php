<style media="screen">
  .tabeltbl{
    width:98%;
    font-size: 12px;
    border-collapse:
    collapse;
    margin: 10px 0 15px 10px;
    background: #fff;
  }
  .tabeltbl, .tabeltbl th, .tabeltbl td{
    padding: 5px;
    border-color:#777;
  }

  .tx-top{
    padding: 5px;
    vertical-align: top;
  }
  .tx-bold{
    padding: 5px;
    font-weight: bold;
  }
  /* .rotate{
    writing-mode: sideways-lr;
  } */
</style>

    <table class="tabeltbl" border="1" cellpadding="5" cellspacing="5">
      <tr>
        <td style="width:100%;background:#ddd" class="tx-bold" colspan="2">1. GENERAL DATA </td>
      </tr>
      <tr>
        <th style="width:30%;">a. Equipment</th>
        <td class="inputan" style="width:65%;">
          <?=$asesi->skema ?>
        </td>
      </tr>
      <tr>
        <th>b. Owner</th>
        <td class="inputan">
          <?=$data->nama_lengkap ?>
        </td>
      </tr>
      <tr>
        <th>c. User</th>
        <td class="inputan">
          <?=$data->nama_lengkap ?>
        </td>
      </tr>
      <tr>
        <th>d. Item No./ Serial No.</th>
        <td class="inputan">
          <?=$data->no_identitas ?>
        </td>
      </tr>
      <tr>
        <th>e. Model</th>
        <td class="inputan">
          <?=$data->model ?>
        </td>
      </tr>
      <tr>
        <th>f. Type</th>
        <td class="inputan">
          <?=$asesi->skema ?>
        </td>
      </tr>
      <tr>
        <th>g. Capacity</th>
        <td class="inputan">
          <?=$data->kapasitas_max ?>
        </td>
      </tr>
      <tr>
        <th>h. Manufacturer/ Brand</th>
        <td class="inputan">
          <?=$data->marketing ?>
        </td>
      </tr>
      <tr>
        <th>i. Year Built/ Used</th>
        <td class="inputan">
          <?=$data->tahun_pembuatan ?>
        </td>
      </tr>
      <tr>
        <th>j. Reference/ Code</th>
        <td class="inputan">
          <?=$data->referensi ?>
        </td>
      </tr>
      <tr>
        <th>k. Location / Installed on</th>
        <td class="inputan">
          <?=$data->organisasi ?>
        </td>
      </tr>
      <tr>
        <th>l. Services / Used For</th>
        <td class="inputan">
          -
        </td>
      </tr>
      <tr>
        <th>m. Inspection Date</th>
        <td class="inputan">
          -
        </td>
      </tr>
      <tr>
        <th colspan="2">n. Main Dimension</th>
      </tr>
      <tr>
        <th>- Boom Length ( m )</th>
        <td class="inputan">
          <?=$data->putaran_mesin ?>
        </td>
      </tr>
      <tr>
        <th>- Outrigger Length ( m)</th>
        <td class="inputan">
          <?=$data->hook_utama ?>
        </td>
      </tr>
      <tr>
        <th>- Fly JIb ( m )</th>
        <td class="inputan">
          <?=$data->hook_Bantu ?>
        </td>
      </tr>
    </table>

    <table class="tabeltbl" border="1" cellpadding="5" cellspacing="5">
      <tr>
        <td style="width:100%;background:#ddd" class="tx-bold" colspan="2">2. DOCUMENT </td>
      </tr>
      <tr><td colspan="2">null</td></tr>
    </table>

    <table class="tabeltbl" border="1" cellpadding="5" cellspacing="5">
      <tr>
        <td style="width:100%;background:#ddd" class="tx-bold" colspan="2">3. INSPECTION  CLASS </td>
      </tr>
      <tr><td colspan="2">null</td></tr>
    </table>

    <table class="tabeltbl" border="1" cellpadding="5" cellspacing="5">
      <tr>
        <td style="width:100%;background:#ddd" class="tx-bold" colspan="2">4. LIFTING APPLIANCE  CLASS </td>
      </tr>
      <tr><td colspan="2">null</td></tr>
    </table>

    <table class="tabeltbl" border="1" cellpadding="5" cellspacing="5">
      <tr>
        <td style="width:100%;background:#ddd" class="tx-bold" colspan="2">5. ENGINE </td>
      </tr>
      <tr><td colspan="2">null</td></tr>
    </table>

    <table class="tabeltbl" border="1" cellpadding="5" cellspacing="5">
      <tr>
        <td style="width:100%;background:#ddd" class="tx-bold" colspan="2">6. HYDRAULIC SYSTEM </td>
      </tr>
      <tr><td colspan="2">null</td></tr>
    </table>

    <table class="tabeltbl" border="1" cellpadding="5" cellspacing="5">
      <tr>
        <td style="width:100%;background:#ddd" class="tx-bold" colspan="2">7. PNEUMATIC SYSTEM </td>
      </tr>
      <tr><td colspan="2">null</td></tr>
    </table>

    <table class="tabeltbl" border="1" cellpadding="5" cellspacing="5">
      <tr>
        <td style="width:100%;background:#ddd" class="tx-bold" colspan="2">8. WIRE ROPE - WINCH  DRUM </td>
      </tr>
      <tr><td colspan="2">null</td></tr>
    </table>

    <table class="tabeltbl" border="1" cellpadding="5" cellspacing="5">
      <tr>
        <td style="width:100%;background:#ddd" class="tx-bold" colspan="2">9. HOOK </td>
      </tr>
      <tr><td colspan="2">null</td></tr>
    </table>

    <table class="tabeltbl" border="1" cellpadding="5" cellspacing="5">
      <tr>
        <td style="width:100%;background:#ddd" class="tx-bold" colspan="2">10. OTHERS </td>
      </tr>
      <tr><td colspan="2">null</td></tr>
    </table>