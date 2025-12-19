<div class="form-panel" style="margin-left: 20px;margin-top: 20px; margin-bottom: 30px;">
    <div class="x-panel-bwrap">
        <form id="myform">
            <table class="table-data">
                <tr>
                    <td style="width: 140px;">Nama Dokumen : </td>
                    <td>
                        <input id="reference" name="reference" style="width: 250px;" class="easyui-textbox" data-options="required: true" value="<?php echo $data->reference ?>">
                    </td>
                </tr>
                <tr>
                    <td style="width: 140px;">Yang Mengesahkan : </td>
                    <td>
                        <input id="pengesahan" name="pengesahan" style="width: 250px;" class="easyui-textbox" data-options="required: true" value="<?php echo $data->pengesahan ?>" >
                    </td>
                </tr>
                <tr>
                    <td style="width: 140px;">Tanggal Pengesahan : </td>
                    <td><?php
                            if($data->tgl_pengesahan == ""){
                                $tgl_pengesahan = date('d/m/Y', strtotime(date('Y-m-d')));
                            }else{
                                $tgl_pengesahan = date('d/m/Y', strtotime($data->tgl_pengesahan));
                            }
                            //var_dump($data->pra_asesmen_date);
                        ?>
                        <input id="tgl_pengesahan" name="tgl_pengesahan" style="width: 200px;" class="easyui-datebox" value="<?php echo $tgl_pengesahan ?>">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>