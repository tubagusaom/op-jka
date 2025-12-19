<div class="form-panel" style="margin-left: 20px;margin-top: 20px; margin-bottom: 30px;">
    <div class="x-panel-bwrap">
        <!-- <form id="myform" enctype="multipart/form-data" action="<?php echo $url ?>"> -->
        <form id="myform">
                <div id="tips">
                    <ol class="rounded-list">
                        <li><a href="javascript: void(0)">GENERAL DATA</a></li>
                    </ol>
                </div>

            <table class="table-data">
                <tr>
                    <td style="width: 200px;">Equipment : </td>
                    <td>
                        <!-- <input id="instruktur_code" name="instruktur_code" style="width: 250px;" class="easyui-textbox" data-options="required: true"> -->
                        <input id="skema_sertifikasi" name="skema_sertifikasi" style="width: 250px;"  value="<?php echo $data->skema_sertifikasi; ?>">
                        <input type="hidden" id="rekomendasi_apl01" name="rekomendasi_apl01" value="0">
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;">Jadwal Inspeksi : </td>
                    <td>
                        <input id="jadwal_id" name="jadwal_id" style="width: 250px;" value="<?php echo $data->jadwal_grid; ?>">
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;">Nama Pemilik : </td>
                    <td>
                        <input id="nama_lengkap" name="nama_lengkap" style="width: 250px;" class="easyui-textbox" >
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;">Serial Number : </td>
                    <td>
                        <input id="no_identitas" name="no_identitas" style="width: 250px;" class="easyui-textbox" data-options="required: true">
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;">Model : </td>
                    <td>
                        <input id="model" name="model" style="width: 250px;" class="easyui-textbox" >
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;">Kapasitas Max : </td>
                    <td>
                        <input id="kapasitas_max" name="kapasitas_max" style="width: 250px;" class="easyui-textbox">
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;">Panjang Boom Terpasang : </td>
                    <td>
                        <input id="panjang_boom" name="panjang_boom" style="width: 250px;" class="easyui-textbox">
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;">wire_rope_main : </td>
                    <td>
                        <input id="wire_rope_main" name="wire_rope_main" style="width: 250px;" class="easyui-textbox" >
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;">wire_rope_aux : </td>
                    <td>
                        <input id="wire_rope_aux" name="wire_rope_aux" style="width: 250px;" class="easyui-textbox" >
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;">Pabrik Pembuatan : </td>
                    <td>
                        <input id="marketing" name="marketing" style="width: 250px;" class="easyui-textbox" >
                    </td>
                </tr>

                <tr>
                    <td style="width: 200px;">Tahun Pembuatan : </td>
                    <td>
                        <input id="tahun_pembuatan" name="tahun_pembuatan" style="width: 250px;" class="easyui-textbox">
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;">Tahun Digunakan : </td>
                    <td>
                        <input id="tahun_digunakan" name="tahun_digunakan" style="width: 250px;" class="easyui-textbox">
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;">Model Mesin : </td>
                    <td>
                        <input id="model_mesin" name="model_mesin" style="width: 250px;" class="easyui-textbox">
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;">No Mesin : </td>
                    <td>
                        <input id="no_mesin" name="no_mesin" style="width: 250px;" class="easyui-textbox">
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;">Putaran Mesin : </td>
                    <td>
                        <input id="putaran_mesin" name="putaran_mesin" style="width: 250px;" class="easyui-textbox">
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;">Hook Utama : </td>
                    <td>
                        <input id="hook_utama" name="hook_utama" style="width: 250px;" class="easyui-textbox">
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;">Hook Bantu : </td>
                    <td>
                        <input id="hook_Bantu" name="hook_Bantu" style="width: 250px;" class="easyui-textbox">
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;">Lokasi Digunakan : </td>
                    <td>
                        <input id="organisasi" name="organisasi" style="width: 250px;" class="easyui-textbox">
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;">Referensi : </td>
                    <td>
                        <input id="referensi" name="referensi" style="width: 250px;" class="easyui-textbox">
                    </td>
                </tr>

            </table>

            <!-- <div id="tips">
                    <ol class="rounded-list">
                        <li><a href="javascript: void(0)">Dokumen pendukung</a></li>
                    </ol>
            </div>

            <table class="easyui-datagrid" style="width: 98%;">
                <thead>
                    <tr>
                        <th data-options="field:'doc'" width="30%">Nama Dokumen</th>
                        <th data-options="field:'jenis'" width="30%">Jenis</th>
                        <th data-options="field:'file'" width="40%">File</th>
                    </tr>
                </thead>
                <tr>
                    <td>
                        <input id="nama_dokumen" name="nama_dokumen" style="width: 200px;" class="easyui-textbox" data-options="required: true">
                    </td>
                    <td>
                        <select style="width:100%;max-width:400px;">
                            <option value="AL">Manufacture Data Record (MDR)</option>
                            <option value="AK">Owner document</option>
                            <option value="OH" selected>Third Party Document</option>
                        </select>
                    </td>
                    <td>
                        <input id="fileToUpload" class="easyui-filebox" name="fileToUpload" style="width: 250px;" data-options="buttonText: 'Pilih File'" />
                    </td>
                </tr>
            </table> -->

        </form>
    </div>
</div>

<script type="text/javascript">

<?php

echo $pra_asesmen_grid;
echo $skema_grid;
echo $jadwal_grid;

?>

</script>