<style>
    td,th{
        padding: 1mm;
    }
    div,p{
        font-family: arial;
    }
</style>
<page backtop="10mm" backbottom="10mm" backleft="10mm" backright="10mm">

    <page_header>
        <div align="center">
            <!-- <img src="<?php echo path_image() . 'assets/img/kop_atas.png'; ?>" height="100px" width="620px;" /> -->
        </div>
    </page_header>

    <!-- <page_footer>
        <table style="width: 100%; border: 0px;">
            <tr>
                <td style="text-align: right;    width: 100%">Halaman [[page_cu]]/[[page_nb]]</td>
            </tr>
        </table>
    </page_footer> -->
    
    <h2 style="text-decoration: underline; margin-top: 100px;" align="center">SURAT PERINTAH KERJA</h2>

    <h5 align="center" style="margin-top: -15px;"><?= $no_st ?></h5>

    <table  border="0" style="width:100%;" >
        <tr>
            <td colspan="3" style="vertical-align: top;">Yang bertanda tangan dibawah ini:</td>
        </tr>
        <tr>
            <td style="width:22%;vertical-align: top;">Nama:</td>
            <td style="width:5%;vertical-align: top;">:</td>
            <td colspan="2" style="vertical-align: top;"><?= $aplikasi->ketua ?></td>
        </tr>
        <tr>
            <td style="width:22%;vertical-align: top;">Jabatan:</td>
            <td style="width:5%;vertical-align: top;">:</td>
            <td colspan="2" style="vertical-align: top;">Direktur</td>
        </tr>
        <tr>
            <td style="width:22%;vertical-align: top;">Perusahaan:</td>
            <td style="width:5%;vertical-align: top;">:</td>
            <td colspan="2" style="vertical-align: top;">PT. <?= $aplikasi->nama_unit ?></td>
        </tr>
        <tr>
            <td style="padding-top: 20px;padding-bottom: 20px;" colspan="3">Dengan ini memberikan perintah kerja kepada:</td>
        </tr>
        <tr>
            <td style="width:22%;vertical-align: top;">Nama</td>
            <td style="width:5%;vertical-align: top;">:</td>
            <td style="vertical-align: top;">
                <?php foreach($asesor_kompetensi as $key=>$value){ ?>
                    <?=$key+1?>. <?= $value->users ?> <br>
                <?php } ?>
            </td>
            
        </tr>
        
        <tr>
            <td style="width:22%;vertical-align: top;">Perihal</td>
            <td style="width:5%;vertical-align: top;">:</td>
            <td style="width:77%;vertical-align: top;">Pelaksanaan pengujian dan pemeriksaan (inspeksi) untuk unit <?=$skema_sertifikasi?> untuk ...</td>
        </tr>
        
        <tr>
            <td style="width:22%;vertical-align: top;">Lokasi</td>
            <td style="width:5%;vertical-align: top;">:</td>
            <td style="width:77%;vertical-align: top;">...</td>
        </tr>
        
        <tr>
            <td style="width:22%;vertical-align: top;">Waktu Pelaksanaan</td>
            <td style="width:5%;vertical-align: top;">:</td>
            <td style="width:77%;vertical-align: top;"><?= tgl_indo($jadual_asesmen->tanggal) ?></td>
        </tr>
        <tr>
            <td colspan="3" style="padding-top: 20px;padding-bottom: 20px;vertical-align: top;">Demikian surat perintah kerja ini dibuat untuk dipergunakan sebagaimana mestinya.</td>
        </tr>
    </table>

    <div>
        <p style="text-decoration: underline;">
            Depok, <?= tgl_indo($jadual_asesmen->tanggal) ?> <br>
            Hormat kami, <br>
            PT. <?= $aplikasi->nama_unit ?>
        </p>
        <div style="font-weight: bold; margin-left: 30px; ">
            <qrcode style="margin-left: 150px;" value="<?php echo $qr_ketua_lsp; ?>" ec="Q" style="width: 20mm;"></qrcode>
        </div>
        <div style="font-weight: bold;margin-top: 10px;margin-bottom: 30px;text-decoration: underline;">
            <?= $aplikasi->ketua ?> <br>
            Direktur
        </div>
    </div>
    <div style="text-decoration: underline; font-style: italic; font-weight: bold;">Disampaikan kepada Yth</div>
    Para Penanggung Jawab, Penyelenggara, Inspektor<div></div>
    <div style="text-decoration: underline; font-style: italic; font-weight: bold;">Tembusan kepada Yth </div>
    Arsip
</page>