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
        <td style="width:100%;" class="tx-bold" colspan="3">1. Manufacture Data Record (MDR) </td>
      </tr>
      <tr>
        <th style="background: #ddd;">Document Review</th>
        <th style="background: #ddd;">Actual Verification</th>
        <th style="background: #ddd;">Verification Result</th>
      </tr>
      <tr>
        <!-- <td style="width:5%;">3.1.</td> -->
        <td style="width:55%;">a. Manual Operation of Crane / Specification</td>
        <td class="inputan" style="width:20%;">
          <label class="label">
            <input class="label__checkbox" type="checkbox" name="mdr_av[0]" <?=isset($array_mdr_av[0])?'checked':'' ?> value="1" /> Good
          </label>
        </td>
        <td class="inputan" style="width:20%;">
          <label class="label">
            <input class="label__checkbox" type="checkbox" name="mdr_vr[0]" <?=isset($array_mdr_vr[0])?'checked':'' ?> value="1" /> Comply
          </label>
        </td>
      </tr>
      <tr>
        <!-- <td style="width:5%;"></td> -->
        <td style="width:55%;">b. Certificate of Main & Auxiliary Wire Rope</td>
        <td class="inputan" style="width:20%;">
          <label class="label">
            <input class="label__checkbox" type="checkbox" name="mdr_av[1]" <?=isset($array_mdr_av[1])?'checked':'' ?> value="1" /> Good
          </label>
        </td>
        <td class="inputan" style="width:20%;">
          <label class="label">
            <input class="label__checkbox" type="checkbox" name="mdr_vr[1]" <?=isset($array_mdr_vr[1])?'checked':'' ?> value="1" /> Comply
          </label>
        </td>
      </tr>
      <tr>
        <!-- <td style="width:5%;">3.2.</td> -->
        <td style="width:55%;">c .Certificate of Main & Auxiliary Hook</td>
        <td class="inputan" style="width:20%;">
          <label class="label">
            <input class="label__checkbox" type="checkbox" name="mdr_av[2]" <?=isset($array_mdr_av[2])?'checked':'' ?> value="1" /> Good
          </label>
        </td>
        <td class="inputan" style="width:20%;">
          <label class="label">
            <input class="label__checkbox" type="checkbox" name="mdr_vr[2]" <?=isset($array_mdr_vr[2])?'checked':'' ?> value="1" /> Comply
          </label>
        </td>
      </tr>
      <tr>
        <!-- <td style="width:5%;">3.3.</td> -->
        <td style="width:55%;">d. Certificate of Manifacture (COM)</td>
        <td class="inputan" style="width:20%;">
          <label class="label">
            <input class="label__checkbox" type="checkbox" name="mdr_av[3]" <?=isset($array_mdr_av[3])?'checked':'' ?> value="1" /> Good
          </label>
        </td>
        <td class="inputan" style="width:20%;">
          <label class="label">
            <input class="label__checkbox" type="checkbox" name="mdr_vr[3]" <?=isset($array_mdr_vr[3])?'checked':'' ?> value="1" /> Comply
          </label>
        </td>
      </tr>
      <tr>
        <!-- <td style="width:5%;">3.4.</td> -->
        <td style="width:55%;">e. Certificate of origin (COO)</td>
        <td class="inputan" style="width:20%;">
          <label class="label">
            <input class="label__checkbox" type="checkbox" name="mdr_av[4]" <?=isset($array_mdr_av[4])?'checked':'' ?> value="1" /> Good
          </label>
        </td>
        <td class="inputan" style="width:20%;">
          <label class="label">
            <input class="label__checkbox" type="checkbox" name="mdr_vr[4]" <?=isset($array_mdr_vr[4])?'checked':'' ?> value="1" /> Comply
          </label>
        </td>
      </tr>
    </table>

    <table class="tabeltbl" border="1" cellpadding="5" cellspacing="5">
      <tr>
        <td style="width:100%;" class="tx-bold" colspan="3">2. Owner document </td>
      </tr>
      <tr>
        <th style="background: #ddd;">Document Review</th>
        <th style="background: #ddd;">Actual Verification</th>
        <th style="background: #ddd;">Verification Result</th>
      </tr>
      <tr>
        <!-- <td style="width:5%;">3.1.</td> -->
        <td style="width:55%;">a. Sio Operator</td>
        <td class="inputan" style="width:20%;">
          <label class="label">
            <input class="label__checkbox" type="checkbox" name="od_av[0]" <?=isset($array_od_av[0])?'checked':'' ?> value="1" /> Good
          </label>
        </td>
        <td class="inputan" style="width:20%;">
          <label class="label">
            <input class="label__checkbox" type="checkbox" name="od_vr[0]" <?=isset($array_od_vr[0])?'checked':'' ?> value="1" /> Comply
          </label>
        </td>
      </tr>
    </table>

    <table class="tabeltbl" border="1" cellpadding="5" cellspacing="5">
      <tr>
        <td style="width:100%;" class="tx-bold" colspan="3">3. Third Party Document </td>
      </tr>
      <tr>
        <th style="background: #ddd;">Document Review</th>
        <th style="background: #ddd;">Actual Verification</th>
        <th style="background: #ddd;">Verification Result</th>
      </tr>
      <tr>
        <!-- <td style="width:5%;">3.1.</td> -->
        <td style="width:55%;">a. Procedure of Crane Inspection</td>
        <td class="inputan" style="width:20%;">
          <label class="label">
            <input class="label__checkbox" type="checkbox" name="tpd_av[0]" <?=isset($array_tpd_av[0])?'checked':'' ?> value="1" /> Good
          </label>
        </td>
        <td class="inputan" style="width:20%;">
          <label class="label">
            <input class="label__checkbox" type="checkbox" name="tpd_vr[0]" <?=isset($array_tpd_vr[0])?'checked':'' ?> value="1" /> Comply
          </label>
        </td>
      </tr>
      <tr>
        <!-- <td style="width:5%;">3.1.</td> -->
        <td style="width:55%;">b. Certificate of Crane Inspector</td>
        <td class="inputan" style="width:20%;">
          <label class="label">
            <input class="label__checkbox" type="checkbox" name="tpd_av[1]" <?=isset($array_tpd_av[1])?'checked':'' ?> value="1" /> Good
          </label>
        </td>
        <td class="inputan" style="width:20%;">
          <label class="label">
            <input class="label__checkbox" type="checkbox" name="tpd_vr[1]" <?=isset($array_tpd_vr[1])?'checked':'' ?> value="1" /> Comply
          </label>
        </td>
      </tr>
      <tr>
        <!-- <td style="width:5%;">3.1.</td> -->
        <td style="width:55%;">c. Certificate of NDT Level II</td>
        <td class="inputan" style="width:20%;">
          <label class="label">
            <input class="label__checkbox" type="checkbox" name="tpd_av[2]" <?=isset($array_tpd_av[2])?'checked':'' ?> value="1" /> Good
          </label>
        </td>
        <td class="inputan" style="width:20%;">
          <label class="label">
            <input class="label__checkbox" type="checkbox" name="tpd_vr[2]" <?=isset($array_tpd_vr[2])?'checked':'' ?> value="1" /> Comply
          </label>
        </td>
      </tr>
    </table>