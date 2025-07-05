<!DOCTYPE html>
<html>
<head>
    <title>Detail Huruf Fathah</title>
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #f6f3ff; margin: 0; }
        .header { background: #a259ff; color: #fff; padding: 22px 0; text-align: center; font-size: 2em; letter-spacing: 1px; box-shadow: 0 2px 8px #d1b3ff; }
        .container { max-width: 400px; margin: 40px auto; background: #fff; border-radius: 16px; box-shadow: 0 4px 18px #d1b3ff80; padding: 40px 30px 30px 30px; text-align: center; }
        .huruf-utama { font-size: 5em; color: #7c2ae8; font-family: 'Poppins', 'Segoe UI', Arial, sans-serif; margin-bottom: 18px; }
        .huruf-latin { font-size: 1.5em; color: #a259ff; font-weight: bold; margin-bottom: 18px; }
        .deskripsi { font-size: 1.1em; color: #555; margin-bottom: 28px; }
        .btn-back { padding: 10px 28px; background: #a259ff; color: #fff; border: none; border-radius: 6px; font-size: 1.1em; font-weight: bold; cursor: pointer; transition: background 0.2s; }
        .btn-back:hover { background: #7c2ae8; }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Poppins:700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">Detail Huruf Fathah</div>
    <div class="container">
        <div class="huruf-utama">
            <?php echo detail_huruf_arab($huruf); ?>
        </div>
        <div class="huruf-latin">
            <?php echo $huruf; ?>
        </div>
        <div class="deskripsi">
            Ini adalah detail huruf <b><?php echo $huruf; ?></b> dalam Fathah Hijaiyah.
        </div>
        <a href="<?php echo site_url('fathah'); ?>"><button class="btn-back">Kembali</button></a>
    </div>
</body>
</html>
<?php
// Helper untuk menampilkan huruf arab dari latin
function detail_huruf_arab($latin) {
    $map = array(
        'A' => 'ا', 'Ba' => 'ب', 'Ta' => 'ت', 'Tsa' => 'ث', 'Ja' => 'ج', 'Ha' => 'ح', 'Kho' => 'خ',
        'Da' => 'د', 'Dza' => 'ذ', 'Ro' => 'ر', 'Za' => 'ز', 'Sa' => 'س', 'Sya' => 'ش', 'Sho' => 'ص',
        'Dho' => 'ض', 'Tho' => 'ط', 'Dzo' => 'ظ', 'Ain' => 'ع', 'Gho' => 'غ', 'Fa' => 'ف', 'Qo' => 'ق',
        'Ka' => 'ك', 'La' => 'ل', 'Ma' => 'م', 'Na' => 'ن', 'Wa' => 'و', 'HA' => 'ه', 'Ya' => 'ي',
    );
    return isset($map[$latin]) ? $map[$latin] : $latin;
}
?> 